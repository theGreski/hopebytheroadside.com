<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<title>Hope By The Roadside</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimal-ui">
		
		<!-- javascript redirecting to non-www version / avoid canonicalisation-->
		<script>
			var secure = true,															// redirect to secure https version
				www = true,																// set desired default domain version www or non-www
				url = window.location.href;												// destination url for redirection; actual current url
			
			if(!window.location.protocol.match("https") && secure == true){				// check if PROTOCOL is not secure and if it should
				console.log("Redirecting to the HTTPS version");
				url = url.replace("http:", "https:");
			}
			if(window.location.host.indexOf("www.") == 0 && www == false) { 			// check if DOMAIN part contains WWW and if it should not
				console.log("web address includes WWW but it should not");
				url = url.replace("www.", "");
			} else if(window.location.host.indexOf("www.") < 0 && www == true) {		// check if DOMAIN part not contains WWW and if it should
				console.log("web address does NOT include WWW but it should");
				url = url.replace(window.location.host, "www."+window.location.host);
			}
			//if (window.location.pathname.match("index.php")) { 							// check if PATH includes script name, only applicable to landing page
			//	url = url.replace("index.php","");
			//}
			if(window.location.href != url){											// check if url was modified
				console.log("Redirecting with url changes");
				//window.location= url;				// similar behavior as a click event
				window.location.replace(url);		// similar behavior as an HTTP redirect
			}
		</script>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		
		<link rel="apple-touch-icon" sizes="60x60" href="static/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="static/apple-touch-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="static/icon-192.png" />
        <link rel="icon" type="image/png" sizes="144x144" href="static/icon-144.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="static/icon-96.png" />
        <link rel="shortcut icon" type="image/x-icon" href="static/favicon.ico" />
		
		<link rel="stylesheet" href="static/style.css">
		
		<link rel="prefetch" href="gospel.html">
		<link rel="prefetch" href="gospel-explained.html">
		<link rel="prefetch" href="audiovideo.html">
		<link rel="prefetch" href="contact.html">
		
	</head>
	<body class="d-flex flex-column h-100">
		<?php require('ui.header.php'); ?>
		
		<main role="main" class="flex-shrink-0">
			<div class="container mt-4">
				<div id="carouselExampleControls" class="carousel slide shadow" data-ride="carousel" data-interval="2000">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="carousel/IMG-20180821-WA0000b.jpg" class="d-block w-100" alt="">
						</div>
						<div class="carousel-item">
							<img src="carousel/IMG-20180821-WA0001b.jpg" class="d-block w-100" alt="">
						</div>
						<div class="carousel-item">
							<img src="carousel/IMG-20180821-WA0002b.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/D0C6B41D-51F4-41BE-AE4B-E75193E3DE63_1100x619.jpeg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/IMG-20180821-WA0004b.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/IMG-20180821-WA0005b.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/80F3C363-2031-4CD7-A2BF-BDE1BA605100_1100x619.jpeg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/IMG-20190418-WA0000b.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/37241526-19B5-4772-B6A5-B87425F50536_1099x618.jpeg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/A2B567D0-3530-42F5-8BAC-05DA84B260E3_1100x620.jpeg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/C9AD8F72-BE60-4D8E-B443-0ED7CA80B01A_1100x618.jpeg" class="d-block w-100" alt="...">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			
			<div class="contact-header container text-center px-3 py-3 mt-md-5 pb-mt-4 mx-auto">
				<!--<h1 class="display-4">Welcome to Hope By The Roadside</h1>-->
				<h1 class="display-4">Welcome to<img src="static/logo__orange.svg" width="159" height="78" class="d-block mx-auto welcome-logo" alt="logo"></h1>
				

			</div>
			
			<div class="container pb-5">
				
				<p class="lead">
					Perhaps you're on our website because you noticed one of our billboards or trailers at the roadside around U.K, Ireland, Canada, St Lucia or you've seen one of our billboards in Uganda or DRC. No matter how you found our website&hellip;we're glad you did!
				</p>
				<p class="lead">
					Hope By The Roadside wants to share the good news of the Christian gospel with as many people as possible. In a world with so much uncertainty and bad news, we're glad to be able to share the certainty of the gospel with you. This is a message about God's salvation&hellip;a message which can truly give you eternal hope!
				</p>
				
				<p class="display-4 font-weight-bold text-orange">ARE YOU SURE?</p>
				<div class="row pb-5">
					<div class="col-sm">
						This is a question used so often in everyday conversations. Someone may ask you a question, and you will answer. Your answer will often be met with another question&hellip; are you sure?<br>
						What if the question asked was about eternity; the endless period which lies beyond this life we currently enjoy? What if the question was "<b class="text-orange">what are you relying on to take you to heaven?</b>"<br>
						There is no doubt this question would be answered with a variety of responses if asked to members of the public in the street.<br>
						Some would state good living as their hope. Others may talk about their religion or church attendance. Some may even claim they will worry about heaven and hell later in life, or when they feel close to death.<br><br>
						But <b>how would you</b> answer such a question? Are you sure?
					</div>
					<div class="col-sm">
						How certain are you that whatever you stated in your answer will give you the <b class="text-orange">assurance of an eternity with God in heaven</b>?<br>
						The reason for this challenge is because when we look into God's message to humanity &hellip; the Bible &hellip; it actually tells us clearly that none of the above will stand us in any good stead for eternity.<br>
						If we look at <b>Ephesians chapter 2, verses 8 and 9</b> tell us that we are "<b class="text-orange">saved</b>" by nothing else other than God's grace which comes through faith in Him. It specifically says that we are not saved by "<b>works</b>", and that includes that good-living so many depend on, and church-attendance and involvement too.<br><br>
						<a href="contact.html">You can find out more about eternal hope and security.</a>
					</div>
				</div>
				
				<p class="lead font-weight-bold pt-5 border-top">
					Have you &hellip;
				</p>
				
				<div class="card-deck mb-3 text-center">
					<div class="card mb-4 shadow bg-orange text-white">
						<div class="card-body">
							Ever wondered what life is about?
						</div>
					</div>
					
					<div class="card mb-4 shadow bg-orange text-white">
						<div class="card-body">
							Ever wondered if God is real?
						</div>
					</div>
					
					<div class="card mb-4 shadow bg-orange text-white">
						<div class="card-body">
							Ever wondered what happens when we die?
						</div>
					</div>
					
					<div class="card mb-4 shadow bg-orange text-white">
						<div class="card-body">
							Ever wondered how to be sure of Heaven?
						</div>
					</div>
				</div>
				
				<p class="lead font-weight-bold pt-3">
					We all have!
				</p>
				<p>
					These are some of the big questions in life. The Bible brings us answers to these important questions, and explains how we can have our sins forgiven through believing in the Lord Jesus Christ.
				</p>
				<p>
					<a href="gospel.html" >Find out more &hellip;</a>
				</p>
				
			</div>
			
		</main>
		
		<?php require('ui.footer.php'); ?>
		
	</body>
</html>
