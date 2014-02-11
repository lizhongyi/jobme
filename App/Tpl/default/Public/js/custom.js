$(document).ready(function() {
	
   //折叠版
   
 
	 $(".apply_bt").click(function(e) {
       
	   geta($($(this).attr('href')),$(this).attr('link'),loadGif)
	   
});

$(".apply_saved").click(function(e) {
        
		
		$this=$(this);
		
	  $.ajax({
		  
		     url:'/Saved/add',
			 type:'POST',
			 data:{gid:$this.attr("gid"),jobname:$this.attr('jobname')},
			 beforeSend: function(){
				  $this.text("...");
				 
				 },success: function(data){
					   
					   if(data.status==1){
						   
						   
						    $this.text("详情");
							$this.attr('href','/Job/detail/id/'+$this.attr('gid')).removeClass('apply_saved').addClass('btn-success');
							
							
						   }else{
							    $this.text(data.info);
							   
							   }
					  
					 }
		  
		  });

});


 























	
	
	$('.bottom_tooltip').tooltip({
		placement: 'bottom'
	});
	$('.left_tooltip').tooltip({
		placement: 'left'
	});
	$('.right_tooltip').tooltip({
		placement: 'right'
	});
	$('.top_tooltip').tooltip();
	$('.dropdown-menu.dropdown-user-account').click(function(event){
		event.stopPropagation();
	});
	//$('#myEditor').wysihtml5();
	$('.accordion-body.collapse.in').prev('.accordion-heading').addClass('acc-active');
	$('.accordion-heading').click(function(){
		$('.accordion-heading').removeClass('acc-active');
		$(this).addClass('acc-active');
	});
	   
	   
	   //备注提示
	  $(".beizhu").popover().
      click(function(e) {
        e.preventDefault()
      });
	  
	  $("input:text").attr('autocomplete','off');
		  
		  
  
		 
	
	
	
//set persona	
$(".set_persona").click(function(e) {
  
	 $("#set_persona").empty();
	 geta($("#set_persona"),$(this).attr('link'),loadGif);
	
});

	
		  
	 
	
});


function checkAll(form, name) {
	for(var i = 0; i < form.elements.length; i++) {
		var e = form.elements[i];
		if(e.name.match(name)) {
			e.checked = form.elements['chkall'].checked;
			e.dis
			if(e.checked==true){
			$(e).parents("tr").css("background","#F0FFF0");
			}else{
				e.disabled=false;
				$(e).parents("tr").css("background","#FFF");
				}
		}
	}
}



function geta(obj,url,bef,tdata,fun){
	   
	   $.ajax({
		   url:url,
		   data:tdata,
		   type:"GET",
		    cache:true,
		   beforeSend: function(){
			    if(bef){
			     obj.html(loadGif);
				}
			   },success: function(data){
				   
				   if(typeof(data)=='object'){
				   obj.html("<div class='nodata'>"+data.info+"</div>");
				   }else{
					    obj.html(data);
					   }
				 
				   setTimeout(function(){
					     checkJine(); 
						 
					   },10);
				   
					   
				   if(fun){
				      fun();
				    }
				   }
			    })
		   }
		   
		   
		   
//全局tab
$('.tab .tab-bar').click(function(index) {

    $(this).addClass('hover').siblings().removeClass('hover');
    $(this).parent().next().find(".tab_con_box").eq($(this).index()).fadeIn(0).siblings().fadeOut(0);
    //alert(location.hash);

});

// checkJine();
//金额三位加一个逗号
//alert($("span.jine").length)
function checkJine(){
	
  $("span.jine").each(function(index, element) {
     
	 
	 $jin=$(this).text().replace("￥","").split("").reverse().join("");
	 
	 
	//alert($jin)
	 nus="";
	
	 for(i=$jin.length-1;i>=0;i--){
		   
               if(i % 3 == 0 && i !=0){		  
			   
			   nus+=$jin[i]+',';
			   }else{
				    nus+=$jin[i];
				   }
			
		   
		 }
		 if(nus!=0){
			 
	  $(this).text("￥"+nus);
	  $(this).removeClass('jine');
	  }else{
		   $(this).text("");
		   $(this).removeClass('jine');
	}
});

}


  $(function() {
	  //指定给里面的拖动h3 移动父窗口
    $( ".modal" ).draggable({ handle: ".modal-header" });
	
	
	// this code is  inform jumpwindow for show  list  
  $(".inform-bar").click(function(e) {
	  if($(this).attr("id")=='sms'){
		  
		  window.location=$(this).attr('link');
		    
	  }else{
        geta($("#inform_box"),$(this).attr('link'),loadGif);
	  }
});

$("#zhidaole").click(function(e) {
      
	$("#msgbar").click();
});


    $(".menu-t").click(function(e) {
        // alert("nihao");
		 $(this).next().toggle();
		
    });
	
  });



