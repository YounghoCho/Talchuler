#ifndef DANAL_TELEDIT_CLIENT_FUNCTION_H
#define DANAL_TELEDIT_CLIENT_FUNCTION_H

#ifdef __cplusplus
extern "C" {
#endif

int f_RegistItem(char *input, char *output);
int f_SimDeliver(char *input, char *output);
int f_EDeliver(char *input, char *output);
int f_ARS_Deliver(char *input, char *output);
int f_TARS_Deliver(char *input, char *output);
int f_PBASDeliver(char *input, char *output);
int f_UAAPSDeliver(char *input, char *output);
int f_ARS_Report(char *input, char *output);
int f_EReport(char *input, char *output);
int f_Confirm(char *input, char *output);
int f_Bill(char *input, char *output);
int f_SimBill(char *input, char *output);
int f_ComInfo(char *input, char *output);
int secureClient(char *input, char *output);
int f_AuthReq(char *input, char *output);
int f_BillReq(char *input, char *output);
int f_WAPDeliver(char *input, char *output);
int f_PBASOTBill(char *input, char *output);
int f_PbillDeliver(char *input, char *output);
int f_HUD_Deliver(char *input, char *output);
int f_SessionClose(char *input, char *output);
#ifdef __cplusplus
}

#endif

#endif
