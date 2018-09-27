<?php include ("head.php");
	$kid=empty($_GET['kid'])?"null":$_GET['kid'];
	include ("conn.php");
//执行SQL语句
	
$sq2="select distinct name from newscolumn";
$result2 = mysqli_query($conn,$sq2);
$sql = "select * from xinwenfb where id='{$kid}'";
$result = mysqli_query($conn,$sql);
//输出数据
if (mysqli_num_rows($result) > 0) {
	//将查询的结果转换成关联数组
	 $row = mysqli_fetch_assoc($result);
}else{
	echo "没有记录";
}
mysqli_close($conn);
?>
	<div class="nav">
		<div class="kuang"> 
		   <?php include ("left.php")  ?>
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge my-padd">新闻修改</p>
  				<form action="xinwenfb-save.php" method="post" class="sui-form form-horizontal sui-validate" enctype="multipart/form-data">
  					<div class="control-group">
    					 <label for="biaoti" class="control-label">标题</label>
					     <div class="controls">
					     <!-- 增加一个隐藏的input,用来区分是新增的数据还是修改数据 -->
			    			<input type="hidden" name="action" value="update">
			    		<!-- 增加一个隐藏的input,保存课程编号 -->
			    			<input type="hidden" name="kid" value="<?php echo $row['id'] ?>">	
					        <input type="text" id="biaoti" name="biaoti" class="input-large input-fat" placeholder="输入标题" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">肩题</label>
					     <div class="jianti">
					        <input type="text" id="jianti" name="jianti" class="input-large input-fat" placeholder="输入肩题" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="zuozhe" class="control-label">作者</label>
					     <div class="controls">
					        <input type="text" id="zuozhe" name="zuozhe" readonly="readonly" value="<?php echo $_SESSION['usname'] ?>" 
					        class="input-large input-fat" placeholder="作者名字" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">图片</label>
					     <div class="controls">
					     	<input type="file" name="file" value="<?php echo $row['图片']; ?>">
							<img width="80px" height="150px" src="<?php echo $row['图片']; ?>" >
					     </div>
					</div>
					<div class="control-group">
    					 <label for="lanmu" class="control-label">栏目：</label>
					     <div class="controls">
					        <select name="lanmu" id="lanmu">
					        	<?php 
					        	if(mysqli_num_rows($result2) > 0 ){
									while ($row = mysqli_fetch_assoc($result2)) {
										echo "<option value='{$row['name']}'>{$row['name']}</option>";
									}
								} else {
									echo "<option value=''>栏目选择</option>";
								}
					        	 ?>
					        </select>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">时间</label>
					     <div class="controls">
					        <input type="text" id="kcTime" name="kcTime" class="input-large input-fat" placeholder="kcTime">
					     </div>
					</div>
					<div class="control-group">
					    <h3>内容</h3>
					    <textarea id="editor" name="editor" style="width:800px;height:50px;"></textarea>
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
