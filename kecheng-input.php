<?php include ("head.php") ?>	
<body>
	<div class="nav">
		<div class="kuang"> 
		   <?php include ("left.php")  ?>
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge ">课程录入</p>
  				<form action="kecheng-save.php" method="get" class="sui-form form-horizontal sui-validate">
  					<div class="control-group">
    					 <label for="inputEmail" class="control-label">课程名</label>
					     <div class="controls">
					        <input type="text" id="kcName" name="kcName" class="input-large input-fat" placeholder="输入名字" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">时间</label>
					     <div class="controls">
					        <input type="text" id="kcTime" name="kcTime" class="input-large input-fat" placeholder="Email">
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
