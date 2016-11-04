<?php require 'header.php'; ?>

<?php 
	$content = get_content();
	//文档：https://packagist.org/packages/bupt1987/html-parser
	$dom = new \HtmlParser\ParserDom($content);
	$html = $dom->find('div.contnews', 0)->innerHtml();
	$html = str_replace(array('http://www.lcmjzs.com', '北京联创美建筑装饰有限公司'), array('/', $config['name']), $html);
	$html = preg_replace('/<a href="\/lldgs.com\/project\/".*?<\/a>/U', '', $html);
?>

<div class="banner"><img src="http://www.lcmjzs.com/templets/lcmjzs/lcsjimg/banner.gif" /></div>
<div class="place"><h3>
 
<a href="javascript:;"><font>内容中心</font> / ABOUT</a></h3><span class="pre">当前位置：<a href='/'>网站首页</a> <a href='javascript:;'>内容中心</a></span></div>
<div class="contnews">
<?php echo $html;?>
</div>
<?php require 'footer.php'; ?>