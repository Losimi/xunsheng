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
$sql = "select 课程编号,课程名,时间 from kechengbiao where 课程编号={$kid}";
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
  				<p class="sui-text-xxlarge my-padd">课程修改</p>
  				<form action="kecheng-save.php" method="get" class="sui-form form-horizontal sui-validate">
  					<div class="control-group">
    					 <label for="inputEmail" class="control-label">课程编号</label>
					     <div class="controls">
					     <!-- 增加一个隐藏的input,用来区分是新增的数据还是修改数据 -->
			    			<input type="hidden" name="action" value="update">
			    		<!-- 增加一个隐藏的input,保存课程编号 -->
			    			<input type="hidden" name="kid" value="<?php echo $row['课程编号'] ?>">	
					        <input type="text" value="<?php echo $row['课程编号'] ?>" id="kid" name="kid" class="input-large input-fat" placeholder="编号" data-rules='required|minlength=1|'>
					     </div>
					</div>
  					<div class="control-group">
    					 <label for="inputEmail" class="control-label">课程名</label>
					     <div class="controls">
					        <input type="text" id="kcName" name="kcName" class="input-large input-fat" placeholder="输入名字" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">时间</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['时间'] ?>" id="kcTime" name="kcTime" class="input-large input-fat" placeholder="Email">
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
