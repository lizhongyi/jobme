<?php if (!defined('THINK_PATH')) exit();?>
<ul class="inform_ul">
<li><h4>职位申请通知</h4></li>


<?php if(isset($infoList)): if(is_array($infoList)): $i = 0; $__LIST__ = $infoList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($vo['rd'] == 0): ?>style=" background:rgb(231,241,249)"<?php endif; ?>>

<a href="#"><?php echo ($vo['title']); if($vo['read'] == 0): ?><a class="readed" href="javascript:;" link="/Sinform/detail/id/<?php echo ($vo['id']); ?>/rd/1/ajax/1" style="color:#666; float:right;">标记为已读</a><?php endif; ?></li>
<div class="cl"></div><?php endforeach; endif; else: echo "" ;endif; ?>

<?php else: ?>

 
 <div class="alert">
 暂时没有通知
 </div><?php endif; ?>

<?php if($key > 8): ?><li><a href="/Inform/candidate" class="" style=" margin-top:8px;">查看全部</a></li><?php endif; ?>

</ul>


<script>

$(".readed").click(function(e) {
              
			 
			  
	      $this=$(this);
		  // alert($this.attr('link'));
		$.ajax({
			  url:$this.attr('link'),
			  type:"GET",
			  data:{},
			  beforeSend: function(){
				  
				  
				  },
			   success: function(data){
				     
					 if(data.status==1){
						 
						 $this.hide();
						 
						 }
				   
				   },
			  
			
			})
	   
	  
});

</script>