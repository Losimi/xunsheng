<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui.min.css">
	<link rel="stylesheet" href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui-append.min.css">
	<style>
	ul li{
		list-style-type:none; 
	}
	a{
		color:#00007f;
		text-decoration:none;
	}
	a:hover{
		color: #bd0a01;
		text-decoration: underline;
	}
	h1{
		text-align: center;
	}
	.box{
		width: 180px;
		float: left;
		text-align: center;
	}
	.ul1{
		overflow: hidden;
		border: 1px solid pink;
	}
	.ul1 li.leve1 a{
		display: block;
		height: 30px;
		line-height: 30px;
		background:#17aec8;
		font-weight: 600;
		color: #34323f;
		text-indent: 14px;
		border-top:1px solid #c4d5df;
	}
	.ul1 li.leve1 a:hover{
		text-decoration: none;
	}
	.ul1 li.leve1 a.current{
		background:#d3b33d;
	}
	.ul1 li ul{
		overflow: hidden;
	}
	.ul1 li ul.leve2{
		display: none;
	}
	.ul1 li ul.leve2 li a{
		display: block;
		height: 30px;
		line-height: 30px;
		font-weight: 500;
		color:#d3d3df;
		text-indent: 20px;
		border-top: 0px solid #ffffff;
		overflow: hidden;
	}
	.ul1 li ul.leve2 li a:hover{
		color: #ff6;
	}	
	</style>
</head>
<body>
	<div class="sui-container">
		<div class="sui-layout">
  			<div class="sidebar">
  				<div class="box">
					<ul class="ul1">
						<li class="leve1">
							<a href="#">录入信息</a>
							<ul class="leve2">
								<li><a href="kecheng-input.php">课程录入</a></li>
								<li><a href="banji-input.php">班级录入</a></li>
								<li><a href="xuesheng-input.php">学生录入</a></li>
								<li><a href="chengjibiao-input.php">成绩录入</a></li>
							</ul>
						</li>
						<li class="leve1">
							<a href="#">修改信息</a>
							<ul class="leve2">
								<li><a href="kecheng-list.php">课程修改</a></li>
								<li><a href="banji-list-ajax.php">班级修改</a></li>
								<li><a href="xuesheng-list-ajax.php">学生修改</a></li>
								<li><a href="chengjibiao-list.php">成绩修改</a></li>
							</ul>
						</li>
						<li class="leve1">
							<a href="#">信息查询</a>
							<ul class="leve2">
								<li><a href="xinxi-input.php">学生信息查询</a></li>
								<li><a href="cjchaxun-input.php">成绩查询</a></li>
							</ul>
						</li>
						<li class="leve1">
							<a href="#">新闻管理</a>
							<ul class="leve2">
								<li><a href="xinwenfb-input.php">新闻发布</a></li>
								<li><a href="xinwenfb-list">新闻管理</a></li>
							</ul>
						</li>
						<li class="leve1">
							<a href="#">会员管理</a>
							<ul class="leve2">
								<li><a href="huiyuan-list">会员管理</a></li>
							</ul>
						</li>
					</ul>
				</div>
  			</div>
  			
		</div>
	</div>
</body>
</html>
<script src="http://g.alicdn.com/sj/lib/jquery.min.js"></script>
<script src="http://g.alicdn.com/sj/dpl/1.5.1/js/sui.min.js"></script>
<script>
	$('.sui-form #kcTime').datepicker({size:"small"});
	$(function(){
		$(".leve1>a").on("click",function(){
			$(this).addClass("current").next().show().parent().siblings().children("a").removeClass("current").next().hide();
			return false;
		})
	})
</script>
