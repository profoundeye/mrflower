<?php
	$collection = file_get_contents("collection.json");
	$o = json_decode($collection,true);
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>花瓶先生：您的私人花瓶管家。每周焕然一新的鲜花和心情</title>
<meta content="按月订购,花瓶先生,鲜花" name=keywords>
<meta content="按月订购鲜花，每周递送到您家" name="description">
<link rel="stylesheet" type="text/css" href="a/s.css" />
<script type="text/javascript" src="a/jquery.js"></script>
</head>
<body>
	<div id="nav">
		<div class="logo">花瓶先生
		<!--<p class="link"><span class="select" rel="0">本周</span><span rel="1">过往</span></p>-->
		</ul>
		</div>
	</div>
	
	
	<div class="mainFlower nowFlower">
		<div class="buyInfoPos">
					<ul id="collection">
						<li class="select" rel="0">点缀系列</li>
						<li rel="1">钟爱系列</li>		
					</ul>
			
			<div id="info">
				<div id="mrFlower"> 
				<b>{我是花瓶先生}</b>
				<p>花瓶先生是我<br />
花瓶不该是空虚的，生活不该是孤单的。<br />
在我梦中，<br />每一只花瓶都有花香陪伴，都被赋予生命。<br />
每周焕然一新的鲜花和心情<br />
我是花瓶先生<br />
				</p>				
			</div>
				<a href="#" class="order">立刻订购<span>，每月四次，仅需233元</span></a>
				<p class="buyInfo">
					·花瓶先生目前只服务于杭州地区。<br />
					·每周会有不同的当季鲜花。<br />
					·您现在订购，会在下周一收到由右侧花材组成的花束。<br />
					
				</p>				
			</div>			
		</div>
		
		<?php
			foreach($o as $k=>$_o){
		?>
		<ul class="itemList <?if($k!=0)echo "none"?>">
			<?
			foreach($_o as $i){	
			?>
			<li>
				<div class="mask"></div>
				<img src="<?echo $i['img']?>" />
				<div class="dec"><p><span><b>主花：</b><?echo $i['info']?></span></p></div>
			</li>
			<?}?>
		</ul>
		<?php
				
			}
		?>			
	</div>
	
	
	
	
	<div class="mainFlower list">
		<ul>
			<li>
				<img src="https://hbloom-prod.s3.amazonaws.com/prod/prdb/images/26184/1362844766196-Parrot%20Tulips.jpg" />
				<p class="dec">
					<span>本周</span>
					厄瓜多尔玫瑰称为玫瑰中的劳斯莱斯。厄瓜多尔庄园凯扬波镇，坐落在安第斯山海拔三千多米的高处、位于科托帕克希火山地区。roseonly此次情人节的精选玫瑰（True Love）全部采用厄瓜多尔庄园玫瑰，顶级“雪球”白色玫瑰花型硕大雪白与全部的爱搭配
				</p>
			</li>
						<li>
				<img src="https://hbloom-prod.s3.amazonaws.com/prod/prdb/images/26184/1362844766196-Parrot%20Tulips.jpg" />
				<p class="dec">
					<span>本周</span>
					厄瓜多尔玫瑰称为玫瑰中的劳斯莱斯。厄瓜多尔庄园凯扬波镇，坐落在安第斯山海拔三千多米的高处、位于科托帕克希火山地区。roseonly此次情人节的精选玫瑰（True Love）全部采用厄瓜多尔庄园玫瑰，顶级“雪球”白色玫瑰花型硕大雪白与全部的爱搭配
				</p>
			</li>
						<li>
				<img src="https://hbloom-prod.s3.amazonaws.com/prod/prdb/images/26184/1362844766196-Parrot%20Tulips.jpg" />
				<p class="dec">
					<span>本周</span>
					厄瓜多尔玫瑰称为玫瑰中的劳斯莱斯。厄瓜多尔庄园凯扬波镇，坐落在安第斯山海拔三千多米的高处、位于科托帕克希火山地区。roseonly此次情人节的精选玫瑰（True Love）全部采用厄瓜多尔庄园玫瑰，顶级“雪球”白色玫瑰花型硕大雪白与全部的爱搭配
				</p>
			</li>
						<li>
				<img src="https://hbloom-prod.s3.amazonaws.com/prod/prdb/images/26184/1362844766196-Parrot%20Tulips.jpg" />
				<p class="dec">
					<span>本周</span>
					厄瓜多尔玫瑰称为玫瑰中的劳斯莱斯。厄瓜多尔庄园凯扬波镇，坐落在安第斯山海拔三千多米的高处、位于科托帕克希火山地区。roseonly此次情人节的精选玫瑰（True Love）全部采用厄瓜多尔庄园玫瑰，顶级“雪球”白色玫瑰花型硕大雪白与全部的爱搭配
				</p>
			</li>
		</ul>
	</div>
	<div class="info">
		<img class="wx" src="a/wx.gif" width="140px" height="140px" /><span class="wxh">微信号：花瓶先生</span>
		<div class="logo">花瓶先生</div>
		<span>提供每月定时鲜花送达服务，让生活充满灵动.</span>
	</div>
	<!--<div id="foot">
		<ul>
			<li>关于我们</li>
		</ul>
	</div>-->
	<script type="text/javascript">
		$("#collection li").click(function(el){
			$("#collection li").removeClass("select")			
			$(this).addClass("select");
			rel = $(this).attr("rel");
			obj = $(".itemList")[rel];
			$(".itemList").addClass('none');
			$(obj).removeClass('none');
			})
	</script>
</body>
</html>
