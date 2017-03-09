/**
 *
 *
 */
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#include "bcdsclient.h"
#include "wsafunc.h"

char filename[32] = "./teledit.conf";	// 환경 파일 

int main(int argc, char **argv){
	int ret;
	int sock = -1;
	int result;			// response result
	int TIMEOUT_LIMIT = 20;		// 응답 대기시간 (Minimum 20 seconds)
	int key_seq;
	int start_t;
	char errmsg[1024];
	char resmsg[1024];
	char inputstr[1024];
	char tid[20];
	char value[128];				// parsing 하기 위해 사용되는 temp 변수
	int optionfailure;

	WORD wVersionRequested;
	WSADATA wsaData;

	wVersionRequested = MAKEWORD(2, 0);

	if (WSAStartup(wVersionRequested, &wsaData)){
		printf("WSAStartup Failed\n");
		return -1;
	}

	// 환경 파일을 통하여 Option을 읽어 옵니다.
	optionfailure = InitializeOption(filename, errmsg);

	memset(inputstr, 0x00, sizeof(inputstr));
	if(argc >= 2) strcpy(inputstr, argv[1]);

	// 서버에 연결 요청을 하고 CP 인증을 받습니다.
	if((ret = BindForBillReport(&sock, inputstr, &key_seq, errmsg, optionfailure)) < 0){
		// connection error or bind error
		issocketclose(sock);
		WSACleanup();

		printf("Error : %s\n", errmsg);	// print error reason.

		return -1;
	}

	start_t = time(NULL);
	while(1){
		if(time(NULL) - start_t > 2 * TIMEOUT_LIMIT){	// 지정 시간 동안 서버가 응답을 주지 않는 경우
			issocketclose(sock);
			WSACleanup();
			return -1;

		}

		// 서버로부터 데이타를 기다립니다.
		if((ret = GetRBR(sock, TIMEOUT_LIMIT, key_seq, resmsg, errmsg)) < 0){
			switch(ret){
				case -1:	// Network error
					issocketclose(sock);
					WSACleanup();
					printf("Error : %s\n", errmsg);	// print error reason.
					return -1;
				case -2:	// Response timeout.
					// 단순 타임아웃으로 서버로 ping을 보내어 check합니다.
					if((ret = SendRBPR(sock, key_seq, errmsg)) < 0){
						issocketclose(sock);
						WSACleanup();
						printf("Error : %s\n", errmsg);	// print error reason.
						return -1;
					}

					start_t = time(NULL);
					continue;
				default:	// No case
					break;
			}
		}
		start_t = time(NULL);

		if((ret = d4g_str_getpacketstring(resmsg, "Command", ";", "=", sizeof(value), value, errmsg)) < 0){
			// Parsing error
			printf("Error : %s\n", errmsg);
			issocketclose(sock);
			WSACleanup();
			return ret;
		}
		if(strcmp(value, "BILL_REPORT")) continue;	// 서버로부터 bill report message가 아닌 경우 무시

		// Response message parsing.
		if((ret = d4g_str_getpacketstring(resmsg, "Result", ";", "=", sizeof(value), value, errmsg)) < 0){
			// Parsing error
			printf("Error : %s\n", errmsg);
			issocketclose(sock);
			WSACleanup();
			return ret;
		}

		if((result = atoi(value)) != 0){
			// 서버의 응답이 성공이 아닌 경우.
			if((ret = d4g_str_getpacketstring(resmsg, "ErrMsg", ";", "=", sizeof(value), value, errmsg)) < 0){
				// Parsing error
				printf("Error : %s\n", errmsg);
				issocketclose(sock);
				WSACleanup();
				return ret;
			}
			printf("Response Error : %d %s\n", result, value);
			issocketclose(sock);
			WSACleanup();
			return ret;
		}

		if((ret = d4g_str_getpacketstring(resmsg, "TID", ";", "=", sizeof(tid), tid, errmsg)) < 0){
			// Parsing error
			printf("Error : %s\n", errmsg);
			issocketclose(sock);
			WSACleanup();
			return ret;
		}
		/************************************************************************************************
		 *
		 * Add code here...
		 *
		 * 성공적으로 리턴된 데이타를 처리하는 곳입니다.
		 * parsing 된 TID를 이용하여 DB 처리를 하면 됩니다.
		 * d4g_str_getpacketstring 함수를 이용하시면 쉽게 parsing 할 수 싰습니다.
		 * 성공적으로 DB 처리가 완료 되면, SendRBRA를 이용하여 Server에 데이타 처리 완료 통보 합니다.
		 *
		 * *********************************************************************************************/

		if((ret = SendRBRA(sock, key_seq, tid, errmsg)) < 0){
			issocketclose(sock);
			WSACleanup();
			printf("Error : %s\n", errmsg);
			return ret;
		}
	}
}
