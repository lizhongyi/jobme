<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html><head>
<meta charset="utf-8" />
<title><?php if($Title != ''): echo ($Title); ?>|<?php endif; ?> <?php echo (get_module($module)); ?>-<?php echo (get_action($action)); ?>|职美网-中高级人才招聘平台</title>
<meta http-equiv="description" content="职美网由北京中安智美科技有限公司开发并运营。中安智美科技有限公司是北京市东城区重点扶持的新兴产业试点单位，由招商银行提供贷款扶持，招商证券提供财务顾问服务。公司业务以互联网和物联网应用开发为主，致力于建设大型行业应用系统，目前已开发的产品有职美网、矿山安全应急指挥系统、油田监控与报警系统，并根据客户需要定制开发了多种类型的CRM管理系统，同时中安智美还对外承接大型网站设计与制作业务。"/>
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
        
       
        
</head>

<body>
<div class="navbar" style="position:fixed; width:100%; border-radius:0; z-index:999999">
      <div class="navbar-inner" style=" width:100%; height:72px; border-radius:0">
        <div class="top_c">
<div class="logo"><a href="/"><img src="/Public/img/logo.png"/></a></div>


<div class="top-nav"><a href="/Job">职位信息</a>　　<a href="/Company">猎头公司</a>　　<a href="/User">用户中心</a></div>


<ul class="nav pull-right">
                                
                              
									<li class="dropdown" id="msgbar">
                                    
                                    <?php if($infoTotal != 0): ?><span class="badge badge-important" style="position:absolute; top:8px; right:0px;"><?php echo ($infoTotal); ?></span><?php endif; ?>
                                    
                                    
										 <span class='unn' style="padding-top:14px; line-height:22px;">
                                         
                            
<?php echo ($realname); ?><br>
  <a href="/User/vip"><?php echo ($level_name); ?></a>
</span><div class="uface" style="margin-top:12px;"><a title="<?php echo ($permission_tile); ?>" href="javascript:;"   class="dropdown-toggle" data-toggle="dropdown" style="padding-bottom:2px"><img src="<?php echo (get_user_face($uid)); ?>" width="42" height="42"  /></a><ul class="dropdown-menu dropdown-user-account" style="top:70px;">  <div class="modal-header">
    
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
														<a class="btn  btn-small" href="/Login/logout"><i class="icon-signout"></i>退出</a>
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
<div class="" style="border-bottom:1px solid #ddd; margin-bottom:10px; padding-bottom:10px;">

<h3 class="title-big"><?php echo ($dt['companyname']); ?>发布的职位</h3>




</div>

<?php if(isset($jobList)): ?><table class="table job-list" width="100%">
<tr>
  <th>职位</th>
  <th>地区</th>
  <th>发布日期</th>
  <th>年薪</th>
  <th>&nbsp;</th>
</tr>
<?php if(is_array($jobList)): $i = 0; $__LIST__ = $jobList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

<td width="28%">
<span class="job_title"><a href="<?php echo U('Job/detail',array('id'=>$vo['id']));?>"><?php echo ($vo["Search_posts"]); ?></a></span>
<br />
<span class="client_name">
<?php echo get_clientname($vo['cid'],1);?>
</span>
</td>
<td width="13%"><?php echo ($vo["area_cn"]); ?></td>
<td width="24%"><?php echo (date('Y-m-d',$vo["create_time"])); ?></td>
<td width="21%"><span class="pay"><span class="pay"><?php echo ($vo["payment"]); ?><span style="font-family:'宋体'"> -</span> <?php echo ($vo["payment1"]); ?>万元</span></span></td>
<td width="14%">
<?php if($vo['sed'] == 0): ?><button link="/Save/add" gid="<?php echo ($vo['id']); ?>" jobname="<?php echo ($vo['Search_posts']); ?>" class="btn apply_saved" >收藏</button>



<?php else: ?>

<a class="btn  apply_bt btn-success" href="/Job/detail/id/<?php echo ($vo['id']); ?>" >详情 </a><?php endif; ?>
</td>
<tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
<th colspan="5" style="padding-left:300px;">

<?php echo ($pageBar); ?>

</th>
</tr>
</table>

<?php else: ?>

<div class=" nodata alert">
暂时没有职位！

</div><?php endif; ?>
</div>
<div class="right">
<div class="title-big">筛选条件</div>
<div class="search">
<form name="se" id="se" method="get" action="">
<ul>
     <li>           <span class="label">地区</span>

<input type="text" name="area_cn"  id="area_cn" class="se-input area"  value="<?php echo ($_GET['area_cn']); ?>" />
<input type="hidden" name="area" id="area-val" value="<?php echo ($_GET['area']); ?>"/>
</li>

<li>           <span class="label">行业</span>

<input type="text" name="trade_cn" id="industry_input" class="se-input industry"  value="<?php echo ($_GET['trade_cn']); ?>" />


<input id="industry-val" name="trade" type="hidden"   value="<?php echo ($_GET['trade']); ?>"/>

</li>

<li>           <div class="label" style=" width:25px; padding:3px 5px">年薪</div>

<input  class="span1" type="text" name="payment" id="payment" style="width:50px; float:left;" value="<?php echo ($_GET['payment']); ?>">

<input type="text" style="width:20px; float:left; border:0px; " value="至" /><input  type="text" class="span1" style="width:50px; float:left;" name="payment1" id="payment1" value="<?php echo ($_GET['payment1']); ?>"><span style="width:50px; text-align:center; line-height:30px; float:left">万元</span><div style="clear:both"></div>
</li>
<li>           <span class="label">关键字</span>

<input type="text" name="keyword" id="keyword" class="se-input" value="<?php echo ($_GET['keyword']); ?>" /></li>
<li><button class="btn  btn-primary">搜索 <i class=" icon-search"></i></button> <a href="/Job">　清空条件</a></li>


<?php if($ct != ''): ?><li><input type="button"  id="save_sc" val='<?php echo ($ct); ?>' class="btn" value="保存条件"/></li><?php endif; ?>
</ul>
</form>
</div>

</div>
<div class="cl"></div>
</div>
<script src="../Public/js/industry.js"></script>
<div class="hangye-box tan-box">

 <script id="hangye" type="text/html">
    <div class='h-title'>请选择行业<a href='javascript:void(0)' class='close'>关闭</a></div>
	<form id='hang-f'>
     <ul>
    <% for (var i = 0; i < list.length; i ++) { %>
<%  if (list[i].parentid ==0) { %><li data-id='<%= list[i].id%>' ><img src="../Public/images/left_e.gif" border="0" align="absmiddle" id="5" class="h-leftimg pointer"><span class='big-cate' data-text='<%=list[i].categoryname%>' hid='<%=list[i].id%>'><%=list[i].categoryname%></span> <dl> <% for (var j = 0; j < list.length; j ++) { %><% if(list[j].parentid ==list[i].id ) {%><dd> 
<span class="small-cate"  data-text='<%=list[i].categoryname%> / <%=list[j].categoryname%>' hid='<%=list[j].id%>'><%= list[j].categoryname %></span> </dd><%}else {%><% } %><%  }%>
</dl></li><% } %> <% } %>
</ul>
<button type="button" class="btn hy-queding" style="display:none">确定</button>
<button type="reset" class='reset' style="display:none">重置</button> 
</form>
</script>

                    
                    
<script>
 
  
 html = template.render('hangye', {
	list:industry
});
$('.industry').live("focus","click",function(e) {
    
	  $(".tan-box").hide();
	$(".hangye-box").show().css({'top':$(this).parent().offset().top+50+"px",'left':$(this).parent().offset().left-200+'px','z-index':'999993'});
	
});



$(".hangye-box").html(html);
           $(".hangye-box ul li img").click(function(e) {
			    $(".hangye-box ul li dl").hide();
				$(".h-leftimg").attr('src','../Public/images/left_e.gif');
                if($(this).attr('src')=='../Public/images/left_e.gif'){
					 $(this).parent().find("dl").show();
					 $(this).attr('src','../Public/images/left_d.gif');
					}else{
						$(this).parent().find("dl").hide();
						$(this).attr('src','../Public/images/left_e.gif');
						}
	    
});

$(".hangye-box ul li input:radio").live("click",function(e) {
    
	$(".hy-queding").attr('text',$(this).attr('data-text'));
	$(".hy-queding").attr('hid',$(this).val());
	
});

$(".hangye-box ul li span.big-cate").click(function(e) {
	
    $(".hangye-box ul li dl").hide(); 
	 
	$(".hy-queding").attr('text',$(this).attr('data-text'));
	$(".hy-queding").attr('hid',$(this).attr('hid'));
	$(".hy-queding").click();
	
	
});


$(".hangye-box ul li span.small-cate").click(function(e) {
    //$(".hangye-box ul li dl").hide(); 
	
	$(".hy-queding").attr('text',$(this).attr('data-text'));
	$(".hy-queding").attr('hid',$(this).attr('hid'));
	$(".hy-queding").click();
	
});



$(".h-s").click(function(e) {
      
	  
	$(".hangye-box ul li dl").hide(); 
	  
});
$(".hangye-box a.close").click(function(e) {
    
	$(".hangye-box").hide();
	$(".reset").click();
	$(".hangye-box ul li dl").hide();
	
});
$(".hy-queding").live("click",function(e) {
    $("#industry_input").val($(this).attr('text'));
	 $("input#industry-val").val($(this).attr('hid'));
	$(".hangye-box").hide();
	$(".reset").click();
	$("#industry_input").focus();
	$(".hangye-box ul li dl").hide();
});
$(document).click(function(e) {
    
	if(e.target.className.indexOf('industry') != -1 || e.target.className.indexOf('h-leftimg') != -1){
		$(".hangye-box").show(); 
		}else{
			$(".hangye-box").hide();
			$(".hangye-box ul li dl").hide();
			$(".h-leftimg").attr('src','../Public/images/left_e.gif')
			}
	
});
</script>
<div align="right" style="padding:15px; padding-right:50px;">
<div class="cl"></div>

</div>
</div>

        <!--调用地区模板--->
       <script src="../Public/js/area.js"></script>
<div class="area-box tan-box">

 <script id="diqu" type="text/html">
    <div class="h-title">请选则地区<a href='javascript:void(0)' class='close'>关闭</a></div>
	<form id="area-f">
     <ul>
    <% for (var i = 0; i < list.length; i ++) { %>
<%  if (list[i].parentid ==0) { %><li data-id='<%= list[i].id%>'>
<img src="../Public/images/left_e.gif" border="0" align="absmiddle" id="5" class="a-leftimg pointer"><span class='big-cate' data-text='<%=list[i].categoryname%>' class='h-s' hid='<%=list[i].id%>'><%=list[i].categoryname%></span>
 <dl> <% for (var j = 0; j < list.length; j ++) { %><% if(list[j].parentid ==list[i].id ) {%><dd><span class='small-cate' data-text='<%=list[i].categoryname%> / <%=list[j].categoryname%>' hid='<%=list[j].id%>' ><%= list[j].categoryname %> </dd><%}else {%><% } %><%  }%>
</dl></li><% } %> <% } %>
</ul>
<button type="reset" class='reset' style="display:none">重置</button> 
</form>
</script>

                    
                    
<script>
 
  
 html = template.render('diqu', {
	list:area
});
$('.area').live("focus","click",function(e) {
      
	 $(".tan-box").hide();
	// alert($(this).parent());
	 $(".area-box").show().css({'top':$(this).parent().offset().top+50+"px",'left':$(this).parent().offset().left-102+'px','z-index':'999993'});
	
});

$(".area_1").live("click",function(){
	 
	 $(".area").focus();
	
	});



$(".area-box").html(html);



           $(".area-box ul li img").click(function(e) {
			   $(".area-box ul li").find("dl").hide();
			  $(".h-leftimg").attr('src','../Public/images/left_e.gif');
               if($(this).attr('src')=='../Public/images/left_e.gif'){
					 $(this).parent().find("dl").show();
					 $(this).attr('src','../Public/images/left_d.gif');
					}else{
						$(this).parent().find("dl").hide();
						$(this).attr('src','../Public/images/left_e.gif');
						}
				
	        
});






$(".area-box ul li span.big-cate").click(function(e) {
	
    $(".area-box ul li dl").hide(); 
    $(".area-queding").attr('text',$(this).attr('data-text'));
	$(".area-queding").attr('hid',$(this).attr('hid'));
	$(".area-queding").click();
	
	
});


$(".area-box ul li span.small-cate").click(function(e) {
    //$(".hangye-box ul li dl").hide(); 
	
	$(".area-queding").attr('text',$(this).attr('data-text'));
	$(".area-queding").attr('hid',$(this).attr('hid'));
	$(".area-queding").click();
	
});


$(".h-s").click(function(e) {
     
	$(".area-box ul li dl").hide(); 
	  
});
$(".area-box a.close").click(function(e) {
    
	$(".area-box").hide();
	$(".reset").click();
	$(".area-box ul li dl").hide();
	
});
$(".area-queding").live("click",function(e) {
    $("input.area").val($(this).attr('text'));
	$("input#area-val").val($(this).attr('hid'));
	$(".area-box").hide();
	$(".reset").click();
	$("input.area").focus();
	$(".area-box ul li dl").hide();
});

$(document).click(function(e) {
    
	if(e.target.className.indexOf('area') != -1 || e.target.className.indexOf('a-leftimg') != -1){
		$(".area-box").show(); 
		}else{
			$(".area-box").hide();
			$(".area-box ul li dl").hide();
			$(".a-leftimg").attr('src','../Public/images/left_e.gif')
			}
	
});
</script>
<div align="right" style="padding:15px; padding-right:50px;">
<div class="cl"></div>
<button type="button" class="btn area-queding" style="display:none">确定</button>
</div>
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