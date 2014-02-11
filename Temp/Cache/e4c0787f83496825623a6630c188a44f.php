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
            <div class="well bg-FFF ">
              <div class="btl" style=" background:#f7f7f7;">
                <a href="<?php echo U('Usermsg/index');?>">私信</a> 
              </div>
             
          
                
                
                
                <div class="cbox  form-table" style=" margin:15px; margin-top:0px;">
                
                   
                   <div class="u_right_box">
<div class="like_box">
<div class="hziliao">

<div>
 <div class="liuyan">
 <div id="rr"></div>
</div>
<div class="cl"></div>
<div id="liu_f" style="margin-top:16px;">

<div class="huifu_box" style="display:block; padding:4px;display:none; margin-top:8px; clear:both;">
<input  type="text" name="suser" id="suser"  data='userlist' autocomplete="off" class="suser"  placeholder="搜索用户" toid='' />

<div class="ajax_user">
<div class="uli">


</div></div><div id="hfname"></div><span id="msg"></span>

<div class="cl"></div>
<form action="" method="post" name="huifu_frm">

<textarea name="content" id="content" class="txtbox"  toid='' style="width:520px !important; margin-left:0px; height:80px"></textarea><span class="tishi"></span><div class="tjdiv"><button type="button" class="sms_bt btn btn-primary" sendUrl="<?php echo U('Usermsg/sendmsg');?>" >发送</button></div><div class="cl"></div></form>




</div>






</div>
</div>
<div class="cl"></div>
</div>

<div class="list_box" >
<ul>
<?php if(is_array($silist)): $i = 0; $__LIST__ = $silist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>




<div class="book_item">




<div  class="sm_face">



<?php if($vo['faid'] == $uid): ?><img src="<?php echo (get_user_face($vo['tid'])); ?>" width="56" height="56" />

<?php else: ?>


<img src="<?php echo (get_ht_face($vo['tid'])); ?>" width="56" height="56" /><?php endif; ?>
</div>





<div style="padding:0px; margin-top:-7px; margin-left:80px;"><?php echo ($vo['sixin'][0]['st']); ?><a href="<?php echo U('User/home',array('uid'=>$vo['tid']));?>" ><?php echo ($vo['uname']); ?></a> : <?php echo ($vo['sixin'][0]['content']); ?>


<span style="display:block;">

<span style="float:right;">
<a href="<?php echo U('Usermsg/smsbox',array('toid'=>$vo['tid']));?>"><?php echo ($vo['tixing']); ?>共<?php echo ($vo['nums']); ?>对话</a> | <a href="javascript:;" hfid="<?php echo ($vo['tid']); ?>" hfname="<?php echo (gettruename($vo['tid'])); ?>" class="hfs">回复</a> | <a href="javascript:;" uname="<?php echo (gettruename($vo['tid'])); ?>" uid="<?php echo ($vo['tid']); ?>" class="deldh" >删除</a><?php echo ($vo['sz']); ?>
</span>

<span style="float:left;"><?php echo (date('Y-m-d',$vo['sixin'][0]['create_time'])); ?></span>
<div class="cl"></div>
</span>



</div>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
<div class="cl"></div>
</div>
<!--留言区域-->

</div>
</div>


</div>
<div class="cl"></div>
<div class="tanchuang" style="position:absolute; width:300px; display:none; margin-left:-150px; left:50%; top:100px; border:2px solid #ddd; background:#FFF;">
<div class="delbox">
<h3>你确定要删与除所有回话么？</h3>
<button type="button">取消</button><button type="button">确定</button>
</div>
</div>

                  
                 
            </div>
            
         

<div class="right">

<div class="title-big" style="border-bottom:1px solid #ddd; padding-bottom:10px;">筛选条件</div>
<ul style="padding-top:18px !important;">
<?php if(is_array($silist)): $i = 0; $__LIST__ = $silist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>


<div  class="sm_face">





<img src="<?php echo (get_ht_face($vo['tid'])); ?>" width="36" height="36"
 style="width:36px; height:36px;" />

<?php echo ($vo['uname']); ?>
<div class="cl"></div>
</div>
</li><?php endforeach; endif; else: echo "" ;endif; ?>

<div class="cl"></div>
</ul>




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



<script src="../Public/js/plus_tan.js"></script>

<script>
  
 //私信函数			



    $(document).keydown(function(e) {

        if (e.ctrlKey && e.which == 13) {
            $('.sms_bt').click();

        }

    });


    $('.sms_bt').click(function(e) {


        if ($('#content').val() == '') {
            $("#msg").html('内容不能为空').show();
            return false;

        }
		  $('#msg').html(""); 

        var content = guolv($('#content').val());
        var suser = $('#suser').attr("toid");
		var url=$(this).attr("sendUrl");
		
        $.ajax({
            type: "POST",
            url:url,
            data: {
                toid: suser,
                content: content
            },
            beforeSend: function() {
                msg("发送中.....");

            },
            success: function(data) {

                if (data.status== 1) {
                    //刷新当前页面

                 window.location.reload();

                }else{
					
					//alert("chucuole");
					
					}




            }



        });

        return false;


    });

    $('button.sixin').click(function(e) {

        $(".huifu_box").toggle();


    });

    $('.hfs').click(function(e) {
        $(".huifu_box").show();
        $("#content").focus();

        $("#suser").attr("toid",$(this).attr('hfid')).hide();
        $("#hfname").html("<span class='text'>发给:  <a href='#'>" + $(this).attr("hfname") + "</a>  </span><div class='cl'></div>").show();

    });



    /*选择私信用户*/
    $('.x_user').live("click", 
    function() {

        $("#suser").attr("toid",$(this).attr("toid")).hide();
        $("#uli").html("");

        $("#hfname").html("<span class='text'>发给:  <a href='#'>" + $(this).attr("uname") + "</a> <div class='cl'></div>").show();



    });
    /*修改发送用户*/

$("span.modfy").live("click", 
    function() {

        $(this).parent().html("").hide();
        $("#suser").val("").show();

    });

$(".deldh").click(function(e){
	
	      
		   $this=$(this);
		     if(window.confirm("你确定要删除全部对话么？")){
				   
				  $.ajax({
					    
						 url:'/Usermsg/deldh/ajax/1/id'+$this.attr('uid'),
						 
					  
					  
					  });
				 
				 }else{
					    
						return false;
					   
					 }
	
	
	})


</script>