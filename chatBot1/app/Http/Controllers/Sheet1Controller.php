<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sheet1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //post sample table fields to webhook
        $getChat = file_get_contents('php://input');
        $chat = json_decode($getChat, true);
        if(is_array($chat) && (count($chat)>0)){
         
         $first_name = "mobileNumber";
         $last_name = "name";
         $email = "message";
         $gender = "mobileNumber";
         $messenger_user_id = "name";
         $from = "message";
         $to = "mobileNumber";
         $adults = "name";
         $message = "message";
         $children = "mobileNumber";
         $feedback = "name";
         $text = "message";
         $report_issue = "message";
         
        if(stripos($message, 'bomb') !==false){
             $send = $name . ", such words are not permitted here";
             $url = "https://hook.integromat.com/3fgex9qnvuqp96s9kkf4uoc10s5hhbvl";
             $text = array("message" => $send);
             $message = json_encode($text);
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS,  "first_name=first_name&last_name=last_name&
        email=email&gender=gender&messenger_user_id=messenger_user_id&from=from&to=to&
        adults=adults&message=message&children=children&feedback=feedback&text=text");
        curl_setopt($ch, CURLOPT_HEADER, true);     
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                array('Content-Type:application/json',
                    //    'Content-Length: ' . strlen($message)
                       )
                );
     $result = curl_exec($ch);
     curl_close($ch);
     } 
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
