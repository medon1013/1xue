<?php
    session_start();
    error_reporting(0);

    include "../conn/conn.php";
?>

<?php
	$blog_id = $_POST[blog_id];
	$sql = mysqli_query($link, "select blog_title, blog_like, author_id, blog_subtime, author_name, blog_views, blog_comment
								from blog
								where blog_id = " + $blog_id);
	$info = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">

    <title><?php echo $info[blog_title] + " " + $info[author_name] + "的博客"; ?></title>

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
    <?php 
    	include "php/navigation.php";
    ?>






    <!-- Right Sidebar Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-md-9">
                    <div class="blog-listing">
                        <article>
                            <h2><?php echo $info[blog_title]; ?></h2>
                            <hr class="title-underline">
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i> <?php $info[blog_subtime]; ?></span>
                                <span><i class="fa fa-user"></i> By 
                                	<a href="personal-center.php?id=<?php echo $info[author_id]; ?>"><?php echo $info[author_name]; ?></a> 
                                </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-eye"></i> <a href="#"><?php echo $info[blog_views]; ?></a></span>
                                <span><i class="fa fa-thumbs-up"></i> <a href="#"><?php echo $info[blog_like]; ?></a></span>
                            </div>
                            <?php
                            	echo $info[blog_content];
                            ?>
                            
                            <div class="post-block post-author clearfix">
                                <h3 class="heading-primary"><i class="fa fa-user"></i>作者</h3>
                                <div class="author-details">
                                    <img src="http://placehold.it/150x150" alt="" class="img-thumbnail pull-left">
                                    <p>
                                    	<strong class="name">
                                    		<a href="personal-center.php?id=<?php echo $info[author_id]; ?>"><?php echo $info[author_name]; ?></a> 
                                    	</strong> 
                                    </p>
                                    <p>
                                    	<?php
                                    		$sql_user = mysqli_query($link, "select user_intro from user where user_id = " + $info[author_id]);
                                    		$info_user = mysqli_fetch_array($sql);
                                    		echo $info_user[user_intro];
                                    	?> 
                                    </p>
                                </div>
                            </div>
                            <div class="post-block clearfix">
                                <h3><i class="fa fa-comments"></i>评论 (<?php echo $info[blog_comment]; ?>)</h3>
                                <ul class="comments">
                                <?php
                                	$sql_comment = mysqli_query($link, "select id, blog_id, user_name, user_id, content, datetime, parent_id, comment_like
                                										from blog_comment
                                										where parent_id = NULL
                                										order by datetime DESC");
                                	while($info_comment = mysqli_fetch_array($sql_comment)){
                                ?>
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail">
                                            	<?php
                                            		$sql_user = mysqli_query($link, "select user_icon
                                            										 from user
                                            										 where user_id = " + $info_comment[user_id]);
                                            		$info_user = mysqli_fetch_array($sql_user); 
                                            	?>
                                                <a href="personal-center.php?id=<?php echo $info_comment[user_id]; ?>">
                                                	<img class="avatar" alt="" src="<?php echo $info_user[user_icon]; ?>">
                                                </a>
                                            </div>
                                            <div class="comment-block">
                                                <span class="comment-by">
													<strong><?php echo $info_comment[user_name]; ?></strong>
													<span class="pull-right">
														<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                	</span>
                                                </span>
                                                <p>
                                                	<?php
                                                		echo $info_comment[content];
                                                	?> 
                                                </p>
                                                <span class="date pull-right"><?php $info_comment[datetime]; ?></span>
                                            </div>
                                        </div>
                                        <ul class="comments">
                                        <?php
                                    		$sql_childcomment = mysqli_query($link, "select id, user_name, user_id, content, datetime, parent_id, comment_like
                                    												 from blog_comment
                                    												 where partent_id = " + $info_comment[id] +
                                    												 "order by datetime DESC");
                                    		while($info_childcomment = mysqli_fetch_array($sql_childcomment)){
                                    			$sql_user = mysqli_query($link, "select user_icon
                                            										 from user
                                            										 where user_id = " + $info_comment[user_id]);
                                            		$info_user = mysqli_fetch_array($sql_user); 
                                    	?>
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail">
                                                        <a href="personal-center.php?id=<?php echo $info_childcomment[user_id]; ?>">
                                                			<img class="avatar" alt="" src="<?php echo $info_user[user_icon]; ?>">
                                                		</a>
                                                    </div>
                                                    <div class="comment-block">
                                                        <span class="comment-by">
															<strong><?php echo $info_childcomment[user_name]; ?></strong>
															<span class="pull-right">
																<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                        	</span>
                                                        </span>
                                                        <p><?php echo $info_childcomment[content]; ?></p>
                                                        <span class="date pull-right"><?php $info_childcomment[datetime]; ?></span>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                        </ul>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                            <div class="post-block">
                                <h3><i class="fa fa-commenting"></i>添加评论</h3>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label>Comment *</label>
                                        <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
                                    </div>
                                    <input type="submit" value="发表评论" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                </form>
                            </div>
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
                                <?php
                                	$sql_blog = mysqli_query($link, "select blog_id, blog_title, blog_like, author_id, blog_subtime, author_name, blog_views," +                       "blog_comment, blog_purcontent 
                                                                from blog
                                                                order by blog_subtime DESC"); 
                                	while($info_blog = mysqli_fetch_array($sql_blog)){ 
                                ?>
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
                            <a href="#">lorem</a> <a href="#">loremipse</a> <a href="#">Esrite</a> <a href="#">remip</a> <a href="#">serte</a> <a href="#">quiaxms</a> <a href="#">loremipse</a> <a href="#">Esrite</a>
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