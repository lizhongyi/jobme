<?php if (!defined('THINK_PATH')) exit();?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 id="modal-recoverLabel">编辑求职意向</h3>
                </div>
                <div class="modal-body">

                                    
									
               
             <table class="" id="edu_inputs">
                
                <tr>
                <td width="96">期望行业</td>
                <td width="463">
                  <span style="position:relative"> <input class="span2 se-input industry" size="16" type="text" value="<?php echo ($dt['trade_cn']); ?>" autocomplete="off" name="trade_cn" id="industry_input"/><input type="hidden" name="trade" value="<?php echo ($dt['trade']); ?>" id="industry-val">
                  
                  
                  
                  <script src="../Public/js/industry.js"></script>
<div class="hangye-box" style="width:500px;">

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
$('.industry').click(function(e) {
    
	  $(".tan-box").hide();
	$(".hangye-box").show().css({'top':24+"px",'left':0+'px','z-index':'999993'});
	
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
 </span>
                </td>
                </tr>
                <tr>
                  <td height="41">期望职位</td>
                  <td>
                     <span style="position:relative">                   
<input class="span2  cate_job" id="cate_job_input"  size="16" type="text" name="post" value="<?php echo ($dt['post_cn']); ?>" autocomplete="off"><input type="hidden" name="post" value="<?php echo ($dt['post']); ?>" id="cate_job-val">

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

</span> 
                  </td>
                </tr>
                <tr>
                  <td height="37">期望薪资</td>
                  <td>
                    <input class=""  id="payment" name="payment" size="20" type="text" value="<?php echo ($dt['payment']); ?>">  <input type="hidden" value="<?php echo ($dt['id']); ?>" id="id" name="id" />               （万）年薪</td>
                </tr>
                <tr>
                  <td height="224" valign="top">职业技能</td>
                  <td><strong>
                    <textarea name="skills" cols="28" rows="16" id="skills" style=" width:450px; margin-left:0px;"><?php echo ($dt['skills']); ?></textarea>
                  </strong></td>
                </tr>
                
                </table>

              
              
              
              
              
                 </div>
                
<div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
  <input type="submit"  id="add_edu_bt" class="btn btn-primary" value="提交" />
</div>
                
                
                
                
                
<script>
				
			    	
			
       // $("#time").datepicker(defaultOptions);
      
  
               $('[data-form=datepicker]').datepicker();
			  
			  
			  
			  
			  
			  $("#add_edu_bt").click(function(e) {
                          
						 $this=$(this);
						if($("#title").val() =="" ){
							    
								  
								  yan_fn($(".ms"),'请填写完整',$(this));
								  
								  return false;
								  
							}  
							
							
							$.ajax({
								     url:'/Resume/do_edit',
									 type:"POST",
									 data:{
										 trade_cn:$("#industry_input").val(),
										 trade:$("#trade").val(),
										 post_cn:$("#cate_job_input").val(),                                         post:$("#post").val(),
										 payment:$("#payment").val(),
										 post_type:$("#post_type").val(),
										 skills:$("#skills").val(),
										
									 },
									 beforeSend: function(){
										    
											$this.val("提交中...").attr('disbaled',false);
										   
										 },success:function(data){
											 
											     if(data.status==1){
													   
													    $this.val(data);
														$(".close").click();
														 window.location.reload();
													 
													 }else{
														 
														  $this.val(data);
														 
														 }
												
												
											 }
				                                       					 
				 				
								    });
						
						 
                    });
			  
			  
			  
			  
			  
			  
				</script>