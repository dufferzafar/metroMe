<?php
	include("../header.php")
?>

<script src="/metroMe/js/scrolltopcontrol.js"></script>
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

<link rel="stylesheet" type="text/css" href="/metroMe/plugins/lightview/css/lightview.css" />
<script type="text/javascript" src="/metroMe/plugins/lightview/spinners.min.js"></script>
<script type="text/javascript" src="/metroMe/plugins/lightview/lightview.js"></script>

<body class="metrouicss">
    <div class="page secondary with-sidebar">
        <div class="page-header">
            <div class="page-header-content">
                <h1>the code labs</h1>
                <a href="" class="back-button white big page-back"></a>
            </div>
        </div>

		<div class="page-sidebar" style="margin-top:40px;">
			<ul>
				<li data-role="dropdown">
				<a class="DDTitle" onclick="getPage('ahk')">Done With 'em</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>syncWPL</a></li>
						<li><a>syncIt</a></li>
						<li><a>vidInfo</a></li>
						<li><a>matchSticks</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">Half Baked, Maybe</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>ahkMetro</a></li>
						<li><a>fbInfo</a></li>
						<li><a>ahkWidgets, hulaGirl</a></li>
						<li><a>RenameR</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">Just For Fun</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>hideCursor</a></li>
						<li><a>startFun</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">Idea Box</a>
					<ul class="sub-menu sidebar-dropdown-menu">
						<li><a>ahkGestures</a></li>
						<li><a>finDupes</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="page-region">
        	<div class="page-region-content" style="padding:50px 150px 20px 50px;">
				<p>I've always believed the fact that scripting comes from a lazy soul. If you aren't lazy, you won't mind going through the trouble of renaming each and every file in a folder, just to change its extension (Duh!) when it could've been easily scripted. But this becomes fairly addictive once you get the hang of it. Once you realise the true potential of a programming language, what it can do for you, how it can really make your life easy, you just don't wanna let go of it.</p>

				<p>Most of the code that i write is made for daily life problems, automating repetitive tasks, cleaning out crap etc. Here i'll be adding stuff that isn't a full fledged 'app' (yet) but is worth sharing anyways. Being in the labs section, the code obviously doesn't come with any warranty, it (obviously) worked for me, but you might have to make necessary changes to suit your needs.</p>
            </div>
        </div>


    </div>
</body>

<script>

 </script>

<script src="js\sidebarDropdown.js"></script>
