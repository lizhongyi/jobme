<?php if (!defined('THINK_PATH')) exit();?><div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>发私信</h3>
  </div> 
  

  <div class="modal-body" style="padding:0px;"> 
  
  
  <div class=" modal_box">
<div id="msg"></div>

 <table class="m16"id="add_co">
 <tr>
 <td width="207" align="left">收信人：<?php echo (gettruename($_GET['uid'])); ?><span id="msg"></span></td>
 </tr>
 
 
 <tr>
   <td align="left" valign="top"><textarea name="content" id="content" style="margin-left:-2px; height:100px; width:420px;"></textarea></td>
   </tr>
 
 
 </table>
 </div>
 
  </div>

</div> 



 </div>
  <div class="modal-footer">
     <button class="btn btn-primary" type="submit" id="notice_bt" >发送</button></div>

 </div>
 <script>
 


    $("#notice_bt").click(function(e) {
		
	
    
	  if($("#title").val()=="" || $("#content")==""){
	                   	msg("请仔细检查必填项");
	                    return false;
	  }else{
		     
		   
		    url="/Usermsg/sendmsg/ajax/1";
		    tdata={
					      toid      : "<?php echo ($_GET['uid']); ?>",
					      content       : $("#content").val(),
					     
					 
                       };
					      
						  
						  cb={bf:function(){
							  
							   msg("正在提交");
							   
							 },su:function(data){
								 
									 
								if(data.status==1){
							    $("#msg").html(data.info).show().fadeOut(1000,function(){
							   $(".close").click();
	       									});
								}else{
									  msg(data.info);
									  return false;
									}
								
								
						    }
							}  
						
		                ajaxForm(url,tdata,cb);
						
	  }
   
   return false;
	 
}); 


 </script>