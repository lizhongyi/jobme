<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>模拟登录</title>

<link rel="stylesheet" type="text/css" href="../Public/css/bp.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/bp-r.css" />
<script type="text/javascript" src="../Public/js/jquery-1.9.1.min.js"></script>
    <script src="/App/Tpl/default/Public/js/bootstrap.js"></script>

<style>
 body{ background:#F8F8F8 !important; margin:0px; padding:0px;}
 div.login_box{ width:300px;  position:absolute; margin-left:-150px; left:50%; top:50%; margin-top:-140px;}
 div.logo{  width:300px; padding-top:10px; padding-bottom:16px}
 div.sigin{ width:300px;}
 div.sigin h1{ font-family:"微软雅黑"; font-size:26px; font-weight:100; padding:10px 0; color:#ccc; .text-shadow:2px 2px 2px #F7F7F7;}
 div.login_box input#username,div.login_box input#password{ display:block; height:24px; line-height:24px; width:240px; margin-bottom:13px;}
 
 .cl{ height:1px; clear:both; overflow:hidden}
 #msg{ font-size:14px; color:#900}
 div.u_top{ background:#525252; height:300px; width:100%; position:absolute; top:50%; margin-top:-150px;}
 div.top{ height:70px; background:#525252}
 div.top_c{ width:960px; margin:0 auto;}
  div.bts { margin-top:-2px; padding-left:40px;}
 div.bts span{ float:left;margin-right:10px; color:#666}
 div.bts #remember{ height:24px; line-height:24px; margin-right:6px; color:#666}
 #bt{ width:80px;}

</style>






<script>

$(document).ready(function(e) {
    
	 $("#bt").click(function(e) {
             
         $.ajax({
             type: "POST",
             url: "/Login/doLogin/ajax/1",
			 data:{username:$("#username").val(),pass:$("#password").val()},
			 beforeSend: function(){
				
				$("#msg").html("登录中");
				
				},
				
             success: function(data){
				 //设置本地sesion
                 if(data.status==1){
		              $("#msg").html(data.info);
					 //  window.location='/';
					   return false;
					   
					 }else{
						 
					   $("#msg").html(data.info);
						 return false;  
					}
             },
             error: function(){
                 alert('fail');
             }
         });

			  
			
			 return false;  
		 
    });
});



</script>
</head>

<body>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="top_c">
<div class="logo"><img src="../Public/img/logo.png"/></div>

</div>
      </div>
    </div>


<div class="login_box">


<div class="sigin" style="position:relative;">
<h1>登录</h1><a href="/User/reg" style="float:right; position:absolute; top:30px; right:60px;">注册</a>
<form method="post">

<input type="text"  name="username" placeholder="用户名" id="username" />
<input type="password" name="password" placeholder="密码" id="password" />
<div class="bts">
<span  style="padding-top:6px;"><a href="#forgetpass" data-toggle="modal" link="/Login/forget">忘记密码</a></span>
<span style="padding-top:2px"><input type="checkbox" id="remember" name="remember" value="1"/>记住我 </span><span><input type="submit" class="btn btn-primary" name="bt" id="bt" value=" 登录 "/></span> 

</div>
</form>
</div>
<div class="cl"></div>
<div id="msg" style="display:block"></div



></div>

<div class="modal" id="forgetpass" style="width:500px; margin-left:-250px; display:none"></div>
</body>
</html>