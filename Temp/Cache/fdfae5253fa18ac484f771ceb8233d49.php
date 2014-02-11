<?php if (!defined('THINK_PATH')) exit();?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 id="modal-recoverLabel">编辑项目经验</h3>
                </div>
                <div class="modal-body">

                                    
									
               
             <table class="" id="edu_inputs">
                <tr>
                  <td width="600" height="224" valign="top"><strong>
                    <textarea name="xiangmu" cols="28" rows="16" id="xiangmu" style=" width:640px; margin-left:0px;"><?php echo ($dt['xiangmu']); ?></textarea>
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
						if($("#xiangmu").val() =="" ){
							    
								  
								  yan_fn($(".ms"),'请填写完整',$(this));
								  
								  return false;
								  
							}  
							
							
							$.ajax({
								     url:'/Resume/do_edit',
									 type:"POST",
									 data:{
										
										 xiangmu:$("#xiangmu").val(),
										
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