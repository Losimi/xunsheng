<?php include ("head.php") 	?>	
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
$sql = "select id,学号,课程编号,成绩 from chengjibiao where id={$kid}";
$result = mysqli_query($conn,$sql);
//输出数据
if (mysqli_num_rows($result) > 0) {
	//将查询的结果转换成关联数组
	 $row = mysqli_fetch_assoc($result);
}else{
	echo "没有记录";
}
$sql3="select distinct 课程编号 from chengjibiao";
		$result3 = mysqli_query($conn,$sql3);
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
  				<p class="sui-text-xxlarge my-padd">成绩列表</p>
  				<form action="chengjibiao-save.php" method="get" class="sui-form form-horizontal sui-validate">
  					<div class="control-group">
    					 <label for="xuehao" class="control-label">学号</label>
					     <div class="controls">
					     <!-- 增加一个隐藏的input,用来区分是新增的数据还是修改数据 -->
			    			<input type="hidden" name="action" value="update">
			    		<!-- 增加一个隐藏的input,保存课程编号 -->
			    			<input type="hidden" name="kid" value="<?php echo $row['id'] ?>">	
					        <input type="text" value="<?php echo $row['学号'] ?>" id="xuehao" name="xuehao" class="input-large input-fat" placeholder="输入学号" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="kecheng" class="control-label">课程编号</label>
					     <div class="controls">
					        <!-- <input type="text" value="<?php  echo $row['课程编号'] ?>" id="kecheng" name="kecheng" class="input-large input-fat" placeholder="课程编号"> -->
					        <select name="kecheng" id="kecheng">
					        	
							 <?php 
									if(mysqli_num_rows($result3) > 0 ){
										while ($row = mysqli_fetch_assoc($result3)) {
											echo "<option value='{$row['课程编号']}'>{$row['课程编号']}</option>";
										}
									} else {
										echo "<option value=''>课程编号选择</option>";
									}
									?>
					        </select>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="chengji" class="control-label">成绩</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['成绩'] ?>" id="chengji" name="chengji" class="input-large input-fat" placeholder="成绩">
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
