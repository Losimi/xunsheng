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
 $sql = " SELECT id,email,name,question FROM user ";

 $result = mysqli_query($conn,$sql);

 //关闭数据库
 mysqli_close($conn);
 ?>
 <body>
	<h1>会员管理模块</h1>
	<div class="nav">
		<div class="kuang"> 
		  <?php include ("left.php") ?>	
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge ">会员管理</p>
  				<table class="sui-table table-primary">
  					<tr><th>id</th><th>邮件</th><th>名称</th><th>密码提示问题</th><th>操作</th></tr>
  				<?php 
        if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
  			echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['email']}</td>
        <td>{$row['name']}</td>
        <td>{$row['question']}</td>
        <td><a class='sui-btn btn-small btn-warning' href='huiyuan-update.php?kid={$row['id']}'>修改<a>&nbsp&nbsp&nbsp <a class='sui-btn btn-small btn-danger' href='huiyuan-del.php?kid={$row['id']}'>删除</a></td>
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

