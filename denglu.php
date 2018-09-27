<?php include ("head2.php") ?>
<body>
	<div class="tou">
		<div class="zuo"><a href="zhuce2.php">用户注册</a></div>
		<div class="you"><a href="denglu.php">用户登录</a></div>
	</div>
	<div class="box">
			<form id="form1" action="denglu-ajax-save.php" method="get" class="sui-form form-horizontal sui-validate">
				  <div class="control-group">
				    <label for="email" class="control-label">用户邮件：</label>
				    <div class="controls">
				      <input type="text" id="email" name="email" placeholder="邮件" data-rules="required|email">
				    </div>
				  </div>
				  <div class="control-group">
				    <label for="password" class="control-label">密码：</label>
				    <div class="controls">
				      <input type="password" id="password" name="password" placeholder="密码" data-rules="required" title="密码">
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
				    <label class="control-label"></label>
				    <div class="controls">
				      <button type="submit" id="bton"
				       class="sui-btn btn-primary">立即登陆</button>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label"></label>
				    <div class="sui-btn-group">
				      <button type="submit" id="wangji"
				       class="sui-btn btn-primary">忘记密码</button>
				    </div>
				  </div>
			</form>
	<div id="pp">登陆成功</div>
	<div id="pp2">登陆失败，密码错误</div>
	<div id="pp3">登陆失败，邮箱填写错误</div>
	</div>
	<?php include ("wei.php") ?>
	<script>
	// 给提交按钮绑定函数
		$("button[type=submit]").on("click",function(){
					if ($("#yanzhengma").val()=="") {
						alert("验证码不能为空 ");
					}else if($("#yanzhengma").val()!=$("#text").val()){
						alert("验证码错误");
					}else{
						alert("验证码正确");
					}
				// 使用$.Ajax（）提交数据
				$.ajax({
					url     :"denglu-ajax-save.php",
					type    :"POST",
					data    :$("#form1").serialize(),
					dataType:"json",
					// beforeSend:function(XMLHttpRequest){
					// 	// 发送前调用函数。
					// },
					// complete:function(XMLHttpRequest,textStatus){
					// // 请求完成后调用此函数，（请求成功或失败都调用）	
					// },
					success:function(data,textStatus){
						// 请求成功后调用此函数
						console.log(data);
						if (data.code == 200) {
							$("#pp").slideDown(2000,function(){
								window.location.href= "index.php";
							});
						}
						if (data.code==20001) {
							// 提示密码错误
							$("#pp2").slideDown(2000);
						}
						if (data.code==20004) {
							// 提示邮箱填写错误
							$("#pp3").slideDown(2000);
						}
					},
					error:function(XMLHttpRequest,textStatus,errorThrown){
						// 调用失败后调用
						console.log("失败原因:"+errorThrown);
					}
				})
				return false;
		})
	</script>
 