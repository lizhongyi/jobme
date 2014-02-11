<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>提交同步登陆</title>
<meta property="qc:admins" content="1411267112627255636" />
<script type="text/javascript" src="../Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="100554737" data-redirecturi="http://jobme.cn/Login/test" charset="utf-8" ></script>

</head>

<body>
 <form id="form1" runat="server">  

<span id="qqLoginBtn" style="display:none"></span>  
<script type="text/javascript">  
   QC.Login({
		btnId : "qqLoginBtn",//插入按钮的html标签id
		size : "B_M",//按钮尺寸
		scope : "get_user_info",//展示授权，全部可用授权可填 all
		display : "pc"//应用场景，可选
	});
      
      
  
</script>  
  

<script type="text/javascript">  
      if(QC.Login.check()){ 
        QC.Login.getMe(function(openId, accessToken) {  
          //  alert(["当前登录用户的", "openId为：" + openId, "accessToken为：" + accessToken].join("\n"));  
             $("#openId").val(openId);
		     $("#accessToken").val(accessToken);
        }); 
		
		 
        setTimeout(function(){
		 	    //验证她在是不是已经注册的用户
				
				 checkReg();
			 
			 },500)
		
		
		
		  
	  }
  
    
</script>  
  <script type="text/javascript">  
    //从页面收集OpenAPI必要的参数。get_user_info不需要输入参数，因此paras中没有参数  
    var paras = {};  
  
    //用JS SDK调用OpenAPI  
    QC.api("get_user_info", paras)  
    //指定接口访问成功的接收函数，s为成功返回Response对象  
    .success(function(s) {  
        //成功回调，通过s.data获取OpenAPI的返回数据  
    // alert("获取用户信息成功！当前用户昵称为：" + s.data.nickname);
	   $("#nickname").val(s.data.nickname);  
	   $("#face").val(s.data.figureurl_1);  
	 //  alert(s.data.figureurl_1);
    })  
    //指定接口访问d 失败的接收函数，f为失败返回Response对象  
    .error(function(f) {  
        //失败回调  
        alert("获取用户信息失败！");  
    })  
    //指定接口完成请求后的接收函数，c为完成请求返回Response对象  
    .complete(function(c) {  
        //完成请求回调  
      //  alert("获取用户信息完成！");  
    });  
	
	
	
	
	
	
	
	
	
	  function  checkReg(){
	   
	          $.ajax({url:'/Login/checkReg',
			  type:"POST",
			  data:{openId:$("#openId").val()},
			  beforeSend: function(){
				  },
			  success:function(data){
				      
					  if(data==0){
						  regQq();
						  }else{
							    window.opener.location='/';
							   // window.close();
								
							  
							  }
				     
				   }
			  
					
					
					
					});     
			 
	   }
   
    
	
	function regQq(){
		      $.ajax({url:'/Login/regQq',
			  type:"POST",
			  data:{openId:$("#openId").val(),accessToken:$("#accessToken").val(),nickname:$("#nickname").val(),face:$("#face").val()},
			  beforeSend: function(){
				  },
			  success:function(data){
				      
					  if(data==1){
						   window.opener.location='/';
							   // window.close();
						  }else{
							  
							    //停顿报错
								alert(data);
							  
							  }
				     
				   }
			  
					
					
					
					});     
				 
				 
		
		}
	
	
</script> 
  
        </div>  
          
       
    <br />  
    <div style="display:none">
    <input type="hidden1" name="nickname" id="nickname"/>
<input type="hidden1" name="openId" id="openId"/>
<input type="text"   name="accessToken" id="accessToken"/>
<input type="text"   name="face" id="face"/>
    <input type="button" value="提 交" id="btnSubmit" onclick="ContAdd();" />  
    </form>  
    </div>
    
 
</body>  


</html>