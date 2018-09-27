
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	.nav{
		width: 1200px;
		height: 600px;
		margin: 0 auto;
		border: 2px solid green;
	}
	.box{
		width: 350px;
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
	.kuang{
		width: 180px;
		height: 600px;
		float: left;
		border: 1px solid black;
	}
	.blue{
		width: 1000px;
		float: right;
	}
	.red{
		color:red;
	}
	</style>
</head>
<body>
	<h1>欢迎访问学生管理系统</h1>