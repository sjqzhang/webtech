#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <pthread.h>





static int count=0;

static void add(int a,int b)
{


    printf("%d\n",a+b);

}

static void echo()
{

    while(1){


    count=count+1;
    printf("%d\n",count);


    usleep(1);
    }
}
int main(int argc,char *argv[])
{



    pthread_t tid,tid2;
    pthread_create(&tid,NULL,echo,NULL);
    pthread_create(&tid2,NULL,echo,NULL);


    sleep(3);




    return 0;
}
