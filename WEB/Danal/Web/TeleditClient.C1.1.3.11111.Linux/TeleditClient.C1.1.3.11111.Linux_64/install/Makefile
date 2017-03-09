CC = gcc

CFLAGS = -c -m64

UNAME = $(shell uname)
OUTPUT_PATH = ./bin

LIBRARY = 

ifeq ($(UNAME),Linux)
LIBRARY = -m64
endif
ifeq ($(UNAME),SunOS)
LIBRARY = -lsocket -lnsl -lrt -m64
endif

COMMON_BIN = RegistItem Confirm Bill Version BackDemo SessionClose SClient
TELEDIT_BIN = EDeliver EReport TARS_Deliver ARS_Report
ARS_BIN = ARS_Deliver PBILL_Deliver HUD_Deliver
UAAPS_BIN = UAAPS_Deliver
PBAS_BIN = PBAS_Deliver
SIMPLE_BIN = SIMDeliver SIMBill
INTERNAL = BillReport otBill Auth

SUPPORTFILES = teledit.a function.h bcdsclient.h wsafunc.h

BIN = $(COMMON_BIN) $(TELEDIT_BIN) $(ARS_BIN) $(UAAPS_BIN) $(PBAS_BIN) $(SIMPLE_BIN) $(INTERNAL)

all : $(BIN)

RegistItem : teledit.a registitem.o
	$(CC) -o $@ $(LIBRARY) registitem.o teledit.a

Confirm : teledit.a confirm.o
	$(CC) -o $@ $(LIBRARY) confirm.o teledit.a

Bill : teledit.a bill.o
	$(CC) -o $@ $(LIBRARY) bill.o teledit.a

Version : teledit.a version.o
	$(CC) -o $@ $(LIBRARY) version.o teledit.a

EDeliver : teledit.a edeliver.o
	$(CC) -o $@ $(LIBRARY) edeliver.o teledit.a

EReport : teledit.a ereport.o
	$(CC) -o $@ $(LIBRARY) ereport.o teledit.a

TARS_Deliver : teledit.a tarsdeliver.o
	$(CC) -o $@ $(LIBRARY) tarsdeliver.o teledit.a

ARS_Report : teledit.a arsreport.o
	$(CC) -o $@ $(LIBRARY) arsreport.o teledit.a

ARS_Deliver : teledit.a arsdeliver.o
	$(CC) -o $@ $(LIBRARY) arsdeliver.o teledit.a

UAAPS_Deliver : teledit.a uaapsdeliver.o
	$(CC) -o $@ $(LIBRARY) uaapsdeliver.o teledit.a

PBAS_Deliver : teledit.a pbasdeliver.o
	$(CC) -o $@ $(LIBRARY) pbasdeliver.o teledit.a

SIMDeliver : teledit.a simdeliver.o
	$(CC) -o $@ $(LIBRARY) simdeliver.o teledit.a

SIMBill : teledit.a simbill.o
	$(CC) -o $@ $(LIBRARY) simbill.o teledit.a

BackDemo : teledit.a cancel.o
	$(CC) -o $@ $(LIBRARY) cancel.o teledit.a

BillReport : teledit.a back.o
	$(CC) -o $@ $(LIBRARY) back.o teledit.a

SClient : teledit.a sclient.o
	$(CC) -o $@ $(LIBRARY) sclient.o teledit.a

otBill: teledit.a otbill.o
	$(CC) -o $@ $(LIBRARY) otbill.o teledit.a

Auth: teledit.a auth.o
	$(CC) -o $@ $(LIBRARY) auth.o teledit.a

PBILL_Deliver: teledit.a pbilldeliver.o
	$(CC) -o $@ $(LIBRARY) pbilldeliver.o teledit.a

HUD_Deliver: teledit.a huddeliver.o
	$(CC) -o $@ $(LIBRARY) huddeliver.o teledit.a

SessionClose: teledit.a sessionclose.o
	$(CC) -o $@ $(LIBRARY) sessionclose.o teledit.a

.c.o :
	$(CC) $(CFLAGS) $<

teledit.a:
	cd ../src; make; make install

clean:
	rm -f *.o 

install: $(BIN)
	if [ ! -d $(OUTPUT_PATH) ]; then mkdir $(OUTPUT_PATH); fi
	mv $(BIN) $(OUTPUT_PATH)
