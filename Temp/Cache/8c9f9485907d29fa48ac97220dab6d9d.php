<?php if (!defined('THINK_PATH')) exit();?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 id="modal-recoverLabel">修改密码</h3>
                </div>
                <div class="modal-body">

                                    
									
               
             <table class="" id="edu_inputs">
                <tr>
                  <td width="96" height="37">旧密码</td>
                  <td width="220">
                    <input   id="ypass" name="ypass" class="oldpass" size="20" type="text"></td>
                </tr>
                <tr>
                  <td>新密码</td>
                  <td>
                   
                   <input name="npass" type="password" id="npass" size="20" />
                 </td>
                </tr>
                <tr>
                  <td>确认新密码</td>
                  <td><input name="npass1" type="password" id="npass1" size="20" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><span class="ms"></span></td>
                </tr>
                
                </table>

              
              
              
              
              
                 </div>
                
<div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
  <input type="submit"  id="up_bt" class="btn btn-primary" value="提交" />
</div>
                
                
                
                
                
<script>
				
			 
  
           

			  
			  
			
			  
			  
			  $("#up_bt").click(function(e) {
                          
						  
						  
						  
						  
						  
						 $this=$(this);
						if($("#ypass").val() =="" ){
							    
								  
								 $(".ms").text('请输原新密码');
								  
								  return false;
								  
							}else{$(".ms").text('');}  
							
							
							
							if($("#npass").val() =="" ){
							       
								   
								
								  
								$(".ms").text('请输入新密码');
								  
								  return false;
								  
							}else{$(".ms").text('');}  
							
							
							
							
							
							if($("#npass1").val() =="" ){
							    
								  
								$(".ms").text('确认新密码');
								  
								  return false;
								  
							}else{$(".ms").text('');}  
							
							
							
							
							if($("#npass").val() != $("#npass1").val() ){
							    
								  
								 $(".ms").text('两次密码输入不同');
								  
								  return false;
								  
							}else{
								
								 $(".ms").text('');
								}  
							
							
							$.ajax({
								     url:'/User/upPass',
									 type:"POST",
									 data:{ ypass:$("#ypass").val(),
										 npass:$("#npass").val(),
										 npass1:$("#npass1").val()
									 },
									 beforeSend: function(){
										    
											$this.val("提交中...").attr('disbaled',false);
										   
										 },success:function(data){
											 
											           if(data){
													   
													    $this.val(data.info);
														
													 
													 }else{
														 
														  $this.val(data.info);
														 
														 }
												
												
											 }
				                                       					 
				 				
								    });
						
						 
                    });
			  
			  
			  function yan_fn(obj,msg){
	
	     
		 
		         if(msg!=undefined){
				               obj.addClass('bred');
				               if(obj.next().length==0){
					           obj.parent().append("<span class='ms'>"+msg+"</span>")
					        }  //obj.val("");
				               obj.focus();
							   return false;
				 }else{
					   obj.removeClass('bred'); 
					   obj.next(".ms").remove();
					 }
	    
	}
			  
			  
			  
				</script>