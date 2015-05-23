#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <netdb.h>
#include <errno.h>
#include <fcntl.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <sys/select.h>
#include <arpa/inet.h>
#include <netinet/in.h>

#define SERVER_ADDR "127.0.0.1"
#define SERVER_PORT 3333
#define FD_SET_SIZE 24
#define MAXLINE 64 
#define BACKLOG 5

int main()
{
	int fd, confd, sockfd, maxfd;
	int i, n, maxi;
	int ret;
	struct sockaddr_in addr;
	struct sockaddr_in cli_addr;
	socklen_t cli_addr_len;
	int client[FD_SET_SIZE];
	int buf[MAXLINE];
	fd_set rfd, allset;
	struct timeval tv;

	memset(&addr, 0, sizeof(addr));
	memset(&cli_addr, 0, sizeof(cli_addr));

	addr.sin_family = AF_INET;
	addr.sin_addr.s_addr = inet_addr(SERVER_ADDR);
	addr.sin_port = htons(SERVER_PORT); 
	
	if( (fd = socket(AF_INET, SOCK_STREAM, 0)) == -1) {
		printf("error to create the socket\n");
		exit(-1);
	} 

	if(fcntl(fd, F_SETFL, fcntl(fd, F_GETFD, 0) | O_NONBLOCK) == -1)
	{
		printf("error to set the listen fd to nonblock\n");
		exit(-2);
	}
	
	if(bind(fd, (struct sockaddr*)&addr, sizeof(addr)) == -1) {
		printf("error to bind the socket\n");
		exit(-3);
	}
	
	if(listen(fd, BACKLOG) == -1) {
		printf("error to listen the socket\n");
		exit(-4);
	}


	for(i = 0; i < FD_SET_SIZE; ++i) {
		client[i] = -1;
	}

	maxfd = fd;
	maxi = -1;

	FD_ZERO(&allset);
	FD_SET(fd, &allset);
	while(1) {
		tv.tv_sec = 5;
		tv.tv_usec = 500;
		rfd = allset;

		printf("start to select\n");
		ret = select(maxfd+1, &rfd, NULL, NULL, &tv);
		if(ret < 0 && errno == EINTR) {
			continue;
		}
		else if(ret < 0)
		{
			printf("error to select the socket \n");
			exit(-5);
		}
		else if(ret == 0) {
			printf("time expire\n");
			continue;
		}
		else {
			printf("ret = %d\n", ret);			
		}

		if(FD_ISSET(fd, &rfd)) {
			confd = accept(fd, (struct sockaddr*)&cli_addr, &cli_addr_len);
			if(confd < 0) {
				if(errno == EWOULDBLOCK || errno == EINTR) continue;
				printf("error to accept the socket\n");
				exit(-6);
			}

			for(i = 0; i < FD_SET_SIZE; ++i) {
				if(client[i] < 0)
				{
					client[i] = confd;
					break;
				}	
			}

			if( i == FD_SET_SIZE) {
				printf("too many connections \n");
				exit(-7);
			}
			FD_SET(confd, &allset);

			if(fcntl(confd, F_SETFL, fcntl(confd, F_GETFD, 0) | O_NONBLOCK) == -1)
			{
				printf("error to set the confd to nonblock\n");
				exit(-8);
			}
	

			if(i > maxi) maxi = i;
			if(confd > maxfd ) maxfd = confd;

			if(--ret <= 0) {
				continue;
			}
		}	

		for(i = 0; i <= maxi; i++) {
			if( (sockfd = client[i]) < 0) continue;

			if(FD_ISSET(sockfd, &rfd)) 
			{
			again:
				while( (n = read(sockfd, buf, MAXLINE)) > 0) {
					if(write(sockfd, buf, n) == -1) {	
						printf("error to write the data");
						break;
					}
				}

				if(n == 0) {
					printf("client close the connection\n");
					close(sockfd);
					FD_CLR(sockfd, &allset);
					client[i] = -1;
				}
				else if(n < 0 && errno == EINTR) {
					printf("read interuppted \n");
					goto again;
				}
				else if(n < 0 && errno == EWOULDBLOCK) {
				}
				else
				{
					printf("connection error\n");
					exit(-9);
				}

				if(--ret <= 0) break;
			}
		}
	}
}

