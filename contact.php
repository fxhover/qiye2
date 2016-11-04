<?php require 'header.php'; ?>

<div class="banner"><img src="http://lcmjzs.com/templets/lcmjzs/lcsjimg/banner.gif" /></div>
<div class="place"><h3>
 
<a href="/contact.php"><font>联系我们</font> / ABOUT</a></h3><span class="pre">当前位置：<a href='/'>网站首页</a> > <a href='/contact.php'>联系我们</a></span></div>
<div class="listmain">
<ul class="contactleft">
<ul>
	<li>
		公司名称 ： <?php echo $config['name'];?></li>
	<li>
		公司网站 ：<a href="<?php echo $config['domain'];?>"><?php echo $config['domain'];?></a></li>
	<li>
		公司邮箱 ： <?php echo $config['email'];?></li>
	<li>
		联系电话 ： <?php echo $config['tel'];?> </li>
	<li>
		公司地址 ： <?php echo $config['address'];?></li>
</ul>

</ul>
<ul class="contactright" id="dituContent">
<iframe width="504" height="739" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/bzCoH"></iframe>
</ul>
</div>


<?php require 'footer.php'; ?>