<?php include ("head.php"); 
		include ("conn.php");
		$sql="select distinct 课程编号 from chengjibiao";
		$result = mysqli_query($conn,$sql);
?>
<body>
	<div class="nav">
		<div class="kuang"> 
		   <?php include ("left.php")  ?>
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge ">成绩录入</p>
  				<form action="chengjibiao-save.php" method="get" class="sui-form form-horizontal sui-validate">
  					<div class="control-group">
    					 <label for="xuehao" class="control-label">学号</label>
					     <div class="controls">
					        <input type="text" id="xuehao" name="xuehao" class="input-large input-fat" placeholder="输入学号" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="kecheng" class="control-label">课程编号</label>
					     <div class="controls">
					       	<select id="kecheng" name="kecheng">
							<?php 
								if(mysqli_num_rows($result) > 0 ){
									while ($row = mysqli_fetch_assoc($result)) {
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
					        <input type="text" id="chengji" name="chengji" class="input-large input-fat" placeholder="成绩" data-rules='required|minlength=2|maxlength=10' >
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
