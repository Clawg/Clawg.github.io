$(function(){function t(){var e=window;if(window.location.pathname.indexOf("/articles/")!=-1||window.location.pathname.indexOf("/work")!=-1){$(".article-list-widget").load("../includes/sidebar-otherpages.php .recent-posts");$(".about-vcard-widget").load("../includes/footer.php #footer")}else{$(".article-list-widget").load("includes/sidebar-otherpages.php .recent-posts");$(".about-vcard-widget").load("includes/footer.php #footer")}}function n(){console.log(document.width);document.width<480?window.gOverride={gColor:"#FF0000",pColor:"#0000FF",gColumns:1,size:320,gOpacity:.3,pOpacity:.9,pHeight:20,gWidth:20,gOffset:0,pOffset:4,setupEnabled:!1}:document.width>=480&&document.width<600?window.gOverride={gColor:"#FF0000",pColor:"#0000FF",gColumns:1,size:480,gOpacity:.3,pOpacity:.9,pHeight:20,gWidth:20,gOffset:0,pOffset:4,setupEnabled:!1}:document.width>=600&&document.width<768?window.gOverride={gColor:"#FF0000",pColor:"#0000FF",gColumns:1,size:600,gOpacity:.3,pOpacity:.9,pHeight:20,gWidth:20,gOffset:0,pOffset:4,setupEnabled:!1}:document.width>=768&&document.width<968?window.gOverride={gColor:"#FF0000",pColor:"#0000FF",gColumns:7,size:732,gOpacity:.3,pOpacity:.1,pHeight:20,gWidth:12,gOffset:0,pOffset:0,setupEnabled:!1}:document.width>=968?window.gOverride={gColor:"#FF0000",pColor:"#0000FF",gColumns:12,size:968,gOpacity:.3,pOpacity:.9,pHeight:18,gWidth:10,gOffset:0,pOffset:0,setupEnabled:!1}:window.gOverride={gColor:"#FF0000",pColor:"#0000FF",gColumns:9,size:980,gOpacity:.3,pOpacity:.9,pHeight:18,gWidth:20,gOffset:0,pOffset:0,setupEnabled:!1};document.body.appendChild(document.createElement("script")).src="assets/js/gridder.js"}MBP.scaleFix();var e=768;Modernizr.mq("only all")?Modernizr.mq("only all and (min-width: "+e+"px)")&&t():t()});