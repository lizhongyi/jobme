<?php if (!defined('THINK_PATH')) exit();?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 id="modal-recoverLabel">新增工作经验</h3>
                </div>
                <div class="modal-body">

                                    
									
               
             <table class="" id="edu_inputs">
                
                <tr>
                <td width="96">开始日期</td>
                <td width="220">
                                                                    <input id="wastart_time" name="wastart_time" class="grd-white" data-form="datepicker"  data-date-format="yyyy-mm-dd"  size="16" type="text" value="" />
                                                                
                                                             </td>
                </tr>
                <tr>
                  <td height="41">结束日期</td>
                  <td>
                     <input id="waend_time" name="eaend_time" class=" datepicker grd-white" data-form="datepicker"   size="16" type="text" value="" data-date-format="yyyy-mm-dd" />
                  </td>
                </tr>
                <tr>
                  <td height="37">工作单位</td>
                  <td>
                    <input class=""  id="title" name="title" size="20" type="text"><input type="hidden" value="<?php echo ($_GET['resume_id']); ?>" id="resume_id" name="resume_id" />        </td>
                </tr>
                <tr>
                  <td>职位</td>
                  <td>
                   
                   <input name="post" type="text" id="post" size="20" />
                 </td>
                </tr>
                <tr>
                  <td valign="top">工作职责</td>
                  <td><textarea style=" width:528px; margin-left:0px; height:200px;" name="duty"  cols="duty" id="duty"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><span class="ms"></span></td>
                </tr>
                
                </table>

              
              
              
              
              
                 </div>
                
<div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
  <input type="submit"  id="add_edu_bt" class="btn btn-primary" value="提交" />
</div>
                
                
                
                
                
<script>
				
			 
  
            $('[data-form=datepicker]').datepicker();

			  
			  
			  
			  
			  
			  $("#add_edu_bt").click(function(e) {
                          
						 $this=$(this);
						if($("#title").val() =="" ){
							    
								  
								  yan_fn($(".ms"),'请填写完整',$(this));
								  
								  return false;
								  
							}  
							
							
							$.ajax({
								     url:'/Resume_work/do_add',
									 type:"POST",
									 data:{start_time:$("#wastart_time").val(),end_time:$("#waend_time").val(),title:$("#title").val(),duty:$("#duty").val(),post:$("#post").val(),resume_id:$("#resume_id").val()
									 },
									 beforeSend: function(){
										    
											$this.val("提交中...").attr('disbaled',false);
										   
										 },success:function(data){
											 
											     if(data.status==1){
													   
													    $this.val("添加完成");
														$(".close").click();
														 window.location.reload();
													 
													 }else{
														 
														  $this.val(data.info);
														 
														 }
												
												
											 }
				                                       					 
				 				
								    });
						
						 
                    });
			  
			  
			  
			  
			  
			  
				</script>