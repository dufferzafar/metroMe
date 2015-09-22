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
                <h1>tools & hacks</h1>
                <a href="\dufferzafar\metroMe\" class="back-button white big page-back"></a>
            </div>
        </div>
		
		<div class="page-sidebar" style="margin-top:40px;">
			<ul>
				<li data-role="dropdown">
				<a class="DDTitle">Daily life</a>
					<ul class="sub-menu sidebar-dropdown-menu">		
						<li><a>The 'Obvy' Pack</a></li>
						<li><a>Plugins for Chrome</a></li>
					</ul>
				</li>

				<li data-role="dropdown">
				<a class="DDTitle">Coding</a>
					<ul class="sub-menu sidebar-dropdown-menu">		
						<li><a>Sublime Text</a></li>
						<li><a>Notepad++</a></li>
						<li><a>MS Visual Studio</a></li>
						<li><a>Adobe Dreamweaver</a></li>
					</ul>
				</li>
				
				<li data-role="dropdown">
				<a class="DDTitle">Designing</a>
					<ul class="sub-menu sidebar-dropdown-menu">		
						<li><a>Adobe Photoshop</a></li>
						<li><a>Metro Studio</a></li>
					</ul>
				</li>
				
				<li data-role="dropdown">
				<a class="DDTitle">Home Made Recepies</a>
					<ul class="sub-menu sidebar-dropdown-menu">		
						<li><a>winHelper</a></li>
						<li><a>Scriptlet Library</a></li>
					</ul>
				</li>
				
				<li data-role="dropdown">
				<a class="DDTitle">Bookmarklets</a>
					<ul class="sub-menu sidebar-dropdown-menu">		
						<li><a>OneLook Reverse Search</a></li>
						<li><a>Remote uTorrent</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		<div class="page-region">
        	<div class="page-region-content" style="padding:50px 150px 20px 50px;">
            	<p>Great computing experience comes from using great products, there are tools that leave you awestruck the moment you see them and you begin to wonder - why haven't you used this before? For alomst every task you can think of, there's a kickass software out there. </p>
				<p>But sometimes your needs get way too tailored and no third party application seems to fit, thats where programming kicks in. You code your way out of the problem, emerging with something that gets the job done.</p>
				<p>Here are the tools that i just can't live without, starting from web-browsers to media players to text-editors. A tool for every task.</p>
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