<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<title>The Gospel Message</title>
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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<link rel="apple-touch-icon" sizes="60x60" href="static/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="static/apple-touch-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="static/icon-192.png" />
        <link rel="icon" type="image/png" sizes="144x144" href="static/icon-144.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="static/icon-96.png" />
        <link rel="shortcut icon" type="image/x-icon" href="static/favicon.ico" />
		
		<link rel="stylesheet" href="static/style.css">
		
		<link rel="prefetch" href="./">
		<link rel="prefetch" href="gospel-explained.php">
		<link rel="prefetch" href="audiovideo.php">
		<link rel="prefetch" href="contact.php">
		
	</head>
	<body class="d-flex flex-column h-100">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom shadow-sm">
				<!--<a class="navbar-brand" href="./">
					<img src="static/icon-96.png" width="30" height="30" class="d-none d-sm-inline-block" alt="logo">
					Hope By The Roadside
				</a>-->
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
			
			<div class="contact-header container text-center px-3 py-3 mt-md-5 pb-mt-4 mx-auto">
				<h1 class="display-4">The Gospel Message</h1>
				<p class="lead text-orange">
					God's good news&hellip;
				</p>
			</div>
			
			<div class="container-fluid bg-orange text-white text-center">
				<div class="container py-4 lead">
					<div class="row">
						<div class="col-md-4">
							<p class="display-2"><b>SIN</b>&hellip;</p>
						</div>
						<div class="col">
							<p>&hellip;affects <b>EVERYONE</b></p>
							<p>&hellip;<b>WILL BE</b> judged</p>
							<p>&hellip;<b>WILL KEEP US</b> out of heaven</p>
						</div>
					</div>
					<p class="display-4">but &hellip; <b>SIN CAN BE</b> forgiven</p>
				</div>
			</div>
			
			<div class="container pt-5">
				
				<p class="lead">You may be wondering why this website is called "Hope By The Roadside". After all, usually when we find ourselves at the roadside, it is often in a situation where there seems to be little hope; we've perhaps had car problems, a collision, or run out of fuel.</p>
				
				<p>There are two reasons for the title. The first is fairly obvious. It is because we position our large boards with Bible verses filled with a <b>message of hope</b> right beside busy roads for all to read. Maybe one of these boards is the reason you find yourself on our site reading more. If so, we thank you for visiting!</p>
				
				<p>The second reason is because the Bible gives us many examples of people who found real <b>life-changing experiences of hope and conversion</b> by the roadside, and the Bible tells us that we can have such an experience too, even today.</p>
				
				<p>There is the example of the man in Luke chapter 10 who was left at the roadside between Jerusalem and Jericho in a terrible state after having been robbed. This may sound like a story of no hope but as you read on, you'll discover that despite two people walking on past him, the third man takes pity and shows real compassion on him and takes him to safety. Because of one man's care for him, he found <b>hope by the roadside</b>.</p>
				
				<p>We also find the conversion experience of the Apostle Paul in Acts chapter 9 shows real hope by the roadside; he was making a journey to Damascus. Here was a man that up until now was without hope for eternity. He had been persecuting Christians, committing murder and throwing into prison anyone who identified with Jesus Christ. He never accepted Jesus Christ was the Son of God or the promised Messiah for the Jewish people until Christ appeared to him in a blinding light by the roadside. Paul could do nothing else other than commit himself to God having seen and heard the undeniable proof that <b>Jesus Christ</b> is the <b>Saviour</b> of the world.</p>
				
				<p>The Bible tells us that our <b class="text-orange">life is a journey on a road</b>. We read this in Matthew chapter 7 where the Lord Jesus is speaking. Actually, there are two roads mentioned in verses 13 and 14; a broad road and a narrow road.</p>
				
				<h4>So what is the difference between the two roads?</h4>
				
				<p>If we look at the broad road first, the Lord Jesus states that this road leads to "destruction" in verse 13. This is the road we all start life on, because we are all born already a sinner. Romans chapter 3 verse 23 tells us "&hellip;all have sinned and come short of the glory of God" It is clear from the word "<b>all</b>" that there are no exceptions. <b>Sin is all against God</b>, and therefore God (being absolutely holy and sinless) must judge it. The verdict can really only be guilty, because if we are all honest, we definitely are sinners and we definitely fall short of God's standard. Whether it is what we might consider little sins such as telling lies or perhaps having hatred toward someone, or whether it is when we stole something or broke the speed limit in our car, or something worse, God will judge these actions and thoughts and find us guilty. The punishment for this will be eternal separation from God in hell, and that is what Christ describes as "destruction" in Matthew chapter 7 verse 13.</p>
				
			</div>
			
			<div class="container text-center p-5">
				<a href="gospel-explained.php" class="btn btn-primary btn-lg">and The Good News is&hellip;</a>
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