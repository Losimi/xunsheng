 <?php include ("head.php") ?>

	<div class="nav">
		<div class="kuang"> 
		   <?php include ("left.php") ?>
		</div>
<?php include("jiao.php") ?>
<script>
	document.cookie="uname=lou";
	// 第一种
	// document.cookie="uname=lou;expires=Thu,22 Aug 2018:00:00:00 GMT";
	// 第二种	
	var days=30;
	var daysTime = 30*24*60*1000;//转化为秒数
	var exp =new Date();
	exp.setTime(exp.getTime()+daysTime)//设置30天后
	document.cookie="uname=lou;expires="+exp.toGMTString();
	// var password="123456";
	// document.cookie="password="+password;
</script>