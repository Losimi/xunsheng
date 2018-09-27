<?php include ("head.php"); 
		include("conn.php");
        $sql1="select distinct id from user";
        $sq2="select distinct name from newscolumn";
        $result1 = mysqli_query($conn,$sql1);
        $result2 = mysqli_query($conn,$sq2);
?>
<body>
	<div class="nav">
		<div class="kuang"> 
		  <?php include ("left.php") ?>	
		</div>
		<div class="blue">
			<div class="content">
  				<p class="sui-text-xxlarge ">新闻发布模块</p>
  				<form action="xinwenfb-save.php" method="post" class="sui-form form-horizontal sui-validate" enctype="multipart/form-data">
  					<div class="control-group">
    					 <label for="biaoti" class="control-label">标题：</label>
					     <div class="controls">
					        <input type="text" id="biaoti" name="biaoti" class="input-large input-fat" placeholder="输入标题" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="jianti" class="control-label">肩题：</label>
					     <div class="controls">
					        <input type="text" id="jianti" name="jianti" class="input-large input-fat" placeholder="输入肩题" data-rules='required|minlength=2|maxlength=10'>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="zuozhe" class="control-label">作者：</label>
					     <div class="controls">
					       <select name="zuozhe" id="zuozhe">
					       	<?php 
					       		if(mysqli_num_rows($result1) > 0 ){
									while ($row = mysqli_fetch_assoc($result1)) {
										echo "<option value='{$row['id']}'>{$row['id']}</option>";
									}
								} else {
									echo "<option value=''>user选择</option>";
								}
					       	 ?>
					       </select>
					     </div>
					</div>
					<div class="control-group">
			   			 <label for="sName" class="control-label">图片：</label>
			    		 <div class="controls">
			     		 <input type="file" name="file">
			   			</div>
			  		</div>
					<div class="control-group">
    					 <label for="lanmu" class="control-label">栏目：</label>
					     <div class="controls">
					        <select name="lanmu" id="lanmu">
					        	<?php 
					        	if(mysqli_num_rows($result2) > 0 ){
									while ($row = mysqli_fetch_assoc($result2)) {
										echo "<option value='{$row['name']}'>{$row['name']}</option>";
									}
								} else {
									echo "<option value=''>栏目选择</option>";
								}
					        	 ?>
					        </select>
					     </div>
					</div>
					<div class="control-group">
    					 <label for="kcTime" class="control-label">时间：</label>
					     <div class="controls">
					        <input type="text" id="kcTime" name="kcTime" class="input-large input-fat" placeholder="kcTime">
					     </div>
					</div>
					<div class="control-group">
					     <h3>内容</h3>
					    <textarea id="editor" name="editor" style="width:800px;height:50px;"></textarea>
					</div>
					<div class="control-group">
    					 <label for="inputEmail" class="control-label"></label>
					     <input type="submit" class="sui-btn btn-large btn-primary" value="提交" name="">
					</div>
  				</form>
  			</div>
  		</div>
  		<?php include ("jiao.php") ?>
		<script type="text/javascript">
		 
		    //实例化编辑器
		    var $editor = $('#editor').editor();
		    
		    
		    function isFocus(e){
		        alert($editor.editor("isFocus"));
		    }
		    function setblur(e){
		        $editor.editor("blur");
		    }
		    function insertHtml() {
		        var value = prompt('插入html代码', '');
		        $editor.editor("execCommand", 'insertHtml', value)
		    }
		    function getAllHtml() {
		        alert($editor.editor('getAllHtml'))
		    }
		    function getContent() {
		        alert($editor.editor('getContent'))
		    }
		    function getPlainTxt() {
		        alert($editor.editor('getPlainTxt'))
		    }
		    function setContent(isAppendTo) {
		        $editor.editor('setContent', '欢饮使用', isAppendTo)
		    }
		    function setDisabled() {
		        $editor.editor('disable');
		    }
		    
		    function setEnabled() {
		        $editor.editor('enable');
		    }
		    
		    function createEditor() {
		      $("#editor").editor()
		    }
		    
		    function getText() {
		        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
		        var selection = $editor.editor("getSelection");
		        var range = selection.getRange();
		        range.select();
		        var txt = selection.getText();
		        alert(txt)
		    }
		    
		    function getContentTxt() {
		        alert($editor.editor('getContentTxt'))
		    }
		    function hasContent() {
		        alert($editor.editor('hasContents'))
		    }
		    function setFocus() {
		        $editor.editor('focus');
		    }
		    function deleteEditor() {
		        $editor.editor('destroy')
		    }
		    
		    function getLocalData () {
		        alert($editor.editor("execCommand", "getlocaldata" ));
		    }
		    
		    function clearLocalData () {
		        $editor.editor("execCommand", "clearlocaldata" );
		        alert("已清空草稿箱")
		    }
		    
		    function setHide() {
		      $editor.editor("setHide");
		    }
		    function setShow() {
		      $editor.editor("setShow");
		    }
		    function setHeight(h) {
		      $editor.editor("setHeight", h);
		    }
		</script>
		<script src="http://g.alicdn.com/sj/sui-editor/0.0.2/sui-editor.config.js"></script>
		<script src="http://g.alicdn.com/sj/sui-editor/0.0.2/editor/js/sui-editor.js"></script>
		<script src="http://g.alicdn.com/sj/sui-editor/0.0.2/editor/css/sui-editor.css"></script>