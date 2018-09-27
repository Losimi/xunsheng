<?php 
	$xuehao = $_GET["xuehao"];
	$kecheng =  $_GET["kecheng"];
	$chengji = $_GET["chengji"];
	
	
	// 如果是录入页面的话，那么$active等于“add”
	$action = empty($_GET["action"])?"add":$_GET["action"];
	if($action=='add'){
		$str="数据添加成功!";
		$str2="数据添加失败!";
		$url = "chengjibiao-input.php";
		$sql1="insert into chengjibiao(学号,课程编号,成绩) value('$xuehao','$kecheng','$chengji')";
	}else if($action=="update"){
		$str="数据更新成功";
		$str2="数据更新失败!";
		$url= "chengjibiao-list.php";	
		$kid= $_GET["kid"];
		$sql1="update chengjibiao set id='{$kid}',学号='{$xuehao}',课程编号='{$kecheng}',成绩='{$chengji}' where id='{$kid}'";
	}else{
		die("请选择操作方法");
	}

include("conn.php");
 $result = mysqli_query($conn,$sql1);
 // 输出数据
 if ($result){
 	echo "<script> alert('{$str}');<script>";
 	header("refresh:1;url=chengjibiao-input.php");
 }else{
 	echo "数据更新失败".mysqli_error($conn);
 }
 //关闭数据库
 mysqli_close($conn);
 ?>

