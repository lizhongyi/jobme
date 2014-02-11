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
<div class="logo"><a href="/"><img src="/Public/img/logo.png"/></a></div>


<div class="top-nav"><a href="/Job">职位信息</a>　　<a href="/Company">猎头公司</a>　　<a href="/User">用户中心</a></div>


<ul class="nav pull-right">
                                
                              
									<li class="dropdown" id="msgbar">
                                    
                                    <?php if($infoTotal != 0): ?><span class="badge badge-important" style="position:absolute; top:8px; right:0px;"><?php echo ($infoTotal); ?></span><?php endif; ?>
                                    
                                    
										 <span class='unn' style="padding-top:14px; line-height:22px;">
                                         
                            
<?php echo ($realname); ?><br>
  <a href="/User/vip"><?php echo ($level_name); ?></a>
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
<div class="" style="border-bottom:1px solid #ddd; padding-bottom:10px; margin-bottom:30px;">

<h3 class="title-big"><i class="icon-user"></i> 升级为VIP用户</h3>
</div>
<h3>VIP用户</h3>
<p style="padding-left:20px;">VIP用户收费标准为500元/年，您可以通过以下方式进行支付，支付成功，即升级为VIP用户。</p>
<p style="padding-left:20px;">&nbsp;</p>


<div class="cl"></div>


<h1>支付宝</h1>
<div class="xian"></div>
<div class="zhifubao">
<form name=alipayment action=/alipay/alipayapi.php method=post target="_blank">
            <div id="body" style="clear:left; display:none">
                <dl class="content">
                    <dt>&nbsp;</dt>
                    <dt>商户订单号：</dt>
                    <dd>
                        <span class="null-star">*</span>
                        <input size="30" name="WIDout_trade_no" value="<?php echo ($uid); ?>" />
                    </dd>
                    <dt>订单名称：</dt>
                    <dd>
                        <span class="null-star">*</span>
                        <input value="VIP用户申请" size="30" name="WIDsubject" />
                        <span>必填
</span>
                    </dd>
                    <dt>付款金额：</dt>
                    <dd>
                        <span class="null-star">*</span>
                        <input size="30"  value="0.2" name="WIDprice" />
                        <span>必填
</span>
                    </dd>
                    <dt>订单描述
：</dt>
                    <dd>
                        <span class="null-star">*</span>
                        <input size="30" value="升级为VIP用户" name="WIDbody" />
                        <span></span>
                    </dd>
                    <dt>商品展示地址：</dt>
                    <dd>
                        <span class="null-star">*</span>
                      
                        <span>需以http://开头的完整路径，如：http://www.xxx.com/myorder.html
</span>
                    </dd>
                    <dt>收货人姓名：</dt>
                    <dd>
                        <span class="null-star">*</span>
                        <input size="30" name="WIDreceive_name" value="<?php echo (gettruename($uid)); ?>" />
                        <span>如：张三
</span>
                    </dd>
                    <dt>收货人地址：</dt>
                    <dd>
                        <span class="null-star">*</span>
                        <input size="30" name="WIDreceive_address" value="北京" />
                        <span>如：XX省XXX市XXX区XXX路XXX小区XXX栋XXX单元XXX号
</span>
                    </dd>
                    <dt>收货人邮编：</dt>
                    <dd>
                        <span class="null-star">*</span>
                        <input size="30" name="WIDreceive_zip"  value="<?php echo ($uid); ?>" />
                        <span>如：123456
</span>
                    </dd>
                    <dt>收货人电话号码：</dt>
                    <dd>
                        <span class="null-star">*</span>
                        <input size="30" name="WIDreceive_phone" value="010-01010101" />
                        <span>如：0571-88158090
</span>
                    </dd>
                    <dt>收货人手机号码：</dt>
                    <dd>
                        <span class="null-star">*</span>
                        <input size="30" name="WIDreceive_mobile"  value="18601334246" />
                        <span>如：13312341234</span>
                    </dd>
					<dt></dt>
                    <dd>
                      
                    </dd>
                </dl>
            </div>  
            
            <span class="new-btn-login-sp">
                            <button class="btn new-btn-login large btn-primary " type="submit" style="text-align:center;">确认升级</button>
                        </span>
	  </form>
</div>

</div>
<div class="right">
<div class="title-big">筛选条件</div>
<div class="search">
<form name="se" id="se" method="post" action="">
<ul>
     <li>           <span class="label">地区</span>

<input type="text" name="area_cn"  id="area_cn" class="se-input area"  value="<?php echo ($_GET['area_cn']); ?>" />
<input type="hidden" name="area" id="area-val" value="<?php echo ($_GET['area']); ?>"/>
</li>

<li>           <span class="label">行业</span>

<input type="text" name="trade" id="industry_input" class="se-input industry" /></li>

<li>           <span class="label">年薪</span>
<select style="width:200px !important">
<option value="0">请选择</option>
</select>
</li>
<li>           <span class="label">关键字</span>

<input type="text" name="keyword" id="keyword" class="se-input" /></li>
<li><button class="btn  btn-primary">搜索 <i class=" icon-search"></i></button></li>
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