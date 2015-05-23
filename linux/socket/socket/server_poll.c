#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <netdb.h>
#include <errno.h>
#include <fcntl.h>
#include <poll.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <arpa/inet.h>
#include <netinet/in.h>

#define SERVER_ADDR "127.0.0.1"
#define SERVER_PORT 3333
#define OPEN_MAX 4096 
#define MAXLINE 64 
#define BACKLOG 5

int main()
{
	int fd, confd, sockfd, maxfd;
	int i, maxi, n, ret;
	struct sockaddr_in addr;
	struct sockaddr_in cli_addr;
	socklen_t cli_addr_len;
	int buf[MAXLINE];
	struct pollfd client[OPEN_MAX];

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


	for(i = 0; i < OPEN_MAX; ++i) {
		client[i].fd = -1;
	}

	maxi = 0;
	client[0].fd = fd;
	client[0].events = POLLIN;

	while(1) {
		printf("start to poll\n");
		ret = poll(client, maxi+1, 3000);
		if(ret < 0 && errno == EINTR) {
			continue;
		}
		else if(ret < 0)
		{
			printf("error to poll the socket \n");
			exit(-5);
		}
		else if(ret == 0) {
			printf("time expire\n");
			continue;
		}
		else {
			printf("ret = %d\n", ret);			
		}

		if(client[0].revents & POLLIN) {
			confd = accept(fd, (struct sockaddr*)&cli_addr, &cli_addr_len);
			if(confd < 0) {
				if(errno == EWOULDBLOCK || errno == EINTR) continue;
				printf("error to accept the socket\n");
				exit(-6);
			}

			for(i = 1; i < OPEN_MAX; ++i) {
				if(client[i].fd < 0)
				{
					client[i].fd = confd;
					break;
				}	
			}

			if( i == OPEN_MAX) {
				printf("too many connections \n");
				exit(-7);
			}
			
			client[i].events = POLLIN;

			if(fcntl(confd, F_SETFL, fcntl(confd, F_GETFD, 0) | O_NONBLOCK) == -1)
			{
				printf("error to set the confd to nonblock\n");
				exit(-8);
			}
	

			if(i > maxi) maxi = i;
			if(--ret <= 0) {
				continue;
			}
		}	

		for(i = 1; i <= maxi; i++) {
			if( (sockfd = client[i].fd) < 0) continue;

			if(client[i].revents & (POLLIN | POLLERR))
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
					client[i].fd = -1;
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

