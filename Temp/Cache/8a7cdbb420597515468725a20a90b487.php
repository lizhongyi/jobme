<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>提交同步登陆</title>
 <script src="../Public/js/jquery-1.7.2.js"></script> 
<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="100554737"  charset="utf-8" ></script>
 
   
    

    
    
 

   
    
	

	
</script>  
     
</head>

<body>
<span id="qqLoginBtn"></span>  
<script type="text/javascript">  
   QC.Login({
		btnId : "qqLoginBtn",//插入按钮的html标签id
		size : "B_M",//按钮尺寸
		scope : "get_user_info",//展示授权，全部可用授权可填 all
		display : "pc"//应用场景，可选
	});
      
      
  
</script> 
<div  style="width:200px; margin:0 auto; padding:18px; line-height:30px;">登陆成功!</div>

<input type="hidden1" name="nickname" id="nickname"/>
<input type="hidden1" name="openId" id="openId"/>
<input type="text"   name="accessToken" id="accessToken"/>
</body>
 
</html>