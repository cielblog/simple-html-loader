<?php

$page = isset($_GET['p']) ? $_GET['p'] : 'home';

function load($p) {
	
	if (!file_exists("html/master.html")) {
		die("Make sure the master file is exists");
	}
	
	$loaded_page = "html/". $p . '.html';
	require_once ("html/master.html");
}

load($page);