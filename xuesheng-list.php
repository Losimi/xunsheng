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
  				<?php 
       if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)){
        $sSex1=$row["性别"]=="0"?"女":"男";
  			echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['学号']}</td>
        <td>{$row['班号']}</td>
        <td>{$row['姓名']}</td>
        <td>{$sSex1}</td>
        <td>{$row['日期']}</td>
        <td>{$row['联系电话']}</td>
        <td><a class='sui-btn btn-small btn-warning' href='xuesheng-update.php?kid={$row['id']}'>修改<a>&nbsp&nbsp&nbsp <a class='sui-btn btn-small btn-danger' href='xuesheng-del.php?kid={$row['id']}'>删除</a></td></tr>";
	   }
        }else{
	   echo "没有记录";
              }
  				 ?>
  				</table>
  			</div>
  		</div>
  		<?php include ("jiao.php") ?>