<?php require 'header.php'; ?>

<div class="flash">
<script language='javascript'>
linkarr = new Array();
picarr = new Array();
textarr = new Array();
var swf_width="100%";
var swf_height=418;
//文字颜色|文字位置|文字背景颜色|文字背景透明度|按键文字颜色|按键默认颜色|按键当前颜色|自动播放时间|图片过渡效果|是否显示按钮|打开方式
var configtg='0xffffff|2|0x3FA61F|5|0xffffff|0xC5DDBC|0x000033|2|3|1|_blank';
var files = "";
var links = "";
var texts = "";
//这里设置调用标记
picarr[1]  = "http://lcmjzs.com/uploads/150603/1-15060316241Y35.jpg";
picarr[2]  = "http://lcmjzs.com/uploads/150603/1-150603162202423.jpg";
picarr[3]  = "http://lcmjzs.com/uploads/150603/1-15060316205Q64.jpg";
picarr[4]  = "http://lcmjzs.com/uploads/150601/1-1506011553191S.jpg";
picarr[5]  = "http://lcmjzs.com/uploads/allimg/150601/1-1506011504270-L.jpg";

for(i=1;i<picarr.length;i++){
if(files=="") files = picarr[i];
else files += "|"+picarr[i];
}
for(i=1;i<linkarr.length;i++){
if(links=="") links = linkarr[i];
else links += "|"+linkarr[i];
}
for(i=1;i<textarr.length;i++){
if(texts=="") texts = textarr[i];
else texts += "|"+textarr[i];
}
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="http://lcmjzs.com/templets/default/images/bcastr3.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'">');
document.write('<embed src="http://lcmjzs.com/templets/default/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'&menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); 
document.write('</object>');
</script>

</div>
<div class="main" style="padding-top:18px;">
  <dl class="sjsd">
    <h3><a href="http://www.lcmjzs.com/xinwenzhongxin/">设计视点</a></h3>
    <dd>
    <li><img src="http://lcmjzs.com/images/defaultpic.gif" /><b><a href="/content.php?p=/shejishidian/203.html">办公室装修消防报批流程详细介绍</a></b><br />
        <a href="/content.php?p=/shejishidian/203.html">办公室装修消防报批流程详细介绍</a></li>
<li><img src="http://lcmjzs.com/uploads/150603/1-150603093P0G9.jpg" /><b><a href="/content.php?p=/shejishidian/126.html">室内装饰设计的六大要素要素</a></b><br />
        <a href="/content.php?p=/shejishidian/126.html">室内装饰设计的六大要素要素 一装饰要素</a></li>
<li><img src="http://lcmjzs.com/uploads/140721/1-140H1103133227.jpg" /><b><a href="/content.php?p=/shejishidian/109.html">室内环境设计美学分析</a></b><br />
        <a href="/content.php?p=/shejishidian/109.html">室内环境设计 与美学之间有着密不可分的</a></li>

    </dd>
  </dl>
  <dl class="about">
    <h3><a href="/about.php">关于我们</a></h3>
    <dd><img src="http://www.lcmjzs.com/templets/lcmjzs/lcsjimg/about.gif" />
      <p> <?php echo $config['name'];?>成立于2005年。经过多年发展已成为一家专业的办公室装修，餐厅装修，店铺装 修，写字楼装修，ktv装修，商业会所装修，网络服务一体化的服务企业。公司拥有国家设计与施工双重资质，合作设计和施工双甲级资质。</p>
    </dd>
  </dl>
  <dl class="news">
    <h3><a href="/news.php">新闻中心</a></h3>
    <dd>
    <li><a href="/content.php?p=/xingyexinwen/218.html">室内装修装饰前毛坯房验收之内容（1）</a><br />
        TINME: 2016-11-03</li>
<li><a href="/content.php?p=/xingyexinwen/217.html">室内装修装饰前毛坯房验收之内容（2）</a><br />
        TINME: 2016-11-03</li>
<li><a href="/content.php?p=/xingyexinwen/216.html">室内装修装饰前毛坯房验收之内容（3）</a><br />
        TINME: 2016-11-03</li>

    
      
    </dd>
  </dl>
</div>
<dl class="case">
  <h3><a href="javascript:;">装修案例</a></h3>
  <dd>
  <div class="clearfloat">
  <li>
       <a href="/case_detail.php?p=/shejianli/shangyekongjian/2016/1102/183.html"><img src="http://lcmjzs.com/uploads/allimg/161102/1-161102152923-lp.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/shangyekongjian/2016/1102/183.html">专卖店专修</a><br />
        TIME:2016-11-02</h4>
	</li>
<li>
       <a href="/case_detail.php?p=/shejianli/shangyekongjian/2015/0608/167.html"><img src="http://lcmjzs.com/uploads/150608/1-15060Q01G0K0.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/shangyekongjian/2015/0608/167.html">解放军总医院装修设计</a><br />
        TIME:2015-07-20</h4>
	</li>
<li>
       <a href="/case_detail.php?p=/shejianli/shangyekongjian/2015/0624/173.html"><img src="http://lcmjzs.com/uploads/150624/1-150624141100641.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/shangyekongjian/2015/0624/173.html">玉龙湾别墅装修设计</a><br />
        TIME:2015-06-24</h4>
	</li>
<li>
       <a href="/case_detail.php?p=/shejianli/shangyekongjian/2015/0606/162.html"><img src="http://lcmjzs.com/uploads/150606/1-150606095304D7.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/shangyekongjian/2015/0606/162.html">SPA美容养颜会所</a><br />
        TIME:2015-06-06</h4>
	</li>

  </div>
<div class="clearfloat">
  <li>
       <a href="/case_detail.php?p=/shejianli/bangongkongjian/2016/1102/191.html"><img src="http://lcmjzs.com/uploads/allimg/161102/1-161102155625.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/bangongkongjian/2016/1102/191.html">中信府别墅装修</a><br />
        TIME:2016-11-02</h4>
   </li>
<li>
       <a href="/case_detail.php?p=/shejianli/bangongkongjian/2016/1102/190.html"><img src="http://lcmjzs.com/uploads/allimg/161102/1-161102155414.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/bangongkongjian/2016/1102/190.html">旧宫装修</a><br />
        TIME:2016-11-02</h4>
   </li>
<li>
       <a href="/case_detail.php?p=/shejianli/bangongkongjian/2016/1102/189.html"><img src="http://lcmjzs.com/uploads/allimg/161102/1-161102155137.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/bangongkongjian/2016/1102/189.html">健身房装修</a><br />
        TIME:2016-11-02</h4>
   </li>
<li>
       <a href="/case_detail.php?p=/shejianli/bangongkongjian/2016/1102/188.html"><img src="http://lcmjzs.com/uploads/allimg/161102/1-161102155020-lp.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/bangongkongjian/2016/1102/188.html">典当行装修</a><br />
        TIME:2016-11-02</h4>
   </li>

   </div>
	<div class="clearfloat">
  <li>
       <a href="/case_detail.php?p=/shejianli/canyinjiudian/2015/0605/147.html"><img src="http://lcmjzs.com/uploads/150605/1-15060510495M32.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/canyinjiudian/2015/0605/147.html">陕西省军区酒店</a><br />
        TIME:2015-06-05</h4>
	 </li>
<li>
       <a href="/case_detail.php?p=/shejianli/canyinjiudian/2015/0604/144.html"><img src="http://lcmjzs.com/uploads/150604/1-1506041K025U7.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/canyinjiudian/2015/0604/144.html">内门宾馆装修设计</a><br />
        TIME:2015-06-04</h4>
	 </li>
<li>
       <a href="/case_detail.php?p=/shejianli/canyinjiudian/2015/0604/143.html"><img src="http://lcmjzs.com/uploads/150604/1-1506041J22XM.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/canyinjiudian/2015/0604/143.html">金孔雀国际酒店装修项目</a><br />
        TIME:2015-06-04</h4>
	 </li>
<li>
       <a href="/case_detail.php?p=/shejianli/canyinjiudian/2015/0604/142.html"><img src="http://lcmjzs.com/uploads/150604/1-1506041I230E9.jpg" /></a>
      <h4><a href="/case_detail.php?p=/shejianli/canyinjiudian/2015/0604/142.html">中餐厅装修案例</a><br />
        TIME:2015-06-04</h4>
	 </li>

  </div>
   
  <div class="clearfloat">
  
  </div>
  </dd>
</dl>
<div class="service">
  <h3><a href="javascript:;">服务范围</a></h3>
  <dl class="serbg">
  <h3><a href="javascript:;">办公空间</h3>
  <dd><a href="/content.php?p=/bangongkongjian/2016/1103/202.html">办公室如何装修使用才回更加的舒服</a></dd>
<dd><a href="/content.php?p=/bangongkongjian/2016/1103/201.html">看办公室风格如何巧妙搭配办公用具</a></dd>
<dd><a href="/content.php?p=/bangongkongjian/2016/1103/200.html">解析办公室装修中洽谈室的设计理念</a></dd>
<dd><a href="/content.php?p=/bangongkongjian/2016/1103/199.html">什么样的办公室装修才是好装修</a></dd>
<dd><a href="/content.php?p=/bangongkongjian/2016/1103/198.html">现代办公室改造的五大技巧</a></dd>
<dd><a href="/content.php?p=/bangongkongjian/2016/1103/197.html">小型办公室装修设计技巧</a></dd>

    
  </dl>
  <dl class="sercy">
    <h3><a href="javascript:;">餐饮酒店</h3>
  <dd><a href="/content.php?p=/canyinjiudian/2016/1103/235.html">酒楼装修指南</a></dd>
<dd><a href="/content.php?p=/canyinjiudian/2016/1103/234.html">餐饮装修_择吉开张</a></dd>
<dd><a href="/content.php?p=/canyinjiudian/2016/1103/233.html">酒店装修施工流程</a></dd>
<dd><a href="/content.php?p=/canyinjiudian/2016/1103/232.html">酒店装修,餐厅装修的流程与步骤</a></dd>
<dd><a href="/content.php?p=/canyinjiudian/2016/1103/231.html">办公装修厨房设计的一般原则（1）</a></dd>
<dd><a href="/content.php?p=/canyinjiudian/2016/1103/230.html">办公装修厨房设计的一般原则（2）</a></dd>

  </dl>
  <dl class="sersy">
   <h3><a href="javascript:;">商业展示空间</h3>
  <dd><a href="/content.php?p=/shangyekongjian/2015/0605/159.html">展馆设计的注意要点分析</a></dd>
<dd><a href="/content.php?p=/shangyekongjian/2015/0417/119.html">分析会所装修设计的注意事项</a></dd>
<dd><a href="/content.php?p=/shangyekongjian/2014/0923/117.html">现代公共厅堂设计对于光的要求</a></dd>
<dd><a href="/content.php?p=/shangyekongjian/2014/0902/116.html">品牌店面设计的基本要素</a></dd>
<dd><a href="/content.php?p=/shangyekongjian/2014/0825/115.html">商场店面设计的五项原则</a></dd>
<dd><a href="/content.php?p=/shangyekongjian/2014/0630/105.html">细说室内设计风格</a></dd>

  </dl>
</div>
<div class="service ser2">
  <dl class="serbg">
  <h3><a href="javascript:;">娱乐会所</h3>
  <dd><a href="/content.php?p=/fuwufanwei/yulehuisuo/2016/1103/249.html">会所装修与运营</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/yulehuisuo/2016/1103/248.html">会所装修设计_细节决定成败</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/yulehuisuo/2016/1103/247.html">会所装修设计与经营</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/yulehuisuo/2016/1103/246.html">浅析休闲会所的类型与经营特色</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/yulehuisuo/2016/1103/245.html">休闲会所装修应该将商业与文化完美融合</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/yulehuisuo/2016/1103/244.html">会所装修设计要注重客户体验与装饰风格</a></dd>

    
  </dl>
  <dl class="sercy">
    <h3><a href="javascript:;">环艺/场馆</h3>
  <dd><a href="/content.php?p=/fuwufanwei/huanyichangdiguihua/2015/0610/171.html">博物馆设计的注意事项</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/huanyichangdiguihua/2015/0605/160.html">博物馆设计的八大注意事项</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/huanyichangdiguihua/2015/0605/158.html">园林景观规划设计的基本要求</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/huanyichangdiguihua/2015/0605/157.html">花园别墅园艺设计的要求</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/huanyichangdiguihua/2015/0605/156.html">环艺设计的四大分类说明</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/huanyichangdiguihua/2015/0605/155.html">园林景观规划设计注意的几个方面</a></dd>

  </dl>
 <dl class="sersy">
   <h3><a href="javascript:;">医院/学校/幼儿园</h3>
  <dd><a href="/content.php?p=/fuwufanwei/yiyuan_xuexiao_youeryuan/2015/0609/170.html">幼儿园装修设计注意的几个方面</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/yiyuan_xuexiao_youeryuan/2015/0606/166.html">医疗建筑设计阶段需要注意哪些？</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/yiyuan_xuexiao_youeryuan/2015/0606/165.html">幼儿园设计方案最终确定前的思考问题</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/yiyuan_xuexiao_youeryuan/2015/0606/164.html">幼儿园室外空间设计的基本要求</a></dd>
<dd><a href="/content.php?p=/fuwufanwei/yiyuan_xuexiao_youeryuan/2015/0606/163.html">幼儿园设计中常用的壁纸的种类</a></dd>

  </dl>
</div>


<?php require 'footer.php'; ?>