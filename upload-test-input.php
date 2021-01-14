<?php
    session_start();
    error_reporting(0);
    include "../conn/conn.php";
?>
<!DOCTYPE HTML>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>上传题目</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="utf8-jsp/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="utf8-jsp/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="utf8-jsp/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="utf8-jsp/umeditor.min.js"></script>
    <script type="text/javascript" src="utf8-jsp/lang/zh-cn/zh-cn.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">
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
    <script src="js/gzx.js"></script>
    <link href="css/ueditor.css" rel="stylesheet">
    <link href="css/inputtest.css" rel="stylesheet">
</head>

<body>
	<!-- Navigation -->
    <?php
        include "php/navigation.php";
    ?>
    

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>输入试题内容</h1>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 50px"></div>

    <div class="centered inputtest">
        <form method="post" style="width: 1000px; margin-left: 240px;">
        <!-- 课程编号 -->
    	<div class="infotest" style="margin-left: 110px; margin-bottom: 10px;">
    		<p style="margin-bottom: 0px;">课程编号</p>
    		<input type="text" name="paperNo" id="paperNo" class="inputx"/>
    	</div>
        <!-- 学期 -->
    	<div class="infotest">
    		<p style="margin-bottom: 0px">选择学期</p>
    		<select class="inputx" id="semester">
    			<option value="2020202101">2020/2021-秋</option>
  				<option value="2019202002">2019/2020-春</option>
  				<option value="2019202001">2019/2020-秋</option>
  				<option value="2018201902">2018/2019-春</option>
  				<option value="2018201901">2018/2019-秋</option>
  				<option value="2017201802">2017/2018-春</option>
  				<option value="2017201801">2017/2018-秋</option>
    		</select>
    	</div>
        <!-- 试卷类型 -->
    	<div class="infotest">
    		<p style="margin-bottom: 0px" id="type">试卷类型</p>
    		<select class="inputx" >
    			<option value="1">期末试卷Paper-A</option>
  				<option value="2">期末试卷Paper-B</option>
  				<option value="3">期中试卷</option>
  				<option value="4">平时测验</option>
    		</select>
    	</div>
        <!-- 题目编号 -->
    	<div class="infotest">
    		<p style="margin-bottom: 0px">题目编号</p>
    		<input type="text" name="testNo" class="inputx" id="testNo"/>
    	</div>
        <!-- 提交信息 -->
    	<div class="infotest">
    		<input type="submit" value="提交信息" class="btn btn-primary" title="检验您填写的试卷信息是否正确" id="check"/>
    		
    	</div>
        <?php
            $course_id = $_POST['paperNo'];
            $semester = $_POST['semester'];
            $paperType = $_POST['type'];
            $quesNum = $_POST['testNo'];
            $sql1 = mysqli_query($link ,"select * from course where course_id = '$course_id' and semester = '$semester'");
            if($sql1 == ""){
                echo ("<div id='tag' class='infotest'>
                <i class='fa fa-close' style='color: #32CD32'></i>
                </div>");
            }
            else{
                echo ("<div id='tag' class='infotest'>
                <i class='fa fa-check' style='color: #32CD32'></i>
                </div>");
                $sql2 = mysqli_query($link, "select test_id from test where course_id = '$course_id' and semester = '$semester' and paper_type = '$paperType' and ques_num = '$quesNum'");
                if($sql2 != ""){
                    $result = mysqli_fetch_array($sql);
                    $_SESSION['testId'] = $result["test_id"];
                }
            }
        ?>
    </form>
    </div>


	<!--style给定宽度可以影响编辑器的最终宽度-->
	<div class="centered">
		<script type="text/plain" id="myEditor" style="width:1000px;height:240px;">
            <?php
            $test_id = $_SESSION['testId'];
                if(isset($test_id)){
                    $sql = mysqli_query($link, "select content from test where test_id = '$test_id'");
                    $result = mysqli_fetch_array($sql);
                    $content = $result["content"];
                    echo ($content);
                }
            ?>
        </script>
	</div>

	<div style="margin-left: 300px; margin-top: 30px">
	<input type="button" class="btn btn-primary" id="addtag"  value="+添加题目标签" />
	</div>

	<div class="centered" style="margin-top: 30px;">
		<input type="button" class="btn btn-primary" id="submit" value="确认提交" onclick="saveContent()"/>
		<div id="uptag" class="centered">
			<p style="color: #32CD32">上传成功！</p>
		</div>
	</div>




<script type="text/javascript" src="js/umditor.js"></script>

</body>
</html>