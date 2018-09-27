<?php 
	session_start();
	$youjian =$_GET["youjian"];
	$password = $_GET["password"];
	include("conn2.php");
	$str="登录成功";
	$str2="登录失败";
	$sql1="select*from user where email='$youjian'and password='$password'";
 	$result = mysqli_query($conn,$sql1);
 // 输出数据
 if (mysqli_num_rows($result)>0){
 	//创建一个session，键为email，值为$youjian
 	$_SESSION['emails']="$youjian";
 	echo "<script> alert('{$str});<script>";
 	// header("refresh:100;url=index.php");
 }else{
 	echo "<script> alert('{$str2}');<script>";
 	// header("refresh:1;url=wangji.php");
 }
   //关闭数据库
 mysqli_close($conn);
 ?>

