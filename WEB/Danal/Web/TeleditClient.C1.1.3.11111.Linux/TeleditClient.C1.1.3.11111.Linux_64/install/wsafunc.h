#ifndef DANAL_TELEDIT_CLIENT_WSAFUNC_H
#define DANAL_TELEDIT_CLIENT_WSAFUNC_H

#ifndef WIN32
#define WORD long
#define WSADATA int
#endif

#ifdef __cplusplus
extern "C" {
#endif

#ifndef WIN32
WORD MAKEWORD(int arg1,int arg2);
int WSACleanup(void);
int WSAGetLastError(void);
int WSAStartup(int k,int * huk);
int closesocket(int sockfd);
int Sleep(int usec);
#endif
const char *WSAGetLastErrorString();

#ifdef __cplusplus
}
#endif

#endif
