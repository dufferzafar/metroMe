<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <link rel="shortcut icon" href="favicon.ico" />

    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="metroMe Zafar">
    <meta name="author" content="Shadab Zafar">
    <meta name="keywords" content="duffer, zafar, metro, style">

    <!-- Stylesheets

    <link href="css\modern.css" rel="stylesheet">
	-->
	<!-- <link rel="stylesheet/less" type="text/css" href="less/modern.less" /> -->
    <link href="css/metroMe.css" rel="stylesheet">
    <link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <link href="plugins/grumble/grumble.css" rel="stylesheet">

	<!-- Javascripts

	-->
	<!-- // <script src="js/less-1.3.3.min.js"></script> -->
    <script src="js/assets/jquery-1.8.2.min.js"></script>
    <script src="js/assets/jquery.mousewheel.min.js"></script>
    <script src="js/modern/start-menu.js"></script>
    <script src="js/tileTheme.js"></script>
    <script src="plugins/grumble/jquery.grumble.min.js"></script>

    <title>dufferZafar : metroMe</title>

    <!-- Over Rides -->
    <style>
		body {
			/*background: #2b2d2f;  */
			background: #000000;
		}

		.metrouicss h1, h2, h3, h4, h5, h6, p {
				color: #ffffff !important;
		}
    </style>

    <script src="js/modern/tile-slider.js"></script>
</head>


<?php
  // echo "<div align=\"center\" style=\"color: #FFFFFF;\">";
        // include_once "counter.php"; // this will include the counter.
    // echo "</div>";

?>

<body class="metrouicss">
<div class="page secondary fixed-header">
    <div class="page-header">
        <div class="page-header-content">
        	<h1>duff's Buffs</h1>
            <div class="user-login">
                <a href="#" onclick="changeTheme('random')" oncontextmenu="changeTheme('blueDark');return false;">
					<span id="grumble1"></span>
                    <div class="name">
                        <span id="themeWord" class="first-name" style="color: #ffffff">theme</span>
                        <span id="themeName" class="last-name"  style="color: #ffffff">blueDark</span>
                    </div>
                    <div id="themePreview" class="avatar ">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="page-region">
        <div class="page-region-content tiles">

        	<!-- Basic Tile Group -->
        	<div class="tile-group">
                <a href="htm/info.php" class="tile outline-color-white">
					<span id="grumble2"></span>
                    <div id="about" class="tile image ">
                        <div class="tile-content">
                            <img src="images/tiles/about.png"/>
                        </div>
                    </div>
                </a>

                <a href="htm/faq.php" class="tile outline-color-white">
                    <div class="tile image ">
                        <div class="tile-content">
                            <img src="images/tiles/help.png" />
                        </div>
                    </div>
                </a>

            	<a href="htm/devLife" class="tile double outline-color-white">
					<span id="grumble3"></span>
                    <div id="devLife" class="tile image double ">
                        <div class="tile-content">
                            <img src="images/tiles/devlife.png" />
                        </div>
                    </div>
                </a>
			</div>


            <!-- Code Tile Group -->
            <div class="tile-group">

                <a href="htm/tools/index.php" class="tile outline-color-white">
                    <div class="tile image ">
                        <div class="tile-content">
                            <img src="images/tiles/tools.png" />
                        </div>
                    </div>
                </a>

				<a href="htm/labs/index.php" class="tile outline-color-white">
                    <div id="labs" class="tile image ">
                        <div class="tile-content">
                            <img src="images/tiles/lab.png" />
                        </div>
                    </div>
                </a>

            	<a href="http://www.github.com/dufferzafar/" target="_blank" class="tile double outline-color-white">
                    <div class="tile image double ">
                        <div class="tile-content">
                            <img src="images/tiles/github.png" />
                        </div>
                    </div>
                </a>

			</div>

            <!-- Site Tile Group -->
            <div class="tile-group">
				<a href="htm/blog" class="tile outline-color-white">
					<span id="grumble4"></span>
                    <div class="tile image ">
                        <div class="tile-content">
                            <img src="images/tiles/wordpress.png" />
                        </div>
                    </div>
                </a>

                <a href="htm/form.php" class="tile outline-color-white">
                    <div class="tile image ">
                        <div class="tile-content">
                            <img src="images/tiles/lastfm.png" />
                        </div>
                    </div>
                </a>

                <a href="http://www.facebook.com/dufferzafar" target="_blank" class="tile double outline-color-white" >
                    <div class="tile double "  data-role="tile-slider" data-param-period="5000">
                        <div class="tile-content">
                            <img src="images/tiles/dZ.png" class="place-right"/>
                            <h3 style="margin-bottom: 5px;">dufferZafar</h3>
                            <p>
                                I was just designing a metro based website for myself.
                            </p>
                            <h5>Codename - metroMe</h5>
                        </div>
                        <div class="tile-content">
                            <img src="images/tiles/ivar.png" class="place-right"/>
                            <h3 style="margin-bottom: 5px;">Ravi Kumar</h3>
                            <h5>he he he</h5>
                            <p>
                                Ravi Kumar added Shadab Softs to his timeline.
                            </p>
                        </div>
                        <div class="tile-content">
                            <img src="images/tiles/amit.png" class="place-right"/>
                            <h3 style="margin-bottom: 5px;">Amit Aswal</h3>
                            <h5>Pirate Amit Rocks!</h5>
                            <p>
                                Amit Aswal added a new photo of you.
                            </p>
                        </div>
                        <div class="tile-content">
                            <img src="images/tiles/shivam.png" class="place-right"/>
                            <h3 style="margin-bottom: 5px;">Shivam Rana</h3>
                            <h5>This guy literally Sucks!</h5>
                            <p>
                                Shivam Rana commented on your post.
                            </p>
                        </div>
                        <div class="brand">
                            <span class="name">Facebook Feeds</span>
                            <div class="badge">7</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

    </div>
</div>
<!--
<div class="nav-bar">
	<div class="nav-bar-inner padding10 place-right">
		<span class="element">
			2012-2013, Metro UI CSS &copy; by <a class="fg-color-white" href="mailto:sergey@pimenov.com.ua">Sergey Pimenov</a>
		</span>
	</div>
</div>
-->
<script type="text/javascript">

function setCookie(name, value, daysToLive)
{
	var cookie = name + "=" + encodeURIComponent(value);

	if (typeof daysToLive === "number")
		cookie += "; max-age=" + (daysToLive*60*60*24);

	document.cookie = cookie;
}

function getCookies()
{
	var cookies = {}; // The object we will return
	var all = document.cookie; // Get all cookies in one big string

	if (all === "") // If the property is the empty string
		return cookies; // return an empty object

	var list = all.split("; "); // Split into individual name=value pairs

	for(var i = 0; i < list.length; i++)
	{
		var cookie = list[i];
		var p = cookie.indexOf("="); // Find the first = sign
		var name = cookie.substring(0,p); // Get cookie name
		var value = cookie.substring(p+1); // Get cookie value
		value = decodeURIComponent(value); // Decode the value
		cookies[name] = value; // Store name and value in object
	}
	return cookies;
}

$(document).ready(function () {
	changeTheme("blueDark");

	// var isCharmVisible = false;
	// var orig = $("div .page-region-content").width()

	// alert("hey");

	start = 500;
	duration = 3500;

	cook = getCookies()

	if (!(cook["showDone"] == "true"))
	{
		$('#grumble1').grumble(
					{
						text: 'Click here for some random themes....',
						angle: 250,
						distance: 0,
						showAfter: 500,
						hideAfter: duration
					}
				);

		$('#grumble2').grumble(
					{
						text: 'I tried writing about me, not finished yet...',
						angle: 340,
						distance: 0,
						showAfter: (start * 2) + (duration * 1),
						hideAfter: duration
					}
				);

		$('#grumble3').grumble(
					{
						text: 'A gallery and a faster way of loading webpages, thats it for now.....',
						angle: 0,
						distance: 0,
						showAfter: (start * 3) + (duration * 2),
						hideAfter: duration
					}
				);

		$('#grumble4').grumble(
					{
						text: 'Yeah! i am planning to write a blog too :P',
						angle: 300,
						distance: 0,
						showAfter: (start * 4) + (duration * 3),
						hideAfter: duration
					}
				);

		setCookie("showDone", "true", 1);
	}
});
</script>
<script src="js/tileHover.js"></script>
</body>
</html>
