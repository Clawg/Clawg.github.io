
<?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (false !== strpos($url,'clawg-static')) {
        define("HOST", "http://" . $_SERVER['HTTP_HOST'] . "/");
        define("CSS_PATH", HOST . "sites/clawg-static/assets/css/");
        define("SCRIPT_PATH", HOST . "sites/clawg-static/assets/js/");
        define("IMG_PATH", HOST . "sites/clawg-static/assets/img/");
        define("ARTICLE_PATH", HOST . "sites/clawg-static/articles/");
    } else {
        define("HOST", "http://" . $_SERVER['HTTP_HOST'] . "/");
        define("CSS_PATH", HOST . "assets/css/");
        define("SCRIPT_PATH", HOST . "assets/js/");
        define("IMG_PATH", HOST . "assets/img/");
        define("ARTICLE_PATH", HOST . "articles/");
    }
;?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    	<meta charset="UTF-8" />
	<title>Clawg</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../assets/css/master.css">
	<script src="../assets/js/libs/modernizr.js"></script>
	<!-- 
		<link href="../assets/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<link href="../assets/css/print.css" media="print" rel="stylesheet" type="text/css" />
	 -->  
	 <!--[if IE]>
    	<link href="../assets/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  	<![endif]-->
</head>

<body>

    <!--Site wrapper -->
    <div class="site-wrapper">


		<a href="#nav" class="btn btn-menu"><i class="icn menu">Menu</i></a>

        <header role="banner" class="header">
            <hgroup>
                <h1><a href="../index.html"><span id="c">c</span><span id="l">l</span><span id="a">a</span><span id="w">w</span><span id="g">g</span> <span id="b">b</span><span id="l2">l</span><span id="o">o</span><span id="g2">g</span></a></h1>
                <h2>The thoughts of Charlie Law. Front end Web Development and general ramblings</h2>
            </hgroup>
        </header>

      <!-- Main content -->
        <div role="main" class="main-large">

            <div class="article-large">

                <h2>STV News Mobile</h2>
                <p>STV News site - <a href="http://m.stv.tv/">m.stv.tv</a></p>
                <ul class="slides">
                    <li>
                        <img src="<?php echo IMG_PATH; ?>sites/news-home.png" />
                    </li>
                    <li>
                        <img src="<?php echo IMG_PATH; ?>sites/news-main-article.png" />
                    </li>
                    <li>
                        <img src="<?php echo IMG_PATH; ?>sites/news-article.png" />
                    </li>
                </ul>
            </div>

        </div>
        <!--/ Main content -->


        <div class="aside-small">
           <?php include('../includes/sites.php') ;?>
        </div>



    </div><!--/ Site wrapper -->
	<nav id="nav" class="nav" role="navigation">
		<ul>
			<li><a href='../index.html'>Home</a></li><li>
			<a href="../work/index.html">Work</a></li><li>
			<a href="../article-list.html">Articles</a></li>
		</ul>
	</nav>

        <script src="../assets/js/libs/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/libs/jquery.flexslider-min.js"></script>
    <script src="../assets/js/helper.js"></script>
    <script src="../assets/js/master.js"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-38346654-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

</body>
</html">