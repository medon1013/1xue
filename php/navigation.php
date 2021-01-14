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
                <a href="index.php"><img class="logo" src="img/logo.png" alt="Logo"></a>
            </div>
            <nav class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">首页</a>
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
                    <li><?php
                    	if(isset($_SESSION["user_id"])){
                    		echo ("<a href='personal-center.html'>我的</a>");
                    	}
                    	else{
                    		echo ("<a href='login.html'>我的</a>");
                    	}
						?>
					</li>
                </ul>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </div>