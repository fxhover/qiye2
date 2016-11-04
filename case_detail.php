<?php require 'header.php'; ?>

<?php 
	$content = get_content();
	//文档：https://packagist.org/packages/bupt1987/html-parser
	$dom = new \HtmlParser\ParserDom($content);
	$html = $dom->find('div.contmain', 0)->innerHtml();
	//$html = str_replace(array('http://www.lcmjzs.com', '北京联创美建筑装饰有限公司'), array('/', $config['name']), $html);
	//$html = preg_replace('/<a href="\/lldgs.com\/project\/".*?<\/a>/U', '', $html);
	$html = preg_replace("/src=\"(.*?)\"/i", "src=\"http://www.lcmjzs.com$1\"", $html);
?>
<script type="text/javascript">
	function AutoResizeImage(maxWidth,maxHeight,objImg){
		var img = new Image();
		img.src = objImg.src;
		var hRatio;
		var wRatio;
		var Ratio = 1;
		var w = img.width;
		var h = img.height;
		wRatio = maxWidth / w;
		hRatio = maxHeight / h;
		if (maxWidth ==0 && maxHeight==0){
			Ratio = 1;
		}else if (maxWidth==0){//
			if (hRatio<1) Ratio = hRatio;
		}else if (maxHeight==0){
			if (wRatio<1) Ratio = wRatio;
		}else if (wRatio<1 || hRatio<1){
			Ratio = (wRatio<=hRatio?wRatio:hRatio);
		}
		if (Ratio<1){
			w = w * Ratio;
			h = h * Ratio;
		}
		objImg.height = h;
		objImg.width = w;
	}

	function addColor(){
		var sml=document.getElementsByClassName("s_img");
		for(var i=0;i<sml.length;i++){
			sml[0].style.border="solid 1px #f00";
		}
	} 
</script>

<div class="banner"><img src="http://www.lcmjzs.com/templets/lcmjzs/lcsjimg/banner.gif" /></div>
<div class="place"><h3><a href="javascript:;"><font>案例详情</font> / ABOUT</a></h3><span class="pre">当前位置：<a href='/'>网站首页</a> > <a href='/cases.php'>装修案例</a> > <a href='javascript:;'>案例详情</a> > </span></div>
<div class="contmain">
	<?php echo $html;?>
</div>
 <script>
function getSrc(id){
	document.getElementById("bigpicimg").src=id.src;
	
	var big=document.getElementById("bigpicimg").src;
	var small=document.getElementsByClassName("s_img");
	for(var i=0;i<small.length;i++){
		
		if(big==small[i].src){
		small[i].style.border="solid 1px #f00";
			}else{
			small[i].style.border="solid 1px #CCCCCC";
			}
		}
	}		
 </script>  

 <?php require 'footer.php'; ?>