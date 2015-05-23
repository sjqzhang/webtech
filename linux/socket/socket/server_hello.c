#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <netdb.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <arpa/inet.h>
#include <netinet/in.h>

#define SERVER_ADDR "127.0.0.1"
#define SERVER_PORT 3333
#define BACKLOG 5

void handle_read(int confd);

int main()
{
	int fd, confd, sockfd;
	struct sockaddr_in addr;
	struct sockaddr_in cli_addr;
	socklen_t cli_addr_len;

	memset(&addr, 0, sizeof(addr));
	memset(&cli_addr, 0, sizeof(cli_addr));

	addr.sin_family = AF_INET;
	addr.sin_addr.s_addr = inet_addr(SERVER_ADDR);
	addr.sin_port = htons(SERVER_PORT); 
	
	if( (fd = socket(AF_INET, SOCK_STREAM, 0)) == -1)
	{
		printf("error to create the socket\n");
		exit(-1);
	} 


	if(bind(fd, (struct sockaddr*)&addr, sizeof(addr)) == -1)
	{
		printf("error to bind the socket\n");
		exit(-2);
	}
	
	if(listen(fd, BACKLOG) == -1)
	{
		printf("error to listen the socket\n");
		exit(-3);
	}

	while(1)
	{
		confd = accept(fd, NULL, NULL);
		handle_read(confd);
		close(confd);
	}
}

void handle_read(int confd)
{
	char buf[64];
	int num = 0;

	if( (num = read(confd, buf, 63)) > 0)
	{
		buf[num] = '\0';
		printf("%s\n", buf);
	}
}





