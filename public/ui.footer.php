<?php
echo <<<HTML
<footer class='footer mt-auto border-top py-5 bg-orange text-white'>
	<div class='container'>
		<div class='row'>
			<div class='col-sm mb-4 mb-sm-0'>
				<img src='static/logo.svg' width='159' height='78' class='d-block mx-auto mx-sm-0' alt='logo'>
			</div>
			<div class='col-sm'>
				<img src='static/icon-96.png' width='30' height='30' class='d-block' alt='logo'>
				&copy; Hope By The Roadside - part of PR Jenkinson SCIO
			</div>
		</div>
	</div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='https://code.jquery.com/jquery-3.6.4.slim.min.js' integrity='sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct' crossorigin='anonymous'></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-155723962-1'></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());			
	gtag('config', 'UA-155723962-1');
</script>
HTML;