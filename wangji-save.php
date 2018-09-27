<?php 
	$youjian =$_GET["youjian"];
	$tishi=$_GET["tishi"];
	$daan=$_GET["daan"];
	
	include("conn.php");
		$str="登录成功";
		$str2="登录失败";
		$sql1="select*from user where email='$youjian'and question='$tishi'and answer='$daan'";
 		$result = mysqli_query($conn,$sql1);
 // 输出数据
 if ($result){
 	echo "<script> alert('{$str}');<script>";
 	header("refresh:1;url=index.php");
 }else{
 	echo "<script> alert('{$str2}');<script>";
 	header("refresh:1;url=wangji.php");
 }
 //关闭数据库
 mysqli_close($conn);
 ?>

