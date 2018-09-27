<?php 
	$conn = mysqli_connect("localhost","root","");
	if ($conn) {
		// echo "连接成功!";
	} else {
		// die("连接失败!".mysqli_connect_error());
	}
	// 选择要操作的数据库
	mysqli_select_db($conn,"student_lou");
	// 设置读取数据库的编码, 不然显示汉字为乱码

	mysqli_query($conn,"set names utf8");

	$email=$_REQUEST["email"];//是按后面的键来接收的
	$sql="select*from user where email='email'";
	$result=mysqli_query($conn,$sql);
	// 如果有这么一个记录，说明email已经注册过了
	if (mysqli_num_rows($result)>0) {
		echo "error";
	}else{
		echo "ok";
	};
	// $name =$_REQUEST["name"];
	// $password = $_REQUEST["password"];
	// $repassword = $_REQUEST["repassword"];
	// $yanzhengma = $_REQUEST["yanzhengma"];
	// $tishi=$_REQUEST["tishi"];
	// $daan=$_REQUEST["daan"];
	// $sql2="insert into user (email,name,password,question,answer) values('$email','$name','$password','$tishi','$daan')";
	// $result2=mysqli_query($conn,$sql2);
	// if ($result2){
 // 		echo "<script> alert('{$str}');<script>";
 // 	header("refresh:1;url=denglu.php");
 // 	}else{
 // 	echo "数据更新失败".mysqli_error($conn);

 ?>