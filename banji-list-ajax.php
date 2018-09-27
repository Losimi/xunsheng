<?php include ("head.php") ?>
<?php
$conn = mysqli_connect("localhost","root","");
if ($conn) {
	echo "连接成功!";
}else{
	die ("连接失败".mysqli_connect_error());
 }
 //连接要操作的数据库
 mysqli_select_db($conn,"student_lou");
 //设置读取数据库的编码，不然显示汉字为乱码
 mysqli_query($conn,"set names utf8");
 //执行SQL语句
 $sql = "SELECT 班号,班长,教室,班主任,班级口号 FROM banji ";
 $result = mysqli_query($conn,$sql);

 //关闭数据库
 mysqli_close($conn);
 ?>

<body>
	<div class="nav">
		<div class="kuang"> 
		  <?php include ("left.php") ?>	
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge ">班级修改</p>
  				<table class="sui-table table-primary">
  					<tr>
            <th>班号</th>
            <th>班长</th>
            <th>教室</th>
            <th>班主任</th>
            <th>班级口号</th>
            <th>操作</th></tr>
  		    <tbody id="banjilist"></tbody>
  				</table>
  			</div>
  		</div>
  		<?php include ("jiao.php") ?>
      <script>
        $(function(){
          $.ajax({
            url:"api.php",
            type:"POST",
            dataType:"json",
            data:{
              "action":"banji"
            },
            beforeSend:function(xMLHttprequest){
              $("#banjilist").html("<tr><td>正在查询，气你稍后……</td></tr>");
            },
            success:function(data,textStatus){
              console.log(data.data);
              if (data.code==200) {
                var str="";
                for(var i=0;i<data.data.length;i++){
                  console.log(data.data[i]);
                  str+="<tr><td>"+data.data[i].班号+"</td><td>"+data.data[i].班长+"</td><td>"+data.data[i].教室+"</td><td>"+data.data[i].班主任+"</td><td>"+data.data[i].班级口号+"</td><td><a class='sui-btn btn-small btn-warning' href='banji-update.php?kid="+data.data[i].班号+"'>修改<a>&nbsp&nbsp&nbsp <a class='sui-btn btn-small btn-danger' href='banji-del.php?kid="+data.data[i].班号+"'>删除</a></td></tr>"
                }
                $("#banjilist").html(str);
              }
            },
            error:function(xMLHttprequest,textStatus,errorThrown){
              console.log("失败原因:"+errorThrown);
            }
          });
        })
      </script>