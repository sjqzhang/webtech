//var $=require('jquery');
/*
创表
   CREATE TABLE `github` (
   `repository` varchar(512) DEFAULT NULL,
   `lang` varchar(64) DEFAULT NULL,
   `description` text,
   `mdkey` varchar(32) NOT NULL,
   `cdate` varchar(16) DEFAULT NULL,
   `upate` varchar(16) DEFAULT NULL,
   PRIMARY KEY (`mdkey`)
   ) ENGINE=MyISAM DEFAULT CHARSET=utf8

 **/
var urlparse = require('url').parse
var http=require('https');
var algorithm = require('jshashes');
var mysql      = require('mysql');

var pool  = mysql.createPool({
        host     : 'localhost',
        user     : 'root',
        password : '',
        database : 'test'
});
    pool.on('connection', function(connection) {
            connection.query('SET GLOBAL max_connections=1000');
            connection.query('set names utf8');
    });



function mysql_query(sql,sqlParam,callback)
{
    pool.getConnection(function(err, connection) {
        if(err) throw err;
        connection.query(sql,sqlParam, function(err, rows) {
            if(err) throw err;
            connection.release();
            callback(rows);
        });
    });
}




function querydb(keyword,callback){

    var sql="select * from test.github where description like '%"+keyword+"%'";

    mysql_query(sql,null,function(rows){
        //console.log(rows);

        for(var i=0;i<rows.length;i++){

            var row=rows[i];
            console.log(row['description']+'\t'+row['repository']+'\t'+row['lang']+'\t'+row['upate']);
        }

        callback();
    })

}

function md5(str){

    return new  algorithm.MD5().hex(str);
}


function exec(cmd,callback){


    var execcmd = require('child_process').exec,
        child;
    child = execcmd(cmd, {maxBuffer: 1024*1024*1000},
            function (error, stdout, stderr) {
                callback(error,stdout,stderr);
            })

}



function http_get(url,callback){


    var urlinfo = urlparse(url);
    var options = {
        method: 'GET',
        host: urlinfo.host,
        path: urlinfo.pathname,
			headers:{
		'User-Agent':'Mozilla/5.0 (Windows NT 6.1; rv:27.0) Gecko/20100101 Firefox/27.0'
		}
    };

	if(urlinfo.port) {
        options.port = urlinfo.port;
    }
    if(urlinfo.search) {
        options.path += urlinfo.search;
    }

		//console.log(urlinfo);

var req=http.get(options,

function(res){

	var data=[];
	var size = 0;
	res.on('data',function(d){
	    size += d.length;
		data.push(d);
		//console.log(d);
	})

	res.on('end',function(){
		var str = Buffer.concat(data, size).toString();
	//console.log(str);
	  callback(str);
	  req.end();

	})

	res.on('error',function(e){
		console.log(e);
	})

});

}



function get(url,selector,callback){
	/*
    $.get(url,function(result){
        callback($(selector,$(result)));
    });
	*/


}

function trim(str){
	str=str||'';
	return str.replace(/^\s*|\s*$/ig,'');
}


function gitapisearch(key,page){

var url='https://api.github.com/search/repositories?q='+encodeURIComponent(key)+'&per_page=100&page='+page;

console.log(url);
   http_get(url,function(data){

        //console.log(data);
		data=eval('('+data+')')
        if(data['items']){

            var items=data['items'];
            var pageCount=Math.ceil((data['total_count']||0)/100);
            // console.log(data['total_count']);
             console.log(pageCount);
              counter.setCount(pageCount);
            for(var i=0;i<items.length;i++){

                var item=items[i];

                var  desc=item['description']||'';
                var  lang=item['language']||'';
                var  resp=item['html_url']||'';
                desc=trim(desc.replace(/\'/ig,"\\'"));
                lang=trim(lang.replace(/\'/ig,"\\'"));
                resp=trim(resp.replace(/\'/ig,"\\'"));
                mdkey=md5(desc+lang+resp);
                var sql="REPLACE INTO github(repository, lang, description,mdkey)VALUES('"+resp+"', '"+lang+"', '"+desc+"','"+mdkey+"')";


		        var fs=require('fs');

				fs.appendFileSync('./sql.txt',sql+';\n');


                var txt=desc+'\t'+resp+'\t'+lang
                console.log(txt);

                mysql_query(sql,null,function(data){});


            }

        }

   });



}


//function gitsearch(key,page){
//
//    var url='https://github.com/search?q='+encodeURIComponent(key)+'&ref=searchresults&type=Repositories&p='+page;
//    console.log(url);
//
//
//        get(url,'.main-content .public',function(result){
//
//
//            result.each(function(i){
//
//                var desc=$('.description',$(this)).text();
//                var lang=$('.repo-stats li:eq(0)',$(this)).text();
//                var resp='https://github.com/'+$.trim($('.repolist-name',$(this)).text());
//
//                //console.log(desc);
//                //console.log(lang);
//                //console.log(resp);
//
//
//                desc=$.trim(desc.replace(/\'/ig,"\\'"));
//                lang=$.trim(lang.replace(/\'/ig,"\\'"));
//                resp=$.trim(resp.replace(/\'/ig,"\\'"));
//
//                mdkey=md5(desc+lang+resp);
//                var sql="REPLACE INTO test.github(repository, lang, description,mdkey)VALUES('"+resp+"', '"+lang+"', '"+desc+"','"+mdkey+"')";
//
//                console.log(sql);
//
//                query(sql);
//
//
//
//            })
//
//
//
//        });
//}


var counter=(function(){


    var i=1;
    var pageCount=0;

    function count(){
        return i++;
    }

    function setCount(cnt){

        //console.log('setCount'+cnt)
        if(cnt>0) {
            pageCount=cnt;
        }
    }

    function getCount(){
        if(pageCount>0){
            return pageCount>10?10:pageCount;
        } else {
           return 10;
        }
    }


    return {
      'count':count,
      'setCount':setCount,
      'getCount':getCount
    }

})();


var key=process.argv[2]||'';

console.log(key);
querydb(key,function(){


pool.end();

});



return;
gitapisearch(key,counter.count());


var timerid=setInterval(timer,15000);

function timer(){


var page=counter.count();

//console.log(page+'\t'+ counter.getCount());
if(page>=counter.getCount()+1){
  clearInterval(timerid);
  setTimeout(function(){
      process.exit(0);
 // connection.end();
  },20000);
  return;
} else {

gitapisearch(key,page);

}

}


