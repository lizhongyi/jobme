<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html><head>
<meta charset="utf-8" />
<title><?php if($Title != ''): echo ($Title); ?>|<?php endif; ?> <?php echo (get_module($module)); ?>-<?php echo (get_action($action)); ?>|职美网-中高级人才招聘平台</title>

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
      <div class="navbar-inner" style=" width:100%; height:72px; border-radius:0">
        <div class="top_c">
<div class="logo" style=" margin-left:-30px;"><a href="/"><img src="/Public/img/logo.png"/></a></div>


<div class="top-nav"><a href="/Job">职位信息</a>　　　<a href="/User">用户中心</a></div>


<ul class="nav pull-right">
                                
                              
									<li class="dropdown" id="msgbar">
                                    
                                    <?php if($infoTotal != 0): ?><span class="badge badge-important" style="position:absolute; top:8px; right:0px;"><?php echo ($infoTotal); ?></span><?php endif; ?>
                                    
                                    
										 <span class='unn' style="padding-top:14px; line-height:22px;">
                                         
                            
<?php echo ($realname); ?><br>
 <!-- <a href="/User/vip"><?php echo ($level_name); ?></a>-->
</span><div class="uface" style="margin-top:12px;"><a title="<?php echo ($permission_tile); ?>" href="javascript:;"   class="dropdown-toggle" data-toggle="dropdown" style="padding-bottom:2px"><img id="face" src="<?php echo (get_user_face($uid)); ?>" width="42" height="42"  /></a><ul class="dropdown-menu dropdown-user-account" style="top:70px;">  <div class="modal-header">
    
    <h3>系统通知</h3>
    
  </div>
    <div id="messages">
                                           
                                           <div class="btn-boxed-panel small">
												<ul class ="btn-circle inform-list">
													<li style="cursor:pointer" class="inform-bar" link='/Inform/candidate/ajax/1'></li>  
                                                        
                                                          <li style="cursor:pointer" class="inform-bar" link='/Sinform/index/ajax/1'>
                                                          
                                                          <img src="../Public/images/icons/file-sharing.png" style="width:60px; height:60px; border-radius:0px; padding:2px;" />
                                                         
                                                         
                                                         <?php if($work_inform != 0): ?><span class="badge badge-important"><?php echo ($work_inform); ?></span><?php endif; ?><span class="badge" style="top:50px; width:50px;">职位通知</span>
                                                          
                                                    </li>
                                                    
                                                   
													<li style="cursor:pointer" class="inform-bar" id="sms" link='/Usermsg/index'><img src="../Public/images/icons/personal-messages.png" style="width:60px; height:60px; padding:2px;"  /><?php if($sixin != 0): ?><span class="badge badge-important"><?php echo ($sixin); ?></span><?php endif; ?><span class="badge" style="top:50px; width:50px;">私信</span></li> 
                                                    
                                                    
												
                                                   
												</ul>
                                                	<!-- ** alert message ** -->
								
									
								<!-- ** ./ alert message ** -->

											</div>
                                          
                                          <div id="inform_box">
                                          
                                          </div>
                                          
                                           </div>
                                       
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                       
                                           
                                         <li class="account-footer">
												<div class="row-fluid">
													<div class="span8">
														<a onClick="javascript:QC.Login.signOut()" class="btn  btn-small" href="/Login/logout"><i class="icon-signout"></i>退出</a>
													</div>
													<div class="span4 align-right">
                                                    
                                                   
														<a class="btn btn-primary btn-small" id="zhidaole" href="/User">用户中心</a>
													</div>
												</div>									
											</li>
										</ul></div>
                                    
										
									</li>
								</ul>
                                
                                <div class="cl"></div>

</div>
      </div>
    </div>
<div style="height:100px;"></div>

<style>

.job_detail ul li{ width:320px; float:left;}

</style>
<div class="wp">

<div class="lt" style="width:880px;box-shadow:none">
<div class="tab" style="margin-bottom:15px;"><a  class="tab-bar" href="/User/index" style="padding:1px 10px;">用户中心</a> <a  class="tab-bar " href="/User/apply" style="padding:1px 10px;">应聘的职位</a>  <a  class="tab-bar" href="/User/saved" style="padding:1px 10px;">收藏的职位</a> <a  class="tab-bar" href="/User/profile_edit" style="padding:1px 10px;">基本资料</a> <a class="tab-bar hover" style="padding:1px 10px;" href="/Resume">完整简历</a> </div>

<div style="padding:30px; padding-top:0px; margin-top:0px;">
  
      <div class="job_detail">
<div class="btl-small">
<strong>基本信息</strong><span class="btn btn-mini btn-primary" style="float:right; margin-top:5px;"><a href="#exbox" class="set_a" link="/Resume/profile" data-toggle="modal">  <i class="icon-edit"></i>  编辑 </a></span>
</div>
<ul>
<li><span class="label">真实姓名：</span><?php echo ($dt['realname']); ?></li>
<li> <span class="label">性别：</span><?php if($dt['sex'] == 1): ?>男<?php else: ?>女<?php endif; ?></li>
<li> <span class="label">出生日期：</span> <?php echo ($dt['age']); ?></li>
<li> <span class="label">婚姻状况：</span>
<?php if($dt['marriage'] == 1): ?>未婚<?php else: ?>已婚<?php endif; ?>
 </li>

<li><span class="label">最高学历： </span> <?php echo ($select['education'][$dt['education']]); ?></li>
<li><span class="label">手机号码： </span> <?php echo ($dt['phone']); ?></li>



<li><span class="label">　E-mail： </span> <?php echo ($dt['email']); ?></li>
<li><span class="label">通讯地址： </span> <?php echo ($dt['addr']); ?></li>
<div class="cl"></div>

</ul>
<div class="btl-small">
<strong>教育经历</strong><span class="btn btn-mini btn-primary" style="float:right; margin-top:5px;"><a href="#mbox" class="set_a" link="/Resume_edu/add/resume_id/<?php echo ($dt['uid']); ?>" data-toggle="modal"> <i class="icon-plus"></i> 新增 </a></span>
</div>
<p><?php if(isset($dt['edu'])): ?><table width="800" class="table"  style="border-top:0px !important; margin-top:-16px;" align="center">

      <?php if(is_array($dt['edu'])): $i = 0; $__LIST__ = $dt['edu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td width="220" valign="middle"><?php echo (date('Y-m-d',$vo['start_time'])); ?>　至　<?php echo (date('Y-m-d',$vo['end_time'])); ?></td>
    <td width="118" valign="middle"><?php echo ($vo['title']); ?></td>
    <td width="194" valign="middle" style="word-break:keep-all"><?php echo ($vo["major"]); ?></td>
    <td width="146" valign="middle">　<?php echo (get_e($vo['degree'])); ?> </td>
    <td width="98" valign="middle">　　<a style="float:right;"  class="del-a set_a" href="javascript:;" link="/Resume_edu/delete/id/<?php echo ($vo['id']); ?>">删除</a><a href="#mbox" class="set_a" data-toggle="modal" link="/Resume_edu/edit/id/<?php echo ($vo['id']); ?>">编辑</a></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<?php else: ?>

<div class="notdata">暂时没有数据！</div><?php endif; ?>


</p>


<div class="btl-small"><span class="btn btn-mini btn-primary" style="float:right; margin-top:5px;"><a href="#mbox" class="set_a" link="/Resume/zhiye/resume_id/<?php echo ($dt['uid']); ?>" data-toggle="modal">  <i class="icon-edit"></i>  编辑 </a></span><strong>职业技能</strong></div>

<?php if($ex['skills'] != ''): ?><p><?php echo (nl2br($ex['skills'])); ?></p>

<?php else: ?>

<p>暂未填写职业技能</p><?php endif; ?>

<div class="btl-small"><span class="btn btn-mini btn-primary" style="float:right; margin-top:5px;"><a href="#mbox" class="set_a" data-toggle="modal" link="/Resume_work/add/resume_id/<?php echo ($dt['uid']); ?>"> <i class="icon-plus"></i>  新增 </a></span><strong>工作经验</strong></div>


<p>
<?php if(isset($dt['work'])): ?><table width="800" class="table  " align="center" style="margin-top:-16px;">
  <?php if(is_array($dt['work'])): $i = 0; $__LIST__ = $dt['work'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td width="216" valign="top"><?php echo (date('Y-m-d',$vo['start_time'])); ?>　至　<?php echo (date('Y-m-d',$vo['end_time'])); ?></td>
      <td valign="middle" style="line-height:32px;"><?php echo ($vo['title']); ?><strong><span class="description">　　
        <?php echo ($vo["post"]); ?>　<br>
        工作职责:</span></strong><span class="description">　<br>
        <?php echo (nl2br($vo['duty'])); ?></span></td>
      <td width="88" valign="middle">　　<a style="float:right;"  class="del-a set_a" href="javascript:;" link="/Resume_work/delete/id/<?php echo ($vo['id']); ?>">删除</a><a href="#mbox" class="set_a" data-toggle="modal" link="/Resume_work/edit/id/<?php echo ($vo['id']); ?>">编辑</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<?php else: ?>

<div class="nodata">没有填写工作经验</div><?php endif; ?>
</p>



<div class="btl-small"><span class="btn btn-mini btn-primary" style="float:right; margin-top:5px;"><a href="#mbox" class="set_a" link="/Resume/xiangmu/resume_id/<?php echo ($dt['uid']); ?>" data-toggle="modal">  <i class="icon-edit"></i>  编辑 </a></span><strong>项目经验</strong></div>



<?php if($ex['xiangmu'] != ''): ?><p><?php echo (nl2br($ex['xiangmu'])); ?></p>

<?php else: ?>

<p>暂未填写项目经验！</p><?php endif; ?>




<div class="btl-small"><span class="btn btn-mini btn-primary" style="float:right; margin-top:5px;"><a href="#mbox" class="set_a" link="/Resume/edit/resume_id/<?php echo ($dt['uid']); ?>" data-toggle="modal">  <i class="icon-edit"></i>  编辑 </a></span><strong>求职意向</strong></div>
<ul>
  <li><span class="label">期望职位：</span>  <?php echo ($ex['post_cn']); ?></li>
<li><span class="label">期望行业：</span> <?php echo ($ex['trade_cn']); ?></li>

<li>
<span class="label">期望薪资：</span><?php if($ex['payment'] != 0): echo ($ex['payment']); ?>（万）年薪<?php endif; ?></li>

<div class="cl"></div>
</ul>






<div class="btl-small"><span class="btn btn-mini btn-primary" style="float:right; margin-top:5px;"><a href="javascript:;" id="yu-a" class="set_a" >  <i class="icon-edit"></i>  编辑 </a></span><strong>语言能力</strong></div>
<div class="yuyan">
<p>
<label><?php if($ex['yuyan'] != ''): echo ($ex['yuyan']); else: echo ($ex['qita']); endif; ?></label>
</p>
</div>

<div class="yu" style="display:none">
     <label class="control-label span2" style="width:64px;">语言能力</label>
                  <select id="yuyan" name="yuyan" class="span2">
                   
                   <option value="英语" <?php if($ex['yuyan'] == '英语'): ?>selected<?php endif; ?> >英语</option>
                   <option value="法语"  <?php if($ex['yuyan'] == '法语'): ?>selected<?php endif; ?>>法语</option>
                   <option value="俄语" <?php if($ex['yuyan'] == '俄语'): ?>selected<?php endif; ?> >俄语</option>
                   <option value="日语" <?php if($ex['yuyan'] == '日语'): ?>selected<?php endif; ?> >日语</option>
                   <option value="阿拉伯语" <?php if($ex['yuyan'] == '阿拉伯语'): ?>selected<?php endif; ?>>阿拉伯语</option>
                   <option value="其他" <?php if($ex['yuyan'] == '阿拉伯语'): ?>selected<?php endif; ?> >其他</option>
                  
                  </select>
                  <input type="hidden" name="uid" id="uid" value="<?php echo ($ex['uid']); ?>"  />
                  <input type="text" name="qita" id="yuyuan1" value="<?php echo ($ex['qita']); ?>"  class="span2" style=" display:none;  margin-left:8px;"/><input type="button" class="span1 btn btn-primary" id="y-bt" style="margin-top:-9px; margin-left:8px;" value="保存"/>
</div>



            
            
            
            </div>


</div>
</div>
<div class="cl"></div>
</div>

<div class="cl"></div>
</div>
 <div class="modal" id="msgbox"></div>
 <div id="footer" style="width:920px;">
 <div class="zuo" style="width:320px;">
<a href="/">职美网</a>
 </div>
 <div class="rt" style="width:420px; text-align:right">
 <a href="/About">关于我们</a> · <a href="/About/contact">联系我们</a> · <a href="/About/feedback"> 建议反馈</a> · <a href="/help.html"> 帮助中心</a>　京ICP备11016916号-9

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

<div class="modal" id="mbox" style="width:700px; margin-left:-350px;">


</div>


<div class="modal" id="exbox" >


</div>
     
   <script>
         
		 $(".set_a").click(function(e) {
              
			geta($($(this).attr('href')),$(this).attr('link'),loadGif);	 
			   
        });
   
   
   
   
   
   
   $(".del-a").click(function(e) {
                 
				  if(window.confirm('您确定删除么')){
					    
						
						
					
					    $this=$(this);
					   $.ajax({
						      
							   url:$this.attr('link'),
							   type:"GET",
							   data:{},
							   beforeSend: function(){},
							   success:function(data){
								      
								      if(data.status==1){
										 
										 msg("")
										  
										  setTimeout(function(){
											   
											    window.location.reload();
											  
											  },2000)
										 
										  }else{
									      show_stack_bar_top('error',data.info,'');
											 }
								    
								   },
						   
						   });
					
					
					
					}else{
						   
						   return false;
						
						}
				 
            });
			
   
   
   
   
   
   
   </script>   
  
         <script>
		
		
		$("#yu-a").click(function(e) {
            
			$(".yu").toggle();
			$(".yuyan").toggle();
			 
        });
		
		 
		 $("#yuyan").change(function(e) {
    
	 
	 if($("#yuyan").val()=="其他"){
		    
			$("#yuyuan1").show();
		 
		 }else{
			 $("#yuyuan1").hide().val("");
			 }
		 
	
	
}); 

   //下面是保存语言能力的ajax
   
    $("#y-bt").click(function(e) {
        
		  $.ajax({
			    
				url:'/Resume/do_yuyan',
				type:"POST",
				data:{yuyan:$("#yuyan").val(),qita:$("#qita").val(),uid:$("#uid").val()},
				beforeSend: function(){
					
					},
				success: function(data){
					    
						if(data.status==1){
							
							   window.location.reload();
							
							}else{
								  
								  alert("保存失败");
								
								}
					 
					}
			     
			  
			  });
		  
    });

		
		</script>