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




    <!-- Hero Header -->
    <header class="hero-header" style="background-image: url('img/background');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">欢迎来到一学网</div>
                <div class="intro-heading">一学网，是您学习的终点</div>
                <a href="#intro" class="btn btn-primary btn-lg">See More</a>
            </div>
        </div>
    </header>


 

    <!-- 最新更新试题 -->
    <section class="page-section">
        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-md-push-4">
                    <div class="col-md-12">
                        <h2 class="title-section"><span class="title-regular">最 新</span><br/>更新试题</h2>
                        <hr class="title-underline" />
                    </div>
                    <?php
        				$sql_test = mysqli_query($link, "select test.course_id, test.course_name, test.subdate
                                    				from test, course
                                    				where test.course_id = course.course_id
                                    				order by subdate DESC
                                    				limit 6");
                        while($info_test = mysqli_fetch($sql_test)){ 
    				?>
                    <div class="row">
                   		<div class="col-md-6 ">
                            <div class="col-xs-2 box-icon">
                                <div class="fa fa-clipboard"></div>
                            </div>
                            <div class="col-xs-10">
                                <h3>
                                	<a class="index-test" href="test-single-post.php?test_id=<?php echo $info_test[course_id]; ?>" >
                                		<?php echo $info[test.course_id]+" "+$info[course.course_name]; ?> 
                                	</a> 
                                </h3>
                            </div>
                            <div class="col-md-10 col-xs-offset-2">
                                <p class="index-test-info">
                                    <?php echo $info[test.remarks]; ?>
                                </p>
                            </div>
                        </div>
                        <?php $info_test = mysqli_fetch_array($sql_test); ?>
                    	<div class="col-md-6 ">
                            <div class="col-xs-2 box-icon">
                                <div class="fa fa-clipboard"></div>
                            </div>
                            <div class="col-xs-10">
                                <h3>
                                	<a class="index-test" href="test-single-post.php?test_id=<?php echo $info_test[course_id]; ?>" >
                                		<?php echo $info_test[test.course_id]+" "+$info_test[course.course_name]; ?> 
                                	</a> 
                                </h3>
                            </div>
                            <div class="col-md-10 col-xs-offset-2">
                                <p class="index-test-info">
                                    <?php echo $info_test[test.remarks]; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-4 col-md-pull-8 ">
                    <a href="test.html"><img class="img-responsive" src="img/高分喷雾" alt="" /></a>
                </div>
        </div>
    </section>





    <!-- 热门话题 -->
    <section class="page-section-no-padding">
        <!-- /3 Column Portfolio -->
        <div class="filter-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h1>#热门话题</h1>
                        <div class="filter-container isotopeFilters">
                            <ul class="list-inline filter">
                                <li class="active"><a href="#" data-filter="*">全部</a><span>/</span></li>
                                <li><a href="#" data-filter=".illustrations">学业</a><span>/</span></li>
                                <li><a href="#" data-filter=".photography">活动</a><span>/</span></li>
                                <li><a href="#" data-filter=".websites">生活</a><span>/</span></li>
                                <li><a href="#" data-filter=".art">其他</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-section port-col">

            <div class="row">
                <div class="isotopeContainer">

                    <div class="col-md-4 isotopeSelector photography">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>我不能看懂原生的英文档案怎么办</h3>
                                                <h4>#生活</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>简单的英文能看懂，但是直接去看英文文档，我看不懂，但是我想看懂，请问大家怎么搞，别就说学，学也分很多种
												，不可能让我每天像考4，6级一样抱着英语读吧，我也才入行，我还有很多技术方面的东西和工作上的东西要搞，有
												没有提升的方法，主要针对计算机文档那一块。
                                                <p>
                                                <h4 style="color: #FFFFFF">回复 2</h4>
                                                <h4 style="color: #FFFFFF">人气 1654</h4>
                                                	<a title="Project Image" class="fancybox-pop fancybox.image" href="http://placehold.it/625x450"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector photography illustrations">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore...</p>
                                                <p><a title="Project Image" class="fancybox-pop fancybox.image" href="http://placehold.it/625x450"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector art">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore...</p>
                                                <p><a title="Project Image" class="fancybox-pop fancybox.image" href="http://placehold.it/625x450"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector photography">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore...</p>
                                                <p><a title="Project Image" class="fancybox-pop fancybox.image" href="http://placehold.it/625x450"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector photography websites">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore...</p>
                                                <p><a title="Project Image" class="fancybox-pop fancybox.image" href="http://placehold.it/625x450"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector photography art">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore...</p>
                                                <p><a title="Project Image" class="fancybox-pop fancybox.image" href="http://placehold.it/625x450"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>


                </div>

            </div>
        </div>
        <!-- 更多话题 -->

        <div class="text-center">
            <a href="blogs.html" class="btn btn-primary btn-lg">VIEW MORE TOPIC </a>
        </div>

    </section>






    <!-- 热门文章-->
    <?php
        $sql_blog = mysqli_query($link, "select blog_id, blog_title, blog_like, author_id, blog_subtime, author_name, blog_views, blog_comment, blog_purcontent 
                                    from blog
                                    order by blog_subtime DESC limit 6");
        $i = 0; 
    ?>
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-section"><span class="title-regular">Hot</span><br/>Blogs</h2>
                    <hr class="title-underline" />
                </div>
            </div>
            <div class="row blog-listing">
            <?php 
            	while($i < 3){
            		$info_blog = mysqli_fetch_array($sql_blog); 
            ?>
                <div class="col-md-4">
                    <article>
                        <a href="blog-single-post.php?blog_id=<?php echo $info_blog[blog_id]; ?>"><h2><?php echo $info_blog[blog_title]; ?></h2></a>
                        <hr class="title-underline">
                        <div style="height: 174px">
                        	<p>
                            	<?php echo substr($info_blog[blog_purcontent], 0, 30); ?>...
                        	</p>
                    	</div>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> <?php echo $info_blog[blog_subtime]; ?></span>
                            <span><i class="fa fa-user"></i> By 
                            	<a href="personal-center.php?id=<?php echo $info_blog[author_id]; ?>"><?php echo $info_blog[author_name]; ?></a> 
                            </span>
                            <span><i class="fa fa-tag"></i> <a href="#">java</a>, <a href="#">HTML</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#"><?php echo $info[blog_comment]; ?> 评论</a></span>
                        </div>
                    </article>
                </div>
            <?php
            		$i++;
            	}
            ?> 
            </div>
            <div class="row blog-listing">
            <?php 
            	while($i < 6){
            		$info_blog = mysqli_fetch_array($sql_blog); 
            ?>
                <div class="col-md-4">
                    <article>
                        <a href="blog-single-post.php?blog_id=<?php echo $info_blog[blog_id]; ?>"><h2><?php echo $info_blog[blog_title]; ?></h2></a>
                        <hr class="title-underline">
                        <div style="height: 174px">
                        	<p>
                            	<?php echo substr($info_blog[blog_purcontent], 0, 30); ?>...
                        	</p>
                    	</div>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> <?php echo $info_blog[blog_subtime]; ?></span>
                            <span><i class="fa fa-user"></i> By 
                            	<a href="personal-center.php?id=<?php echo $info_blog[author_id]; ?>"><?php echo $info_blog[author_name]; ?></a> 
                            </span>
                            <span><i class="fa fa-tag"></i> <a href="#">java</a>, <a href="#">HTML</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#"><?php echo $info[blog_comment]; ?> 评论</a></span>
                        </div>
                    </article>
                </div>
            <?php
            		$i++;
            	}
            ?>
            </div>
            <a href="blogs.php" class="btn btn-primary btn-lg">See More</a>
        </div>
    </section>






    <!-- Our Team Creative -->
    <section class="page-section-no-padding ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title-section"><span class="title-regular">OUR</span><br/>TEAM</h2>
                    <hr class="title-underline col-centered" />
                </div>
            </div>
            <div class="row ">
                <div class="col-md-3 padding-0">
                    <div class="hovereffect">
                        <img class=" img-responsive" src="http://placehold.it/480x550" alt="" />
                        <div class="overlay text-center team-content">
                            <h3 class="info">JOE DOE</h3>
                            <p class="info">CEO FOUNDER</p>
                            <p class="info">Lorem ipsum dolor sit amet, consectetur adivpiscing elit. Proin consequat sollicitudin cursus.</p>
                            <a href="#" class="info" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="info" title="Google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="info" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 padding-0">
                    <div class="hovereffect">
                        <img class=" img-responsive" src="http://placehold.it/480x550" alt="" />
                        <div class="overlay text-center team-content">
                            <h3 class="info">JANE DOE</h3>
                            <p class="info">CO FOUNDER</p>
                            <p class="info">Lorem ipsum dolor sit amet, consectetur adivpiscing elit. Proin consequat sollicitudin cursus.</p>
                            <a href="#" class="info" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="info" title="Google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="info" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 padding-0">
                    <div class="hovereffect">
                        <img class=" img-responsive" src="http://placehold.it/480x550" alt="" />
                        <div class="overlay text-center team-content">
                            <h3 class="info">JAMES DOE</h3>
                            <p class="info">DEVELOPER</p>
                            <p class="info">Lorem ipsum dolor sit amet, consectetur adivpiscing elit. Proin consequat sollicitudin cursus.</p>
                            <a href="#" class="info" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="info" title="Google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="info" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 padding-0">
                    <div class="hovereffect">
                        <img class=" img-responsive" src="http://placehold.it/480x550" alt="" />
                        <div class="overlay text-center team-content">
                            <h3 class="info">JENNY DOE</h3>
                            <p class="info">MARKETING</p>
                            <p class="info">Lorem ipsum dolor sit amet, consectetur adivpiscing elit. Proin consequat sollicitudin cursus.</p>
                            <a href="#" class="info" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="info" title="Google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="info" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Contact Us -->
    <section class="page-section-no-padding">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-6 col-md-push-6">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 contact-container">
                                <h2 class="title-section"><span class="title-regular">CONTACT</span><br/>US</h2>
                                <hr class="title-underline" />
                                <p>
                                    Maecenas luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena.
                                </p>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr" placeholder="NAME">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="EMAIL">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" id="message" placeholder="MESSAGE"></textarea>
                                </div>
                                <button type="button" class="btn btn-default">SEND <i class="fa fa-envelope"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6 padding-0 ">
                    <div id="map" class="img-responsive map-style"></div>
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

    <!-- Initiate Google Maps - For more Infos look into the documentation -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map.js"></script>

    <!-- Initiate Portoflio Script -->
    <script src="extensions/portfolio/isotope.min.js"></script>
    <script src="extensions/portfolio/portfolio.js"></script>

    <!-- Initiate Fancybox/Lightbox Script -->
    <!-- Fancybox/Lightbox -->
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="extensions/fancybox/jquery.fancybox.css" media="screen" />
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox-media.js"></script>
    <!-- Initiate Fancybox/Lightbox for Videos -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
             */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',
                    prevEffect: 'none',
                    nextEffect: 'none',
                    arrows: false,
                    helpers: {
                        media: {},
                        buttons: {}
                    }
                });
        });
    </script>

</body>

</html>