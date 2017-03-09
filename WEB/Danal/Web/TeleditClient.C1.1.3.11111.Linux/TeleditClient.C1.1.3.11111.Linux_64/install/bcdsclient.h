#ifndef DANAL_TELEDIT_CLIENT_BCDSCLIENT_H
#define DANAL_TELEDIT_CLIENT_BCDSCLIENT_H

#ifdef __cplusplus
extern "C" {
#endif

int GetBBS(int sock, int timeout, int key_seq, char *retmsg, char *errmsg);
int f_Cancel(char *input, char *output);
int GetRBR(int sock, int timeout, int key_seq, char *retmsg, char *errmsg);
int SendBBRS(int sock, int key_seq, char *startDay, char *endDay, char *errmsg);
int SendBBSA(int sock, int key_seq, int sequence, char *errmsg);
int SendRBRA(int sock, int key_seq, char *tid, char *errmsg);
int SendRBPR(int sock, int key_seq, char *errmsg);
int BindForBillReport(int *sock, char *inputstr, int *key_seq, char *errmsg, const int optionfailure);

#ifdef __cplusplus
}
#endif

#endif
