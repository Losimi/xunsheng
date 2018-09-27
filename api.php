<?php 
include "conn2.php";
$action=empty($_REQUEST["action"])?"null":$_REQUEST['action'];
$responseArr=array(
	"code"=>200,
	"data"=>null,
	"msg"=>"数据获取成功",
	);
switch ($action) {
	case 'xuesheng':
		$sql="select * from ".$action;
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			$stdentlist=array();
			while ($row=mysqli_fetch_assoc($result)) {
				$stdentlist[]=$row;
			}
			// var_dump($stdentlist);
			$responseArr["data"]=$stdentlist;
		}else{
			$responseArr["code"]=207;
			$responseArr["msg"] ="暂无数据";
		}
		die(json_encode($responseArr));
		break;
	case 'banji':
		$sql1="select * from ".$action;
		$result=mysqli_query($conn,$sql1);
		if (mysqli_num_rows($result)>0) {
				$banjilist=array();
				while ($row=mysqli_fetch_assoc($result)) {
					$banjilist[]=$row;
				}
				$responseArr["data"]=$banjilist;
			}else{
				$responseArr["code"]=207;
				$responseArr["msg"]="暂无数据";
			}
			die(json_encode($responseArr));	
			break;

}
 ?>