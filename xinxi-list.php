<?php include ("head.php") ?>
<?php
include("conn.php");
 $names=empty($_GET['names'])?"null":$_GET['names'];
if ($names=="null") {
 $sql3= "SELECT id,学号,班号,姓名,性别,日期,联系电话 from xuesheng";
}else{
  $sName=$_GET["sName"];
  $sNumber=$_GET["sNumber"];
  $sql3="select id,学号,班号,姓名,性别,日期,联系电话 from xuesheng where 姓名='{$sName}' and 学号='{$sNumber}'";
}
// echo $sql3;
$result = mysqli_query($conn,$sql3);

 //关闭数据库
 mysqli_close($conn);
 ?>

<body>
	<h1>欢迎访问学生管理系统</h1>
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
            </tr>
  				<?php 
       if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
         $sSex1=$row["性别"]=="0"?"女":"男";
  			echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['学号']}</td>
        <td>{$row['班号']}</td>
        <td>{$row['姓名']}</td>
        <td>{$sSex1}</td>
        <td>{$row['日期']}</td>
        <td>{$row['联系电话']}</td>
        </tr>";
	   }
        }else{
	   echo "没有记录";
              }
  				 ?>
  				</table>
  			</div>
  		</div>
  		<?php include ("jiao.php") ?>