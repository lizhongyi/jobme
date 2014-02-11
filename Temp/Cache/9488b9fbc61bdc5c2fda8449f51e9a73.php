<?php if (!defined('THINK_PATH')) exit();?>


<?php if($module == 'User'): ?><div class="title-big" style="border-bottom:1px solid #ddd; padding-bottom:10px;">
  <h4>我申请的职位(<?php echo ($aps); ?>)</h4></div>
<div class="search">
<a href="/User/apply" style="text-decoration:underline">浏览已经申请过的职位。</a>
</div>

<div class="title-big" style="border-bottom:1px solid #ddd; padding-bottom:10px;">
  <h4>我收藏的职位(<?php echo ($saved); ?>)</h4></div>
<div class="search">
<a href="/User/saved" style="text-decoration:underline"> 将您感兴趣的职位收藏在这里，以后进行查看。</a>

</div><?php endif; ?>

<div class="title-big" style="border-bottom:1px solid #ddd; padding-bottom:10px;">
  <h4>保存的搜索条件(<?php echo ($srct); ?>)</h4></div>
<div class="search">
 
<ul class="sr">
<?php if(is_array($sr)): $i = 0; $__LIST__ = $sr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a href="/Job?<?php echo ($vo['url']); ?>" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,18)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
<li><a href="/Sr" style="color:#930">查看全部>></a></li>
</ul>

</div>