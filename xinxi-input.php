<?php include ("head.php") ?>	
<body>
	<div class="nav">
		<div class="kuang"> 
		   <?php include ("left.php")  ?>
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge ">学生信息查询</p>
  				<form action="xinxi-list.php" method="get" class="sui-form form-horizontal sui-validate">
  					<div class="control-group">
    					 <label for="sName" class="control-label">姓名</label>
					     <div class="controls">
					     	<input type="hidden" name="names" value="names">
					        <input type="text" id="sName" name="sName" class="input-large input-fat" placeholder="输入名字" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="sNumber" class="control-label">学号</label>
					     <div class="controls">
					        <input type="text" id="sNumber" name="sNumber" class="input-large input-fat" placeholder="输入学号">
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label"></label>
					     <input type="submit" class="sui-btn btn-large btn-primary" value="查询" name="">
					</div>
  				</form>
  			</div>
  		</div>
	</div>
<?php include ("jiao.php") ?>
