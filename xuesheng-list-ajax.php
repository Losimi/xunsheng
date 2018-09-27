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
 $sql = "SELECT id,学号,班号,姓名,性别,日期,联系电话 FROM xuesheng ";
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
  				<p class="sui-text-xxlarge ">学生修改</p>
  				<table class="sui-table table-primary">
  					<!-- <tr>
            <th>id</th>
            <th>学号</th>
            <th>班号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>日期</th>
            <th>联系电话</th>
            <th>操作</th>
            </tr> -->
            <tr>
            <th>id</th>
            <th>学号</th>
            <th>班号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>日期</th>
            <th>联系电话</th>
            <th>操作</th>
            </tr>
          <tbody id="studentlist">
          </tbody>
          </table>
            
  			</div>
  		</div>
  		<?php include ("jiao.php") ?>
      <!-- <script src="template-web.js"></script>
      <script type="text/html" id="template1">
        {{each arr val idx}}
          <tr>
             <td>{{val.id}}</td>
             <td>{{val.学号}}</td>
             <td>{{val.班号}}</td>
             <td>{{val.姓名}}</td>
             <td>{{val.性别}}</td>
             <td>{{val.出生日期}}</td>
             <td>{{val.电话}}</td>
             <td></td>
        </tr>
        {{/each}}
      </script> -->
      <script>
        $(function(){
          $.ajax({
            url:"api.php",
            type:"POST",
            dataType:"json",
            data:{
              "action":"xuesheng"
            },
            beforeSend:function(xMLHttpRequest){
              $("#studentlist").html("<tr><td>正在查询，请稍后……</td></tr>");
            },
            success:function(data,textStatus){
              // console.log(data.data);
              // var arr =data.data;
              // var html=template("template1",{"arr":arr});
              // $("tbody").append();

              if (data.code==200) {
                var str="";
                for (var i = 0; i < data.data.length; i++) {
                 console.log( data.data[i].id);
                 str += "<tr><td>"+data.data[i].id+"</td><td>"+data.data[i].学号+"</td><td>"+data.data[i].班号+"</td><td>"+data.data[i].姓名+"</td><td>"+data.data[i].性别+"</td><td>"+data.data[i].日期+"</td><td>"+data.data[i].联系电话+"</td><td><a class='sui-btn btn-small btn-warning' href='xuesheng-update.php?kid="+data.data[i].id+"'>修改<a>&nbsp&nbsp&nbsp <a class='sui-btn btn-small btn-danger' href='xuesheng-del.php?kid="+data.data[i].id+"'>删除</a></td></tr>"
                 // att(data.data);
                }
                $("#studentlist").html(str);
              }
            },
           error:function(XMLHttpRequest,textStatus,errorThrown){
            // 调用失败后调用
            console.log("失败原因:"+errorThrown);
            }
          });
        })
        // function att(data){
        //   for (var i = 0; i < data.data.length; i++) {
        //     var $trs=$("<tr></tr>");
        //     for(j in data,data[i]){
        //       var $tds="<td>"+data.data[i][j]+"</td>";
        //       $trs.append($tds);
        //     }
        //     $("#studentlist").append($trs)
        //   }
        // }
      </script>
