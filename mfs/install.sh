#!/bin/bash


PREFIX="/usr/local/mfs"
CONFDIR="/etc/mfs"
LOGDIR="/var/lib"
USER="mfs"

add_new(){
	#add_new
    grep $USER /etc/passwd || useradd $USER -s /sbin/nologin
    apt-get install gcc g++ pkg-config  zlib1g-dev build-essential -y
}

install_master(){
    #add a new user mfs
    add_new

    #master install
    if [ ! -e "mfs-1.6.20-2.tar.gz" ];then
        wget http://www.moosefs.org/tl_files/mfscode/mfs-1.6.20-2.tar.gz
    fi
    tar xzvf mfs-1.6.20-2.tar.gz
    cd mfs-1.6.20-2
    ./configure --prefix=$PREFIX --sysconfdir=$CONFDIR --localstatedir=$LOGDIR --with-default-user=$USER --with-default-group=$USER --disable-mfschunkserver --disable-mfsmount
    make
    make install

    cd $CONFDIR
    cp mfsexports.cfg.dist mfsexports.cfg
    cp mfsmaster.cfg.dist mfsmaster.cfg
    cp mfsmetalogger.cfg.dist mfsmetalogger.cfg
    chown -R mfs.mfs .

    cd $LOGDIR/mfs
    cp metadata.mfs.empty metadata.mfs
    chown -R mfs.mfs .
}

install_metalogger(){
    #add a new user mfs
    add_new

    #master install
    if [ ! -e "mfs-1.6.20-2.tar.gz" ];then
        wget http://www.moosefs.org/tl_files/mfscode/mfs-1.6.20-2.tar.gz
    fi
    tar xzvf mfs-1.6.20-2.tar.gz
    cd mfs-1.6.20-2
    ./configure --prefix=$PREFIX --sysconfdir=$CONFDIR --localstatedir=$LOGDIR --with-default-user=$USER --with-default-group=$USER --disable-mfschunkserver --disable-mfsmount
    make
    make install

    cd $CONFDIR
    cp mfsmetalogger.cfg.dist mfsmetalogger.cfg

    cd $LOGDIR/mfs
    cp metadata.mfs.empty metadata.mfs
}

install_chunk(){
    #add a new user mfs
    add_new

    #master install
    if [ ! -e "mfs-1.6.20-2.tar.gz" ];then
        wget http://www.moosefs.org/tl_files/mfscode/mfs-1.6.20-2.tar.gz
    fi
    tar xzvf mfs-1.6.20-2.tar.gz
    cd mfs-1.6.20-2
    ./configure --prefix=$PREFIX --sysconfdir=$CONFDIR --localstatedir=$LOGDIR --with-default-user=$USER --with-default-group=$USER --disable-mfsmaster
    make
    make install

    cd $CONFDIR
    cp mfschunkserver.cfg.dist mfschunkserver.cfg
    cp mfshdd.cfg.dist mfshdd.cfg

    mkdir -p /data/mfschunk
    chown -R mfs.mfs /data/mfschunk
}

install_client(){
    #add a new user mfs
    add_new

    if [ ! -e "fuse-2.8.5.tar.gz" ];then
        wget static.meizu.com/softsource/mfs/fuse-2.8.5.tar.gz
    fi
    tar -zxvf fuse-2.8.5.tar.gz
    cd fuse-2.8.5
    ./configure
    make
    make install

    export  PKG_CONFIG_PATH=/usr/local/lib/pkgconfig:$PKG_CONFIG_PATH

    cd ..
    if [ ! -e "mfs-1.6.20-2.tar.gz" ];then
        wget http://www.moosefs.org/tl_files/mfscode/mfs-1.6.20-2.tar.gz
    fi
    tar xzvf mfs-1.6.20-2.tar.gz
    cd mfs-1.6.20-2
    ./configure --prefix=$PREFIX --sysconfdir=$CONFDIR --localstatedir=$LOGDIR --with-default-user=$USER --with-default-group=$USER --disable-mfsmaster --disable-mfschunkserver
    make
    make install
}

help_info(){
	#help
    clear
    echo "-----------------------------------help---------------------------------------"
    echo ""
    echo "    master: Install mfs as the master server"
    echo "    metalogger: Install mfs as the log server (storage the log)"
    echo "    chunk: Install mfs as the chunk server (data storage)"
    echo "    client: Install mfs as a client"
    echo ""
    exit 1
}


case $1 in
	
    master)
        install_master
        ;;
    log|metalogger)
        install_metalogger
        echo "mount the metalogger from master:$PREFIX/bin/mfsmount 'mount point' -m -H host"
        ;;
    chunk)
        install_chunk
        ;;
    client)
        install_client
        echo "mount the client from master:$PREFIX/bin/mfsmount 'mount point' -H host -S 'mount dir of the master'"
        ;;
    --help|-h)
        help_info
        ;;
    *)
        echo "Usage: $0 {master|log|chunk|client}"
        exit 1
        ;;
esac

