<?php include ("head.php"); 
		include ("conn.php");
		$sql="select distinct 班号 from xuesheng";
		$result = mysqli_query($conn,$sql);
?>
<body>
	<div class="nav">
		<div class="kuang"> 
		  <?php include ("left.php") ?>	
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge ">学生录入</p>
  				<form action="xuesheng-save.php" method="post" class="sui-form form-horizontal sui-validate" enctype="multipart/form-data">
  					<div class="control-group">
    					 <label for="sNumber" class="control-label">学号</label>
					     <div class="controls">
					        <input type="text" id="sNumber" name="sNumber" class="input-large input-fat" placeholder="输入学号" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="bjNumber" class="control-label">班号</label>
					     <div class="controls">
					        <!-- <input type="text" id="kcName2" name="kcName2" class="input-large input-fat" placeholder="班长名字" data-rules='required|minlength=2|maxlength=10'> -->
					        <select name="bjNumber" id="bjNumber">
					        <?php
								if( mysqli_num_rows($result) > 0 ){
								while ( $row = mysqli_fetch_assoc($result) ) {
									echo "<option value='{$row['班号']}'>{$row['班号']}</option>";
								}
								}else{
								echo "<option value=''>添加班级信息</option>";
								
								}
								?>  	
					        </select>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="sName" class="control-label">姓名</label>
					     <div class="controls">
					        <input type="text" id="sName" name="sName" class="input-large input-fat" placeholder="输入名字" data-rules='required'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="sName" class="control-label">照片</label>
					     <div class="controls">
					        <input type="file" name="file">
					     </div>
					</div>
					<div class="control-group">
				  	  <label for="sSex" class="control-label">性别：</label>
				    	<div class="controls">
				     		<label class="radio-pretty inline checked">
					    		<input type="radio" value="1" checked="checked" name="sSex"><span>男</span>
					  		</label>
					  		<label class="radio-pretty inline">
					    		<input type="radio" value="0" name="sSex"><span>女</span>
					  		</label>
				      	</div>
				    </div>
					<div class="control-group">
    					 <label for="sBrithday" class="control-label">日期</label>
					     <div class="controls">
					        <input type="text" id="sBrithday" name="sBrithday" class="input-large input-fat" placeholder="日期" data-toggle='datepicker'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="sphone" class="control-label">联系电话</label>
					     <div class="controls">
			      			<input type="text" id="sPhone" name="sPhone" class="input-large input-fat"   placeholder="输入电话" data-rules="mobile">
			    		 </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label"></label>
					     <input type="submit" class="sui-btn btn-large btn-primary" value="提交" name="">
					</div>
  				</form>
  			</div>
  		</div>
  		<?php include ("jiao.php") ?>