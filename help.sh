
DRI=''

while getopts "d:" arg
do

    case $arg in
        d)
        DIR=$OPTARG
        ;;

    esac

done


#find  /var/www/webtech/${DIR}/ -type f -name "*.md" |xargs -i -0  grep   $1 --color -E   "{}"
grep  $1 /var/www/webtech/* --color -r|less

