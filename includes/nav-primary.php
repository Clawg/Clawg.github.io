<?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (false !== strpos($url,'clawg-static')) {
        define("HOST", "http://" . $_SERVER['HTTP_HOST'] . "/");
        define("ROUTE_PATH", HOST . "sites/clawg-static/");
    } else {
        define("HOST", "http://" . $_SERVER['HTTP_HOST'] . "/");
        define("ROUTE_PATH", HOST . "");
    }
;?>

        <nav id="nav" class="nav" role="navigation">
            <ul>
                <li><a href='<?php echo ROUTE_PATH; ?>index.php'>Home</a></li><li>
                <a href="<?php echo ROUTE_PATH; ?>work/index.html">Work</a></li><li>
                <a href="<?php echo ROUTE_PATH; ?>article-list.html">Articles</a></li>
            </ul>
        </nav>