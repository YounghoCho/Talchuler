#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#include "function.h"

char filename[] = "/etc/teledit.conf";

int main(int argc, char **argv){
	char input[2048], output[2048];

	if(argc < 2){
		printf("Result = -1\nErrMsg=Too few argument\n");
		return -1;
	}

	strcpy(input, argv[1]);

	f_BillReq(input, output);

	printf("%s", output);
	return 0;
}
