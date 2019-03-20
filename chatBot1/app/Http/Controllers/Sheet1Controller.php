<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sheet1;
use Illuminate\Support\Facades\DB;

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
    public function create(Request $request)
    {
        $getChat = file_get_contents('php://input');
        $chat = json_decode($getChat, true);
               $messengerUserId = "236";
        $firstName= "John";
        $lastName= "Doe";
        $email= "johndoe@sample.com";
        $gender= "";
        $from= "2019-01-31";
        $to= "2019-02-05";
        $adults= "2";
        $children= "0";
        $feedback = "N/A";
        $text= "N/A";
        $SiteOut= "N/A";
        //    var_dump($name);
        
         DB::table('sheet1s')->insert([ 
            
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'gender' => $gender,
            'messengerUserId' => $messengerUserId,
            'from' => $from,
            'to' => $to,
            'adults' => $adults,
            'children' => $children,
            'feedback' => $feedback,
            'text' => $text,
            'SiteOut' => $SiteOut
            ]);
        //}
    
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
    //    Sheet1::create(request(['firstName','lastName','email','gender','from','to','adults','children','feedback','text','reportIssue']));
    $messengerUserId = "234543";   
    $firstName= "John";
        $lastName= "Doe";
        $email= "johndoe@sample.com";
        $gender= "male";
        $from= "2019-01-31";
        $to= "2019-02-05";
        $adults= "2";
        $children= "0";
        $feedback = "N/A";
        $text= "N/A";
        $name = "N/A";
        $reportIssue= "N/A";
        //    var_dump($name);
        
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
        // $save = Sheet1::all();
        // dd($save);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function storeTimeline(Request $request){
        $Name= "John";
        $Date= "Doe";
        $TimeIn= "johndoe@sample.com";
        $TimeOut= "male";
        $Site= "2019-01-31";
        $LocationIn= "2019-02-05";
        $LocationOut= "2";
        $MatchIn= "0";
        $Match = "N/A";
        $RowId= "N/A";
        $SiteOut= "N/A";
        //    var_dump($name);
        $check = DB::connection('mysql2')->table('timelines')->where('MatchIn', '=', $MatchIn)->count();
        if ($check == 0) {
            DB::connection('mysql2')->table('timelines')->insert([ 
                'Name' => $Name,
                'Date' => $Date,
                'TimeIn' => $TimeIn,
                'TimeOut' => $TimeOut,
                'Site' => $Site,
                'LocationIn' => $LocationIn,
                'LocationOut' => $LocationOut,
                'MatchIn' => $MatchIn,
                'MatchOut' => $Match,
                'RowId' => $RowId,
                'SiteOut' => $SiteOut
                ]);
            // dd('does not exist');
            // dd($check);
         }
         else{
            //  dd('exists');
            //  dd($check);
         }
        

         

     }
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
        $matched = "N/A"; 
        $MatchIn =0;
        DB::connection('mysql2')->table('timelines')->where('MatchOut',$matched)
                                ->update([
                                        'LocationOut' => '2345',
                                        'SiteOut' => 'SiteOut'
                                ]);
           //update MatchIn
           DB::connection('mysql2')->table('timelines')->where('MatchIn',$MatchIn)
           ->update([
               'MatchIn' => 1
           ]);
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
