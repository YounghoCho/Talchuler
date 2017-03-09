#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#include "function.h"

char filename[] = "/etc/teledit.conf";

int main(){
	char temp[1024];

	memset(temp, 0x00, sizeof(temp));

	f_ComInfo(temp, temp);

	printf("Version is %s\n", temp);
	return 0;
}

