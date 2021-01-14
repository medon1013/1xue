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

    <title>上传资源</title>

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










    <!-- Right Sidebar Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-md-9 col-md-push-3">
                    <div class="blog-listing">
                        <article>
                            <h2>Post Format Image</h2>
                            <hr class="title-underline">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...
                            </p>
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i> Aug 17, 2016 - 6:53</span>
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="blog-single-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </article>
                        <article class="post-video">
                            <h2>Post Format - Video</h2>
                            <hr class="title-underline">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...
                            </p>
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i> Aug 17, 2016 - 6:53</span>
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="blog-single-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </article>
                        <article>
                            <h2>Post Format - Audio</h2>
                            <hr class="title-underline">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...
                            </p>
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i> Aug 17, 2016 - 6:53</span>
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="blog-single-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </article>
                        <ul class="pagination pagination-lg">
                            <li><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
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
                            <h4 class="sidebar-header">Categories</h4>
                            <ul class="nav nav-list">
                                <li><a href="#"><b class="caret-right"></b> Menu 1</a></li>
                                <li><a href="#"><b class="caret-right"></b> Menu 2</a></li>
                                <li><a href="#"><b class="caret-right"></b> Menu 3</a></li>
                                <li><a href="#"><b class="caret-right"></b> Menu 4</a></li>
                            </ul>
                        </div>
                        <div class="widget blog-widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popularPosts" data-toggle="tab" aria-expanded="true"><i class="fa fa-star"></i> Popular</a></li>
                                    <li class=""><a href="#recentPosts" data-toggle="tab" aria-expanded="false">Recent</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="popularPosts">
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
                                                    <a href="blog-single-post.html">Nullam Vitae Nibh Un Odiosters</a>
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
                                                    <a href="blog-single-post.html">Vitae Nibh Un Odiosters</a>
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
                                                    <a href="blog-single-post.html">Odiosters Nullam Vitae</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
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
