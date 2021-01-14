<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">

    <title>资源上传</title>

    <!-- normalize core CSS -->
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/carousel.css" rel="stylesheet">
    <link href="bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet">

    <!-- Load jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Menu shrinking -->
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

    <!-- Main styles of this template -->
    <link href="css/style.min.css?v=1.0.0" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <style type="text/css">
    	.bottom{
    		margin-bottom: 20px;
    	}
    </style>

</head>

<body>


    <!-- Navigation -->
    <?php
        include "php/navigation.php";
    ?>




    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>资源共享</h1>
                </div>
            </div>
        </div>
    </div>





    <!-- Left Sidebar Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-md-9 col-md-push-3 margin-bottom-15">
                	<div class="bottom">
                		<input type="file" οnchange="showPreview(this)" class="btn btn-primary" style="width: 600px; height: 39.8px;">
						<p class="show"></p>
                	</div>
                	<div class="bottom">
                		<p>资源名称：</p>
                		<input type="text" placeholder="资源名称" style="width: 600px; height: 39.8px;" />
                	</div>
                	<div class="bottom">
                		<p style="margin-bottom: 0px">选择分类:：</p>
    					<select  style="width: 600px; height: 39.8px;">
    						<option value="2020202101">电子书</option>
  							<option value="2019202002">软件</option>
  							<option value="2019202001">源码</option>
  							<option value="2018201902">素材</option>
    					</select>
                	</div>
                	
                	
                	<div class="bottom">
                		<p>资源描述：</p>
                		<input type="text" placeholder="资源详细描述" style="width: 600px; height: 39.8px;">
                	</div>
                	<div class="bottom">
                		<input type="button" class="btn btn-primary" value="+添加标签:">
						<p style="width: 100px">标签1 标签2</p>
                	</div style="margin-top: 30px; margin-left: 70px;">
                		<input class="btn btn-primary" type="button" value="上传" id="upload"/>
                		<div id="tag">
                			<p>上传成功！</p>
   	 					</div>
                	<div>
                	</div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-3 col-md-pull-9">
                    <aside class="sidebar">
                        <h4 class="sidebar-header">下载管理</h4>
                        <ul class="nav nav-list">
                            <li><a href="#"><b class="caret-right"></b>上传资源</a></li>
                            <li><a href="#"><b class="caret-right"></b>上传明细</a></li>
                            <li><a href="#"><b class="caret-right"></b> 下载明细</a></li>
                            <li><a href="#"><b class="caret-right"></b> 积分明细</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    
    





    <!-- FOOTER 1 -->
    <?php
    	include "php/footer.php";
    ?>

    <!-- Scripts -->

    <!-- Loads Bootstrap Main JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>
<script> 
	function showPreview(source) { 
		var arrs = $(source).val().split('\\'); var filename=arrs[arrs.length-1]; $(".show").html(filename); 
		var file = source.files[0]; 
		var total = file.size; if(window.FileReader) { 
		var fr = new FileReader(); 
		fr.onprogress = function(e) { $(".progress1").show();
		$("#Progress").val((e.loaded/total)*100) }; 
		fr.οnabοrt=function () { 
		layer.msg("文件上传中断,请重试")
		 }; 
		fr.οnerrοr=function () { 
		layer.msg("文件上传出错，请重试") 
		}; 
		fr.οnlοad=function () { $(".progress1").hide(); 
		layer.msg("文件上传成功")
		 }; 
		fr.readAsDataURL(file); 
		} 
	}

	$(document).ready(
		function() {
			$('input#upload').click(
				function($e){
					$('div#tag').show('fast');
				}
			);
		}) 
</script>

</html>