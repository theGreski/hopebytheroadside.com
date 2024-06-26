<?php 
declare(strict_types = 1);

date_default_timezone_set('Europe/Dublin');

# [START gae_simple_front_controller]
ini_set('allow_url_fopen', 1);

//@parse_url($_SERVER['REQUEST_URI'])['path'] ?? "/";

$path = @parse_url($_SERVER['REQUEST_URI'])['path'] ?? "/";

switch ($path) {
    case "/":
		// for domain entry
		//syslog(LOG_DEBUG, "found app entry");
		require "public/index.php";
		break;
    case "/gospel.html":
        require "public/gospel.php";
        break;
    case "/gospel-explained.html":
        require "public/gospel-explained.php";
        break;
    case "/audiovideo.html":
        require "public/audiovideo.php";
        break;
    case "/contact.html":
        require "public/contact.php";
        break;
    case "/contact-done.html":
        require "public/contact-done.php";
        break;
    default:
        http_response_code(404);
        exit();
}
# [END gae_simple_front_controller]