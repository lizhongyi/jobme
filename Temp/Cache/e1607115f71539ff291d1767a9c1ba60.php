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

<div class="lt" style="width:840px; box-shadow:none">
<div class="tab"><a  class="tab-bar " href="/User/index" style="padding:1px 10px;">用户中心</a> <a  class="tab-bar " href="/User/apply" style="padding:1px 10px;">应聘的职位</a>  <a  class="tab-bar" href="/User/saved" style="padding:1px 10px;">收藏的职位</a> <a  class="tab-bar hover" href="/User/profile_edit" style="padding:1px 10px;">基本资料</a> <a class="tab-bar" style="padding:1px 10px;" href="/Resume">完整简历</a> </div>

<div style="padding:30px; position:relative">

<div class="face-box1">

<script src="/Public/css/jquery-clip.min.js"></script>



<div class="upface" style=" padding-left:0px; position:absolute; width:500px; right:0px;">

<form  target="hidden_frame" action="<?php echo U('User/upFace');?>" id="upt" method="post" encType="multipart/form-data">
<div class="sface" style="margin-left:290px;">
 <img id="faceimg" src="<?php echo (get_user_face($pr['uid'])); ?>" width="180" height="180" />
 
 
<span id="sbt">修改头像</span>


<a href="#upPass"  link="/User/upPass"></a>
<!--[if !IE]><!-->
<input  type="file" name="attach_file" id="upl" style="width:180px; height:180px; position:absolute; -moz-opacity:0;
      -khtml-opacity: 0;  
      top:0;opacity: 0; border:1px solid #ddd; z-index:99999" />
     <!--<![endif]-->
     
     <!--[if gt IE 5.5]>
<input  type="file" name="attach_file" id="upl"  style=" position:absolute;  width:110px; height:80px; margin-left:-119px;filter:alpha(opacity=0)"  />
  <![endif]-->
</div> 

</form>
<div class="upform">

  

   <iframe name='hidden_frame' id="hidden_frame"  style='display:none'></iframe>   
</div>
</div>





<ul id="cbox" style="display:none; width:450px; position:absolute; right:0">
	<li>
        <div id="msg" style="display:block !important"></div>
    	<div id="container"></div>
    </li>
    <li>
    	<div id="img"><img id="suo" src=""/></div>
        <img id="newImg" style="display:none; margin:10px auto; border:1px solid #CCC; " src="<?php echo (get_user_face($dt['uid'])); ?>">
    </li>
</ul>

<script type="text/javascript">
	var o = $("#container").clip({
		imgC : $("#img"),
		maxHeight:180,
		maxWidth:180,
		
	});
	
	
	
	function callback(msg,img,w,h)   
{   if(img != "no" && msg ==2){
	        
		       
		    $("#container").css("background","url("+img+")");
			$("#container").css({'width':w,'height':h});
			 $("#img").css("background","url("+img+")");
			$("#container").css("background-repeat","no-repeat");
;            $("#cbox").show();
			 $(".sface").hide();
			 document.getElementById("faceimg").src=img;
             document.getElementById("msg").innerHTML = "<font color=red>裁切头像,双击选框上传</font>"; 
	 
	
	
	
}

else if(msg==1)
{  
	document.getElementById("faceimg").src=img;
	$("#msg").html("<font color=red>上传成功</font>").fadeOut(300); 
	window.location.reload();
}
 else if(msg==3){
	 document.getElementById("msg").innerHTML = "<font color=red>请选择文件</font>"; 
	 }    
	 else{
		 document.getElementById("msg").innerHTML = "<font color=red>异常</font>"; 
		 }
}   
 
 

$("#upl").change(function(e) {
    
	
	$("#upt").submit();
	
});
	
	
	
	
	function cutFace(){
	  
	  var data1 = o.getValue();
	  
	 //alert(data1.x1);
	
	  
	$.ajax({
		type:"POST",
		url:"<?php echo U('User/cutFace');?>",
		data:data1,
		beforeSend: function(){
			   $("#msg").html("上传中....");
			}
		,success: function(data){
			
			   if(data != 0){
				   
			    $("#msg").html("上传成功").fadeOut(300,function(){
					  
					  $("#faceimg").attr('src',data);
					   $("#cbox").hide();
					    $(".sface").show();
					});
				
				
			   }else
			   {
				   $("#msg").html(data); 
				   
				}
			  
			  
		 	}
			
		
		});
	  
	
	}
	
	
	$(".block").live("dblclick",function(){
		
			              cutFace();
						  
		 
		})
		
	$("#fsb").click(function(e) {
           cutFace();
    });
	
	
	
	 function preview(img, selection) {

var scaleX = 100 / (selection.width || 1);

var scaleY = 100 / (selection.height || 1);

var wh= $("#img").width();
var ht=$("#img").height();
$('#ferret + div > img').css({

"width": Math.round(scaleX * wh) + 'px',

"height": Math.round(scaleY * ht) + 'px',"margin-left": '-' + Math.round(scaleX * selection.x1) + 'px',

"marginTop": '-' + Math.round(scaleY * selection.y1) + 'px'

});

}
	
	
	
	
	
	
	
	
</script>








</div>
   <form method="post"  action="<?php echo U('User/do_profile');?>">
                                                    
                                                    <div class="control-group"></div>
                                                    
                               <div class="control-group">
                                                            <label class="control-label" for="inputAuto">用户名</label>
                                                            <div class="controls">
                                                            <input id="uname" name="uname"  type="text" class="" value="<?php echo ($uname); ?>" disabled />
                                 </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputAuto">真实姓名</label>
                                                            <div class="controls">
                                                            <input id="uname" name="realname"  type="text" class="grd-white" value="<?php echo ($pr['realname']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                      <div class="control-group">
                                                            <label class="control-label">性别</label>
                                                            <div class="controls">
                                                                <label class="radio">
                                                                    <input type="radio" data-form="uniform" name="sex" id="optionsRadios1" value="1" <?php if($pr['sex'] == 1): ?>checked<?php endif; ?> />
                                                                   男
                                                                </label>
                                                              
                                                              <label class="radio" style="padding-top:6px;">
                                                                    <input type="radio" data-form="uniform"  name="sex" id="optionsRadios2"  <?php if($pr['sex'] == 2): ?>checked<?php endif; ?>  value="2" />
                                                                   女
                                                                </label>
                                                            </div>
                               </div>
                                                        
                                                        
                                                        
                                                         <div class="control-group">
                                                            <label class="control-label">婚姻状况</label>
                                                            <div class="controls">
                                                                <label class="radio">
                                                                    <input type="radio" data-form="uniform" name="marriage" id="optionsRadios1" value="1"  <?php if($pr['marriage'] == 1): ?>checked<?php endif; ?> />
                                                                   未婚
                                                                </label>
                                                              
                                                                <label class="radio" style="padding-top:6px;">
                                                                    <input type="radio" data-form="uniform" name="marriage" id="optionsRadios2"  <?php if($pr['marriage'] == 2): ?>checked<?php endif; ?> value="2" />
                                                                   已婚
                                                                </label>
                                                                
                                                               
                                                              
                                                                <label class="radio" style="padding-top:6px;">
                                                                    <input type="radio" data-form="uniform" name="marriage" id="optionsRadios3"  <?php if($pr['marriage'] == 3): ?>checked<?php endif; ?> value="3" />
                                                                   保密
                                                                </label>
                                                            </div>
                                                        </div>
                                                        
                                                   
                                                    <div class="control-group">
                                                            <label class="control-label" for="inputAuto">出生日期</label>
                                                            <div class="controls">
                                                                <input id="age" name="age" class="grd-white" data-form="datepicker"  size="16" type="text" value="" />
                                                            </div>
                               </div>
                                                        
                                                        
                                                        
                                                            <div class="control-group">
                                                            <label class="control-label" for="inputAuto">Email</label>
                                                            <div class="controls">
                                                            <input id="email" name="email"  type="text" class="grd-white" value="<?php echo ($pr['email']); ?>" />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                             
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputAuto">手机</label>
                                                            <div class="controls">
                                                            <input id="uname" name="phone"  type="text" class="grd-white" value="<?php echo ($pr['phone']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                             
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputAuto">电话</label>
                                                            <div class="controls">
                                                            <input id="uname" name="tel"  type="text" class="grd-white" value="<?php echo ($pr['tel']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                                  
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputAuto">通讯地址</label>
                                                            <div class="controls">
                                                            <input id="addr" name="addr"  type="text" class="grd-white" value="<?php echo ($pr['addr']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                         <div class="control-group">
                                                            <label class="control-label" for="inputAuto">最近工作单位</label>
                                                            <div class="controls">
                                                            <input id="last_company" name="last_company"  type="text" class="grd-white span3" value="<?php echo ($pr['last_company']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                   
                                                        
                                                        
                                                        
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputAuto">最近职位</label>
                                                            <div class="controls">
                                                            
                                                            
                   <div style="position:relative">                                         <input class="span2  cate_job" id="cate_job_input"  size="16" type="text" name="post_cn" value="<?php echo ($pr['post_cn']); ?>" autocomplete="off"><input type="hidden" name="post" value="<?php echo ($pr['post']); ?>" id="cate_job-val">

<script src="../Public/js/cate_job.js"></script>
<div class="cate-box">

 <script id="cate_job" type="text/html">
    <div class='h-title'>请选择职位类别<a href='javascript:void(0)' class='close'>关闭</a></div>
	<form id='hang-f'>
     <ul>
    <% for (var i = 0; i < list.length; i ++) { %>
<%  if (list[i].parentid ==0) { %><li data-id='<%= list[i].id%>' ><img src="../Public/images/left_e.gif" border="0" align="absmiddle" id="5" class="c-leftimg pointer"><span class='big-cate' data-text='<%=list[i].categoryname%>' hid='<%=list[i].id%>'><%=list[i].categoryname%></span> <dl> <% for (var j = 0; j < list.length; j ++) { %><% if(list[j].parentid ==list[i].id ) {%><dd> 
<span class="small-cate"  data-text='<%=list[i].categoryname%> / <%=list[j].categoryname%>' hid='<%=list[j].id%>'><%= list[j].categoryname %></span> </dd><%}else {%><% } %><%  }%>
</dl></li><% } %> <% } %>
</ul>
<button type="reset" class='reset' style="display:none">重置</button> 
</form>
</script>

                    
                    
<script>
 
  
 html = template.render('cate_job', {
	list:cate_job
});
$('.cate_job').click(function(e) {
      // alert(e.pageX);
	  $(".tan-box").hide();
    	$(".cate-box").show().css({'top':25+"px",'left':'0px','z-index':'999993'});
	
});



$(".cate-box").html(html);
           $(".cate-box ul li img").click(function(e) {
			    $(".cate-box ul li dl").hide();
				 
				 $t=$(this);
				 
				$(".c-leftimg").each(function(index){
					  
					  
					  if($(this)!=$t){
					      if($(this).attr('src')=='../Public/images/left_d.gif'){
						     
							 $(this).attr('src','../Public/images/left_e.gif');
							 $(this).parent().find("dl").show();
						    }
					     }
					 
					})
				
                if($(this).attr('src')=='../Public/images/left_e.gif'){
					 $(this).parent().find("dl").show();
					 $(this).attr('src','../Public/images/left_d.gif');
					}else{
						$(this).parent().find("dl").hide();
						$(this).attr('src','../Public/images/left_e.gif');
						}
				
	    
});


$(".cate-box ul li span.big-cate").click(function(e) {
	
    $(".cate-box ul li dl").hide(); 
	 
	$(".cate-queding").attr('text',$(this).attr('data-text'));
	$(".cate-queding").attr('hid',$(this).attr('hid'));
	$(".cate-queding").click();
	
	
});


$(".cate-box ul li span.small-cate").click(function(e) {
    //$(".cate-box ul li dl").hide(); 
	
	$(".c-queding").attr('text',$(this).attr('data-text'));
	$(".c-queding").attr('hid',$(this).attr('hid'));
	$(".c-queding").click();
	
});



$(".h-s").click(function(e) {
      
	  
	$(".cate-box ul li dl").hide(); 
	  
});
$(".cate-box a.close").click(function(e) {
    
	$(".cate-box").hide();
	//$(".reset").click();
	$(".cate-box ul li dl").hide();
	
});



$(document).click(function(e) {
    
	if(e.target.className.indexOf('cate_job') != -1 || e.target.className.indexOf('c-leftimg') != -1 || e.target.className.indexOf('cate-box') != -1){
		$(".cate-box").show(); 
		}else{
			$(".cate-box").hide();
			$(".cate-box ul li dl").hide();
			$(".c-leftimg").attr('src','../Public/images/left_e.gif')
			}
	
});


$(".cate-box .small-cate,.cate-box .big-cate").click(function(e){
	//alert('nima');
	 $(".cate_job").attr('value',$(this).text());
	 $("input#cate_job-val").val($(this).attr('hid'));
	 $(".cate-box").hide();
	//$(".reset").click();
	$("#cate_job_input").focus();
	$(".cate-box ul li dl").hide();
	})

</script>
<div align="right" style="padding:15px; padding-right:50px;">
<div class="cl"></div>

</div>
</div>


</div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                      
                               
                                                        <div class="control-group">
                                                            <label class="control-label" for="inputSelect">学历</label>
                                                            <div class="controls">
                                                                <select id="inputSelect" name="education" data-form="select2" style="width:200px" data-placeholder="Your Favorite Type of Bear">
                                                                                                                     <option <?php if($pr['education'] == 2): ?>selected=""<?php endif; ?> value="1" />本科
                                                                    <option value="2" <?php if($pr['education'] == 2): ?>selected=""<?php endif; ?> />硕士
                                                                    <option <?php if($pr['education'] == 3): ?>selected=""<?php endif; ?> value="3" />博士
                                                                    <option <?php if($pr['education'] == 4): ?>selected=""<?php endif; ?>  value="4" />博士后                                                                 
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                
                
                
                
                
                
                
                
                
                
            <div class="control-group">
                                                            <label class="control-label" for="inputSelect">学历证书</label>
                                                            <div class="controls">

<input type="file" name="edu_zs" id="edu_zs"/>
                                                            </div>
                                                        </div>    
                
                
                
                
                
                
                
                
                
                
                                                        
                                                          <div class="control-group">
                                                            <label class="control-label" for="inputSelectGroup">所在地区</label>
                                                            <div class="controls" style="position:relative">
                                                             <input class="area span4 grd-white" size="16" type="text" value="<?php echo ($pr['area_cn']); ?>" name="area_cn"><input type="hidden" name="area" value="<?php echo ($_GET['area']); ?>" id="area-val"/>
             <script src="../Public/js/area.js"></script>
<div class="area-box tan-box" style="width:500px;">

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
	 $(".area-box").show().css({'top':'30px','left':'0px','z-index':'999993'});
	
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
	//$(".area-queding").click();
	
	
});


$(".area-box ul li span.small-cate").click(function(e) {
    //$(".hangye-box ul li dl").hide(); 
	
	$(".area-queding").attr('text',$(this).attr('data-text'));
	$(".area-queding").attr('hid',$(this).attr('hid'));
	//$(".area-queding").click();
	
});


$(".h-s").click(function(e) {
     
	$(".area-box ul li dl").hide(); 
	  
});
$(".area-box a.close").click(function(e) {
    
	$(".area-box").hide();
	$(".reset").click();
	$(".area-box ul li dl").hide();
	
});
$(".area-box .small-cate,.area-box .big-cate").live("click",function(e){
	
	$(".area").attr('value',$(this).attr('data-text'));
	 $("input#area-val").val($(this).attr('hid'));
	 $(".hangye-box").hide();
	//$(".reset").click();
	$("#cate_job_input").focus();
	$(".hangye-box ul li dl").hide();
	})

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




                                                </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                      
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    
                                                      
                                                        <div class="control-group">
                                                          <label class="control-label" for="inputEditorSimple">个人介绍</label>
                                                            <div class="controls">
                                                                <textarea id="inputEditorSimple" class="span4"  rows="8" name="about" data-form="wysihtml5" placeholder="Enter text ..."><?php echo ($pr['about']); ?></textarea>
                                                                <input type="hidden" value="<?php echo ($pr['step']); ?>" name="step"/>
                                                            </div>
                               </div>
                               <div class="form-actions">
                                                            <button type="submit" class="btn btn-primary">保存资料</button>
                                                            <button type="button" class="btn">取消</button>
                                                        </div>
                                                    </form>
                                                    
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
    
   
   <script>
   
   
      $('[data-form=datepicker]').datepicker();
   
   </script>