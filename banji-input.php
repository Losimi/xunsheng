<?php include ("head.php") ?>
<body>
	<div class="nav">
		<div class="kuang"> 
		  <?php include ("left.php") ?>	
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge ">班级录入</p>
  				<form action="banji-save.php" method="get" class="sui-form form-horizontal sui-validate">
  					<div class="control-group">
    					 <label for="kcName1" class="control-label">班号</label>
					     <div class="controls">
					        <input type="text" id="kcName1" name="kcName1" class="input-large input-fat" placeholder="班号名字" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label">班长</label>
					     <div class="kcName2">
					        <input type="text" id="kcName2" name="kcName2" class="input-large input-fat" placeholder="班长名字" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="kcName3" class="control-label">教室</label>
					     <div class="controls">
					        <input type="text" id="kcName3" name="kcName3" class="input-large input-fat" placeholder="教室名字" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="kcName4" class="control-label">班主任</label>
					     <div class="controls">
					        <input type="text" id="kcName4" name="kcName4" class="input-large input-fat" placeholder="班主任名字" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="kcName5" class="control-label">口号</label>
					     <div class="controls">
					        <input type="text" id="kcName5" name="kcName5" class="input-large input-fat" placeholder="口号" data-rules='required|minlength=2|maxlength=10'>
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
  		<script>
  		// document.cookie="uname=lou";
  		
 //  		var days=30;
	// var daysTime = 30*24*60*1000;//转化为秒数
	// var exp =new Date();
	// exp.setTime(exp.getTime()+daysTime)//设置30天后
	// document.cookie="uname=lou;expires="+exp.toGMTStrimg();
	// var password="123456";
	// document.cookie="password="+password; 


  	console.log(document.cookie);
  	var str="uname=lou;password=123456;"
  	console.log(str.split(";")[0].split("=")[1]);
  		</script>