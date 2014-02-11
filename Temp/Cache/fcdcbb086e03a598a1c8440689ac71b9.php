<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>职美网-中高级人才招聘平台</title>
<meta property="qc:admins" content="1411267112627255636" />
<link rel="stylesheet" type="text/css" href="../Public/css/bp.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/bp-r.css" />
<script type="text/javascript" src="../Public/js/jquery-1.9.1.min.js"></script>
 <script src="/App/Tpl/default/Public/js/bootstrap.js"></script>
 <script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="100554737" data-redirecturi="http://www.jobme.cn/Login/test" charset="utf-8" ></script>
  <script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" charset="utf-8"></script>

    <script src="../Public/js/jquery-1.7.2.js"></script>

 
    
   

 
<style>
 body{ background:#F8F8F8 !important; margin:0px; padding:0px;}
 div.login_box{
	width: 300px;
	position: absolute;
	margin-left: 0px;
	right:30px; padding-top:10px;
	top: 350px; padding-left:30px;
	margin-top: -140px;
	height: 282px;
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
 div.logo{  width:300px; padding-top:10px; padding-bottom:16px; float:left;}
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
 .sanjiao{ width:24px; height:16px; background:url(/Public/img/sanjiao.png) no-repeat; position:absolute; bottom:-17px; left:174px; }
 
 .rt a{ color:#999}
 .ms{ color:#C00s}

</style>






<script>

$(document).ready(function(e) {
    
	 $("#bt").click(function(e) {
		 
		 
		  if($("#username").val() == "" || $("#password").val() == "" ){       
		 
		      $("#bt").val('请填写完整...');
			  
			      return false;
			 }
            
			$this=$(this); 
         $.ajax({
             type: "POST",
             url: "/Login/doLogin/ajax/1",
			 data:{username:$("#username").val(),password:$("#password").val()},
			 beforeSend: function(){
				
				$this.val("登录中").attr('disabled');
				
				},
				
             success: function(data){
				 //设置本地sesion
                 if(data.status==1){
		              $this.val(data.info);
					  window.location='/';
					   return false;
					   
					 }else{
						 
					   $this.val(data.info);
						 return false;  
					}
             },
             error: function(){
                 alert('...');
             }
         });

			  
			
			 return false;  
		 
    });
});



</script>
</head>

<body>
<div class="navbar navbar-fixed-top" style="height:60px;">
       <div class="navbar-inner" style=" width:100%; height:72px; margin-left:-32px; border-radius:0">
        <div class="top_c" style="width:920px">
<div class="logo" style="padding-top:18px; margin-left:10px"><a href="/"><img src="/Public/img/logo.png"/></a></div>

<ul class="nav pull-right">
                              <div style=" margin-top:30px;">
                            <strong>  <a href="/Login" style="color:#F1F1F1">个人登录</a>　　<a href="http://oa.jobme.cn" style="color:#F1F1F1">猎头登陆</a>  </strong>
                              </div>
									
								</ul>








<div class="cl"></div>
</div>
      </div>
    </div>




<div style=" width:980px !important; position:relative; margin:0 auto;  height:600px; border-bottom:1px solid #ddd;">

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
<h2>个人登录　　　　　<a href="/Login/reg" style="margin-right:42px; color:#CCC">注册</a>
</h2>
<form method="post">

<table width="294" class="l-table">
<tr>
<td width="43" valign="top">
<span style="font-size:14px; color:#666;padding-top:10px; color:#666; display:block">邮箱</span>
</td>
<td width="239">
<input type="text"   name="username" placeholder="用户名/邮箱" id="username"  style="height:24px; line-height:30px; border-radius:0px" /></td>
</tr>
<tr>
<td align="left" valign="top"><span style="font-size:14px;padding-top:10px; color:#666; display:block">密码</span></td>
<td>
<input type="password" name="password"  id="password" style="height:24px; line-height:30px; border-radius:0px"  />
</td>
</tr>
</table>
<div class="bts">
<span  style="padding-top:6px;"><a href="#forgetpass" id="Fpass" data-toggle="modal" link="/Login/forget">忘记密码</a></span>
<span style="padding-top:2px"><input type="checkbox" id="remember" name="remember" value="1"/>记住我 </span><span><input type="submit" class="btn btn-primary" name="bt" id="bt" style="border-radius:0px; height:30px; line-height:20px;" value=" 登录 "/></span>
 
</div>

<div class="cl"></div>

</form>

<div style="border-bottom:1px solid #ddd; margin:0 40px"></div>

 <div style="margin-top:20px; margin-left:40px; clear:both">
<span id="qqLoginBtn"></span>  
<script type="text/javascript">  
   QC.Login({
		btnId : "qqLoginBtn",//插入按钮的html标签id
		size : "B_M",//按钮尺寸
		scope : "get_user_info",//展示授权，全部可用授权可填 all
		display : "pc"//应用场景，可选
	});
      
      
  
</script> 

</div>
</div>

<div id="msg" style="display:block; margin-top:-10px;"></div>






</div>




</div>

<div class="cl"></div>
<div id="footer">
职美网　copyright &copy; 2012-2013 <div class="rt" style="width:140px; float:right;">　京ICP备11016916号-9
</div>

</div>

<div class="modal" id="forgetpass" style="width:400px; margin-left:-200px; display:none"><img src='/images/load.gif' class='loadbig' align='center' /></div>


<script>


$("#Fpass").click(function(e) {
       
	   $("#forgetpass").load('/Login/forget');
	  
});

</script>

 <script type="text/javascript">
            var childWindow;
            function toQzoneLogin()
            {
                childWindow = window.open("/Login/qqlogin","TencentLogin","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
            } 
            
            function closeChildWindow()
            {
                childWindow.close();
            }
        </script>
</body>
</html>