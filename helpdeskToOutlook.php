<?
require  'src/medoo.php';
	 
	// Using Medoo namespace
	use Medoo\Medoo;
	$database = new Medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => 'ram23306_helpdesk',
		'server' => 'localhost',
		'username' => 'ram23306_ta',
		'password' => 'ta.123',
	 
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
	
	  $getChat = file_get_contents('php://input');
            $chat = json_decode($getChat, true);
            //var_dump($chat);
             
          if(is_array($chat) && (count($chat)>0)){
            	$Dates= $chat["Date"];
            	 $Company= $chat["Company"];
            	  $Client= $chat["Client"];
	       	 $ServiceIssue= $chat["ServiceIssue"];
	       	 $Priority= $chat["Priority"];
	         $IssueSubject= $chat["IssueSubject"];
	        $IssueDescription= $chat["IssueDescription"];
	        $jobcard_no= $chat["jobcard_no"];
	        $phoneNumber= $chat["phoneNumber"];
	      /*  
	       $Dates="Date";
            	 $Company="Company";
            	  $Client="Client";
	       	 $ServiceIssue="ServiceIssue";
	       	 $Priority="Priority";
	         $IssueSubject="IssueSubject";
	        $IssueDescription="IssueDescription";*/
	        
	        //var_dump($Priority);
	        
	       // $check = DB::connection('mysql2')->table('timelines')->where('MatchIn', '=', $MatchIn)->count();
	       // if ($check == 0) {
	          // var_dump(DB::connection('mysql4')->table('Sheet1')->get());
	          $database->insert("Sheet1", [
			'Date' => $Dates,
	            'Company' => $Company,
	           'Client' => $Client,
	          'ServiceIssue' => $ServiceIssue,
	            'Priority' => $Priority,
	           'IssueSubject' => $IssueSubject,
	             'IssueDescription' => $IssueDescription,
	             'jobcard_no' => $jobcard_no,
	             'phoneNumber' => $phoneNumber,
	             'status'=> 'Pending'
	           
	]);	

	       // }
	       
           }
?>