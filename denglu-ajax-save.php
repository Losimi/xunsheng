<?php 
	session_start();
	$email =$_REQUEST["email"];
	$password = $_REQUEST["password"];

	$responseArr=array(
		"code"=>200,
		"msg"=>"登陆成功"
		);
	include("conn2.php");
	// $str="登录成功";
	// $str2="登录失败";
	// $sql1="select * from user where email='$email'and password='$password'";
	$sql="select * from user where email='{$email}'";
 	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		//提示邮箱正确
		// 如果邮箱正确，在判断用户提交的密码和上一步查询到密码是否相同，相等则密码正确，否则密码错误
		$arr=mysqli_fetch_assoc($result);
		if ($password==$arr["password"]) {
			// 密码正确
			$_SESSION['usemail']=$arr["email"];
			$_SESSION['usname']=$arr["name"];
			$_SESSION['usid']=$arr["id"];
		}else{
			// 邮件正确但密码错误
			$responseArr["code"]=20001;
			$responseArr["msg"]="密码错误";
		}
	}else{
		// 邮箱不存在
			$responseArr["code"]=20004;
			$responseArr["msg"]="邮件不存在";
	}
	// print_r($arr);
	// print_r($responseArr);
	echo json_encode($responseArr);
	// 如果邮箱正确，在判断用户密码
	// if ($password==$result["password"]) {
		
	// }
 // // 输出数据
 // if (mysqli_num_rows($result)>=1){
 // 	$_SESSION['email']=$email;
 // 	echo "ok";
 // 	// header("refresh:100;url=index.php");
 // }else{
 // 	echo "error",mysqli_error($conn);
 // 	// echo "<script> alert('{$str2}');<script>";
 // 	// header("refresh:1;url=wangji.php");
 // }
 //   //关闭数据库
 mysqli_close($conn);
 ?>

