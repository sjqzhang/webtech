#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <netdb.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <arpa/inet.h>
#include <netinet/in.h>

#define SERVER_ADDR "127.0.0.1"
#define SERVER_PORT 3333
#define MAXLINE 256

void handle_write(int confd);

int main()
{
	int fd;
	struct sockaddr_in addr;
	
	memset(&addr, 0, sizeof(addr));
	addr.sin_family = AF_INET;
	addr.sin_addr.s_addr = inet_addr(SERVER_ADDR);
	addr.sin_port = htons(SERVER_PORT); 
	
	if( (fd = socket(AF_INET, SOCK_STREAM, 0)) == -1)
	{
		printf("error to create the socket\n");
		exit(-1);
	} 

	if(connect(fd, (struct sockaddr*)&addr, sizeof(addr)) == -1)
	{
		printf("error to connect to the server\n");
		exit(-2);
	} 

	handle_write(fd);

}

void handle_write(int fd)
{
	char sendline[MAXLINE];
	char recvline[MAXLINE];
	int num;

	while( fgets(sendline, MAXLINE, stdin) != NULL)
	{
		write(fd, sendline, strlen(sendline)); 

		if( (num = read(fd, recvline, MAXLINE -1)) > 0)
		{
			recvline[num] = '\0';
			printf("%s\n", recvline);
		}
		
	}
}

