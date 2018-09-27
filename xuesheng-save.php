<?php 
	$sNumber =$_REQUEST["sNumber"];
	$bjNumber =$_REQUEST["bjNumber"];
	$sName = $_REQUEST["sName"];
	$sSex= $_REQUEST["sSex"];
	$sBrithday = $_REQUEST["sBrithday"];
	$sPhone = $_REQUEST["sPhone"];

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 10241000))
{
	if ($_FILES["file"]["error"] > 0){
		echo "错误: " . $_FILES["file"]["error"] . "<br />";
	}else{
		// 重新给上传的文件命名, 增加一个年月日时分秒的前缀, 并且加上保存路径
		$filename = "upload/".date('YmdHis').$_FILES["file"]["name"];

		//move_uploaded_file()移动临时文件到上传的文件存放的位置,参数1.临时文件的路径, 参数2.存放的路径
		move_uploaded_file($_FILES["file"]["tmp_name"],$filename);  
	}
}else{
	echo "您上传的文件不符合要求";
}

	// 如果是录入页面的话，那么$active等于“add”
	$action = empty($_REQUEST["action"])?"add":$_REQUEST["action"];
	if($action=='add'){
		$str="数据添加成功!";
		$str2="数据添加失败!";
		$url = "xuesheng-input.php";
		$sql1="insert into xuesheng (学号,班号,姓名,照片,性别,日期,联系电话) values('$sNumber','$bjNumber','$sName','$filename','$sSex','$sBrithday','$sPhone')";
		
	}else if($action=="update"){
		$str="数据更新成功";
		$str2="数据更新失败!";
		$url = "xuesheng-list-ajax.php";
		$kid = $_REQUEST["kid"];
		$sql1="update xuesheng set id='{$kid}',学号='{$sNumber}',班号='{$bjNumber}',姓名='{$sName}',照片='{$filename}',性别='{$sSex}',日期='{$sBrithday}',联系电话='{$sPhone}' where id='{$kid}'";
	}else{
		die("请选择操作方法");
	}

include("conn.php");
 $result = mysqli_query($conn,$sql1);
 // 输出数据
 if ($result){
 	echo "<script> alert('{$str}');<script>";
 	header("refresh:2;url={$url}");
 }else{
 	echo $str2.mysqli_error($conn);
 }
 //关闭数据库
 mysqli_close($conn);
 ?>

