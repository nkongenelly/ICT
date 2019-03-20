<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sheet1;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function test(){
     var_dump("testing testing");
     }
    public function index()
    {
        //set sample data to send
         $first_name = "John";
         $last_name = "Doe";
         $email = "johndoe@sample.com";
         $gender = "male";
         $messenger_user_id = "234";
         $from = "2019-27-01";
         $to = "2019-02-05";
         $adults = "2";
         $message = "booking";
         $children = "0";
         $feedback = "none";
         $text = "none";
         $report_issue = "null";
         //set the url of the webhook to test the curl fuction
            $url = "https://hook.integromat.com/3fgex9qnvuqp96s9kkf4uoc10s5hhbvl";
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS,  "first_name=$first_name&last_name=$last_name&
        email=$email&gender=$gender&messenger_user_id=$messenger_user_id&from=$from&to=$to&
        adults=$adults&message=$message&children=$children&feedback=$feedback&text=$text");
        curl_setopt($ch, CURLOPT_HEADER, true);     
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                array('Content-Type:application/json',
                       )
                );
     $result = curl_exec($ch);
     }

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
           $getChat = file_get_contents('php://input');
            $chat = json_decode($getChat, true);
           // var_dump(count($getChat));
           
       
       if(is_array($chat) && (count($chat)>0)){
       		$messengerUserId= $chat["messenger+user+id"];
       		$firstName= $chat["first+name"];
       		$lastName= $chat["last+name"];
        	$email= $chat["email"];
	      $gender= $chat["gender"];
	      $from= $chat["From"];
	      $to= $chat["To"];
	      $adults= $chat["Adults"];
	      $children= $chat["Children"];
	      $feedback= $chat["Feedback"];
	       $text= $chat["text"];
	       $reportIssue= $chat["report+issue"];
	       
	        DB::connection('mysql')->table('sheet1s')->insert([ 
	          'messengerUserId' => $messengerUserId,
	           'firstName' => $firstName,
	           'lastName' => $lastName,
	           'email' => $email,
	           'gender' => $gender,
	           'from' => $from,
	           'to' => $to,
	           'adults' => $adults,
	           'children' => $children,
	           'feedback' => $feedback,
	           'text' => $text,
	           'reportIssue' => $reportIssue
	           ]);
	          // var_dump($saving);
	          /* $save = DB::table('sheet1s')->get();
	           var_dump($save);*/
       }

    
    }
    
	 public function storeTimeline(Request $request){
	  $getChat = file_get_contents('php://input');
            $chat = json_decode($getChat, true);
            //var_dump($chat);
            $data = DB::connection('mysql3')->table('Sheet3')->get();
            //var_dump($data);
             
          if(is_array($chat) && (count($chat)>0)){
          	
            	/*$Name= $chat["Name"];
            	 $Dates= $chat["Date"];
            	  $TimeIn= $chat["TimeIn"];
	       	 $TimeOut= $chat["TimeOut"];
	       	 $Site= $chat["Site"];
	         $LocationIn= $chat["LocationIn"];
	        $LocationOut= $chat["LocationOut"];
	        $MatchIn= $chat["MatchIn"];
	        $MatchOut = $chat["MatchOut"];
	        $RowId= $chat["RowId"];
	        $SiteOut= $chat["SiteOut"];*/
	        
	        //var_dump($chat["Dates"]);
	           $Dates = $chat["Dates"];
	            $Performed= $chat["Performed"];
	            $Entanglement = $chat["Entanglement"];
	             $Describe1 = $chat["Describe1"];
	           $Image = $chat["Image"];
	            $Crushing= $chat["Crushing"];
	             $Describe2 =$chat["Describe2"];
	            $Image3 = $chat["Image3"];
	            $Cutting = $chat["Cutting"];
	           $Describe4 = $chat["Describe4"];
	           
			$Image5 = $chat["Image5"];
	              $Impact = $chat["Impact"];
	            $Describe6 = $chat["Describe6"];
	             $Image7 = $chat["Image7"];
	            $Electrical = $chat["Electrical"];
	           $Describe8 = $chat["Describe8"];
	             $Image9 = $chat["Image9"];
	          $Slipping = $chat["Slipping"];
	            $Describe10 = $chat["Describe10"];
	            $Image11 = $chat["Image11"];
	           $Falls = $chat["Falls"];
	           $Describe12 = $chat["Describe12"];
	             $Image13 = $chat["Image13"];
	            $Ergonomics = $chat["Ergonomics"];
	            $Describe14 = $chat["Describe14"];
	             $Image15 = $chat["Image15"];
	                      $Access = $chat["Access"];
	            $Describe16 = $chat["Describe16"];
	             $Image17 = $chat["Image17"];
	            $Temperature = $chat["Temperature"];
	            $Describe18 = $chat["Describe18"];
	           $Image19 = $chat["Image19"];
	           $Noise = $chat["Noise"];
	            $Describe20 = $chat["Describe20"];
	            $Image21 = $chat["Image21"];
	            $Hazardous = $chat["Hazardous"];
	             $Describe22 = $chat["Describe22"];
	           $Image23 = $chat["Image23"];
	             $Pressure = $chat["Pressure"];
	             $Describe24 = $chat["Describe24"];
	            $Image25 = $chat["Image25"];
	            $Upload = $chat["Upload"];
	           $Location = $chat["Location"];
	    
	        
	       // $check = DB::connection('mysql2')->table('timelines')->where('MatchIn', '=', $MatchIn)->count();
	       // if ($check == 0) {
	           	
	   DB::connection('mysql3')->table('Sheet3')->insert([ 
	             'A' => $Dates,
	            'B' => $Performed ,
	            'C' => $Entanglement,
	             'D' => $Describe1,
	           'E' => $Image,
	            'F' => $Crushing,
	             'G' => $Describe2,
	            'H' => $Image3,
	            'I' => $Cutting,
	           'J' => $Describe4,
	           
	           'K' => $Image5,
	             'L' => $Impact,
	            'M' => $Describe6,
	            'N' => $Image7,
	             'O' => $Electrical,
	           'P' => $Describe8,
	            'Q' => $Image9,
	             'R' => $Slipping,
	            'S' => $Describe10,
	            'T' => $Image11,
	           'U' => $Falls,
	           'V' => $Describe12,
	             'W' => $Image13,
	            'X' => $Ergonomics,
	            'Y' => $Describe14,
	            'Z' => $Image15,
	           'AA' => $Access,
	            'AB' => $Describe16,
	             'AC' => $Image17,
	            'AD' => $Temperature,
	           'AE' => $Describe18,
	           'AF' => $Image19,
	           'AG' => $Noise,
	            'AH' => $Describe20,
	            'AI' => $Image21,
	            'AJ' => $Hazardous,
	             'AK' => $Describe22,
	           'AL' => $Image23,
	            'AM' => $Pressure,
	             'AN' => $Describe24,
	              'AO' => $Image25,
	            'AP' => $Upload,
	           'AQ' => $Location 
	           
	            ]);
	       // }
	       
           }
           
          
            	    
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        // dd($request);
        // dd(Sheet1::all());
        	$Name= "Name";
            	 $Dates= "Date";
            	  $TimeIn= "TimeIn";
	       	 $TimeOut= "TimeOut";
	        $Site= "Site";
	         $LocationIn= "LocationIn";
	        $LocationOut= "LocationOut";
	        $MatchIn= "MatchIn";
	        $MatchOut = "Match";
	        $RowId= "RowId";
	        $SiteOut= "SiteOut";
       Sheet1::create(request(['Name','Dates','TimeIn','TimeOut','Site','LocationIn','LocationOut','MatchIn','MatchOut ','RowId','SiteOut']));
        // $save  = Sheet1::create(request([
        //     'first name' => $first_name,
        //      'last name' => $last_name,
        //      'email' => $email,
        //      'gender' => $gender,
        //      'messenger_user_id' => $messenger_user_id,
        //      'From' => $from,
        //      'To' => $to,
        //      'Adults' => $adults,
        //      'message' => $message,
        //      'Children' => $children,
        //      'Feedback' => $feedback,
        //      'Text' => $text,
        //      'Report Issue' => $report_issue
        //      ]));
        $save = Sheet1::all();
        // dd($save);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
        public function editSignin(){
            $getChat = file_get_contents('php://input');
            $chat = json_decode($getChat, true);
            //var_dump($chat["MatchOut"]);
            
	  if(is_array($chat) && (count($chat)>0)){
	  		$TimeOut= $chat["TimeOut"];
	            	 $LocationOut= $chat["LocationOut"];
	            	 $SiteOut= $chat["SiteOut"];
	            	 $matched= $chat["MatchOut"];
	            	 
	          //Update sig out details to matched row
	                
	        DB::connection('mysql2')->table('timelines')->where('MatchOut',$matched)
	                                ->update([
	                                        'LocationOut' => $LocationOut,
	                                        'SiteOut' => $SiteOut,
	                                        'TimeOut' => $TimeOut,
	                                        'MatchOut' => 1
	                                ]);	  
	
		}	
               
          }
        

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
