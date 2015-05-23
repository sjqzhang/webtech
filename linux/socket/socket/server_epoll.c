#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <netdb.h>
#include <errno.h>
#include <fcntl.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <sys/epoll.h>
#include <arpa/inet.h>
#include <netinet/in.h>

#define SERVER_ADDR "0.0.0.0"
#define SERVER_PORT 3333
#define MAX_EPOLL_SIZE 4096
#define MAXLINE 4096
#define BACKLOG 5

int main()
{
	int fd, confd, sockfd, epfd, curfds;
	int i, n, ret;
	struct sockaddr_in addr;
	struct sockaddr_in cli_addr;
	socklen_t cli_addr_len;
	int buf[MAXLINE];
	struct epoll_event ev;
	struct epoll_event events[MAX_EPOLL_SIZE];

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

	epfd = epoll_create(MAX_EPOLL_SIZE);
	ev.events = EPOLLIN;
	ev.data.fd = fd;

	if(epoll_ctl(epfd, EPOLL_CTL_ADD, fd, &ev) < 0) {
		printf("fail to add listener fd to epoll\n");
		exit(-5);
	}

	curfds = 1;
	while(1) {
	//	printf("start to epoll\n");
		ret = epoll_wait(epfd, events, curfds, 3000);
		if(ret < 0 && errno == EINTR) {
			continue;
		}
		else if(ret < 0)
		{
			printf("error to poll the socket \n");
			exit(-6);
		}
		else if(ret == 0) {
			printf("time expire\n");
			continue;
		}
		else {
			printf("ret = %d\n", ret);
		}

		for(i = 0; i < ret; ++i)
		{
			if(events[i].data.fd == fd) {
				confd = accept(fd, (struct sockaddr*)&cli_addr, &cli_addr_len);

				if(confd < 0) {
					if(errno == EWOULDBLOCK || errno == EINTR) continue;
					printf("error to accept the socket\n");
					exit(-7);
				}

				if(fcntl(confd, F_SETFL, fcntl(confd, F_GETFD, 0) | O_NONBLOCK) == -1)
				{
					printf("error to set the confd to nonblock\n");
					exit(-8);
				}

				ev.events = EPOLLIN;
				ev.data.fd = confd;
				if(epoll_ctl(epfd, EPOLL_CTL_ADD, confd, &ev) < 0) {
					printf("fail to add listener fd to epoll\n");
					exit(-9);
				}
				curfds++;
			}
			else if(events[i].events & EPOLLIN)
			{
again:
				sockfd = events[i].data.fd;
				while( (n = read(sockfd, buf, MAXLINE)) > 0) {

                    //printf("%s\n",buf);
					//if(write(sockfd, buf, n) == -1) {
					//	printf("error to write the data");
					//	break;
					//}
                    //




				}

                if(n==-1){


                    write(sockfd,"\n\nhello world",strlen("\n\nhelloworld"));
					epoll_ctl(epfd, EPOLL_CTL_DEL, events[n].data.fd, &ev);
                    close(sockfd);
                    continue;

                }


               // printf("n:%d\n",n);

				if(n == 0) {
					printf("client close the connection\n");
					epoll_ctl(epfd, EPOLL_CTL_DEL, events[n].data.fd, &ev);
					close(sockfd);
					curfds--;
				}
				else if(n < 0 && errno == EINTR) {
					printf("read interuppted \n");
					goto again;
				}
				else if(n < 0 && errno == EWOULDBLOCK) {
				}
				else {
					printf("connection error\n");
					exit(-10);
				}

			}

		}

	}
	close(fd);
	return;
}

