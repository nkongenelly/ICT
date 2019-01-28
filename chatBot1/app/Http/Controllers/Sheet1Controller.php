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
        //post sample table fields to webhook
        // $getChat = file_get_contents('php://input');
        // $chat = json_decode($getChat, true);
        // if(is_array($chat) && (count($chat)>0)){
        //  var_dump("1");
        //  var_dump($chat);
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
         
        // if(stripos($message, 'bomb') !==false){
            //  $send = $name . ", such words are not permitted here";
            //  $url = "https://webhook.site/00883ef2-9be9-43ff-8846-58753980b715";
            $url = "https://hook.integromat.com/3fgex9qnvuqp96s9kkf4uoc10s5hhbvl";
            //  $text = array("message" => $send);
            //  $message = json_encode($text);
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS,  "first_name=$first_name&last_name=$last_name&
        email=$email&gender=$gender&messenger_user_id=$messenger_user_id&from=$from&to=$to&
        adults=$adults&message=$message&children=$children&feedback=$feedback&text=$text");
        curl_setopt($ch, CURLOPT_HEADER, true);     
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                array('Content-Type:application/json',
                    //    'Content-Length: ' . strlen($message)
                       )
                );
     $result = curl_exec($ch);
     curl_close($ch);
    //  var_dump($ch);
    //  } 
    //  var_dump("2");
     
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
