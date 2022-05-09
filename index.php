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
			if (window.location.pathname.match("index.php")) { 							// check if PATH includes script name, only applicable to landing page
				url = url.replace("index.php","");
			}
			if(window.location.href != url){											// check if url was modified
				console.log("Redirecting with url changes");
				//window.location= url;				// similar behavior as a click event
				window.location.replace(url);		// similar behavior as an HTTP redirect
			}
		</script>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<link rel="apple-touch-icon" sizes="60x60" href="static/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="static/apple-touch-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="static/icon-192.png" />
        <link rel="icon" type="image/png" sizes="144x144" href="static/icon-144.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="static/icon-96.png" />
        <link rel="shortcut icon" type="image/x-icon" href="static/favicon.ico" />
		
		<link rel="stylesheet" href="static/style.css">
		
		<link rel="prefetch" href="gospel.php">
		<link rel="prefetch" href="gospel-explained.php">
		<link rel="prefetch" href="audiovideo.php">
		<link rel="prefetch" href="contact.php">
		
	</head>
	<body class="d-flex flex-column h-100">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom shadow-sm">
				<a class="navbar-brand" href="./">
					<img src="static/logo__orange.svg" width="61" height="30" class="d-inline-block" alt="logo">
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="navbarCollapse" class="navbar-collapse collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item py-2 py-lg-0"><a class="p-2" href="gospel.php">The Gospel Message</a></li>
						<li class="nav-item py-2 py-lg-0"><a class="p-2" href="audiovideo.php">Audio &amp; Video</a></li>
						<li class="nav-item py-2 py-lg-0"><a class="p-2" href="contact.php">Contact Us</a></li>
						<li class="nav-item py-2 py-lg-0"><a class="p-2" href="https://www.facebook.com/#!/groups/891612470967222/" target="_blank" rel="noopener">Follow on Facebook</a></li>
					</ul>
				</div>
			</nav>
		</header>
		
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
							<img src="carousel/IMG-20180821-WA0003b.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/IMG-20180821-WA0004b.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/IMG-20180821-WA0005b.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/IMG-20180821-WA0006b.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="carousel/IMG-20190418-WA0000b.jpg" class="d-block w-100" alt="...">
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
					Perhaps you're on our website because you noticed one of our billboards or trailers at the roadside around U.K and Ireland or Maybe you've seen one of our billboards in Uganda. No matter how you found our website&hellip;we're glad you did!
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
						<a href="contact.php">You can find out more about eternal hope and security.</a>
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
					<a href="gospel.php" >Find out more &hellip;</a>
				</p>
				
			</div>
			
		</main>
		
		<footer class="footer mt-auto border-top py-5 bg-orange text-white">
			<div class="container">
				<div class="row">
					<div class="col-sm mb-4 mb-sm-0">
						<img src="static/logo.svg" width="159" height="78" class="d-block mx-auto mx-sm-0" alt="logo">
					</div>
					<div class="col-sm">
						<img src="static/icon-96.png" width="30" height="30" class="d-block" alt="logo">
						&copy; Hope By The Roadside - part of PR Jenkinson SCIO
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155723962-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-155723962-1');
		</script>
		
	</body>
</html>