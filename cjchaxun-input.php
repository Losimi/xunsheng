<?php include ("head.php");
        include("conn.php");
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
  				<p class="sui-text-xxlarge ">成绩查询</p>
  			<form action="cjchaxun-list.php" method="get" class="sui-form form-horizontal sui-validate">
				<div class="control-group">
					<label for="sName" class="control-label">姓名：</label>
					<div class="controls">
						<input type="hidden" name="namess" value="namess">
						<input type="text" id="sName" name="sName" class="input-large input-fat" placeholder="请输入姓名" data-rules="required|minlength=2|maxlength=10">
					</div>
				</div>
				<div class="control-group">
					<label for="sNumber" class="control-label">学号：</label>
					<div class="controls">
						<input type="text" id="sNumber" name="sNumber" class="input-large input-fat" placeholder="请输入学号" data-rules="required|minlength=2|maxlength=10">
					</div>
				</div>
				<div class="control-group">
					<label for="kcName" class="control-label">课程编号：</label>
					<div class="controls">
							<select id="kcName" name="kcName">
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
					<label for="inputEmail" class="control-label"></label>
					<div class="controls">
						<input type="submit" value="查询" class="sui-btn btn-large btn-primary">
					</div>
				</div>
			</form>

  			</div>
  		</div>
	</div>
<?php include ("jiao.php") ?>
