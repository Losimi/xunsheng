<?php include ("head.php") ?>	
<?php
	$kid=empty($_GET['kid'])?"null":$_GET['kid'];
	if($kid == "null"){
		echo "请选择要修改的纪录";
	}else{
		//创建连接
$conn = mysqli_connect("localhost","root","");

if ($conn) {
	echo "连接成功!";
}else{
	die("连接失败!".mysqli_connect_error());
}
//选择要操作的数据库
mysqli_select_db($conn,"student_lou");
//设置读取数据库的编码，不然显示汉字为乱码
mysqli_query($conn,"set names utf8");

//执行SQL语句
$sql = "select 班号,班长,教室,班主任,班级口号 from banji where 班号= '{$kid}' ";
$result = mysqli_query($conn,$sql);
//输出数据
if (mysqli_num_rows($result) > 0) {
	//将查询的结果转换成关联数组
	 $row = mysqli_fetch_assoc($result);
}else{
	echo "没有记录";
}
mysqli_close($conn);
	}
?>
<body>
	<h1>欢迎访问学生管理系统</h1>
	<div class="nav">
		<div class="kuang"> 
		   <?php include ("left.php")  ?>
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge my-padd">班级列表</p>
  				<form action="banji-save-list.php" method="get" class="sui-form form-horizontal sui-validate">
  					<div class="control-group">
    					 <label for="inputEmail" class="control-label">课程名</label>
					     <div class="controls">
					     <!-- 增加一个隐藏的input,用来区分是新增的数据还是修改数据 -->
			    			<input type="hidden" name="action" value="update">
			    		<!-- 增加一个隐藏的input,保存课程编号 -->
			    			<input type="hidden" name="kcName1" value="<?php echo $row['班号'] ?>">	
					        <input type="text" value="<?php echo $row['班号'] ?>" id="kcName1" name="kcName1" class="input-large input-fat" placeholder="输入班号" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">班长</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['班长'] ?>" id="kcName2" name="kcName2" class="input-large input-fat" placeholder="Email">
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">教室</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['教室'] ?>" id="kcName3" name="kcName3" class="input-large input-fat" placeholder="Email">
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">班主任</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['班主任'] ?>" id="kcName4" name="kcName4" class="input-large input-fat" placeholder="Email">
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">班级口号</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['班级口号'] ?>" id="kcName5" name="kcName5" class="input-large input-fat" placeholder="Email">
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label"></label>
					     <input type="submit" class="sui-btn btn-large btn-primary" value="提交" name="">
					</div>
  				</form>
  			</div>
  		</div>
	</div>
<?php include ("jiao.php") ?>
