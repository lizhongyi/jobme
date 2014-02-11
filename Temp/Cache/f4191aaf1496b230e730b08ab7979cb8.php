<?php if (!defined('THINK_PATH')) exit();?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 id="modal-recoverLabel">应聘职位：<?php echo ($_GET['jobname']); ?></h3>
                </div>
                <div class="modal-body">

                                    
							<div id="alert-box"  style="display:none">
                            
                             <div class="msc alert"  style="padding:15px; font-size:14px;">
                               
                               
                               
                             </div>
                              
                              <div align="center">
                              <a href="/Resume" class="btn btn-large  btn-warning">立即完善</a>
                              </div>
                              
                            </div>		
               
             <table class="" id="edu_inputs">
                <tr>
                  <td width="309">
                  <label>竞聘信息</label>
                  <textarea style=" width:350px; margin-left:0px; height:100px;" name="message" cols="20" id="message"></textarea></td>
                </tr>
                
                
                </table>

              
              
              
              
              
                 </div>
                
<div class="modal-footer">
                  <input name="guid" id="guid" value="<?php echo ($_GET['g_uid']); ?>"  type="hidden"/>
                  
                  
                    <input name="jobname" id="jobname" value="<?php echo ($_GET['jobname']); ?>"  type="hidden"/>
  <input type="submit"  id="apply_bt" jobid="<?php echo ($_GET['jobid']); ?>" class="btn btn-primary" value="提交" /><button  style="display:none" class="btn" id="guanbi" data-dismiss="modal" aria-hidden="true">关闭</button>
</div>
                
                
        <script>

  $("#apply_bt").click(function(e) {
        $this=$(this);
	   $.ajax({
		   url:"/Job/do_apply/jobid/"+$this.attr('jobid'),
		   type:"POST",
		   data:{gid:$this.attr('jobid'),
		   g_uid:$("#guid").val(),
		   jobname:$("#jobname").val(),
		   message:$("#message").val()},
		   beforeSend: function(){
			      
				  $this.val('提交中....').attr('disabled',true);
			   },
			   success: function(data){
				        
						if(data.status==1){
							 $this.val(data.info);
							 setTimeout(function(){
								 $('.close').click();
								 
								 },2000);
							 
							
							}else{
								 $this.val('取消').hide();
								 $("#guanbi").show();
								 $("#edu_inputs").hide();
								 $("#alert-box").show();
								 $(".msc").html(data.info);
								 
								}
				      
				   },
		   
		     
		   });
	   
	   
});
 
</script>