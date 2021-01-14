<?php
	session_start();
	error_reporting(0);

	include "../conn/conn.php";
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">

    <title>上传试题文件</title>

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

    <!-- Main styles of this template -->
    <link href="css/style.min.css?v=1.0.0" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="css/custom.css" rel="stylesheet">

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
                    <h1>上传试题文件</h1>
                </div>
            </div>
        </div>
    </div>





    <!-- Right Sidebar Container  -->
    <section class="page-section padding-30">
        <div style="height: 50px"></div>

    <div class="centered">
    	<div class="col-md-2 col-sm-6 centered">
    		<p style="margin-bottom: 0px">课程编号</p>
    		<input type="text" name="paperNo" />
    	</div>
    	<div class="col-md-2 col-sm-6 centered">
    		<p style="margin-bottom: 0px">选择学期</p>
    		<select>
    			<option value="2020202101">2020-2021-秋</option>
  				<option value="2019202002">2019-2020-春</option>
  				<option value="2019202001">2019-2020-秋</option>
  				<option value="2018201902">2018-2019-春</option>
  				<option value="2018201901">2018-2019-秋</option>
  				<option value="2017201802">2017-2018-春</option>
  				<option value="2017201801">2017-2018-秋</option>
    		</select>
    	</div>
    	<div class="col-md-2 col-sm-6 centered">
    		<p style="margin-bottom: 0px">试卷类型</p>
    		<select>
    			<option value="1">Paper-A</option>
  				<option value="2">Paper-B</option>
  				<option value="3">期中试卷</option>
  				<option value="4">平时测验</option>
    		</select>
    	</div>
    	<div class="col-md-2 col-sm-6 centered">
    		<p style="margin-bottom: 0px">题目编号</p>
    		<input type="text" name="testNo" style="width: 100px;"/>
    	</div>
    	<div class="col-md-2 col-sm-6 centered">
    		<input type="button" value="提交信息" class="btn btn-primary" title="检验您填写的试卷信息是否正确" id="check"/>
    		<div id="tag" style="padding-left: 5px;">
                <i class="fa fa-check" style="color: #32CD32"></i>
   	 		</div>
    	</div>
    </div>
    <div style="height: 50px;"></div>
    <div class="centered" style="margin-top: 20px;">
    	<input type="file" οnchange="showPreview(this)" class="btn btn-primary">
		<p class="show"></p>
	</div>

	<div class="centered" style="margin-top: 30px;">
		<input type="button" class="btn btn-primary" id="submit" value="确认提交" onclick="saveContent()"/>
		<div id="uptag" class="centered">
			<p style="color: #32CD32">上传成功！</p>
		</div>
	</div>
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
			$('input#check').click(
				function($e){
					$('div#tag').show('fast');
				}
			);
			$('input#submit').click(
				function($e) {
					$('div#uptag').show('fast');
				}
			);
		}) 
</script>
    </section>





    

    <!-- Scripts -->

    <!-- Loads Bootstrap Main JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>