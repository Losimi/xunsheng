<?php include ("head2.php") ?>
<body>
	<div class="tou">
		<div class="zuo"><a href="zhuce2.php">用户注册</a></div>
		<div class="you"><a href="denglu.php">用户登录</a></div>
	</div>
	<div class="box">
			<form action="zhuce-save2.php" method="get" class="sui-form form-horizontal sui-validate">
				  <div class="control-group">
				    <label for="email" class="control-label">用户邮箱：</label>
				    <div class="controls">
				      <input type="text" id="email" name="email" placeholder="邮箱"><span id="tips"></span>
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
				    	<option value="请选择">请选择</option>
				    	<option value="你小学在哪上的">你小学在哪上的 </option>
				    	<option value="你最好的朋友是谁">你最好的朋友是谁</option>
				    	<option value="你最值得纪念的日期有哪些。">你最值得纪念的日期有哪些。</option>
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
 <script>
 	var email=document.getElementById('email');
	$("input[name=email]").on('blur',function(){
			// 1.为了实现异步请求，先要实例化一个XMLHttpRequert对象
			if(window.XMLHttpRequest){
				//高级浏览器
				var xhr = new XMLHttpRequest();
			}else{
			//IE6
			var xhr = new ActiveObject("Msxml2.XMLHTTP");
				}
			// 2.实现一个回调函数
			// onreadystatechange事件：当请求状态就绪
			xhr.onreadystatechange=function(){
				// readyState一共有四个返回值：返回状态
				// 1服务器已连接 2请求已接收 3.请求处理中 4请求已完成响应发送
				if (xhr.readyState==3) {
				console.log("正在处理，请稍后……");
				}	
				if (xhr.readyState==4){
				 if (xhr.status=="200") {
				console.log("请求完成，准备好了");
				// xhr.responseText是接收服务器返回的数据
				console.log(xhr.responseText);

					if (xhr.responseText=="ok") {	
					$("#tips").html("可以注册");
					}else{
					$("#tips").html("邮件重复");
					}
				 }
				 if (xhr.status=="404") {
				 	console.log("网页被劫持");
				 }
			 }
		   }
			// 3.使用xhr的 open方法，实现异步请求
			//  参数一：get|post
			//  参数二：请求的地址url
			//  参数三：true|false true为异步请求
			// xhr.open("get",
			// 	"zhuce-save2.php?email="+encodeURIComponent(email.value),
			// 	true);

			 // 4.使用xhr的send方法，将请求发送
			 // 参数一：发送请求是上报的http头，get方法填写null
			 // xhr.send(null);

			 // 使用post提交
			 xhr.open("post","zhuce-save2.php",true);
			 xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			 xhr.send("email="+encodeURIComponent(email.value));
	})
 </script>