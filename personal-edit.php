<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">

    <title>消息中心</title>

    <!-- normalize core CSS -->
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/carousel.css" rel="stylesheet">
    <link href="bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet">

    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Fonts - Change if needed -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Menu shrinking -->
    <script type="text/javascript" src="js/menu.js"></script>

    <!-- Main styles of this template -->
    <link href="css/style.min.css?v=1.0.0" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <link href="css/personal.css" rel="stylesheet">

</head>

<body>


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










    <!-- Right Sidebar Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
			
			
                <!-- Content -->
                <div class="col-md-9 col-md-push-3 padding-left-none">
					<div class="personal">		
						
						<div class="msg-basic">
						
							<div class="msg-title">
								<b>基本信息</b>&nbsp;
								<em class="fa fa-pencil">点击编辑</em>
							</div>
							
							<div class="msg-display-plat">
								<div class="msg-plat">
									<div class="msg-key">
										<span>ID</span>
									</div>
									<div class="msg-content">
										<span>10000001</span>
									</div>
								</div>								
								<div class="msg-plat">
									<div class="msg-key">
										<span>昵称</span>
									</div>
									<div class="msg-content">
										<span>medon</span>
									</div>
								</div>								
								<div class="msg-plat">
									<div class="msg-key">
										<span>姓名</span>
									</div>
									<div class="msg-content">
										<span>郭子玄</span>
									</div>
								</div>																
								<div class="msg-plat">
									<div class="msg-key">
										<span>签名</span>
									</div>
									<div class="msg-content">
										<span>巴萨罗那</span>
									</div>
                                </div>                                
								<div class="msg-plat">
									<div class="msg-key">
										<span>性别</span>
									</div>
									<div class="msg-content">
										<span>女</span>
									</div>
                                </div>
                                
							</div>
							
                            <div class="msg-edit-plat" style="display:none;">
                                <form action="demo_form.php">
                                    <div class="edit-plat">
                                        <label for="nickName">昵称</label>
                                        <input type="input" name="nickName" id="nickName" value="medon">
                                    </div>
                                    <div class="edit-plat">
                                        <label for="realName">姓名</label>
                                        <input type="input" name="realName" id="realName" value="郭子玄">
                                    </div>
                                    <div class="edit-plat">
                                        <label for="sign">签名</label>
                                        <input type="input" name="sign" id="sign" value="巴萨罗那">
                                    </div>
                                    <div class="edit-plat">
                                        <label for="male">男</label>
                                        <input type="radio" name="sex" id="male" value="男">&emsp;&emsp;
                                        <label for="female">女</label>
                                        <input type="radio" name="sex" id="female" value="女">
                                    </div>
                                    <div class="edit-plat"><input type="submit" value="提交"></div>    
                                </form>   
							</div>
							
						</div>
						
						<hr>
					
						<div class="msg-school">
						
							<div class="msg-title">
									<b>学校信息</b>&nbsp;
									<em class="fa fa-pencil">点击编辑</em>
							</div>
							
							<div class="msg-display-plat">
								
								<div class="msg-plat">
									<div class="msg-key">
										<span>学号</span>
									</div>
									<div class="msg-content">
										<span>2018213213</span>
									</div>
								</div>
								
								<div class="msg-plat">
									<div class="msg-key">
										<span>学院</span>
									</div>
									<div class="msg-content">
										<span>国际学院</span>
									</div>
								</div>
								
								<div class="msg-plat">
									<div class="msg-key">
										<span>专业</span>
									</div>
									<div class="msg-content">
										<span>物联网工程</span>
									</div>
								</div>
							</div>
							
							<div class="msg-edit-plat" style="display:none;">
								<form action="demo_form.php">
                                    <div class="edit-plat">
                                        <label for="schoolID">学号</label>
                                        <input type="input" name="schoolID" id="schoolID" value="2018213213">
                                    </div>
                                    <div class="edit-plat">
                                        <label for="college">学院</label>
                                        <input type="input" name="college" id="college" value="国际学院">
                                    </div>
                                    <div class="edit-plat">
                                        <label for="major">专业</label>
                                        <input type="input" name="major" id="major" value="物联网工程">
                                    </div>
                                    <div class="edit-plat"><input type="submit" value="提交"></div> 
                                </form>
							</div>
							
						</div>
						
					</div>			
				</div>





                <!-- Sidebar -->
                <div class="col-md-3 col-md-pull-9 padding-left-none">
                    <aside class="sidebar">
                        <div class="widget personal personal-widget">
							<ul role="menubar" class="nav nav-list">
							
								<li role="menuitem" ><a href="personal-center.html">主页</a></li>
								<li role="menuitem" ><a href="personal-edit.html" style="color:#FF5800;">基本信息</a></li>
								
								<li role="menuitem" class="menu-slide"><span><b class="fa fa-caret-right">&nbsp;</b>资源管理</span></li>
									<ul role="menu" class="snav snav-list" style="display:none;">
										<li role="menuitem"><a href="#">我的上传</a></li>
										<li role="menuitem"><a href="#">我的收藏</a></li>
										<li role="menuitem"><a href="#">我的下载</a></li>
									</ul>
								
								
								<li role="menuitem" class="menu-slide"><span><b class="fa fa-caret-right">&nbsp;</b>论坛博客</span></li>
									<ul role="menu" class="snav snav-list" style="display:none;">
										<li role="menuitem"><a href="personal-article-upload.html">我的文章</a></li>
										<li role="menuitem"><a href="personal-message.html">消息中心</a></li>
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
    <footer style="height: 330px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 ">
                    <div>
                        <a href="index.html">
                            <img class="footer-logo" src="img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div>
                        <address class="margin-bottom-30">
                            <p>Samplestreet 3<br/>
                            34117 Kassel<br/>
                            Germany</p>
                        </address>
                    </div>
                    <div class="margin-bottom-30">
                        <p><i class="fa fa-phone"></i> +49 561 00 00 00 00
                            <br/>
                            <i class="fa fa-fax"></i> +49 561 00 00 00 00</p>
                    </div>

                </div>
                <div class="col-md-3 footer-menu">
                    <h4>1学网</h4>
                    <ul>
                        <a href="#">
                            <li>关于我们</li>
                        </a>
                        <a href="#">
                            <li>加入我们</li>
                        </a>
                        <a href="#">
                            <li>联系我们</li>
                        </a>
                        <a href="#">
                            <li>友情链接</li>
                        </a>
                        <a href="#">
                            <li>用户协议</li>
                        </a>
                        <a href="#">
                            <li>隐私政策</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-3 footer-menu">
                    <h4>关注我们</h4>
                    <ul>
                        <li><a href="#" title="微信公众号" target="_blank"><i class="fa fa-weixin"></i>1学网微信公众号</a></li>

                        <li><a href="#" title="官方微博" target="_blank"><i class="fa fa-weibo">1学网官方微博</i></a></li>
                    </ul>
                </div>
                <div class="col-md-3  footer-menu">
                    <h4>传送门</h4>
                    <ul>
                        <a href="#">
                            <li>帮助中心</li>
                        </a>
                        <a href="#">
                            <li>活动专题页</li>
                        </a>
                        <a href="#">
                            <li>侵权申述</li>
                        </a>
                        <a href="#">
                            <li>活动中心</li>
                        </a>
                        <a href="#">
                            <li>用户反馈论坛</li>
                        </a>
                        <a href="#">
                            <li>广告合作</li>
                        </a>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- Scripts -->

    <!-- Loads Bootstrap Main JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- 折叠函数 -->
	<script type="text/javascript" src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
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
		
	<!--- 编辑函数 -->
    <script type="text/javascript">
        $(".fa-pencil").click(function(){
            $(this).hide();
            $(this).parent().parent().children(".msg-display-plat").hide();
            $(this).parent().parent().children(".msg-edit-plat").show();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            var menuYloc = $(".personal-widget").offset().top;
            $(window).scroll(function () {
                var offsetTop = menuYloc + $(window).scrollTop() + "px";
                $(".personal-widget").animate({ top: offsetTop }, { duration: 5, queue: false });
            });
        }); 
    </script>    
</body>

</html>
