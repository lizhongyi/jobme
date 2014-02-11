<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>职美网-中高级人才招聘平台</title>

<link rel="stylesheet" type="text/css" href="../Public/css/bp.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/bp-r.css" />
<script type="text/javascript" src="../Public/js/jquery-1.9.1.min.js"></script>
<style>
 body{ background:#F8F8F8 !important; margin:0px; padding:0px;}
 div.login_box{
	width: 300px;
	position: absolute;
	margin-left: 0px;
	right:30px; padding-top:5px;
	top: 350px; padding-left:30px;
	margin-top: -140px;
	height: 342px;
	 background:#FEFEFE; 
	 border:1px solid #ddd;
}

.logo{ margin-left:0px;}
.info_box{
	width: 527px;
	position: absolute;
	margin-left: 0px;
	left: 1%;
	top: 350px;
	margin-top: -140px;
	height: 222px;
	}
 div.logo{  width:300px; padding-top:5px; padding-bottom:16px; float:left;}
 div.sigin{ width:300px;}
 div.sigin h2{ font-family:"微软雅黑"; font-size:22px; font-weight:100; padding:10px 0; color:#ccc; .text-shadow:2px 2px 2px #F7F7F7;}
 div.login_box input#username,div.login_box input#password{ display:block; height:24px; line-height:24px; width:200px; margin-bottom:16px;}
 
 .cl{ height:1px; clear:both; overflow:hidden}
 #msg{ font-size:14px; color:#900}
 div.u_top{ background:#525252; height:300px; width:100%; position:absolute; top:50%; margin-top:-150px;}
 div.top{ height:70px; background:#525252}
 div.top_c{ width:960px; margin:0 auto; height:70px;}
  div.bts { margin-top:-2px; padding-left:40px;}
 div.bts span{ float:left;margin-right:10px; color:#666}
 div.bts #remember{ height:24px; line-height:24px; margin-right:6px; color:#666}
 #bt{ width:80px;}
 .lo-type{ width:300px; float:right; line-height:30px; padding-top:24px; text-align:right; padding-right:80px; position:relative;}
  .lo-type a{ font-weight:bold; font-size:14px; color:#CCC;}
 .info_box h3{ font-family:"微软雅黑"; color:#666; font-weight:100; font-size:22px;}
 .info_box ul{ list-style:none; padding-top:30px; margin:0px;}
 .info_box ul li{ display:block; padding:5px; line-height:40px; font-size:18px; font-family:"微软雅黑"; color:#666; text-shadow: #FFF 1px 1px; padding-left:50px;}
  .info_box ul li.zhenshi{ background:url(/Public/img/bag.png) left center no-repeat}
  
  .info_box ul li.huiju{ background:url(/Public/img/users.png) left center no-repeat}
 
 
 .info_box ul li.gengduo{ background:url(/Public/img/premium.png) left center no-repeat}
 #footer{ width:900px; margin:0 auto; line-height:30px; color:#999}
 .i-table{ font-size:14px; color:#666}
 .sanjiao{ width:24px; height:16px; background:url(/Public/img/sanjiao.png) no-repeat; position:absolute; bottom:-17px; left:160px; }
 
 .rt a{ color:#999}
.l-table td input:text{height:24px; line-height:30px; border-radius:0px;}
#msg{ font-size:12px !important; padding:8px; padding-left:60px; }
.red-border{ border:1px solid #F00}
</style>

 <script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" charset="utf-8"></script>


<script type="text/javascript">  
    //从页面收集OpenAPI必要的参数。get_user_info不需要输入参数，因此paras中没有参数  
    var paras = {};  
  
    //用JS SDK调用OpenAPI  
    QC.api("get_user_info", paras)  
    //指定接口访问成功的接收函数，s为成功返回Response对象  
    .success(function(s) {  
        //成功回调，通过s.data获取OpenAPI的返回数据  
       alert("获取用户信息成功！当前用户昵称为：" + s.data.nickname);
	   $("#nickname").val(s);  
    })  
    //指定接口访问失败的接收函数，f为失败返回Response对象  
    .error(function(f) {  
        //失败回调  
        alert("获取用户信息失败！");  
    })  
    //指定接口完成请求后的接收函数，c为完成请求返回Response对象  
    .complete(function(c) {  
        //完成请求回调  
      //  alert("获取用户信息完成！");  
    });  
	
	
	
</script> 

<script>

$(document).ready(function(e) {
	
	
	
	
	
	
	
	
	
	
	
	
	
		$("#reg_user").blur(function(e) {
                      
					if($(this).val()==""){
						    
							return false;
						  
						}
					
					 $this=$(this); 
				     $.ajax({
						     url:"<?php echo U('Login/checkInput',array('act'=>'uname'));?>",
							 type:"POST",
							 data:{username:$("#reg_user").val()},
							 
							 beforeSend: function(){
								 
								 
								 },success: function(data){
									    
										
										 if(data==true){
											
											
										$("#msg").html("");
									 }else{
										    
											$("#msg").html("用户名已经存在！")
											$this.focus();
										 
										 }
								 }
						 
						 }) 
                });
				
				
				
				
				
				
				$("#password2").blur(function(){
					
					   
					   if($("#password2").val() != $("#password1").val() )
				      	{
						$("#msg").html("两次密码输入不一致，请重新输入");
						 $("#password2").focus();
						}
					
					})
				
				
				
				
				$("#email").blur(function(e) {
                      
					if($(this).val()==""){
						    
							return false;
						  
						}
					
					 $this=$(this); 
				     $.ajax({
						     url:"<?php echo U('Login/checkInput',array('act'=>'mail'));?>",
							 type:"POST",
							 data:{email:$("#email").val()},
							 
							 beforeSend: function(){
								 
								 
								 },success: function(data){
									    
										
										 if(data==true){
											
											$("#msg").html("");
										
									 }else{
										    
											$("#msg").html("邮箱已经已经存在！")
											$this.focus();
										 
										 }
								 }
						 
						 }) 
                });
				
	
	
	
	
	
	
	
	
	
	
	
	
    
	 $("#bt1").click(function(e) {
            p=0;
				$(".sigin input").each(function(index, element) {
                       
					   if($(this).val()==""){
						     
				      			 $(this).addClass('red-border');
						      p=p+1;   
							   
											$("#msg").html("请填写完整")
											
						   }
					   
                });  
				
			  
			 // alert(p);
			  if(p<2){
				    
					
					
					
					
					
					
					
			 setTimeout(function(){},300);
					
					 $this=$(this); 
				     $.ajax({
						     url:"/Login/do_reg/ajax/1",
							 type:"POST",
							 data:{username:$("#reg_user").val(),password:$("#password1").val(),email:$("#email").val(),edu:$("#edu").val(),ajax:1},
							 
							 beforeSend: function(){
								 
								 
								 },success: function(data){
									    
										$this.val('处理中...');
										$this.attr("disbaled",true);
										 if(data.status==1){
											
											$this.val(data.info);
											$this.attr("disbaled",true);
											window.location='/';
										
									     }else{
										    
											$this.val(data.info);
										 
										 }
								 }
						 
						 }) 
						 
						 
						 return false;

				  }	
				  
				
			
			 return false;  
		 
    });
});



</script>
</head>

<body>
<div class="navbar navbar-fixed-top" style="height:60px;">
      <div class="navbar-inner" style=" width:100%; height:72px; margin-left:-32px; border-radius:0">
        <div class="top_c" style="width:920px">


<div class="logo" style="padding-top:18px; margin-left:10px;"><a href="/"><img src="/Public/img/logo.png"/></a></div>

<ul class="nav pull-right">
                              <div style=" margin-top:30px;">
                             <strong> <a href="/Login" style="color:#F1F1F1">个人登录</a>　　<a href="http://oa.jobme.cn" style="color:#F1F1F1">猎头登陆</a> </strong> 
                              </div>
									
								</ul>


</span>
</div>

<div class="cl"></div>
</div>
      </div>
    </div>









<div style=" width:940px; position:relative; margin:0 auto;  height:600px; border-bottom:1px solid #ddd;">

<div class="info_box">
<h3>职美网，打造最专业的中高级人才招聘平台！</h3>

<ul >

<li class="zhenshi">真实有效的中高端职位</li>
<li class="huiju">实时掌握申请职位的进展</li>
<li class="gengduo">结交细分行业猎头精英</li>


</ul>
</div>





<div class="login_box">


<div class="sigin" style="position:relative;">
<h2 style="padding-top:20px;">注册　　　　　　　　<a href="/Login" style="margin-right:42px; color:#CCC">登陆</a></h2>
<form method="post"  class="sigin">

<table width="288" class="l-table">

<tr>
<td align="right"><span style="font-size:14px;padding-top:0px; color:#666; display:block">用户名 　</span></td>
<td height="30"><input type="text"  name="username" style="height:20px; line-height:20px; border-radius:0px; width:170px;" id="reg_user" autocomplete="off" /></td>
</tr>
<tr>
<td width="67" align="right" valign="top">
<span style="font-size:14px; color:#666;padding-top:5px; color:#666; display:block">邮箱　</span>
</td>
<td width="209" height="30">
<input type="text"  name="email" id="email"  style="height:20px; line-height:20px;width:170px; border-radius:0px"   autocomplete="off" /></td>
</tr>
<tr>
<td align="right" valign="top"><span style="font-size:14px;padding-top:5px; color:#666; display:block">密码　</span></td>
<td height="30" >
<input type="password" name="password" id="password1" style="height:20px; line-height:20px;width:170px; border-radius:0px"  autocomplete="off" /></td>
</tr>
<tr>
  <td align="right" valign="top"><span style="font-size:14px;padding-top:5px; color:#666; display:block">确认　</span></td>
  <td height="30"><input type="password"  id="password2" style="height:20px; line-height:20px;width:170px; border-radius:0px"  name="password"  autocomplete="off"  /></td>
</tr>
<tr>
  <td height="24" align="right" valign="top"><input type="checkbox" style="width:16px; height:16px; margin:0 !important" name="agree2" id="agree2" value="" /> </td>
  <td height="24"><a href="agreement.html">同意用户使用协议</a></td>
</tr>
<tr>
  <td height="42" align="left" valign="top">&nbsp;</td>
  <td><input type="submit" class="btn btn-primary" name="bt2" id="bt1" style="border-radius:0px;" value="完成注册"/></td>
</tr>
</table>

<div id="msg" style="display:block; margin-top:-40px; margin-left:100px;"></div

>
<div class="cl"></div>
</form>
</div>








</div>
</div>

<div class="cl"></div>
<div id="footer">
职美网　copyright &copy; 2012-2013 <div class="rt" style="width:140px; float:right;">　京ICP备11016916号-9
</div>

</div>
</div>
</body>
</html>