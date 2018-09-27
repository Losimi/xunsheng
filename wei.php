</body>
</html>
<script src="http://g.alicdn.com/sj/lib/jquery.min.js"></script>
<script src="http://g.alicdn.com/sj/dpl/1.5.1/js/sui.min.js"></script>
<script>
	$("#bton").on('click', function(){
		if ($("#yanzhengma").val()=="") {
			alert("验证码不能为空 ");
			return;
		}else if($("#yanzhengma").val()!=$("#text").val()){
			alert("验证码错误");
			return;
		}else{
			alert("验证码正确");
		}
	})
	// $("#wangji").on('click', function(){
	// 	if($("#password").val()==""){
	// 		alert("忘记秘密");
	// 		action="wangji.php";
	// 	}
	// })
</script>	