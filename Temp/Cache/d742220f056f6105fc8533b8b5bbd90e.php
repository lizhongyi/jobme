<?php if (!defined('THINK_PATH')) exit();?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 id="modal-recoverLabel">新增教育经历</h3>
                </div>
                <div class="modal-body">

                                    
									
               
             <table class="" id="edu_inputs">
                
                <tr>
                <td width="96">开始日期</td>
                <td width="220">
                                                                    <input id="start_time" name="start_time" class="grd-white" data-form="datepicker"  size="16" type="text" value="" />
                                                                
                                                             </td>
                </tr>
                <tr>
                  <td height="41">结束日期</td>
                  <td>
                     <input id="end_time" name="end_time" class="grd-white" data-form="datepicker"   size="16" type="text" value="" />
                  </td>
                </tr>
                <tr>
                  <td height="37">学校</td>
                  <td>
                    <input class=""  id="title" name="title" size="20" type="text">  <input type="hidden" value="<?php echo ($_GET['resume_id']); ?>" id="resume_id" name="resume_id" />               </td>
                </tr>
                <tr>
                  <td>专业</td>
                  <td>
                   
                   <input name="major" type="text" id="major" size="20" />
                 </td>
                </tr>
                <tr>
                  <td>学位</td>
                  <td> <select id="degree" name="degree">
                    <option value="1">学士</option>
                    <option value="2">硕士</option>
                    <option value="3">博士</option>
                    <option value="4">博士后</option>
                    </select></td>
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
								     url:'/Resume_edu/do_add',
									 type:"POST",
									 data:{start_time:$("#start_time").val(),end_time:$("#end_time").val(),title:$("#title").val(),degree:$("#degree").val(),major:$("#major").val(),resume_id:$("#resume_id").val()
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