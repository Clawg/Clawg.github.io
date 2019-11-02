<?php /*
<?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    define("HOST", "http://" . $_SERVER['HTTP_HOST'] . "/");
    if (false !== strpos($url,'clawg-static')) {
        define("IMG_PATH", HOST . "sites/clawg-static/assets/img/");
    } else {
        define("IMG_PATH", HOST . "assets/img/");
    }
;?>
    <footer role="contentinfo" class="widget" id="footer">
        <h1 class="h2 hd">Twitter:</h1>
        <img src="<?php echo IMG_PATH; ?>twitt.gif" width="75" height="84" class="footer-img" />
        <div class="tweet">
        <?php
            function getTwitterStatus($userid){
            $url = "https://api.twitter.com/1/statuses/user_timeline/$userid.xml?count=1&include_rts=1callback=?";
            $xml = simplexml_load_file($url) or die("could not connect");
                   foreach($xml->status as $status){
                   $text = $status->text;
                   }
                   echo $text;
             }
            // USAGE
            getTwitterStatus("CharlieLaw");
        ?>
        </div>
        <p class="tweet-contact"><a href="http://www.twitter.com/CharlieLaw" rel="external" class="url">Twitter me this, Twitter me that @CharlieLaw</a></p>
        </footer>
*/ ?>

