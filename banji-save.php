<?php 
	$kcName1 = empty($_GET["kcName1"])?"null":$_GET["kcName1"];
	$kcName2 =  empty($_GET["kcName2"])?"null":$_GET["kcName2"];
	$kcName3 = empty($_GET["kcName3"])?"null":$_GET["kcName3"];
	$kcName4 = empty($_GET["kcName4"])?"null":$_GET["kcName4"];
	$kcName5 =  empty($_GET["kcName5"])?"null":$_GET["kcName5"];
	
	// 如果是录入页面的话，那么$active等于“add”
	$action = empty($_GET["action"])?"add":$_GET["action"];
	if($action=='add'){
		$str="数据添加成功!";
		$str2="数据添加失败!";
		$url= "banji-input.php";
		$sql1="insert into banji ( 班号,班长,教室,班主任,班级口号 ) value ('$kcName1','$kcName2','$kcName3','$kcName4','$kcName5' )";
	}else if($action=="update"){
		$str="数据更新成功";
		$str2="数据更新失败!";
		$url= "banji-list.php";
		$kcName1= $_GET["kcName1"];
		$sql1="update banji set 班号='{$kcName1}',班长='{$kcName2}',教室='{$kcName3}',班主任='{$kcName4}',班级口号='{$kcName5}'where 班号='{$kcName1}'";
	}else{
		die("请选择操作方法");
	}

include("conn.php");
 $result = mysqli_query($conn,$sql1);
 // 输出数据
 if ($result){
 	echo "<script> alert('{$str}');<script>";
 	header("refresh:1;url=banji-input.php");
 }else{
 	echo "数据更新失败".mysqli_error($conn);
 }
 //关闭数据库
 mysqli_close($conn);
 ?>

