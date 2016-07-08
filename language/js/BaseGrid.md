```js

/*
 * 创建人：张军强邮箱：s_jqzhang@163.com 修改时间：2014-6-20
 * 下午4:20:05修改备注：
 * 
 * @version 1.0.0
 */


var EDITOR_OPTIONS={
        toolbar: ['font', null, 'fontSize', null, {
            name: 'bold',
            className: 'btn-info'
        },
        {
            name: 'italic',
            className: 'btn-info'
        },
        {
            name: 'strikethrough',
            className: 'btn-info'
        },
        {
            name: 'underline',
            className: 'btn-info'
        },
        null, {
            name: 'insertunorderedlist',
            className: 'btn-success'
        },
        {
            name: 'insertorderedlist',
            className: 'btn-success'
        },
        {
            name: 'outdent',
            className: 'btn-purple'
        },
        {
            name: 'indent',
            className: 'btn-purple'
        },
        null, {
            name: 'justifyleft',
            className: 'btn-primary'
        },
        {
            name: 'justifycenter',
            className: 'btn-primary'
        },
        {
            name: 'justifyright',
            className: 'btn-primary'
        },
        {
            name: 'justifyfull',
            className: 'btn-inverse'
        },
        null, {
            name: 'createLink',
            className: 'btn-pink'
        },
        {
            name: 'unlink',
            className: 'btn-pink'
        },
        null, {
            name: 'insertImage',
            className: 'btn-success'
        },
        null, 'foreColor', null, {
            name: 'undo',
            className: 'btn-grey'
        },
        {
            name: 'redo',
            className: 'btn-grey'
        }],
        'wysiwyg': {
           
        }
    }



// 事件总线
var Events = (function() {
	var topics = {};
	return {
		sub : function(topic, listener) {
			if (!topics[topic])
				topics[topic] = {
					queue : []
				};
			var index = topics[topic].queue.push(listener) - 1;
			return (function(topic, index) {
				return {
					remove : function() {
						delete topics[topic].queue[index];
					}
				};
			})(topic, index);
		},
		pub : function(topic, info) {
			if (!topics[topic] || !topics[topic].queue.length)
				return;
			var items = topics[topic].queue;
			for ( var i in items) {
				items[i](info || {});
			}
		}
	};
})();



$.fn.serializeObject = function() {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [ o[this.name] ];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
}


        /**
         * Alert window
         * 
         * @param {type} message
         * @param {type} callback
         * @returns {undefined}
         */
        BootstrapDialog.alert = function(message, callback) {
            new BootstrapDialog({
                message: message,
                data: {
                    'callback': callback
                },
                closable: false,
                buttons: [{
                        label: '确定',
                        action: function(dialog) {
                            typeof dialog.getData('callback') === 'function' && dialog.getData('callback')(true);
                            dialog.close();
                        }
                    }]
            }).open();
        };

       BootstrapDialog.confirm = function(title,message, callback) {
            new BootstrapDialog({
                title: title,
                message: message,
                closable: false,
                data: {
                    'callback': callback
                },
                buttons: [ {
                        label: '确定',
                        cssClass: 'btn btn-info',
                        action: function(dialog) {
                            typeof dialog.getData('callback') === 'function' && dialog.getData('callback')(true);
                            dialog.close();
                        }
                    },{
                        label: '取消',
                        cssClass:'btn btn-default',
                    action: function(dialog) {
                        typeof dialog.getData('callback') === 'function' && dialog.getData('callback')(false);
                        dialog.close();
                    }
                }]
            }).open();
        };




function BaseGrid(proto) {
	//debugger;

	this.grid=null;
	this.gridId = '#gridId';
	this.gridBarId = '#gridBarId';
	this.dialogPannelId = '#dialogPannelId';
	this.formPannelId = '#formPannelId';
	this.pageBarId='#pageBarId';
	this.gridSearchBarId='#gridSearchBarId';
	this.addUrl=this.baseUrl+'add';
	this.editUrl=this.baseUrl+'edit';
	this.delUrl=this.baseUrl+'del';
	this.searchUrl=this.baseUrl+'data';
	this.exportUrl=this.baseUrl+'export';
	this._editor={};

	for (var p in BaseGrid.prototype) {
		if (!proto[p]) {
			proto[p] = BaseGrid.prototype[p];
		} 
	}
	try{
	  this.dialogHTML=$(this.dialogPannelId).get(0).outerHTML;
	  $(this.dialogPannelId).remove();
	}catch(e){
		
	}


}

BaseGrid.prototype = {

	myAlert:function(type,msg){
		if(msg=='error'){
			msg='操作失败!';
		}
		$.popMessage(type,msg);
	},
	myShow:function(){
		
	},
	buildParam:function(div){
		var self=this;
		var data={};
		$("input,select,textarea,.wysiwyg-editor,.input_html",$(div)).each(function(i){
			var name= $(this).attr('name')?$(this).attr('name'):$(this).attr('id');
			var type = $(this)[0].type?$(this)[0].type:'';
			type=type.toLowerCase();
			if($(this).hasClass('input_html')){
			   data[name]=$(this).html();
			}
			else if($(this).hasClass('wysiwyg-editor')){
				if( typeof KindEditor!=='undefined') {
				    data[name]=self._editor[name].html();
				} else {
					data[name]=$(this).wysiwyg().html();
				}
			} else if($(this).hasClass('code')){
				//debugger;
				data[name]=self._editor[name].getValue();
			}
			else {
				if(type=='checkbox'){
					//data[name]=$(':checked',this)?1:0;
					data[name]=$(this).is(':checked')?1:0;
				} else {
					data[name]=$(this).val();
				}
			}
		});
		return data;
	},
	
	bind : function(div, map) {
		var name = "";
		var value = "";
		var type = "";
		div = typeof (div) == 'object' ? div : $(div);
		if (map == undefined) {
			$("select", div).each(function() {
				$(this).get(0).options[0].selected = true;
			})
			return;
		}
		for ( var key in map) {

			$("input,select,textarea,.wysiwyg-editor", div).each(function() {
				var elem = $(this);
				var name = $(this).attr('name')?$(this).attr('name'):$(this).attr('id');
				

				
				// type=elem.attr("type");
				var type = elem[0].type?elem[0].type:'';
				if (key == name) {
					if (type.toLowerCase() == "checkbox") {
						if (map[key] == 1) {
							elem.attr("checked", true);
						} else {
							elem.attr("checked", false);
						}
					} else if (type.toLowerCase() == "select-one") {

						var options = $(this).get(0).options;
						for ( var i = 0; i < options.length; i++) {
								
							if (options[i].value == map[key]) {
								elem.get(0).options[i].selected = true;
								break;
							} else if (options[i].text == map[key]) {
								elem.get(0).options[i].selected = true;
								break;
							}
						}
					} else if(type.toLowerCase() == "select-multiple" ){
						var vs=map[key].split(/\,/ig);
						var options = $(this).get(0).options;
						for ( var i = 0; i < options.length; i++) {
						for(var j=0;j<vs.length;j++){					
							if (options[i].value == vs[j]) {
								elem.get(0).options[i].selected = true;
							}
						}
					  }
						
					} else 	if($(this).hasClass('wysiwyg-editor')){
						elem.html(map[name]);
						
					}  else {
						elem.val(map[key]);
					}
				}
				// break;
			})
		}
	},

	addEntrance : function(title) {
		title = title ? title : '新增信息';
		this.showWindow(title, 0);
	},
	format : function(str, data) {
		var ma = str.match(/\{\w+\}/ig);
		for (var i = 0; ma && i < ma.length; i++) {
			str = str.replace(new RegExp(ma[i]), data[ma[i].replace(
							/^\{|\}$/ig, '')]);
		}
		return str;
	},
	strtotime : function(str,intervalstr) {
		str = str.indexOf(':') > 0 ? str : str + ' 00:00:00';
		var strArray = str.split(" ");
		var strDate = strArray[0].split("-");
		var strTime = strArray[1].split(":");
		var match=false;
		if(intervalstr){
			match=intervalstr.match(/(\-?\d+)\s*(day|min|sec|month|year|hour)/);
		}
		var interval=0;
		if(match){
			if(match[2]=='sec'){
				interval=match[1];
			} else if(match[2]=='min'){
				interval=match[1]*60;
			} else if(match[2]=='hour'){
				interval=match[1]*60*60;
			} else if(match[2]=='day'){
				interval=match[1]*60*60*24;
			} else if(match[2]=='month'){
				interval=match[1]*60*60*24*30;
			} else if(match[2]=='year'){
				interval=match[1]*60*60*24*365;
			}
		}
		var a = new Date(strDate[0], (strDate[1] - parseInt(1)), strDate[2],
				strTime[0], strTime[1], strTime[2]);
		return a.getTime()+interval*1000;
	},
	date : function(pat, ts) {
		var y, m, d, H, i, s;
		var dt = ['Y', 'm', 'd', 'H', 'i', 's'];
		var dv = [];
		if (ts < 2649600000) {
			ts = ts * 1000;
		}
		var dd = ts ? new Date(ts) : new Date();
		y = dd.getYear() + 1900;
		m = dd.getMonth() + 1, m = m < 10 ? '0' + m : m;
		d = dd.getDate(), d = d < 10 ? '0' + d : d;
		H = dd.getHours(), H = H < 10 ? '0' + H : H;
		i = dd.getMinutes(), i = i < 10 ? '0' + i : i;
		s = dd.getSeconds(), s = s < 10 ? '0' + s : s;
		dv[0] = y;
		dv[1] = m;
		dv[2] = d;
		dv[3] = H;
		dv[4] = i;
		dv[5] = s;
		for (var p in dt) {
			pat = pat.replace(new RegExp(dt[p]), dv[p]);
		}
		return pat;
	},
	delEntrance : function(title) {
		var self = this;
		title = title ? title : '确认删除吗？';
		this.getSelected(function(sRows) {
					if (sRows.length > 1) {
						self.myAlert('warn',"一次只能删除一条信息！");
						return;
					}
					var sRow = sRows[0];
					 BootstrapDialog.confirm("删除提示", self.format(title, sRow),
							function(r) {
								if (r) {
									self.deleteAction(sRow, function(bool,msg) {
												
												if (bool) {
													self.myShow("操作成功！");
													$(self.gridId).mmGrid('load');
												} else {
													if(msg){
														self.myAlert('error',msg);
													} else {
														self.myAlert('error',"操作失败！");
													}
													
												}
											}, [sRow.userNo]);
								}
							});
				});
	},
	editEntrance : function(title) {
		title = title ? title : '编辑信息';
		var self = this;
		this.getSelected(function(sRows) {
					if (sRows.length > 1) {
						self.myAlert('warn',"一次只能编辑一条信息！");
						return;
					}
					self.showWindow(title, 1, sRows[0]);
				});
	},
	searchEntrance : function() {
		var self=this;
		var params=self.buildParam(self.gridSearchBarId);
		params['page']=1;
		$(self.gridId).mmGrid().load(params);
		
		
	},
	refresh:function(){
		var self=this;
		var params=self.buildParam(self.gridSearchBarId);
		params['page']=$(self.pageBarId).mmPaginator().opts['page'];
		$(self.gridId).mmGrid().load(params);
	},
	reload:function(){
		var self=this;
		$('input',self.gridSearchBarId).val('');
		self.searchEntrance();
	},
	getSelected : function(callback) {
		var self=this;
		var sRows = $(this.gridId).mmGrid("selectedRows");
		if (sRows.length == 0) {
			self.myAlert('warn',"请先选择一条数据！");
			return;
		}
		callback(sRows);
	},
	_initCtrl:function(type){
	
		var self=this;
		this.files=[];
		this._editor={};
		
		var check=$('<div></div>');
		try {
		if(check.datepicker){
			$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true,
					format:'yyyy-mm-dd'
			});
		}
		if(check.chosen){
			$('.chosen-select').chosen(); 
				$(window)
				.off('resize.chosen')
				.on('resize.chosen', function() {
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					})
				}).trigger('resize.chosen');
		}
		if(check.dropzone){
			$('.dropzone').each(function(i){
				var url=$(this).attr('data-url');
				var name=$(this).attr('name')?$(this).attr('name'):$(this).attr('id');
	           $('#'+name).dropzone({url:url, paramName:name,success:function(file,data){
	        	   if(self.uploadFile){
	        		   self.uploadFile(name,file,data);
	        	   }
	           }});
			});
        }
		if(check.ace_wysiwyg){
			if( typeof KindEditor!=='undefined'){
			  $('.wysiwyg-editor').each(function(){
				  var name=$(this).attr('name');
			   if(typeof(self._editor[name])==='undefined'){
						self._editor[name]=KindEditor.create('textarea[name='+name+'],div[name='+name+']',{
						//resizeType : 1,
						minWidth:460,
						filterMode:false,
						resizeMode:2,
						allowFileManager : true,
						width:'100%',
						allowPreviewEmoticons : false,
						allowImageUpload : false,
						items : [
							 'source','undo', 'redo','|','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
							'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
							'insertunorderedlist','advtable','|','fullscreen']
					   });  //end kindeditor
				
			   }

			  
			  })

			} else {
				$('.wysiwyg-editor').ace_wysiwyg(EDITOR_OPTIONS).prev().addClass('wysiwyg-style2');
			}
		}


			  $('.code').each(function(){
				  var name=$(this).attr('name');
				  var modename=$(this).attr('mode');
			   if(typeof(self._editor[name])==='undefined'){
						self._editor[name]=CodeMirror.fromTextArea($('textarea[name='+name+'],div[name='+name+']').get(0),{
						  mode: {name:modename},
						  styleActiveLine: true,
						  lineNumbers: true,
						  lineWrapping: true
						
					   });  //end codemirror
				
			   }

			  
			  })

		if(self['initCtrl']){
			self.initCtrl(type);
		}
		}catch(e){
			console.log(e);
		}
	},
	showWindow : function(title, type, sRow) {
		
		var self=this;
//		$(this.dialogPannelId).modal();
		var dialog=new BootstrapDialog({
            size: BootstrapDialog.SIZE_LARGE,
            message:  self.dialogHTML,
            nl2br:false,
            title:title,
            buttons: [{
                label: '确认',
                cssClass: 'btn btn-sm btn-info',
                action: function(dialogItself){
	                  self.dealDialogOK(dialogItself,type);
                }
            }, {
                label: '取消',
                cssClass: 'btn btn-sm btn-default',
                action: function(dialogItself){
                    dialogItself.close();
                }
            }]
        });

		self.dialog=dialog;
		dialog.open();
		
		setTimeout(function(){
			$(self.dialogPannelId).show();
			self.afterShowWindow(type,  sRow?sRow:{});	
			self._initCtrl(type);
			self._buildValid();
		},500);

        
        
		
	},
	afterShowWindow : function(type,  sRow) {
		this.bind($(this.formPannelId),sRow);

	
	},
	pub : function(topic, data) {
		if (Events) {
			Events.pub(topic+data.action+data.event, data);
		}
	},
	on:function(action,event,callback){
		var self=this;
		Events.sub(self.gridId+action+event,callback);
	},
	/**
	 * 窗口确定函数
	 * 
	 * @param $customerInfoWindow
	 */
	dealDialogOK : function(dialog,type) {
		var self = this;
		var bean =self.buildParam(self.formPannelId);  //$(this.formPannelId).serializeObject();
		if (bean == false)
			return false;
		if(self.setBean){
			bean=self.setBean(bean);
		}
		
		if(self.checkBean){
			if(! self.checkBean(bean,cb)) {
				if(cb){
					cb();
				}
				return;
			}
		}
		var flag=true;
		if($(self.formPannelId).valid){
		  flag=	$(self.formPannelId).valid();
		}
		if(!flag){
			return;
		}
		
		if (type == 0) {// 添加操作
			this.addAction(bean, function(flag,msg) {
			
						if (flag) {
							self.dialog.close();
							self.myShow("操作成功！");
							$(self.gridId).mmGrid('load');
						} else {
							if(msg){
								self.myAlert('error',msg);
							} else {
								self.myAlert('error',"操作失败！");
							}

						}
					});
		} else {// 编辑操作
			this.updateAction(bean, function(flag,msg) {
						if (flag) {
							self.dialog.close();
							self.myShow("操作成功！");
							$(self.gridId).mmGrid('load');
						} else {
							if(msg){
								self.myAlert('error',msg);
							} else {
								self.myAlert('error',"操作失败！");	
							}
							

						}
					});
		}
	},
	toJSON:function(data){
		if(typeof(data)=='string'){
			return eval('('+data+')')
		} else {
			return data;
		}
	},
	addAction : function(bean, callback) {
		var self = this;
		self.pub(self.gridId, {
					'action' : 'add',
					'event' : 'before',
					'data' : bean
				});
		$.post(this.addUrl, bean, function(data) {
					self.pub(self.gridId, {
								'action' : 'add',
								'event' : 'after',
								'data' : data.reply
							});
				    data=self.toJSON(data);
					callback(data.reply,data.message);
				});

	},
	updateAction : function(bean, callback) {
		var self = this;
		self.pub(self.gridId, {
					'action' : 'edit',
					'event' : 'before',
					'data' : bean
				});
		$.post(this.editUrl, bean, function(data) {
					self.pub(self.gridId, {
								'action' : 'edit',
								'event' : 'after',
								'data' : data.reply
							});
							data=self.toJSON(data);
					callback(data.reply,data.message);
				});

	},
	deleteAction : function(bean, callback) {
		var self = this;
		self.pub(self.gridId, {
					'action' : 'del',
					'event' : 'before',
					'data' : bean
				});
		$.post(self.delUrl, bean, function(data) {
					self.pub(self.gridId, {
								'action' : 'del',
								'event' : 'after',
								'data' : data.reply
							});
					data=self.toJSON(data);
					callback(data.reply,data.message);
				});

	},
	/**
	 * 窗口取消函数
	 * 
	 * @param $customerInfoWindow
	 */
	dealDialogCancel : function($deviceWindow) {
		$deviceWindow.dialog("close");
	},
	data:function(data){
		if(typeof(data)=='string'){
			return eval('('+data+')');
		} else {
			return data;
		}
	},
	encode:function(data){
		if(typeof data ==='object'){
			data=JSON.stringify(data);
		}
		return encodeURIComponent(data)
	},
	decode:function(data){
		var self=this;
		 return self.data(decodeURIComponent(data));
	},
	post:function(url,data,callback){
		var self=this;
		$.post(url,data,function(res){
			 var res2= self.data(res);
			 callback(res2);
		})
	},
	_buildValid:function(){
		var self=this;
		var rules={};
		var messages={};
		if(!$(self.formPannelId).valid){
			return;
		}
		$("input,select,textarea,.wysiwyg-editor",$(self.formPannelId)).each(function(i){
			var name= $(this).attr('name');
			var regex= $(this).attr('regex');
			var regex_message= $(this).attr('regex-message');
			var required_message=$(this).attr('required-message')==undefined?'此项不能为空':$(this).attr('required-message');
			var required=$(this).attr('aria-required')=='true'?true:false;

			if(name){
			if(regex&&regex_message) {
			  (function(name,regex,regex_message){
				  jQuery.validator.addMethod(name, function (value, element) {
						return this.optional(element) || new RegExp(regex).test(value);
					}, regex_message);
			  })(name,regex,regex_message);
			  var t= self.format('"{name}":true',{name:name});
			  rules[name]=$.extend(rules[name],eval('({'+t+'})'))
			} 
			 rules[name]=$.extend(rules[name],{required:required});
			messages[name]={required:required_message}
		
		   }
		});
//		alert(JSON.stringify( rules));
		$(self.formPannelId).validate({rules:rules,messages:messages});
	},
	combox:function(op)
	{
		var self=this;
	var selector=op.selector;
	var url=op.url;
	var map=op.map;
	var param=op.param?op.param:{};
		$.post(url,param,function(data)
				{
					data=self.data(data);
			        data=data.reply;
					var html="";
					if(op.before)
					{
					   op.before(op,data);
					}
					var textField=(map==undefined)?'text':map["textField"];
					var valueField=(map==undefined)?'value':map["valueField"];
					for ( var i = 0; i < data.length; i++)
					{
						if(typeof(data[i]['data'])=='undefined') {
							data[i]['data']='';
						}
						if(typeof(data[i]['data'])==='object'){
							data[i]['data']=JSON.stringify(data[i]['data']);
						}
						html+="<option value=\""+data[i][valueField]+"\"  data=\""+ encodeURIComponent(data[i]['data'])+"\" >"+ data[i][textField]+"</option>";
					}
					var cbx=$(selector);
					if(cbx[0])
					{
						if(cbx[0].tagName.toLowerCase()=="select")
						{
							cbx.html(html);
						}
						else
						{
							cbx.html("<select name=\""+textField+"\">"+html+"</select>");
						}
					}
					if(op.after)
					{
					   op.after(op,data);
					}
					
				})
	},
	editor:function(name){
	   var self=this;
	   if( typeof KindEditor!=='undefined'){
		  return self._editor[name];
	   } else {
		 return $('.wysiwyg-editor[name='+name+']').wysiwyg();
	   }
	},
	export:function(url,param){
		var self=this;
		var form=$("<form>");
		//debugger;
		param=param||self.buildParam(self.gridSearchBarId);
		url=url||self.exportUrl;
		form.attr("style","display:none");
		form.attr("target","_blank");
		form.attr("method","post");
		form.attr("action",url);
		param['__grid_opts__']=  JSON.stringify( this.grid.opts.cols);
		for(var name in param){
			var input1=$("<input>");
			input1.attr("name",name);
			input1.attr("value",param[name]);
			form.append(input1);
		}
		$("body").append(form);
		//debugger;
		form.submit();
	}

};



var gridUtil=new BaseGrid({});

```