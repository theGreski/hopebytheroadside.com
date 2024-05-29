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
		<link rel="prefetch" href="audiovideo.html">
		<link rel="prefetch" href="contact.html">
		
	</head>
	<body class="d-flex flex-column h-100">
		<?php require('ui.header.php'); ?>
		
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
			
			<div class="container pt-5 pb-4">
				
				<p class="lead">How thankful we are though that there truly is hope by the roadside, even on this broad road that we have been thinking about. We're glad that Christ also talks about the narrow road. This is a road that "<b class="text-orange">leads to life</b>", that is, an eternity with God rather than the one we thought about earlier which would be separate from God.
				
				<p>In order to change roads, and leave the broad road for the narrow road, we need to have our <b>sin problem</b> dealt with. The good news of the Christian "gospel" is that this is absolutely <b>possible today</b>.</p>
				
				<p>Right at the centre of the gospel, and indeed at the centre of human history too, are the events of Calvary, which was a hill outside of Jerusalem. It was there around 2000 years ago that Jesus Christ died on a Roman cross, but this was no ordinary death, and Jesus Christ was no ordinary man. <b>Jesus Christ was and is the Son of God</b> and His death and resurrection were in God's plan to deal with your sin and mine. It was foretold in the Bible in great detail long before it happened. Isaiah chapter 53 tells us about one who would die for the sins of others (verses 4-6) approximately 700 years beforehand. Psalm 22 describes in great detail many aspects of the crucifixion of Christ: He would be surrounded by those who hated and mocked Him (verse 7), He would experience extreme thirst (verse 15), His hands and feet would be pierced (verse 16). Many of the details given were utterly unique to crucifixion, and given that these were penned around 1000 years before crucifixion was ever thought about, you can see that the death of Christ was far from ordinary and was always God's plan.</p>
				
				<h4>But what does this mean for you and me?</h4>
				
				<p>As Isaiah told us these 700 years before it happened, there would be one who would die for the sins of others. Put simply, Christ died for your sin and mine. He was there bearing the judgement and anger of God upon our sin. Romans chapter 5 verse 8 tells us "God demonstrated His love toward us, in that while we were still sinners Christ died for us".</p>
				
				<p>The simplicity of the gospel message is this; if we want our sins forgiven and the guarantee of an eternity with God in Heaven, it is through believing and trusting in Christ and relying on His finished work which took place at Calvary. As Paul and Silas told the jail keeper in Acts chapter 16 verse 31, "believe on the Lord Jesus Christ, and you will be saved".</p>
				
				<p>No where in the Bible does it say we can be in Heaven through living an honest and clean life, or through trying our best to please God or others. In fact, this idea is very definitely discarded in Ephesians chapter 2 verses 7-8. It says "For by grace are you saved through faith, and not of yourselves; it is the gift of God, not of works, lest anyone should boast".</p>
				
				<p>So if you still find yourself on the broad road, still in your sins, never having trusted and believed in Christ as Saviour, there truly is hope by the roadside. That hope is centred in Jesus Christ. Coming to know Him as Saviour will put you on that narrow road that leads to Heaven, and no doubt will change your life too.</p>
				
				<p>Contrary to what others may say, there are no other ways to Heaven. Jesus said in John chapter 14 verse 6 "I am the way&hellip;no one comes to the Father except through me"</p>
				
			</div>
			
			<div class="container-fluid border-top border-bottom py-5">
				<div class="container">
					<p class="display-4"><b>WANT TO KNOW MORE?</b></p>
					<p>If you would like to know more, or would like to receive some booklets or a free Bible, please <a href="contact.html">contact us</a>. We would be glad to help!</p>
				</div>
			</div>
			
			<div class="container py-5">
				<p>Want to read the Bible yourself?</p>
				<div class="row">
					<div class="col-sm py-1">
						<a href="contact.html">Request a free Bible</a>
					</div>
					<div class="col-sm py-1">
						<a href="https://www.blueletterbible.org/" target="_blank" rel="noopener">Read the Bible online with Blue Letter Bible</a>
					</div>
					<div class="col-sm py-1">
						<a href="https://www.biblegateway.com/" target="_blank" rel="noopener">Read the Bible online with Bible Gateway</a>
					</div>
				</div>
			</div>
			
		</main>
		
		<?php require('ui.footer.php'); ?>
		
	</body>
</html>