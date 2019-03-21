<?php
/**
 * Copyright ITC AFRICA 2019
 *
 * Website: https:/ict-a.co.ke/
 */
	require  'src/medoo.php';
	 
	// Using Medoo namespace
	use Medoo\Medoo;
	 
	$database = new Medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => 'ram23306_chatBot',
		'server' => 'localhost',
		'username' => 'ram23306_chatBot',
		'password' => 'chatbot.321',
	 
		// [optional]
		//'charset' => 'utf8',
		//'port' => 3306,
	 
		// [optional] Table prefix
		//'prefix' => 'PREFIX_',
	 
		// [optional] Enable logging (Logging is disabled by default for better performance)
		'logging' => true,
	 
		// [optional] MySQL socket (shouldn't be used with server and port)
		'socket' => '/tmp/mysql.sock',
	 
		// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
		'option' => [
			PDO::ATTR_CASE => PDO::CASE_NATURAL
		],
	 
		// [optional] Medoo will execute those commands after connected to the database for initialization
		'command' => [
			'SET SQL_MODE=ANSI_QUOTES'
		]
	]);
	
	//$messenger_user_id = $_GET['messenger_user_id'];
	$first_name = $_GET['first_name'];
	$last_name = $_GET['last_name']; 
	$gender = $_GET['gender'];
	//$feedback = $_GET['feedback'];
	//$email = $_GET['email'];
        $from = $_GET['from'];
        $to = $_GET['to'];
        $adults = $_GET['adults'];
        $children = $_GET['children'];
       // $text = $_GET['text'];
       // $reportIssue = $_GET['reportIssue'];

//$d = explode('/',$_POST['dateneed']);
$d = explode('/',"22/02/2019");
$date = $d[2].'-'.$d[0].'-'.$d[1];
	 echo $date;
	 //echo $d;
	$database->insert("sheet1s", [
		//"messengerUserId" => $messenger_user_id,
		"firstName" => $first_name,
		"lastName" => $last_name,
		"gender" => $gender,
		//"feedback" => $feedback,
		//"email" => $email,
		"from_date" => $from,
		"to_date" => $to,
		"adults" => $adults,
                "children" => $children
               // "text" => $text,
               // "reportIssue" => $reportIssue

               /* "FirstName" => $first_name,
		"LastName" => $last_name,
		//"Gender" => $gender,
		"Departure" => $from,
		"Arrival" => $to,
		"Adults" => $adults,
               "Children" => $children*/
	]);

?>