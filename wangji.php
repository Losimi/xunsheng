<?php include ("head2.php") ?>
<body>
	<h1>忘记密码</h1>
	<div class="box">
			<form action="wangji-save.php" method="get" class="sui-form form-horizontal sui-validate">
				  <div class="control-group">
				    <label for="youjian" class="control-label">用户邮件：</label>
				    <div class="controls">
				      <input type="text" id="youjian" name="youjian" placeholder="邮件" data-rules="required|email">
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
				      <button type="submit" id="btn"class="sui-btn btn-primary">立即注册</button>
				    </div>
				  </div>
			</form>
	</div>
<?php include ("wei.php") ?>