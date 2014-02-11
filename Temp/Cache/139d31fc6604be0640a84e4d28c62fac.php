<?php if (!defined('THINK_PATH')) exit();?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 id="modal-recoverLabel">编辑教育经历</h3>
                </div>
                <div class="modal-body">

                                    
									
               
             <table class="" id="edu_inputs">
                
                <tr>
                <td width="96">开始日期</td>
                <td width="220">
                  <input id="eestart_time" name="start_time" class="grd-white" data-form="datepicker"   size="16" type="text" value="<?php echo (date('Y-m-d',$dt['start_time'])); ?>" />
                </td>
                </tr>
                <tr>
                  <td height="41">结束日期</td>
                  <td>
                      <input id="eeend_time" name="end_time" class="grd-white" data-form="datepicker"   size="16" type="text" value="<?php echo (date('Y-m-d',$dt['end_time'])); ?>" />
                  </td>
                </tr>
                <tr>
                  <td height="37">学校</td>
                  <td>
                    <input class=""  id="title" name="title" size="20" type="text" value="<?php echo ($dt['title']); ?>">  <input type="hidden" value="<?php echo ($dt['id']); ?>" id="id" name="id" />               </td>
                </tr>
                <tr>
                  <td>专业</td>
                  <td><input name="major" type="text" id="major" size="20" value="<?php echo ($dt['major']); ?>" /></td>
                </tr>
                <tr>
                  <td>学位</td>
                  <td><span class="ms">
                    <select id="degree" name="degree">
                      
                      
                  <?php echo get_select($select['degree'],$dt['degree']);?>
                    
                    
                    </select>
                  </span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
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
								     url:'/Resume_edu/do_edit',
									 type:"POST",
									 data:{start_time:$("#eestart_time").val(),end_time:$("#eeend_time").val(),title:$("#title").val(),degree:$("#degree").val(),major:$("#major").val(),id:$("#id").val()
									 },
									 beforeSend: function(){
										    
											$this.val("提交中...").attr('disbaled',false);
										   
										 },success:function(data){
											 
											     if(data.status==1){
													   
													    $this.val(data.info);
														$(".close").click();
														 window.location.reload();
													 
													 }else{
														 
														  $this.val(data.info);
														 
														 }
												
												
											 }
				                                       					 
				 				
								    });
						
						 
                    });
			  
			  
			  
			  
			  
			  
				</script>