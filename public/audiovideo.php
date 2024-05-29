<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<title>Audio &amp; Video</title>
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
		
		<link rel="prefetch" href="./">
		<link rel="prefetch" href="gospel.html">
		<link rel="prefetch" href="gospel-explained.html">
		<link rel="prefetch" href="contact.html">
		
	</head>
	<body class="d-flex flex-column h-100">
		<?php require('ui.header.php'); ?>
		
		<main role="main" class="flex-shrink-0">
			
			<div class="contact-header container text-center px-3 py-3 mt-md-5 pb-mt-4 mx-auto">
				<h1 class="display-4">Audio &amp; Video</h1>
				<p class="lead text-orange">
					Watch and listen to the gospel message&hellip;
				</p>
			</div>
			
			<div class="container">
				
				<div class="row justify-content-around">
					
					<div class="col-md-5 mb-4">
						<h5>Gospel Message by Paul Jenkinson</h5>
						<div class="embed-responsive">
							<audio controls preload='auto' class="full-width">
								<source src='media/3CrossesGospel.mp3' type='audio/mpeg'>
								<!-- fallback for non supporting browsers goes here -->
								Your browser does not support the audio element.
								<a href='media/3CrossesGospel.mp3'> Download the mp3 file.</a>
							</audio>
						</div>
					</div>
					
					<div class="col-md-5 mb-4">
						<h5>Gospel Message in Runyankole (Uganda)</h5>
						<div class="embed-responsive">
							<audio controls preload='auto' class="full-width">
								<source src='media/Runyankole.m4a' type='audio/mp4'>
								<!-- fallback for non supporting browsers goes here -->
								Your browser does not support the audio element.
								<a href='media/Runyankole.m4a'> Download the audio file.</a>
							</audio>
						</div>
					</div>
					
					<!-- Force next columns to break to new line -->
					<!--<div class="w-100"></div>-->
					
					<!--<div class="col-md-5 mb-4">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rP5EuPFEwh0?rel=0" allowfullscreen></iframe>
						</div>
					</div>-->
					
					<div class="col-md-5 mb-4">
						<h5>Gospel message in french by Jean-Luc Hainaut</h5>
						<div class="embed-responsive">
							<audio controls preload='auto' class="full-width">
								<source src='media/French_Gospel_Message.m4a' type='audio/mp4'>
								<!-- fallback for non supporting browsers goes here -->
								Your browser does not support the audio element.
								<a href='media/French_Gospel_Message.m4a'> Download the audio file.</a>
							</audio>
						</div>
					</div>
					
					<div class="col-md-5 mb-4">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NfXybggH4Qo?rel=0" allowfullscreen></iframe>
						</div>
					</div>
					
					
				</div>
				
			</div>
			
		</main>
		
		<?php require('ui.footer.php'); ?>
		
	</body>
</html>
