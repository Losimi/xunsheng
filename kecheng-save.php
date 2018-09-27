<?php 
	$kcName = $_GET["kcName"];
	$kcTime = $_GET["kcTime"];
	// $kid=$_GET["kid"];
	// 如果是录入页面的话，那么$active等于“add”
	$action = empty($_GET["action"])?"add":$_GET["action"];
	if($action=='add'){
		$str="数据添加成功!";
		$str2="数据添加失败!";
		$url = "kecheng-input.php";
		$sql1="insert into kechengbiao(课程名,时间) values('$kcName','$kcTime')";
	}else if($action=="update"){
		$str="数据更新成功";
		$str2="数据添加失败!";
		$url = "kecheng-list.php";
		$kid = $_GET["kid"];
		$sql1="update kechengbiao set  课程编号='{$kid}',课程名='{$kcName}',时间='{$kcTime}' where 课程编号='{$kid}'";
	}else{
		die("请选择操作方法");
	}

include("conn.php");
 $result = mysqli_query($conn,$sql1);
 // 输出数据
 if ($result){
 	echo "<script> alert('{$str}');<script>";
 	header("refresh:1;url=kecheng-input.php");
 }else{
 	echo "数据更新失败".mysqli_error($conn);
 }
 //关闭数据库
 mysqli_close($conn);
 ?>

