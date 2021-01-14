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

    <title>1学网，您学习的终点！</title>

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


    <?php
        $sql = mysqli_query($link, "select blog_id, blog_title, blog_like, author_id, blog_subtime, author_name, blog_views, blog_comment, blog_purcontent 
                                    from blog
                                    order by blog_subtime DESC"); 
    ?>
    <!-- Right Sidebar Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-md-9 col-md-push-3">
                    <div class="blog-listing">
                    <?php
                		while($info = mysqli_fetch_array($sql)){
                	?>
                		<article>
                            <h2><?php echo $info[blog_title]; ?></h2>
                            <hr class="title-underline">
                            
                            	<p>
                                	<?php echo substr($info[blog_purcontent], 0, 30); ?>...
                            	</p>
                        	
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i><?php echo $info[blog_subtime]; ?></span>
                                <span>
                                	<i class="fa fa-user"></i> By 
                                	<a href="personal-center.php?id=<?php echo $info[author_id]; ?>"><?php echo $info[author_name]; ?></a> 
                                </span>
                                <span><i class="fa fa-tag"></i> <a href="#">java</a>, <a href="#">java</a> </span>
                                <span><i class="fa fa-eye"></i> <a href="#"><?php echo $info[blog_views]; ?></a></span>
                                <span><i class="fa fa-thumbs-up"></i> <a href="#"><?php echo $info[blog_like]; ?></a></span>
                                <span><i class="fa fa-comments"></i> <a href="#"><?php echo $info[blog_comment]; ?></a></span>
                                <a href="blog-single-post.php?blog_id=<?php echo $info[blog_id]; ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </article>
                
            		<?php } ?>	
            
                    </div>
                </div>





                <!-- Sidebar -->
                <div class="col-md-3 col-md-pull-9">
                    <aside class="sidebar">
                        <div class="widget">
                            <form>
                                <div class="input-group input-group-lg">
                                    <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                                    <span class="input-group-btn"><button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>
                        <div class="widget">
                            <h4 class="sidebar-header">博客管理</h4>
                            <ul class="nav nav-list">
                                <li><a href="#"><b class="caret-right"></b> 文章管理</a></li>
                                <li><a href="#"><b class="caret-right"></b> 评论管理</a></li>
                                <li><a href="#"><b class="caret-right"></b> 分类专栏</a></li>
                                <li><a href="#"><b class="caret-right"></b> 博客设置</a></li>
                            </ul>
                        </div>
                        <div class="widget blog-widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popularPosts" data-toggle="tab" aria-expanded="true"><i class="fa fa-star"></i> 最热</a></li>
                                    <li class=""><a href="#recentPosts" data-toggle="tab" aria-expanded="false">最新</a></li>
                                </ul>
                                <div class="tab-content">
                                <?php while($infoA = mysqli_fetch_array($sql)){ ?>
                                    <div class="tab-pane active" id="popularPosts">
                                        <ul class="post-list">
                                        	<li class="post">
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="personal-center.php?id=<?php echo $info[author_id]; ?>">
                                                        	<?php
                                                        		$user = mysqli_query($link, "select user_icon
                                                        									 from user
                                                        									 where user_id = "+$infoA[author_id]);
                                                        		$userinfo = mysqli_fetch_array($user);							  
                                                        	?>
                                                            <img src="<?php echo $userinfo[user_icon]; ?>" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.php?blog_id=<?php echo $info[blog_id]; ?>"><?php echo $infoA[blog_title]; ?></a>
                                                    <div class="post-meta">
                                                        <?php echo $infoA[blog_subtime]; ?>
                                                    </div>
                                                </div>
                                            </li>                                       
                                        </ul>
                                    </div>
                                <?php } ?>       
                                </div>
                            </div>
                        </div>
                        <div class="widget tags">
                            <a href="#">Java</a> <a href="#">C语言</a> <a href="#">数据库</a> <a href="#">Python</a> <a href="#">PHP</a> <a href="#">HTML</a> <a href="#">loremipse</a> <a href="#">Esrite</a>
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
