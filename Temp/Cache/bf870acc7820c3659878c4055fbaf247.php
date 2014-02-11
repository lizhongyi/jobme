<?php if (!defined('THINK_PATH')) exit();?><style>

#msg{ display:block !important}
.ms{ border:1px solid #F90; display:block !important}
.bred{border:1px solid #F90;}
</style>
<div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>编辑基本资料</h3>
  </div>
  <div class="modal-body">

  <form action="" method="post" id="addhr" name="addhr">
<div class="span3 input-append input-line">
              <label class="control-label"><span class="red"></span> 真实姓名</label>  <input class="span2" id="hname" name="hname"  size="16" type="text" value="<?php echo ($pr['realname']); ?>"/><span class="add-on"><i class="icon-user"></i></span>
    </div>
  <div class="span3 input-append input-line"><label class="control-label"><span class="red"></span> 性别</label>
    <select id="sex" name="sex">
    <option value="1"  <?php if($pr['sex'] == 1): ?>selected<?php endif; ?>>男</option>
    <option value="2" <?php if($pr['sex'] == 2): ?>selected<?php endif; ?>>女</option>
    </select>
   
   </div><div class="span3 input-append input-line">

  <label class="control-label">出生日期</label>
  <input type="text" name="age" value="<?php echo ($pr['age']); ?>"  placeholder="0000-00-00" id="age" class="span2"/>
  
  </div>
   <div class="span3 input-append input-line">
   <label class="control-label">婚姻状况</label>
   <select id="marriage" name="marriage">
    <option value="1"   <?php if($pr['marriage'] == 1): ?>selected<?php endif; ?>>未婚</option>
    <option value="2" <?php if($pr['marriage'] == 2): ?>selected<?php endif; ?>>已婚</option>
    </select>
  
</div>

  <div class="span3 input-append input-line">
  <label class="control-label">最高学历</label>
    <select name="education" data-form="select2" style="width:200px" >
                                                                                                                     <option <?php if($pr['education'] == 1): ?>selected=""<?php endif; ?> value="1" >本科</option>
                                                                    <option value="2" <?php if($pr['education'] == 2): ?>selected=""<?php endif; ?> >硕士</option>
                                                                    <option <?php if($pr['education'] == 3): ?>selected=""<?php endif; ?> value="3" >博士</option>
                                                                    <option <?php if($pr['education'] == 4): ?>selected=""<?php endif; ?>  value="4" >博士后</option>                                                                 
                                                                </select>
  
  </div>
  <div class="span3  input-append input-line">
  <label class="control-label">手机号码</label>
   <input type="text" name="phone" id="phone" value="<?php echo ($pr['phone']); ?>" class="span2"/>
  </div>
   <div class="span3 input-append input-line">
    <label class="control-label">E-mail</label>
  <input type="text" name="email" value="<?php echo ($pr['email']); ?>"  id="email" class="span2" /><span class="add-on">@</span>
  </div>
  <div class="span3">
  <label class="control-label">联系地址</label>
  <input type="text" name="addr" value="<?php echo ($pr['addr']); ?>" id="addr"/>
  
  </div>
  <div class="span3">
  <span id="msg">　</span>
  </div>
  <div class="span2">
 
  </div>
 
 
  
  <div class="span2">
  <label class="control-label">　</label>
 
  </div>
  </form>
  </span>
  <div class="cl"></div>
 
  </div>
  <div class="modal-footer">
    
   <input class="btn btn-primary" id="addhr_bt" type="submit"  value="保存"/>
  </div>
  
  <script>
   
 



/*$("form input").live("blur",function(e) {
        $this=$(this); 
		var attr=$(this).attr("id"); 
		var s=$this.val(); 
		var pattern =/^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$/;
                    //var pattern =/(^[0-9]{3,4}\-[0-9]{7,8}$)|(^[0-9]{7,8}$)|(^\([0-9]{3,4}\)[0-9]{3,8}$)|(^0{0,1}13[0-9]{9}$)/; 
		       switch(attr){
			  
			   case 'hname':
			       if(s.length < 2){
			           yan_fn($this,"请正确填写联系人");
				       }else{
					     yan_fn($this);
					   }
			   break;
			   
			   case 'title':
			       if(s.length < 2){
			           yan_fn($this,"请正确填写");
				       }else{
					     yan_fn($this);
					   }
			   break;
			 /*  
			   case 'tel':
			        
			       
                
                     if(!pattern.exec(s))
                     {
                      yan_fn($this,"请正确填写电话号码");	
                     }else{
						  yan_fn($this);
						 }
					 
					 
                
            
			      
			   break;
			   case 'fax':
			   if(s!=""){
			   if(!pattern.exec(s))
                     {
                      yan_fn($this,"请正确填写传真");	
                     }else{
						  yan_fn($this);
						 }
			   }
			   break;
			   
			   case 'phone':
			        if(s!=""){
			           if(!(/^1[3|5][0-9]\d{4,8}$/.test(s))){ 
                       yan_fn($this,"不是完整的11位手机号或者正确的手机号前七位"); 
				}else{
					yan_fn($this);
					}
    }   
		        break; 
				
				
				 
                    case 'email':
			        if(s!=""){
			           
					   var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    
                       if(!reg.test(s)){
                            yan_fn($this,"email格式不正确，请重新输入！");
                        }else{
						     
							 yan_fn($this);	
							
					  }
					}
                   break;
				   
				   
				   case 'msn':
			        if(s!=""){
			           
					   var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    
                       if(!reg.test(s)){
                            yan_fn($this,"msn格式不正确，请重新输入！");
                        }else{
						     
							 yan_fn($this);	
							
					}
					
                   break;  
					
					}
				
				case 'qq':
			        if(s!=""){
			           
					  
						if(!(/^[0-9]\d{4,9}$/.test(s))){ 
                       yan_fn($this,"qq不对"); 
				}else{
					yan_fn($this);
					}	
					
					
                   break;  
					
				
        		
			}
			
			
			
			   }
		 
		 
		
    });*/
	



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


// ajax 提交联系人

    $("#addhr_bt").click(function(e) {
		
		 $this=$(this);
      
	  if($("#realname").val() =='' || $("#email").val()==""  ){
	                  
	  }else{
		   
		   $.ajax({
			     
				 url:"/User/do_profile",
				 type:"POST",
				 data:{
					      realname      : $("#realname").val(),
					      phone        : $("#phone").val(),
					      age        : $("#age").val(),
					      sex      : $("#sex").val(),
						  email      : $("#email").val(),
						 education        : $("#education").val(),
						  marriage         : $("#marriage").val(),
						  addr       : $("#addr").val(),
						 
					 
                       },
					   beforeSend: function(){
						    
							$this.val("正在提交");
						   
						   },
						   success: function(data){
							   
							   if(data.status==1){
								   
								      $this.val(data.info);
									  
									  setTimeout(function(){
										    
											$(".close").click();
										  
										  },1000)
								   
								   }
								   else{
									     
										 
										$this.val('保存失败');
									   
									   
									   }
									   
									   
							    
							  }		
							  
							
			   
			   });
		  
		  }
		
   
   return false;
	 
}); 
	
	

	
  </script>