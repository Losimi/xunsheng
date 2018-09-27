<?php include "head.php";
	$kid=empty($_REQUEST['kid'])?"null":$_REQUEST["kid"];
	if($kid == "null"){
		echo "请选择要修改的纪录";
	}else{
	 include "conn.php";
//执行SQL语句
$sql = "select * from xuesheng where id={$kid} ";
$result = mysqli_query($conn,$sql);
//输出数据
if (mysqli_num_rows($result) > 0) {
	//将查询的结果转换成关联数组
	 $row = mysqli_fetch_assoc($result);
}else{
	echo "找不到该学生信息，请查学号是否正确";
}
}
?>
	<div class="nav">
		<div class="kuang"> 
		   <?php include "left.php"  ?>
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge my-padd">学生列表</p>
  				<form id="form2" action="xuesheng-save.php" method="post" class="sui-form form-horizontal sui-validate" enctype="multipart/form-data">
  					<div class="control-group">
    					 <label for="inputEmail" class="control-label">学号</label>
					     <div class="controls">
					         <!-- 增加一个隐藏的input,用来区分是新增的数据还是修改数据 -->
			    			<input type="hidden" name="action" value="update">
			    		     <!-- 增加一个隐藏的input,保存课程编号 -->
			    			<input type="hidden" name="kid" value="<?php echo $row['id'] ?>" >	
					        <input type="text" id="sNumber" value="<?php echo $row['学号'] ?>"  name="sNumber" class="input-large input-fat" placeholder="输入学号" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">班号</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['班号'] ?>" id="bjNumber" name="bjNumber" class="input-large input-fat" placeholder="输入班号">
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">姓名</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['姓名'] ?>" id="sName" name="sName" class="input-large input-fat" placeholder="输入姓名">
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">照片</label>
					     <div class="controls">
					     	<input type="file" name="file" value="<?php echo $row['照片']; ?>">
							<img width="80px" height="150px" src="<?php echo $row['照片']; ?>" >
					     </div>
					</div>
					<div class="control-group">
					    <label for="inputEmail" class="control-label">性别:</label>
					    <div class="controls" id="gender">
							<label class="radio-pretty inline <?php if ($row['性别']=="1"){echo 'checked';} ?>">
								<input type="radio" value="1" name="sSex" <?php if ($row['性别']=="1"){echo 'checked=checked';} ?>><span>男</span>
							</label>
							<label class="radio-pretty inline <?php if ($row['性别']=="0"){echo 'checked';} ?>">
								<input type="radio" value="0" name="sSex" <?php if ($row['性别']=="0"){echo 'checked=checked';} ?>><span>女</span>
							</label>
						</div>
				    </div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">日期</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['日期'] ?>" id="sBrithday" name="sBrithday" class="input-large input-fat" placeholder="输入riqi">
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">联系电话</label>
					     <div class="controls">
					        <input type="text" value="<?php  echo $row['联系电话'] ?>" id="sPhone" name="sPhone" class="input-large input-fat" placeholder="联系电话">
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
<?php include "jiao.php"; ?>