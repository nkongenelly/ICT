<?
$servername = "localhost";
$username = "ram23306_ta";
$password = "ta.123";
$dbname = "ram23306_signin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $getChat = file_get_contents('php://input');
            $chat = json_decode($getChat, true);
            //var_dump($chat);
            
            if(is_array($chat) && (count($chat)>0))
            {


            	$LocationOut= $chat["LocationOut"];
            	 $MatchOut= $chat["MatchOut"];
            	  $MatchIn= $chat["MatchIn"];
	       	 $TimeOut= $chat["TimeOut"];
	        $SiteOut= $chat["SiteOut"];
	        
	        //var_dump($chat["Date"]);
	        /*$Name= "Name";
            	 $Dates= "Date";
            	  $TimeIn= "TimeIn";
	       	 $TimeOut= "TimeOut";
	       	 $Site= "Site";
	         $LocationIn= "LocationIn";
	        $LocationOut= "LocationOut";
	        $MatchIn= "Kaizala2019-04-23";
	        $MatchOut = "MatchOut";
	        $RowId= "34567";
	        $SiteOut= "SiteOut";*/
	      
	      $sql = "UPDATE timelines SET LocationOut= '". $LocationOut . "',MatchOut= '". $MatchOut. "',SiteOut= '". $SiteOut. "',TimeOut= '". $TimeOut."' WHERE MatchIn= '" . $MatchIn. "'"; 


if($result = mysqli_query($conn, $sql)){
   	 //$rowcount=mysqli_num_rows($result);
   	// echo "number is =";
		    // echo $rowcount;
	  
	     /* if(mysqli_result($result) > 0){
		   
		        echo "<table>";
		            echo "<tr>";
		                echo "<th>Name </th>";
		                echo "<th>Site</th>"; 
		            echo "</tr>";
		        while($row = mysqli_fetch_array($result)){
		            echo "<tr>";
		                echo "<td>" . $row['Name'] . "</td>";
		                echo "<td>" . $row['Site'] . "</td>";
		            echo "</tr>";
		           
		             $travel_reference=$row['Name'];
		             $travel_client=$row['Site'];	             
	            
                    }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
 
        echo "No records matching your query were found.";
    }*/
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
            	    
    }
     
?>