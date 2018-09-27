<?php 
	$youxiang =$_GET["youxiang"];
	$name =$_GET["name"];
	$password = $_GET["password"];
	$repassword = $_GET["repassword"];
	$yanzhengma = $_GET["yanzhengma"];
	$tishi=$_GET["tishi"];
	$daan=$_GET["daan"];
	$action =empty($_GET["action"])?"add":$_GET["action"];
	if ($action=='add') {
		$str="数据添加成功，注册成功";
		$str2="数据添加失败，注册失败";
		$url="zhuce.php";
		$sql1="insert into user (email,name,password,question,answer) value('$youxiang','$name','$password','$tishi','$daan')";
	 	}else if($action=="update"){
	 		$str="数据跟新成功";
	 		$str2="数据跟新失败";
	 		$url="huiyuan-list.php";
	 	$sql1="update huiyuan set id='{$kid}',email='{$youxiang}',name='{$name}',question='{$tishi}' where id='{$kid}'";
	 	}
 		include("conn.php");
 		$result=mysqli_query($conn,$sql1);
 	 // 输出数据
 if ($result){
 		echo "<script> alert('{$str}');<script>";
 	header("refresh:1;url=denglu.php");
 }else{
 	echo "数据更新失败".mysqli_error($conn);
 }
 //关闭数据库
 mysqli_close($conn);
 ?>

