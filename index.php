<?php 
	
	function sanitize_input($input_string)
	{
		$input_string = strip_tags($input_string);
		$input_string = mysql_real_escape_string($input_string);
		
		return $input_string;
	}

	session_start();
	$db = mysqli_connect("localhost","root","","mailomat");
	if (!$db) {
		echo mysqli_connect_error();
		return;
	}


	if(isset($_GET["a"])) {
		$action=$_GET["a"]; 
		switch ($action) {
			case 'login':
				include($action . ".php");
				break;
			case 'register':
				include($action . ".php");
				break;
			case 'logout':
				include($action . ".php");
				break;
			case'sendmessage':
				include($action . ".php");
				break;
			case 'overview':
				include($action . ".php");
				break;			
			default:
				include('404.php');
				break;
		}
	} else {
		include('start.php');
	}
?>