</body> 
</html>
<script src="http://g.alicdn.com/sj/lib/jquery.min.js"></script>
<script src="http://g.alicdn.com/sj/dpl/1.5.1/js/sui.min.js"></script>
<script>
	$(function(){
		$(".leve1>a").on("click",function(){
		//给当前元素添加"current"样式
		$(this).addClass("current") 
		//下一个元素显示
		.next().show()
		//父元素的兄弟元素的子元素<a>
		.parent().siblings().children("a").
		//移除上面找到的所有<a>的current 样式
		removeClass("current")
		//上面所有<a>的下一个元素隐藏
		.next().hide("fast");
		//找到a的所有父元素，获取其在兄弟元素中的序号。保存到cookie中。跳转到其他页面，再度去cookie，就知道是那个li下面的菜单的状态打开
		document.cookie="menuString="+$(this).parent().index()+";";
		return false;
		})
	})
	var menuString=getCookie("menuString");
	$(".box .menu>li").eq("menuState").find("ul").show();
	function getCookie(name)
	{
	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	if(arr=document.cookie.match(reg)){
	return unescape(arr[2]);
	}else{
	return null;}
	}	
</script>