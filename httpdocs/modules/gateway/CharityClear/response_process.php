<?php
if(isset($_POST['responseCode'])) {
	$controller_vars = array(
		'_g' => 'rm',
		'type' => 'gateway',
		'cmd' => 'process',
		'module' => 'CharityClear'
	);
	$_GET = array_merge($controller_vars, $_GET);
}
include('..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'index.php');