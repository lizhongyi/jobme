<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html><head>
<meta charset="utf-8">
<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="1101083455" data-redirecturi="http://www.jobme.cn/Login/back" charset="utf-8" ></script>
<meta property="qc:admins" content="1411267112627255636" />
<title>无标题文档</title>



<script type="text/javascript">  
//从页面收集OpenAPI必要的参数。get_user_info不需要输入参数，因此paras中没有参数  
var paras = {};  
  
//用JS SDK调用OpenAPI  
QC.api("get_user_info", paras)  
    //指定接口访问成功的接收函数，s为成功返回Response对象  
    .success(function(s){  
        //成功回调，通过s.data获取OpenAPI的返回数据  
        alert("获取用户信息成功！当前用户昵称为："+s.data.nickname);  
    })  
    //指定接口访问失败的接收函数，f为失败返回Response对象  
    .error(function(f){  
        //失败回调  
        alert("获取用户信息失败！");  
    })  
    //指定接口完成请求后的接收函数，c为完成请求返回Response对象  
    .complete(function(c){  
        //完成请求回调  
        alert("获取用户信息完成！");  
    });  
</script>  


<script type="text/javascript">  
if(QC.Login.check()));  
    //这里可以调用自己的保存接口  
    //...  
}  
</script> 
</head>

<body>
是的你已经登录了
</body>
</html>