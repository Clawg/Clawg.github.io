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


    <script src="<?php echo SCRIPT_PATH; ?>libs/jquery-1.8.3.min.js"></script>
    <script src="<?php echo SCRIPT_PATH; ?>jquery.flexslider-min.js"></script>
    <script src="<?php echo SCRIPT_PATH; ?>helper.js"></script>
    <script src="<?php echo SCRIPT_PATH; ?>master.js"></script>

  <!--[if (gte IE 6)&(lte IE 8)]>
      <!--<script src="<?php echo SCRIPT_PATH; ?>libs/selectivizr.js"></script>-->
    <![endif]-->

<!-- Place in the <head>, after the three links -->

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