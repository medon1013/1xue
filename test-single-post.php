<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">

    <title>题目浏览</title>

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
    <script type="text/x-mathjax-config">
      	MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
	</script>
	<script type="text/javascript"
  		src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
	</script>
  

</head>

<body>

    <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML">
     MathJax.Hub.Config({
       tex2jax: {inlineMath: [['$','$'], ['\(','\)']]}
      });
	</script>

    <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML"></script>
    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html"><img class="logo" src="img/logo.png" alt="Logo"></a>
            </div>
            <nav class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">首页</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">创作中心<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="upload-test.html">上传题目</a></li>
                            <li><a href="blog-create.html">博客创作</a></li>
                            <li><a href="resource-share.html">资源分享</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">资源中心<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="test.html">历年题目</a></li>
                            <li><a href="resource.html">其他资源</a></li>
                            <li><a href="blogs.html">文章</a></li>
                        </ul>
                    </li>
                    <li><a href="forum.html">论坛中心</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">学习工具<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="base-conversion.html">进制转化器</a></li>
                            <li><a href="matrix-calculator.html">矩阵计算器</a></li>
                        </ul>
                    </li>
                    <li><a href="personal-center.html">我的</a></li>
                </ul>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </div>

    <?php
    	$course_id = $_POST[course_id];
    	$sql = mysqli_query($link, "select test_id, semester, paper_type, ques_num1, ques_num2, ques_num3, content
    								from test
    								where course_id = " + $course_id + "And isNew = 1" +
    								"order by semester, paper_type, ques_num1, ques_num2, ques_num3 DESC");
    ?>

    


    <!-- Right Sidebar Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-md-9">
                    <div class="blog-listing">
                        <article>
                        <?php
                        	$a = 0;
                        	while($info = mysqli_fetch_array($sql)){
                        		if($a == 0){

                        			echo "<h2>" + $course_id + " " + $info[semester] + " " + $info[paper_type] + "</h2>";
                        			echo "<hr class='title-underline'>";
                        			$a = 1;
                        		}
                        		else{
                        			if(($semester != $info[semester]) || ($paper_type != $info[paper_type])){
                        				echo "<h2>" + $course_id + " " + $info[semester] + " " + $info[paper_type] + "</h2>";
                        			}
                        		}
                        		echo "<h4>Question " + $info[ques_num1] + "." +$info[ques_num2] + "." + $info[ques_num3] + "</h4>";
                        		echo $info[content];

                        		$semester = $info[semester];
                        		$paper_type = $info[paper_type];
                        	}	
                        ?>
                        </article>
                    </div>
                </div>


                <!-- Sidebar -->
                <div class="col-md-3">
                    <aside class="sidebar">
                        <div class="widget">
                            <form>
                                <div class="input-group input-group-lg">
                                    <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                                    <span class="input-group-btn">
										<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
									</span>
                                </div>
                            </form>
                        </div>
                        <div class="widget">
                            <h4 class="sidebar-header">试题管理</h4>
                            <ul class="nav nav-list">
                                <li><a href="#"><b class="caret-right"></b> 题目管理</a></li>
                                <li><a href="#"><b class="caret-right"></b> 评论管理</a></li>
                                <li><a href="#"><b class="caret-right"></b> 科目专栏</a></li>
                                <li><a href="#"><b class="caret-right"></b> 试题设置</a></li>
                            </ul>
                        </div>
                        <div class="widget blog-widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popularPosts" data-toggle="tab" aria-expanded="true"><i class="fa fa-star"></i> 最热</a></li>
                                    <li class=""><a href="#recentPosts" data-toggle="tab" aria-expanded="false">最新</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="popularPosts">
                                        <ul class="post-list">
                                        <?php 
                                            $i = 0;
                                            while($info && $i <= 2){
                                        ?>
                                            <li class="post">
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="test-single-post.php?course_id=<?php echo $info[test.course_id]; ?>">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html"><?php echo $info[test.course_id]+" "+$info[course.course_name]; ?></a>
                                                    <div class="post-meta">
                                                        <?php echo $info[test.subdate]; ?>
                                                    </div>
                                                </div>
                                            </li>        
                                        <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="recentPosts">
                                        <ul class="post-list">
                                            <li class="post">
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="blog-single-post.html">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html">Lorem Vitae Nibh Un Odiosters</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="blog-single-post.html">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html">Lorem Vitae Nibh Un Odiosters</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="blog-single-post.html">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html">Lorem Odiosters Nullam Vitae</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget tags">
                            <a href="#">高数</a> <a href="#">线性代数</a> <a href="#">大学物理</a> <a href="#">C语言</a> <a href="#">数据结构</a> <a href="#">Java</a> <a href="#">电路分析</a> <a href="#">通信原理</a>
                        </div>
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

</html>