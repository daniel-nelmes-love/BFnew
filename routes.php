<?php

namespace App\Controllers;

$page = explode("/", $_SERVER['REQUEST_URI']);
$len = count($page) -1;
$page = $page[$len];
if($page==="") {$page="home";}

switch ($page) {
	case 'beer':
		$page = new templatePage();
		$pageName = 'beer';
		$page->show($pageName);
		break;
	case 'merchandise':
		$page = new templatePage();
		$pageName = 'merchandise';
		$page->show($pageName);
		break;
	case 'about-us':
		$page = new templatePage();
		$pageName = 'about-us';
		$page->show($pageName);
		break;

	case 'contact-us':
		$page = new templatePage();
		$pageName = 'contact-us';
		$page->show($pageName);
		break;
	case 'home':
	default:
		$page = new templatePage();
		$pageName = 'home';
		$page->show($pageName);
}