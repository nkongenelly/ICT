<?
 $getChat = file_get_contents('php://input');
            $chat = json_decode($getChat, true);
          // var_dump($chat);
           
        
       if(is_array($chat) && (count($chat)>0)){
      		
$departmentq= $chat["departmentq"]; 
$company = $chat["company"];
$departmenta=$chat["departmenta"]; 
$nameq=$chat["nameq"];
$namea= $chat["namea"];
$question1= $chat["question1"];
$answer1= $chat["answer1"];
$describe1= $chat["describe1"];
$one= $chat["one"];
$question2= $chat["question2"];
$answer2= $chat["answer2"];
$describe2= $chat["describe2"];
$two= $chat["two"];
$question3= $chat["question3"];
$answer3= $chat["answer3"];
$describe3= $chat["describe3"];
$three= $chat["three"];
$question4= $chat["question4"];
$answer4= $chat["answer4"];
$describe4= $chat["describe4"];
$four= $chat["four"];
$question5= $chat["question5"];
$answer5= $chat["answer5"];
$describe5= $chat["describe5"];
$five= $chat["five"];
$question6= $chat["question6"];
$answer6= $chat["answer6"];
$describe6= $chat["describe6"];
$six= $chat["six"];
$question7= $chat["question7"];
$answer7= $chat["answer7"];
$describe7= $chat["describe7"];
$seven= $chat["seven"];
$question8= $chat["question8"];
$answer8= $chat["answer8"];
$describe8= $chat["describe8"];
$eight= $chat["eight"];
$question9= $chat["question9"];
$answer9= $chat["answer9"];
$describe9= $chat["describe9"];
$nine= $chat["nine"];
$question10= $chat["question10"];
$answer10= $chat["answer10"];
$describe10= $chat["describe10"];
$ten= $chat["ten"];
$question11= $chat["question11"];
$answer11= $chat["answer11"];
$describe11= $chat["describe11"];
$elleven= $chat["elleven"];
$question12= $chat["question12"];
$answer12= $chat["answer12"];
$describe12= $chat["describe12"];
$twelve= $chat["twelve"];
$question13= $chat["question13"];
$answer13= $chat["answer13"];
$describe13= $chat["describe13"];
$thirteen= $chat["thirteen"];
$question14= $chat["question14"];
$fourteen= $chat["fourteen"];
$locationq= $chat["locationq"];
$locationa= "Ramco";
       		//echo (strlen($one) != 0);
	       
	       //echo (strlen((string)$one));
	      // echo (strlen($six));
	       //echo (strlen($eight));
	       
	     /* if(is_array($six)){
	      echo 'array';
	      }
	      else{
	      echo 'not array';
	      }*/

	 if(is_array($six) || $six|| count($six)!=0){
	        $object = json_encode($six);
	        $result = (explode('"',$object ));
	         //var_dump($result);
	        $remove = stripcslashes($result[3]);
	        //var_dump($remove);
      
                $image = $remove;
                $imageData = base64_encode(file_get_contents($image));
                $sixess = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
                $sixes = $remove;
                //echo $sixes;
	                 
		}
	    else{
	       $sixes = 'null';
	       //echo $sixes;
	       }
	       if (is_array($six) || $six|| count($six)!=0){
	       if(array_key_exists(11, $result )) {
	                $sixes2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$sixes2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $sixes3 = stripcslashes($result[19]);
			 // echo "exists";
			 }else{$sixes3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $sixes4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$sixes4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $sixes5 = stripcslashes($result[35]);
			  //echo "exists";
			  }else{$sixes5 = 'null';
			} 
			}
	       
	       // || !$arr || count($arr)==0
	     if(is_array($one) || $one|| count($one)!=0){
	   // if(strlen($one) != 0){
	        $object = json_encode($one);$result = (explode('"',$object ));
	         // var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove;
	        // var_dump($image["mediaUrl"]);
	          $imageData = base64_encode(file_get_contents($image));
              $oness= '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$ones = $remove;
			 
	        }
	        else{
	       $ones = 'null';
	      //echo $ones ;
	       }
	       if(is_array($one) || $one|| count($one)!=0){
	       if (array_key_exists(11, $result )) {
	                $ones2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$ones2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $ones3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$ones3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $ones4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$ones4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $ones5 = stripcslashes($result[35]);
			 // echo "exists";
			 }else{$ones5= 'null';
			}
		}
		
	           if(is_array($two) || $two|| count($two)!=0){
	        $object = json_encode($two);$result = (explode('"',$object ));
	         //var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $twoss = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$twos = $remove;
		  
	        }
	         else{
	       $twos = 'null';
	       //echo $twos;       
	       }
	       if(is_array($two) || $two|| count($two)!=0){
	       if (array_key_exists(11, $result )) {
	                $twos2 = stripcslashes($result[11]);
			 // echo "exists";
			 }else{$twos2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $twos3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$twos3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $twos4 = stripcslashes($result[27]);
			 // echo "exists";
			  }else{$twos4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $twos5 = stripcslashes($result[35]);
			 // echo "exists";
			 }else{$twos5  = 'null';
			}
		}
	     if(is_array($three) || $three|| count($three)!=0){
	        $object = json_encode($three);$result = (explode('"',$object ));
	          //var_dump($result);
	        $remove = stripcslashes($result[3]);
	        //var_dump($remove);
	        $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $threess = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
                //echo $threes;
		$threes = $remove;echo $threes;
		
	        }
	         else{
	       $threes = 'null';
	       //echo $threes;
	       }
	       if(is_array($three) || $three|| count($three)!=0){
	        if (array_key_exists(11, $result )) {
	                $threes2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$threes2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $threes3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$threes3  = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $threes4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$threes4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $threes5 = stripcslashes($result[35]);
			 // echo "exists";
			  }else{$threes5 = 'null';
			} 
			}
		
	      if(is_array($four) || $four|| count($four)!=0){
	        $object = json_encode($four);$result = (explode('"',$object ));
	         // var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $fourss = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$fours = $remove;
		 	
	        }
	         else{
	       $fours = 'null';
	       //echo $fours;
	       }
	       //if (strlen($four) != 0 && array_key_exists(11, $result )) {
	       if(is_array($four) || $four|| count($four)!=0){
	       if (array_key_exists(11, $result )) {
	                $fours2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$fours2  = 'null';
			}if (array_key_exists(19, $result )) {
	                $fours3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$fours3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $fours4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$fours4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $fours5 = stripcslashes($result[35]);
			  //echo "exists";
			  }else{$fours5 = 'null';
			} 
			}
		
	        if(is_array($five) || $five|| count($five)!=0){
	        $object = json_encode($five);$result = (explode('"',$object ));
	         // var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $fivess = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$fives = $remove;
		 	
	        }
	         else{
	       $fives = 'null';
	       //echo $fives;
	       }
	         if(is_array($five) || $five|| count($five)!=0){
	       if (array_key_exists(11, $result )) {
	                $fives2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$fives2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $fives3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$fives3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $fives4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$fives4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $fives5 = stripcslashes($result[35]);
			  //echo "exists";
			  }else{$fives5 = 'null';
			} 
		}
	      if(is_array($seven) || $seven|| count($seven)!=0){
	        $object = json_encode($seven);$result = (explode('"',$object ));
	         // var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $sevenss = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$sevens = $remove;
			 
	        }
	         else{
	       $sevens = 'null';
	      // echo $sevens;
	       }
	       if(is_array($seven) || $seven|| count($seven)!=0){
	       if (array_key_exists(11, $result )) {
	                $sevens2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$sevens2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $sevens3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$sevens3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $sevens4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$sevens4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $sevens5 = stripcslashes($result[35]);
			  //echo "exists";
			  }else{$sevens5 = 'null';
			}
			}
	      if(is_array($eight) || $eight|| count($eight)!=0){
	        $object = json_encode($eight);$result = (explode('"',$object ));
	         // var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $eightss = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
                $eights =$remove;
                
	        }
	         else{
	       $eights = 'null';
	       //echo $eights;
	       }
	       if(is_array($eight) || $eight|| count($eight)!=0){
	       if (array_key_exists(11, $result )) {
	                $eights2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$eights2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $eights3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$eights3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $eights4 = stripcslashes($result[27]);
			 // echo "exists"; 
			  }else{$eights4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $eights5 = stripcslashes($result[35]);
			  //echo "exists"; 
			  }else{$eights5 = 'null';
			} 
			}
	         if(is_array($nine) || $nine|| count($nine)!=0){
	        $object = json_encode($nine);$result = (explode('"',$object ));
	         // var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $niness = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$nines = $remove;
		}else{	
	       $nines = 'null';
	       //echo $nines;
	       }
	       if(is_array($nine) || $nine|| count($nine)!=0){
	       if (array_key_exists(11, $result )) {
	                $nines2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$nines2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $nines3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$nines3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $nines4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$nines4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $nines5 = stripcslashes($result[35]);
			 // echo "exists";
			  }else{$nines5 = 'null';
			} 
			}
		
	          if(is_array($ten) || $ten|| count($ten)!=0){
	        $object = json_encode($ten);$result = (explode('"',$object ));
	          //var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $tenss = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$tens = $remove;
			 
	        }
	        else{
	       $tens = 'null';
	       //echo $tens;
	       }
	       if(is_array($ten) || $ten|| count($ten)!=0){
	       if(array_key_exists(11, $result )) {
	                $tens2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{
			  $tens2 = 'null';
			 }
			 if(array_key_exists(19, $result )) {
	                $tens3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{
			  $tens3 = 'null';
			 }
			  if(array_key_exists(27, $result )) {
	               $tens4 = stripcslashes($result[27]);
			 // echo "exists";
			  }else{
			  $tens4 = 'null';
			 }
			 if(array_key_exists(35, $result )) {
	                $tens5 = stripcslashes($result[35]);
			 // echo "exists";
			  }else{
			  $tens5 = 'null';
			 }
			 }
			 
	     if(is_array($elleven) || $elleven|| count($elleven)!=0){
	        $object = json_encode($elleven);$result = (explode('"',$object ));
	          //var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $ellevenss = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$ellevens = $remove;
			 
	        }
	         else{
	       $ellevens = 'null';
	       //echo $ellevens;
	       }
	       if(is_array($elleven) || $elleven|| count($elleven)!=0){
	      if (array_key_exists(11, $result )) {
	                $ellevens2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$ellevens2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $ellevens3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$ellevens3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $ellevens4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$ellevens4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $ellevens5 = stripcslashes($result[35]);
			  //echo "exists";
			  }else{$ellevens5 = 'null';
			}
			}
		
	      if(is_array($twelve) || $twelve|| count($twelve)!=0){
	        $object = json_encode($twelve);$result = (explode('"',$object ));
	         // var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $twelvess = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$twelves = $remove;
			
	        }
	        else{
	       $twelves = 'null';
	       //echo $twelves;
	       }
	        if(is_array($twelve) || $twelve|| count($twelve)!=0){
	       if (array_key_exists(11, $result )) {
	                $twelves2 = stripcslashes($result[11]);
			 // echo "exists";
			  }else{$twelves2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $twelves3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$twelves3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $twelves4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$twelves4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $twelves5 = stripcslashes($result[35]);
			  //echo "exists";
			  }else{$twelves5 = 'null';
			} 
			}
		
	        if(is_array($thirteen) || $thirteen|| count($thirteen)!=0){
	        $object = json_encode($thirteen);$result = (explode('"',$object ));
	         // var_dump($result);
	         $remove = stripcslashes($result[3]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $thirteenss = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$thirteens = $remove;
		
	        }
	        else{
	       $thirteens = 'null';
	       //echo $thirteens;
	       }
	       if(is_array($thirteen) || $thirteen|| count($thirteen)!=0){
	       if (array_key_exists(11, $result )) {
	                $thirteens2 = stripcslashes($result[11]);
			  //echo "exists";
			  }else{$thirteens2 = 'null';
			}if (array_key_exists(19, $result )) {
	                $thirteens3 = stripcslashes($result[19]);
			  //echo "exists";
			  }else{$thirteens3 = 'null';
			}
			if (array_key_exists(27, $result )) {
	                $thirteens4 = stripcslashes($result[27]);
			  //echo "exists";
			  }else{$thirteens4 = 'null';
			}	
			if (array_key_exists(35, $result )) {
	                $thirteens5 = stripcslashes($result[35]);
			  //echo "exists";
			  }else{$thirteens5 = 'null';
			} 
			}
		
	        if(is_array($fourteen) || $fourteen|| count($fourteen)!=0){
	        $object = json_encode($fourteen);$result = (explode('"',$object ));
	          //var_dump($result[1]);
	         $remove = stripcslashes($result[1]);
	         //var_dump($remove);
	         $image = $remove; $imageData = base64_encode(file_get_contents($image));
                $fourteenss = '<img height="242" width="242" src="data:image/jpeg;base64,'.$imageData.'">';
		$fourteens = $remove;
	        }
	        else{
	       $fourteens = 'null';
	       //echo $fourteens;
	       //echo 'fourteens';
	       }
	       
	     

	 $body = array(
 "company"=>$company,
 "departmentq"=> $departmentq,
"departmenta"=> $departmenta,
"nameq"=>$nameq,
"namea"=> $namea,
"question1"=> $question1,
"answer1"=> $answer1,
"describe1"=> $describe1,
"ones"=> $ones,
"ones2"=> $ones2,"ones3"=> $ones3,"ones4"=> $ones4,"ones5"=> $ones5,
"question2"=> $question2,
"answer2"=> $answer2,
"describe2"=> $describe2,
"twos"=> $twos,
"twos2"=> $twos2,"twos3"=> $twos3,"twos4"=> $twos4,"twos5"=> $twos5,
"question3"=> $question3,
"answer3"=> $answer3,
"describe3"=> $describe3,
"threes"=> $threes,"threes2"=> $threes2,"threes3"=> $threes3,"threes4"=> $threes4,"threes5"=> $threes5,
"question4"=> $question4,
"answer4"=> $answer4,
"describe4"=> $describe4,
"fours"=> $fours,"fours2"=> $fours2,"fours3"=> $fours3,"fours4"=> $fours4,"fours5"=> $fours5,
"question5"=> $question5,
"answer5"=> $answer5,
"describe5"=> $describe5,
"fives"=> $fives,"fives2"=> $fives2,"fives3"=> $fives3,"fives4"=> $fives4,"fives5"=> $fives5,
"question6"=> $question6,
"answer6"=> $answer6,
"describe6"=> $describe6,
"sixes"=> $sixes,"sixes2"=> $sixes2,"sixes3"=> $sixes3,"sixes4"=> $sixes4,"sixes5"=> $sixes5,
"question7"=> $question7,
"answer7"=> $answer7,
"describe7"=> $describe7,
"sevens"=> $sevens,"sevens2"=> $sevens2,"sevens3"=> $sevens3,"sevens4"=> $sevens4,"sevens5"=> $sevens5,
"question8"=> $question8,
"answer8"=> $answer8,
"describe8"=> $describe8,
"eights"=> $eights,"eights2"=> $eights2,"eights3"=> $eights3,"eights4"=> $eights4,"eights5"=> $eights5,
"question9"=> $question9,
"answer9"=> $answer9,
"describe9"=> $describe9,
"nines"=> $nines,"nines2"=> $nines2,"nines3"=> $nines3,"nines4"=> $nines4,"nines5"=> $nines5,
"question10"=> $question10,
"answer10"=> $answer10,
"describe10"=> $describe10,
"tens"=> $tens,"tens2"=> $tens2,"tens3"=> $tens3,"tens4"=> $tens4,"tens5"=> $tens5,
"question11"=> $question11,
"answer11"=> $answer11,
"describe11"=> $describe11,
"ellevens"=> $ellevens,"ellevens2"=> $ellevens2,"ellevens3"=> $ellevens3,"ellevens4"=> $ellevens4,"ellevens5"=> $ellevens5,
"question12"=> $question12,
"answer12"=> $answer12,
"describe12"=> $describe12,
"twelves"=> $twelves,"twelves2"=> $twelves2,"twelves3"=> $twelves3,"twelves4"=> $twelves4,"twelves5"=> $twelves5,
"question13"=> $question13,
"answer13"=> $answer13,
"describe13"=> $describe13,
"thirteens"=> $thirteens,"thirteens2"=> $thirteens2,"thirteens3"=> $thirteens3,"thirteens4"=> $thirteens4,"thirteens5"=> $thirteens5,
"question14"=> $question14,
"fourteens"=> $fourteens,
"locationq"=> $locationq,
"locationa"=> "Ramco"

            	
            );
        
       //set the url of the webhook to test the curl fuction
            $url = "https://prod-07.centralus.logic.azure.com:443/workflows/d0d1ec91151a49208ce0098a038801ea/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=bVfbxf8ZSiUoBto-5aWMvLkOkj_uC56RIiXa6YRecq8"; 
            
           //$urls = "https://webhook.site/c93883cc-63b4-4312-96ca-94ce17c024c4";

            //var_dump($body);
            echo "before";
       // $ch = curl_init($url);
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); //Remote Location URL
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
	    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
	     curl_setopt($ch, CURLOPT_POSTFIELDS, '[' . json_encode($body) . ']');
	      //curl_setopt($ch, CURLOPT_HTTPHEADER, true); 
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array(       // change CURLOPT_HEADER to CURLOPT_HTTPHEADER
	    	"Content-Type:application/json"
	    ));
	       $result = curl_exec($ch);
	       if (curl_error($ch)) {
		    $error_msg = curl_error($ch);
		    var_dump($error_msg);
		}
		else{
		echo "no curl error";
		}
		curl_close($ch);
		
		if (isset($error_msg)) {
		    // TODO - Handle cURL error accordingly
		}
			    //curl_close($ch);
	   
	     echo $ch;
	      echo "after";
	       
	      }
	echo "done";       
   //
   $url2 = "https://prod-25.southeastasia.logic.azure.com:443/workflows/6699efd7cb004455b5e4482941eddfb4/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=ZGW9swEC0FrQ8GLe_LtnW501d6Y7iz_uX0c4S8cW6_w"; 
            
           //$urls = "https://webhook.site/c93883cc-63b4-4312-96ca-94ce17c024c4";

            //var_dump($body);
            echo "before";
       // $ch = curl_init($url);
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url2); //Remote Location URL
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
	    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
	     curl_setopt($ch, CURLOPT_POSTFIELDS, '[' . json_encode($body) . ']');
	      //curl_setopt($ch, CURLOPT_HTTPHEADER, true); 
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array(       // change CURLOPT_HEADER to CURLOPT_HTTPHEADER
	    	"Content-Type:application/json"
	    ));
	       $result = curl_exec($ch);
	       if (curl_error($ch)) {
		    $error_msg = curl_error($ch);
		    var_dump($error_msg);
		}
		else{
		echo "no curl error";
		}
		curl_close($ch);
		
		if (isset($error_msg)) {
		    // TODO - Handle cURL error accordingly
		}
			    //curl_close($ch);
	   
	     echo $ch;
	      echo "after";
	       
	      }
	echo "done";       

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     ?>