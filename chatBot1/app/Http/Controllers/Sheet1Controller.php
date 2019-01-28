<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sheet1;

class Sheet1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
           if(is_array($chat) && (count($chat)>0)){
            
            $mobileNumber = $chat[0]["mobileNumber"];
            $name = $chat[0]["name"];
            $message = $chat[0]["message"];
           
           if(stripos($message, 'bomb') !==false){
                $send = $name . ", such words are not permitted here";
                $url = "https://prod-10.westeurope.logic.azure.com:443/workflows/8f843088ed4a4f1c811b2031ce984ce7/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=DDgoID5HVZtQ0r_yBcmU3fy7iiyjw5468xd9OgP6OOs";
                $text = array("message" => $send);
                $message = json_encode($text);
           
           $ch = curl_init($url);
           curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
           curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
           curl_setopt($ch, CURLOPT_HEADER, true);     
           curl_setopt($ch, CURLOPT_HTTPHEADER,
                   array('Content-Type:application/json',
                          'Content-Length: ' . strlen($message))
                   );
        $result = curl_exec($ch);
        curl_close($ch);
        } 
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
       Sheet1::create(request(['firstName','lastName','email','gender','from','to','adults','children','feedback','text','reportIssue']));
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
