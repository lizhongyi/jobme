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


<div class="wp">

<div class="lt">


<div class="tab">  <a  class="tab-bar hover" href="/User/index" style="padding:1px 10px;">用户中心</a> <a  class="tab-bar " href="/User/apply" style="padding:1px 10px;">应聘的职位</a>  <a  class="tab-bar" href="/User/saved" style="padding:1px 10px;">收藏的职位</a><a  class="tab-bar" href="/User/profile_edit" style="padding:1px 10px;">基本资料</a> <a href="/Resume" class="tab-bar" style="padding:1px 10px;">完整简历</a> <div class="cl"></div> </div>
              
              
              
              
             
              
              
              
              
              
              
            <div class="cl"></div>
   
   <div class="face_box" style="padding: 0  20px  0 20px;"></div>
   
   
   
   <div class="cl"></div>
   
        
   
   
   
 
 <!------------这里面可以放一些通知--------------->
 
 <div class="cl"></div

>





<form action="/Userset/do_add" method="post" id="" name="">

<table class="table">
<tr>
<th colspan="4" align="left">
<h3><i class="icon-cog"></i> 设置</h3>
</th>
</tr>
<tr>
<td width="120" height="24" valign="middle">简历设置</td>

<td width="148" valign="middle"><input type="radio"  id="resume" name="resume"   value="1"  <?php if($dt['resume'] == 1): ?>checked<?php endif; ?>  />
  公开　　
    <input type="radio" id="resume1" name="resume" value="0"  <?php if($dt['resume'] == 0): ?>checked<?php endif; ?> />关闭</td>
<td width="153" valign="middle">&nbsp;</td>
<td width="92" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td height="24">消息提醒</td>
  <td><input type="radio" id="msg1"     <?php if($dt["msg1"] == 1): ?>checked<?php endif; ?> name="msg1" value="1"     />
    是　　　
      <input type="radio" id="gk21" name="msg1" <?php if($dt["msg1"] == 0): ?>checked<?php endif; ?> value="0"/>
      否</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td height="24">职位推荐</td>
  <td><input type="radio" id="tui" <?php if($dt["recommend"] == 1): ?>checked<?php endif; ?> name="recommend"/ value="1">
是　　　
  <input type="radio" id="tui1" <?php if($dt["recommend"] == 0): ?>checked<?php endif; ?> name="recommend"/ value="0">
  否</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td height="60">&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><br><button name="" id="" class="btn btn-primary">
  保存设置</button></td>
</tr>

 </table>
</form>
<script>

$(".readed").click(function(e) {
              
			 
			  
	      $this=$(this);
		  // alert($this.attr('link'));
		$.ajax({
			  url:$this.attr('link'),
			  type:"GET",
			  data:{},
			  beforeSend: function(){
				  
				  
				  },
			   success: function(data){
				     
					 if(data.status==1){
						 
						 $this.hide();
						 
						 }
				   
				   },
			  
			
			})
	   
	  
});

</script>
 
 
 <div class="cl"></div>
 <div style="padding-top:20px; padding-bottom:20px;">
   <div id="inform_box">
     
   </div>
                                          
    </div>

 
 
 
 
 
 


  </div>
              
              
              
              
              
              <div class="right">

               <?php echo W('rightInc');?>
              
              <div class="cl"></div>
              
   
<div class="cl"></div>
</div>
</div>


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
<div id="Upass" class="modal" style="width:400px; margin-left:-200px;">
   
   </div>
   
   <script>
     
	 $("#upa").click(function(e) {
		 
		 //alert('nihao');
         geta($("#Upass"),$(this).attr('link'),loadGif);
		  
    });
   
   </script>