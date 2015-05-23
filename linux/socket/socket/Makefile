CC=gcc
RM=rm
ELF=simple
SRCS=$(wildcard *.c)
OBJS=$(patsubst %.c,%.o,$(SRCS))


all:$(OBJS)
	@echo done.

%.o:%.c
	@echo compile $<
	$(CC) -o $@  $< -lpthread



clean:
	rm *.o -rf
