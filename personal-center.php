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

    <title>我的-主页</title>

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

    <link href="css/personal.css" rel="stylesheet">

</head>

<body style="background-color: #f6f6f6;">


   <!-- Navigation -->
    <?php
        include "php/navigation.php";
    ?>


    <!-- Right Sidebar Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
			
			
                <!-- Content -->
                <div class="col-md-9 col-md-push-3 padding-left-none">
				
                    <div class="personal personal-portrait">
					<a href="personal-edit.html">
						<img border="0" src="img/meixi.jpg" alt="暂无头像" width="100" height="100">
					</a>
					&nbsp;
					<a href="personal-edit.html" ><b>Medon</b></a>
					&nbsp;<em>个人认证：站长</em>
					</div>
					
                    <div class="col-md-4 col-md-push-8 padding-0">
                        <div class="col-md-12 personal">
                            <div style="text-align:center; padding:20px;border-bottom: 1px solid #f6f6f6;">
                                <b>您已来到1xue</b>
                                <span>5</span>
                                <b>天了</b>
                            </div>

                            <div class="col-md-6" style="text-align:center; padding:20px; border-right: 1px solid #f6f6f6;">
                                <b>上传</b>
                                <span>100</span>
                            </div>

                            <div class="col-md-6" style="text-align:center; padding:20px;">
                                <b>下载</b>
                                <span>11</span>
                            </div>
                        </div>
                        
                        <div class="col-md-12 personal">
                            <div style="text-align:center; padding:20px;border-bottom: 1px solid #f6f6f6;">
                                <b>总收益</b>
                                <span>50</span>
                                <b>￥</b>
                            </div>

                            <div class="col-md-6" style="text-align:center; padding:20px; border-right: 1px solid #f6f6f6;">
                                <b>阅读量</b>
                                <span>100</span>
                            </div>

                            <div class="col-md-6" style="text-align:center; padding:20px;">
                                <b>下载量</b>
                                <span>11</span>
                            </div>
                        </div>   
                    </div>

                    <div class="col-md-8 col-md-pull-4 padding-left-none">
                        <div class="personal personal-article">
                        	<img 
                            <div>
                                <h2>近期文章</h2>
                            </div>
                            <div class="personal-article-plat">
                                
                                <div class="personal-article-block">
                                    <a href="#">
                                        <b>文章标题</b>
                                        <br>
                                        <p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
                                    </a>
                                </div>
                                <div class="personal-article-block">
                                    <a href="#">
                                        <b>文章标题</b>
                                        <br>
                                        <p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
                                    </a>
                                </div>
                                <div class="personal-article-block">
                                    <a href="#">
                                        <b>文章标题</b>
                                        <br>
                                        <p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
                                    </a>
                                </div>
                                <div class="personal-article-block" style="border-bottom: 0px;">
                                    <a href="#">
                                        <b>文章标题</b>
                                        <br>
                                        <p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="personal personal-article">
                            <div>
                                <h2>近期资源</h2>
                            </div>
                            <div class="personal-article-plat">
                                <a href="#">
                                    <div class="personal-article-block">
                                        <b>资源标签</b>
                                        <br>
                                        <p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="personal-article-block">
                                        <b>资源标签</b>
                                        <br>
                                        <p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="personal-article-block">
                                        <b>资源标签</b>
                                        <br>
                                        <p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="personal-article-block" style="border-bottom: 0px;">
                                        <b>资源标签</b>
                                        <br>
                                        <p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
                                    </div>
                                </a>
                            </div>
                        </div>
					</div>
                </div>  





                <!-- Sidebar -->
                <div class="col-md-3 col-md-pull-9 padding-left-none">
                    <aside class="sidebar">
                        <div class="widget personal personal-widget">
							<ul role="menubar" class="nav nav-list">
							
								<li role="menuitem" ><a href="personal-center.php" style="color:#FF5800;">主页</a></li>
								<li role="menuitem" ><a href="personal-edit.php?id=2018213213">基本信息</a></li>
								
								<li role="menuitem" class="menu-slide"><span><b class="fa fa-caret-right">&nbsp;</b>资源管理</span></li>
									<ul role="menu" class="snav snav-list" style="display:none;">
										<li role="menuitem"><a href="#">我的上传</a></li>
										<li role="menuitem"><a href="#">我的收藏</a></li>
										<li role="menuitem"><a href="#">我的下载</a></li>
									</ul>
								
								
								<li role="menuitem" class="menu-slide"><span><b class="fa fa-caret-right">&nbsp;</b>论坛博客</span></li>
									<ul role="menu" class="snav snav-list" style="display:none;">
										<li role="menuitem"><a href="personal-article-upload.php?id=2018213213">我的文章</a></li>
										<li role="menuitem"><a href="personal-message.php?id=2018213213">消息中心</a></li>
									</ul>
								
								<li role="menuitem" ><a href="#" style="border-bottom: 0px">收益中心</a></li>
								
							</ul>
							
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
	
	<!-- 折叠函数 -->
	<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript">
			$(".menu-slide").click(function(){
				if($(this).hasClass("active")){
					$(this).find("b").removeClass("fa fa-caret-down").addClass("fa fa-caret-right");
					$(this).removeClass("active").next().slideUp();
				}
				else{
					$(this).find("b").removeClass("fa fa-caret-right").addClass("fa fa-caret-down");
					$(this).addClass("active").next().slideDown();
				}
			});
		</script>

</body>

</html>
