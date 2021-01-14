<?php
	session_start();
	error_reporting(0);

	include "../conn/conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>文件上传测试</title>
</head>
 
<link href="css/upload_file.css" rel="stylesheet">
	
</style>
<script src="js/upload_file.js"></script>

<body>

	<!-- Navigation -->
    <?php
        include "php/navigation.php";
    ?>
    
   <div id="content_div">
   	  <br>
   	  <br>
   	  <br>
   	  <br>
   	  <br>
   	  <a class="style_copyright_a" href="javascript:void(0);" onclick="showUploadDialog()">上传新文件</a>
   </div>
   
   <div id="upload_dialog" class="upload_dialog_div"> 
   	    <div class="style_content_div">
  	  	  <div class="style_content_upper_div">
  	  	  	  <div class="style_content_file_div">
  	  	  	  	 <span class="style_file_span"> 文件路径：</span>
  	  	  	  	 <input class="style_file_content" type="file" id="upload_file_id"/>
  	  	  	  </div>
  	  	  	  <div class="style_content_prog_div">
  	  	  	  	 <span class="style_prog_span_hit" id="upload_tip_id"> 请选择要上传的文件 </span>
  	  	  	     <progress class="style_prog_content" id="upload_progress_id" value="0" max="100"></progress> 
  	  	  	  </div>
  	  	  </div>
  	  	  <div class="style_content_lower_div">
  	  	  	   <span class="style_content_span" onmouseover="this.style.background='#cccccc'" onmouseout="this.style.background=''" onclick="hideUploadDialog()">取消</span>
  	  	  	   <span class="style_content_span" onmouseover="this.style.background='#F5CCDC'" onmouseout="this.style.background=''" onclick="uploadFileToServer()">确定</span>
  	  	  </div>
  	  </div>
   </div>
</body>
</html>