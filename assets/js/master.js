$(function () {
    MBP.scaleFix()
//console.log(document.documentElement.clientWidth)
//alert(screen.width)
    // if (document.documentElement.clientWidth > 768) {

    //     var route = 'http://localhost:8888/sites/clawg-static/'
    //     $('.article-list').load(route + 'includes/sidebar-otherpages.php');
    //     $('.about-vcard').load(route + 'includes/footer.php');

    // }
    var breakLoadSize = 768;
    //alert(Modernizr.mq('only all and (min-width: '+breakLoadSize+'px)'))
    ////if (document.documentElement.clientWidth > breakLoadSize) {
    if(Modernizr.mq('only all')) {
        if (Modernizr.mq('only all and (min-width: '+breakLoadSize+'px)')) {
            loadAdditionalContent();
        }
    } else {
        loadAdditionalContent();
    }




    // window.addEventListener("orientationchange", function() {
    //     //alert(Modernizr.mq('only all and (min-width: '+breakLoadSize+'px)'))
    //     if (Modernizr.mq('only all and (min-width: '+breakLoadSize+'px)')) {
    //         //alert('content should load')
    //         loadAdditionalContent();
    //     }
    // }, false);

    function loadAdditionalContent()  {
        var route = window;
        //console.log(route + 'includes/sidebar-otherpages.php')

        //if(route.indexOf(/clawg-static/) != -1) {
            if(window.location.pathname.indexOf('/articles/') != -1 || window.location.pathname.indexOf('/work') != -1) {
                $('.article-list-widget').load('../includes/sidebar-otherpages.php .recent-posts');
                $('.about-vcard-widget').load('../includes/footer.php #footer');
            } else {
                $('.article-list-widget').load('includes/sidebar-otherpages.php .recent-posts');
                $('.about-vcard-widget').load('includes/footer.php #footer');
            }
        //}

    }

function gridder() {
    console.log(document.width)
    if (document.width < 480) {
        window.gOverride = {gColor: '#FF0000', pColor: '#0000FF', gColumns: 1, size:320, gOpacity: 0.30, pOpacity: 0.90, pHeight: 20, gWidth:20, gOffset: 0, pOffset: 4, setupEnabled: false}
    } else if (document.width >= 480 && document.width < 600) {
        window.gOverride = {gColor: '#FF0000', pColor: '#0000FF', gColumns: 1, size:480, gOpacity: 0.30, pOpacity: 0.90, pHeight: 20, gWidth:20, gOffset: 0, pOffset: 4, setupEnabled: false}
    } else if (document.width >= 600 && document.width < 768) {
        window.gOverride = {gColor: '#FF0000', pColor: '#0000FF', gColumns: 1, size:600, gOpacity: 0.30, pOpacity: 0.90, pHeight: 20, gWidth:20, gOffset: 0, pOffset: 4, setupEnabled: false}
    } else if (document.width >= 768 && document.width < 968) {
        window.gOverride = {gColor: '#FF0000', pColor: '#0000FF', gColumns: 7, size:732, gOpacity: 0.30, pOpacity: 0.1, pHeight: 20, gWidth:12, gOffset: 0, pOffset: 0, setupEnabled: false}
    } else if (document.width >= 968) {
        window.gOverride = {gColor: '#FF0000', pColor: '#0000FF', gColumns: 12, size:968, gOpacity: 0.30, pOpacity: 0.90, pHeight: 18, gWidth:10, gOffset: 0, pOffset: 0, setupEnabled: false}
    } else {
        window.gOverride = {gColor: '#FF0000', pColor: '#0000FF', gColumns: 9, size:980, gOpacity: 0.30, pOpacity: 0.90, pHeight: 18, gWidth:20, gOffset: 0, pOffset: 0, setupEnabled: false}
    }
    document.body.appendChild(document.createElement('script')).src='assets/js/gridder.js';
}

//gridder();

/*
function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');

    $('a[href*=#]').each(function() {
        var thisPath = filterPath(this.pathname) || locationPath;
        if (  locationPath == thisPath && (location.hostname == this.hostname || !this.hostname) && this.hash.replace(/#/,'') ) {
        var $target = $(this.hash), target = this.hash;
        if (target) {
        var targetOffset = $target.offset().top;
        console.log(targetOffset)
        $(this).click(function(event) {
            event.preventDefault();
            $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
            location.hash = target;
        });
        });
        }
        }
    });

  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }
*/

// $(window).load(function() {
//   // The slider being synced must be initialized first
//   $('#carousel').flexslider({
//     animation: "slide",
//     controlNav: false,
//     animationLoop: false,
//     slideshow: false,
//     itemWidth: 210,
//     itemMargin: 5,
//     asNavFor: '#slider'
//   });

//   $('#slider').flexslider({
//     animation: "slide",
//     controlNav: false,
//     animationLoop: false,
//     slideshow: false,
//     sync: "#carousel"
//   });
// });
    //  $('.flexslider').flexslider({
    //     animation: "slide",
    //     //itemWidth: 660,
    //     controlsContainer: ".blah2",
    //     //animationLoop: false,
    //     //itemWidth: 240
    // });

});