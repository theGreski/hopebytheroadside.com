<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<title>Contact Us</title>
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
		<link rel="prefetch" href="audiovideo.html">
		
		<style>
			#form-element {
				transition: opacity 0.15s ease-out;
			}
			#form-element.hidden {
				opacity: 0.3;
			}
			#surname-FLD {
				opacity: 0;
				width: 1px;
				height: 1px;
				display: none;
			}
		</style>
	</head>
	<body class="d-flex flex-column h-100">
		<?php require('ui.header.php'); ?>
		
		<main role="main" class="flex-shrink-0">
			
			<div class="contact-header container text-center px-3 py-3 mt-md-5 pb-mt-4 mx-auto">
				<h1 class="display-4">Contact Us!</h1>
				<p class="lead">
					We can be contacted in a variety of ways. We have gospel booklets and leaflets which are free of charge and available to anyone who wants them. Please be assured we will never share your details with anyone else.
				</p>
			</div>
			
			<div class="container">
				<div class="card-deck mb-3 text-center">
					<div class="card mb-4 shadow-sm">
						<div class="card-body">
							<img src="static/email.svg" width="50" height="50" class="mx-auto d-block" alt="email contact">
							<h5 class="my-4">email</h5>
							<p>
								If you don't like filling out forms, you can drop us an email to <a href="mailto:hopebytheroadside@gmail.com">hopebytheroadside@gmail.com</a>
							</p>
						</div>
					</div>
					
					<div class="card mb-4 shadow-sm">
						<div class="card-body">
							<img src="static/letter.svg" width="50" height="50" class="mx-auto d-block" alt="postal contact">
							<h5 class="my-4">post</h5>
							<p>
								Hope By The Roadside<br>
								Gillhead Cottage<br>
								Symington<br>
								South Ayrshire<br>
								Scotland, UK
							</p>
						</div>
					</div>
					
					<div class="card mb-4 shadow-sm">
						<div class="card-body">
							<img src="static/facebook.svg" width="50" height="50" class="mx-auto d-block" alt="postal contact">
							<h5 class="my-4">facebook</h5>
							<p>
								We're on social media. Take a moment and visit our <a href="https://www.facebook.com/#!/groups/891612470967222/" target="_blank" rel="noopener">Facebook page</a> for updates and upcoming events.
							</p>
						</div>
					</div>
				</div>
				
				<div class="row pt-0 pb-5">
					<div class="col"></div>
					<div class="col-sm-8" id="form-container">
						
						<form id="form-element" method="POST" action="https://formsubmit.co/hopebytheroadside@gmail.com">
							<input type="hidden" name="_subject" value="Website Contact!">
							<input type="hidden" name="_cc" value="grekowski@gmail.com">
							<input type="text" name="_honey" style="display:none">
							<input type="hidden" name="_next" value="https://www.hopebytheroadside.com/contact-done.html">
							<h2 class="display-4 my-4">Contact Form</h2>
							<div class="form-group">
								<label for="name-FLD">Your name</label>
								<input type="text" class="form-control" name="name" id="name-FLD" placeholder="Enter your name" required>
							</div>
							<div class="form-group">
								<label for="email-FLD">Email address</label>
								<input type="email" class="form-control" name="email" id="email-FLD" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="phone-FLD">Telephone</label>
								<input type="text" class="form-control" name="phone" id="phone-FLD" placeholder="Enter your phone no">
							</div>
							
							<div class="form-group">
								<label for="postal-FLD">Postal address</label>
								<textarea class="form-control" name="address" id="postal-FLD" rows="4" placeholder="Enter your postal address"></textarea>
								<small class="form-text text-muted">required if booklets are selected below</small>
							</div>
							
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" name="FreeBibleRequest" id="bible-CHK">
								<label class="custom-control-label" for="bible-CHK">Free Bible?</label>
							</div>
							
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" name="UltimateQuestionsBookletRequest" id="ultimate-CHK">
								<label class="custom-control-label" for="ultimate-CHK">Free "Ultimate Questions" booklet?</label>
							</div>
							
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" name="BelieveBibleBookletRequest" id="believe-CHK">
								<label class="custom-control-label" for="believe-CHK">Free "Can I Believe The Bible" booklet?</label>
							</div>
							
							<p class="text-muted">
								Literature sent to UK and Ireland only!
							</p>
							
							<button type="submit" class="btn btn-lg btn-primary">Submit</button>
						</form>
					</div>
					<div class="col"></div>
				</div>
			</div>
			
		</main>
		
		<?php require('ui.footer.php'); ?>
		
		<script>
			$("#form-element").on("change", ":checkbox", function(){
				var selected = false;
				$("input[type=checkbox]:checked").each(element => {
					selected = true;
				});
				if (selected == true) {
					$("#postal-FLD").prop("required", true);
				} else {
					$("#postal-FLD").prop("required", false);
				}
			});
		</script>
		
	</body>
</html>