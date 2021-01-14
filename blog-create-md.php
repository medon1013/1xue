<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">

    <title>Elsa Theme - Multipurpose Template from Andreas Lautenschlager</title>

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

</head>

<body>


    <!-- Navigation -->
    <?php 
    	include "php/navigation.php";
    ?>
    
    </div>

    <div style="height: 30px"></div>

    <link rel="stylesheet" href="editormd/css/editormd.css" />
	<div id="test-editor">
    <textarea style="display:none;">
    </textarea>
	</div>
	<script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="editormd/editormd.min.js"></script>
	<script type="text/javascript">
    	$(function() {
        	var editor = editormd("test-editor", {
            	 //width  : "100%",
            	 //height : "100%",
            	 
            	path   : "editormd/lib/"
        	});
    	});
	</script>

	<div style="margin-left: 300px; margin-top: 30px">
	<input type="button" class="btn btn-primary" id="addtag"  value="+添加文章标签" />
	</div>

	<div class="centered" style="margin-top: 30px;">
		<input type="button" class="btn btn-primary" id="submit" value="确认提交" />
	</div>
    






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
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="extensions/fancybox/jquery.fancybox.css" media="screen" />
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox-media.js"></script>

</body>

</html>