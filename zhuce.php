<?php include ("head2.php") ?>
<body>
	<div class="tou">
		<div class="zuo"><a href="zhuce.php">用户注册</a></div>
		<div class="you"><a href="denglu.php">用户登录</a></div>
	</div>
	<div class="box">
			<form action="zhuce-save.php" method="get" class="sui-form form-horizontal sui-validate">
				  <div class="control-group">
				    <label for="youxiang" class="control-label">用户邮箱：</label>
				    <div class="controls">
				      <input type="text" id="youxiang" name="youxiang" placeholder="邮箱" data-rules="required|email">
				    </div>
				  </div>
				  <div class="control-group">
				    <label for="name" class="control-label">用户名：</label>
				    <div class="controls">
				      <input type="text" id="name" name="name" class="input-large input-fat" placeholder="用户名" data-rules="required|">
				    </div>
				  </div>
				  <div class="control-group">
				    <label for="password" class="control-label">密码：</label>
				    <div class="controls">
				      <input type="password" id="password" name="password" placeholder="密码" data-rules="required" title="密码">
				    </div>
				  </div>
				  <div class="control-group">
				    <label for="repassword" class="control-label">重复密码：</label>
				    <div class="controls">
				      <input type="password" id="repassword" name="repassword" placeholder="重复密码" data-rules="required|match=password">
				    </div>
				  </div>
				  <div class="control-group">
				    <label for="yanzhengma" class="control-label">验证码：</label>
				    <div class="controls">
				      <input type="yanzhengma" id="yanzhengma" name="yanzhengma" placeholder="验证码" data-rules="required">
				      <input type="button" id="text" value="<?php include ("wei2.php") ?>">
				    </div>
				  </div>
				  <div class="control-group">
				    <label for="tishi" class="control-label">密码提示问题</label>
				    <select name="tishi" id="tishi">
				    	<option value="">请选择</option>
				    	<option value="">你小学在哪上的 </option>
				    	<option value="">你最好的朋友是谁</option>
				    	<option value="">你最值得纪念的日期有哪些。</option>
				    </select>
				  </div>
				  <div class="control-group">
				    <label for="daan" class="control-label v-top">答案密码：</label>
				    <div class="controls">
				      <textarea id="daan" name="daan" placeholder="答案密码" data-rules="required"></textarea>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label"></label>
				    <div class="controls">
				      <button type="submit" id="btn" class="sui-btn btn-primary">立即注册</button>
				    </div>
				  </div>
			</form>
	</div>
<?php include ("wei.php") ?>