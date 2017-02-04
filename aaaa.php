<?php

include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='about.html') {
	include $browser_t.'/about.html';
	}
elseif ($page_name=='trainers.html') {
	include $browser_t.'/trainers.html';
	}
elseif ($page_name=='videos.html') {
	include $browser_t.'/videos.html';
	}
elseif ($page_name=='classes.html') {
	include $browser_t.'/classes.html';
	}
elseif ($page_name=='single_class.html') {
	include $browser_t.'/single_class.html';
	}
elseif ($page_name=='blog.html') {
	include $browser_t.'/blog.html';
	}
elseif ($page_name=='blog_single.html') {
	include $browser_t.'/blog_single.html';
	}
elseif ($page_name=='pricing.html') {
	include $browser_t.'/pricing.html';
	}
elseif ($page_name=='login.html') {
	include $browser_t.'/login.html';
	}
elseif ($page_name=='register.html') {
	include $browser_t.'/register.html';
	}
elseif ($page_name=='contact.html') {
	include $browser_t.'/contact.html';
	}
elseif ($page_name=='contact-post.html') {
	include $browser_t.'/contact.html';
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>
