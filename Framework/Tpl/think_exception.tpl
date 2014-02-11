<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>系统发生错误</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
html{ overflow-y: scroll; }
body{ background: #F7F7F7; font-family: '微软雅黑'; color: #333; font-size: 16px; }
img{ border: 0; }
.error{ padding: 24px 48px; margin:0 auto; margin-top:30px; width:400px; text-align:center; border:1px solid #ddd; background:#FFF}
.face{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
h1{ font-size: 32px; line-height: 48px; }
.error .content{ padding-top: 10px}
.error .info{ margin-bottom: 12px; }
.error .info .title{ margin-bottom: 3px; }
.error .info .title h3{ color: #000; font-weight: 700; font-size: 16px; }
.error .info .text{ line-height: 24px; }
.copyright{ padding: 12px 48px; color: #999; }
.copyright a{ color: #000; text-decoration: none; }
</style>
</head>
<body>
<div class="error">
<h1>404</h1>
<h4>你可能进入了一片荒原</h4>
<p class="message"><?php echo strip_tags($e['message']); 
?></p>
<div class="content">
<a href="/">我要回去</a>
<?php if(isset($e['file'])) {?>
	<div class="info">
		
		<div class="text">
			
		</div>
	</div>
<?php }?>
</div>
</div>
</body>
</html>