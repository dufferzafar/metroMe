<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
include("../header.php")
?>

<script src="\dufferzafar\metroMe\js\scrolltopcontrol.js"></script>
<script>
function getPage(page)
{
	$.ajax({
			//Show A Loader
			beforeSend: function() {
				$('.page-region-content').html("<div id='updateText'></div>");
			var spinner = Spinners.create('#updateText', {radius:5,height:40,width:4,dashes:25,opacity:0.9,padding:0,rotation:800,color: '#ffffff'}).play();
			},

			//The Request
			type: "GET",
			cache: false,
			url: page + '.html', // url: "ajaxHandler.php?zip="+page,
			success: function(data) {
					$('.page-region-content').html(data);
			 },
			error: function(jqXHR, tStatus, errorThrown) {
					$('.page-region-content').html(" <h1>Awww! Snap!</h1> <p>An error occured in the Asynchronous calls.</p> <p>Please help me out by using the contact form to report the error, so i can fix it. </p><p> It won't take more than a minute, i promise.</p>");
			}
	});
}


</script>

<style>
	.gallery {
		margin-top: 25px;
	}

	.gallery img {
		padding: 1px;
		background: #f4f4f4;
		border: solid 1px #EFEFEF;
	}

	.gallery a {
	  margin: 0 5px 5px 0;
	}
</style>

<link rel="stylesheet" type="text/css" href="\dufferzafar\metroMe\plugins\lightview\css\lightview.css" />
<script type="text/javascript" src="\dufferzafar\metroMe\plugins\lightview\spinners.min.js"></script>
<script type="text/javascript" src="\dufferzafar\metroMe\plugins\lightview\lightview.js"></script>

<body class="metrouicss">
    <div class="page secondary with-sidebar">
        <div class="page-header">
            <div class="page-header-content">
                <h1>my life - a timeline</h1>
                <a href="\dufferzafar\metroMe\" class="back-button white big page-back"></a>
            </div>
        </div>

		<div class="page-sidebar" style="margin-top:40px;">
			<ul>
				<li data-role="dropdown">
				<a class="DDTitle" onclick="getPage('goodOlDays')">Good Ol' Days</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a onclick="getPage('xp')">Shadab's XP</a></li>
						<li><a>Ma, am a blogger</a></li>
						<li><a>Scripts : Batch & VBS</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">Autoplay Media Studio</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>Encry Decry Alpha</a></li>
						<li><a>Some Random Stuff</a></li>
						<li><a>Encry Decry</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">Into Cyber Security</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>Batch Heal & Clean</a></li>
						<li><a href="">Safe PC</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">Lua, my love</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>ShaR</a></li>
						<li><a>libLua</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">Back to AMS</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>Ravi's TnT</a></li>
						<li><a>Amit's DFF</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">Autohotkey</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>Windows helper</a></li>
						<li><a>Screener</a></li>
					</ul>
				</li>

				<li><a>The Drop</a></li>

				<li data-role="dropdown">
				<a class="DDTitle">All Hail Euler!</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>Number Theory</a></li>
						<li><a>bigNum.lua</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">The Present</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>A Laptop & Internet</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="page-region">
        	<div class="page-region-content" style="padding:50px 150px 20px 50px;">
            	<p>Oh boy! if i knew reminiscing could be so much fun i'd have done this section a long-long time ago.</p>
				<p>Writing all this felt great, really, i loved going back to the past, collecting data, putting things together to create a sort-of timeline. And by sort-of i mean to say that this isn't actually a 'timeline', it just gives a broad sense of the sequence of stuff.</p>
				<p>Now go on, select something. Tell me if you like it.</p>
		<!--
				<button class="image-button bg-color-blue fg-color-white place-right">Download Source<img class="bg-color-orange" src="\dufferzafar\metroMe\images\res\download-32.png"/></button>
		-->
            </div>
        </div>


    </div>
</body>
<script>

 </script>

<script src="\dufferzafar\metroMe\js\sidebarDropdown.js"></script>