<?php include("head.php") ?>
<?php
include("conn.php");
  $namess=empty($_GET['namess'])?"null":$_GET['namess'];
  $sName=$_GET["sName"];
  $sNumber=$_GET["sNumber"];
  $kcName=$_GET["kcName"];
  $sql3="SELECT s.姓名,k.课程名,x.成绩 FROM chengjibiao as x LEFT join kechengbiao as k ON k.课程编号=x.课程编号 left join xuesheng as s on x.学号 =s.学号 where s.姓名='{$sName}'";

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
  				<p class="sui-text-xxlarge ">学生成绩</p>
  				<table class="sui-table table-primary">
  					<tr>
            <th>姓名</th>
            <th>课程名</th>
            <th>成绩</th>
            </tr>
  				<?php 
       if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
  			echo "<tr>
        <td>{$row['姓名']}</td>
        <td>{$row['课程名']}</td>
        <td>{$row['成绩']}</td>
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