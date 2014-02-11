<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html><head>
<meta charset="utf-8" />
<title><?php if($Title != ''): echo ($Title); ?>|<?php endif; ?> <?php echo (get_module($module)); ?>-<?php echo (get_action($action)); ?>|职美网-中高级人才招聘平台</title>
<meta property="qc:admins" content="1411267112627255636" />
<meta http-equiv="description" content="职美网由北京中安智美科技有限公司开发并运营。中安智美科技有限公司是北京市东城区重点扶持的新兴产业试点单位，由招商银行提供贷款扶持，招商证券提供财务顾问服务。公司业务以互联网和物联网应用开发为主，致力于建设大型行业应用系统，目前已开发的产品有职美网、矿山安全应急指挥系统、油田监控与报警系统，并根据客户需要定制开发了多种类型的CRM管理系统，同时中安智美还对外承接大型网站设计与制作业务。"/>
<meta http-equiv="keywords" content="北京猎头服务，北京人才招聘，北京企业招聘"/>
<link rel="stylesheet" type="text/css" href="../Public/css/bp.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/bp-r.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/css.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/docs.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/style.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/diy.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/jquery-ui.css" />

<link rel="stylesheet" type="text/css" href="../Public/css/bangzhu.css" />

        <link href="favicon.ico" rel="shortcut icon" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../Public/assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../Public/assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../Public/assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../Public/assets/ico/apple-touch-icon-57-precomposed.png">
  

     <script src="../Public/js/jquery-1.7.2.js"></script>
 
     <script src="../Public/js/bootstrap.js"></script>
     <script src="../Public/js/jquery-ui-1.10.2.custom.min.js"></script>
     <script src="../Public/js/artTemplate.js"></script>
     <script src="../Public/js/array.js"></script>
       <script src="../Public/js/functions.js"></script>
        <script src="../Public/js/custom.js"></script>
        <script src="../Public/js/industry.js"></script>
         <script src="../Public/js/cate_job.js"></script>
        <script src="../Public/js/bootstrap-popover.js"></script>
          <script src="../Public/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" ></script>
        
     
       
        
</head>

<body>
<div class="navbar" style="position:fixed; width:100%; border-radius:0; z-index:999999">
      <div class="navbar-inner" style=" width:100%; height:72px; margin-left:-32px; border-radius:0">
       <div class="top_c" style="width:920px; margin:0 auto">
<div class="logo" style="margin-left:10px;"><a href="javascript:history.go(-1)"><img src="/Public/img/logo.png"/></a></div>






                                
                                <div class="cl"></div>

</div>
      </div>
    </div>


<div class="wp">

<div class="lt">
<div class="" style="border-bottom:0px solid #ddd; padding-bottom:10px;">



<div class="ft">

<span class="title-big"><?php echo ($vo['Search_posts']); ?> <span class="huise" style="font-size:14px;">（<?php echo get_clientname($vo['cid']);?>）</span>　</span>

</div>


<div class="rt" style="padding-top:10px; text-align:right; color:#999">发布日期：<?php echo (date('Y-m-d',$vo['create_time'])); ?></div><div class="cl"></div>
</div>
<div class="job_detail" style="position:relative;">





<ul>
<li><span class="label">薪资待遇：</span><?php echo ($vo['payment']); ?>~<?php echo ($vo['payment1']); ?>万元</li>
<li> <span class="label">工作地区：</span><?php echo ($vo['area_cn']); ?></li>
<li> <span class="label">性别要求：</span> <?php echo ($vo['sex']); ?></li>
<li> <span class="label">所属行业：</span><?php echo ($client['trade_cn']); ?> </li>

<li><span class="label">招聘人数： </span> <?php echo ($vo['hr_num']); ?></li>


<li><span class="label">开始日期： </span> <?php echo (date('Y-m-d',$vo['start_time'])); ?></li>

<li><span class="label">结束日期： </span> <?php if($vo['end_time'] != 0): echo (date('Y-m-d',$vo['end_time'])); else: ?>长期<?php endif; ?></li>
<div class="cl"></div>

</ul>
<div class="btl-small">
职位描述
</div>
<p><?php echo (nl2br($vo['job_descriptions'])); ?></p>
<div class="btl-small">任职要求</div>
<p><?php echo (nl2br($vo['job_requirements'])); ?></p>
<div class="btl-small">企业信息</div>
<ul>
<li><span class="label">企业名称：</span> <?php echo ($client['company_name']); ?></li>
<li><span class="label">企业性质：</span>  <?php echo ($select['nature'][$client['nature']]); ?></li>
<li><span class="label">企业规模：</span> <?php echo ($select['scale'][$client['scale']]); ?></li>
<li><span class="label">所属行业：</span><?php echo ($client['trade_cn']); ?></li>
<li>
<span class="label">企业简介：</span></li>
<li>　　</li>
<li style="width:520px;">
<?php echo ($client['content']); ?></li>
<div class="cl"></div>
</ul>
</div>
<div class="btl-small" style="padding:15px; padding-bottom:20px;">　</div>
<span class="title-big">相关职位</span>
</div>


<div class="right">
<div class="title-big">发布人</div>
<!--hunterinfo-->
<div class="hunter-info">
<div class="h-face"><a href="/Hunter/detail/id/<?php echo ($ht['uid']); ?>"><img src="<?php echo (get_ht_face($vo['uid'])); ?>" width="100" height="100" style="border:1px solid #ddd" /></a></div>
<div class="h-name" style="line-height:24px;">
<a href="/Hunter/detail/id/<?php echo ($ht['uid']); ?>"><?php echo (gettruename($vo['uid'])); ?></a><br />

<span style="font-size:14px;">(高级顾问)</span><br>
<?php if($vo['aped'] == 1): ?><a href="#msgbox" style="margin-top:16px;" data-toggle="modal" class="sms-add btn btn btn-info" uid="<?php echo ($vo['uid']); ?>">咨询</a><?php endif; ?>
</div>
<div class="cl"></div>

<p style="line-height:32px;">
<span class="label">所在公司：</span>　
<a href="/Hunter/detail/id/<?php echo ($ht['uid']); ?>" title="<?php echo ($com['companyname']); ?>"><?php echo (msubstr($com['companyname'],0,8)); ?></a><br />
<span class="label">擅长行业：</span>　<?php echo ($ht['shanchang']); ?>
<div class="cl"></div>

</p>
<div class="xian"></div>
<?php echo W('rightInc');?>
</div>
<div class="cl"></div>

</div>














</div>
<div class="cl"></div>
</div>
 <div class="modal" id="msgbox"></div>
 <div id="footer">
 <div class="zuo" style="width:480px;">
职美网
 </div>
 <div class="rt" style="width:340px;">
 <a href="/About">关于我们</a> · <a href="/About/contact">联系我们</a> · <a href="/About/feedback"> 建议反馈</a>　京ICP备11016916号-9

 </div>
 <div class="cl"></div>
 </div>
 
 
 </body>
 <script>
 
 $(".sms-add").click(function(e) {
     geta($("#msgbox"),'/Usermsg/add/ajax/1/uid/'+$(this).attr('uid'),loadGif);
	  
});
 </script>
 </html>


<div class="modal" id="apply_box" style="width:400px; margin-left:-200px;">

</div>


<script>

 $(".unsave").click(function(e) {
    
	   var $this=$(this);
	 
	var del=function(){
		     
			$this.text("收藏职位")
			
			window.location="";
		   
		} 
	 
	ajaxfun($this.attr('link'),'',$this,del)
	 
	 
	 
});






 $(".save_bt").click(function(e) {
    
	    $this=$(this);
		
	  $.ajax({
		  
		     url:'/Saved/add',
			 type:'POST',
			 data:{gid:$this.attr("gid"),jobname:$this.attr('jobname')},
			 beforeSend: function(){
				  $this.text("...");
				 
				 },success: function(data){
					   
					   if(data.status==1){
						   
						   
						    $this.text("取消收藏");
							//$this.attr("link","/Saved/delete/id/"+$this.attr("gid")+"/ajax/1").removeClass('save_bt').addClass('unsave');
							//$this="";
							
							window.location="";
						   }else{
							    $this.text(data.info);
							   
							   }
					  
					 }
		  
		  });
	 
	 
	 
});

$("xx").click(function(e) {
       
	   $("yy").height(300).siblings().height(800);
	   
});

</script>