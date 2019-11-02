<meta charset="UTF-8" />
<title>Clawg</title>
<meta name="description" content="">
<meta name="keywords" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--[if ! lte IE 6]><!-->
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





<link rel="stylesheet" href="<?php echo CSS_PATH; ?>master.css">

<script src="<?php echo SCRIPT_PATH; ?>libs/modernizr.js"></script>
