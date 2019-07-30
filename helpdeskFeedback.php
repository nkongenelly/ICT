<?


		$database_type = 'mysql';
		$dbname= 'ram23306_helpdesk';
		$servername = 'localhost';
		$username = 'ram23306_ta';
		$password = 'ta.123';
	 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
	  $getChat = file_get_contents('php://input');
            $chat = json_decode($getChat, true);
            var_dump($chat);
             
          if(is_array($chat) && (count($chat)>0)){
            	$feedback1= $chat["feedback"];
		$result1 = explode("-",$feedback1);
		$jobcardNo= $result1[1];
		echo $result;
		
            	 $feedback=  $result1[2];

	      $sql = "UPDATE Sheet1 SET Feedback= '". $feedback. "' WHERE jobcard_no= '" . $jobcardNo. "'"; 


if($result = mysqli_query($conn, $sql)){
  
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
            	    
    
	           
		

	       // }
	       
           }
?>