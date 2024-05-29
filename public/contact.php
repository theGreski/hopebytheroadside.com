<?php

//use google\appengine\api\mail\Message;

// Check for POST request
//
if ($_SERVER['REQUEST_METHOD'] === 'POSTALNIK') {
	
	syslog(LOG_NOTICE, "CONTACT form received");
	
	$name		= html_entity_decode(trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING)), ENT_QUOTES);
	$email		= html_entity_decode(trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING)), ENT_QUOTES);
	$phone		= html_entity_decode(trim(filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING)), ENT_QUOTES);
	$postal		= html_entity_decode(trim(filter_input(INPUT_POST, "postal", FILTER_SANITIZE_STRING)), ENT_QUOTES);
	$surname	= filter_input(INPUT_POST, "surname", FILTER_SANITIZE_STRING);
	
	if (strlen($surname) > 0) {
		
		// Set a 400 (bad request) response code and exit.
        http_response_code(400);
		
		// Set the result message
		//
		$result = "
			<div class='text-left alert alert-danger' role='alert'>
				We were unable to sent your message. Please try again later or give us a call.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
		
	} else {
		
		// Build email content
		//
		$email_content = "Person: " . $name . "\r\n\r\nContact email: " . $email;
		
		if (strlen($phone) > 0) {
			$email_content.= "\r\n\r\nPhone: " . $phone;
		}
		
		if (strlen($postal) > 0) {
			$email_content.= "\r\n\r\nPostal address:\r\n" . $postal;
		}
		
		//if (isset($_POST['bible'])) {
			$email_content.= "\r\n\r\nFree Bible requested: " . (isset($_POST['bible']) ? "YES"  : "NO");
		//}
		
		$email_content.= "\r\n\r\nFree 'Ultimate Questions' booklet requested: " . (isset($_POST['ultimate']) ? "YES"  : "NO");
		
		$email_content.= "\r\n\r\nFree 'Can I Believe The Bible' booklet? requested: " . (isset($_POST['believe']) ? "YES"  : "NO");
		
		try {
			$message = new Message();
			$message->setSender("Website Contact Form<noreply@eggizoapp.appspotmail.com>");
			$message->addTo("hopebytheroadside@gmail.com");
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$message->setReplyTo($name . "<" . $email . ">");
			}
			$message->setSubject("Website Contact from " . $name);
			$message->setTextBody($email_content);
			$message->send();
			
			
			// Set the result message
			//
			$result = "
				<div class='text-left alert alert-success' role='alert'>
					Message sent successfully!
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
					</button>
				</div>";
			
		} catch (InvalidArgumentException $e) {
			
			// Set a 500 (internal server error) response code.
			//
			http_response_code(500);
			
			// Write to logs
			//
			syslog(LOG_ERR, "Could not send the email");
			syslog(LOG_ERR, $e);
			
			// Set the result message
			//
			$result = "
				<div class='text-left alert alert-danger' role='alert'>
					We were unable to deliver your message. Please try again later or give us a call.
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
					</button>
				</div>";
			
		}
		
	}
	
}

?>

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
						<li class="nav-item py-2 py-lg-0"><a class="p-2" href="gospel.html">The Gospel Message</a></li>
						<li class="nav-item py-2 py-lg-0"><a class="p-2" href="audiovideo.html">Audio &amp; Video</a></li>
						<li class="nav-item py-2 py-lg-0"><a class="p-2" href="contact.html">Contact Us</a></li>
						<li class="nav-item py-2 py-lg-0"><a class="p-2" href="https://www.facebook.com/#!/groups/891612470967222/" target="_blank" rel="noopener">Follow on Facebook</a></li>
					</ul>
				</div>
			</nav>
		</header>
		
		<main role="main" class="flex-shrink-0">
			
			<div class="contact-header container text-center px-3 py-3 mt-md-5 pb-mt-4 mx-auto">
				
				<?php echo (isset($result) ? $result : ""); ?>
				
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
						
						
						<form id="form-element" method="POST" action="https://formsubmit.co/a66634fd118e4331b7e90ce81ad5f80f">
							<input type="hidden" name="_subject" value="Website Contact!">
							<input type="hidden" name="_cc" value="grekowski@gmail.com">
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
								<textarea class="form-control" name="postal" id="postal-FLD" rows="4" placeholder="Enter your postal address"></textarea>
								<small class="form-text text-muted">required if booklets are selected below</small>
							</div>
							
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" name="test[]" value="freebible" id="bible-CHK">
								<label class="custom-control-label" for="bible-CHK">Free Bible?</label>
							</div>
							
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" name="test[]" value="ultimatequestionsbooklet" id="ultimate-CHK">
								<label class="custom-control-label" for="ultimate-CHK">Free "Ultimate Questions" booklet?</label>
							</div>
							
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" name="believebiblebooklet" id="believe-CHK">
								<label class="custom-control-label" for="believe-CHK">Free "Can I Believe The Bible" booklet?</label>
							</div>
							
							<p class="text-muted">
								Literature sent to UK and Ireland only!
							</p>
							
							<!--<input type="text" name="surname" id="surname-FLD">-->
							
							<button type="submit" class="btn btn-lg btn-primary">Submit</button>
						</form>
					</div>
					<div class="col"></div>
				</div>
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
		<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
		
		
		<script>
			var form = $("#form-element"),
				wrapper = $("#form-container");
			
			$(form).on("change", ":checkbox", function(){
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
			// Set up an event listener for the contact form.
			/*
			$(form).submit(function(event) {
				
				form.addClass("hidden");
				
				// Stop the browser from submitting the form.
				//event.preventDefault();
				
				//return false;
				
			});
			*/
		</script>
		
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