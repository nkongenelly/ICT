<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sheet1;

class timeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /*
     {
	"set_attributes": {
		"dateFormatted": "2018-01-01 10:26:53 America/Chicago",
		"dayInt": "01",
		"dayShort": "Mon",
		"dayLong": "Monday",
		"monthInt": "01",
		"monthShort": "Jan",
		"monthLong": "January",
		"year": "2018",
		"time24h": "10",
		"time12h": "10",
		"timeMin": "26",
		"timeSec": "53",
		"timeAmPm": "AM",
		"time12hms": "10:26:53 AM",
		"time24hms": "10:26:53",
		"time12hm": "10:26 AM",
		"time24hm": "10:26",
		"timezoneName": "America/Chicago",
		"greeting": "morning",
		"greetingCap": "Morning"
	},
	"redirect_to_blocks": [
		"Welcome Message"
	]
}*/
    public function index()
    {
    	/*$tz = 'Africa/Nairobi';
	$tz_obj = new DateTimeZone($tz);
	$today = new DateTime("now", $tz_obj);*/
    
    	date_default_timezone_set('GMT');
    	$timezoneName= date_default_timezone_get();
 	$date = date('m-d-Y h:i:s a', strtotime('+3 hours'));	//"02-07-2019 09:06:23 am"
 	//split date
 	$dates = explode('-', $date);				//["02","07","2019 09:06:55 am"]
	$month= $dates[0];					//"02"
	$day= $dates[1];					//"07"
	$yearss  = $dates[2];					//"2019 09:08:29 am"			
	$years = explode(' ',$yearss);				//["2019","09:08:56","am"]
	$year = $years[0];					//"2019"
	
	$time= explode(':', $yearss);				//["2019 09","09","37 am"]
	$hourss= $time[0];					//"2019 09"
	$hours = explode(' ',$hourss);				//["2019","09"]
	$hour = $hours[1];					//"09"
	$minute= $time[1];					//"12"
	$secondss= $time[2];					//"18 am"
	$seconds = explode(' ',$secondss);			//["46","am"]
	$second = $seconds[0];					//"11"
	$timeOfDay = $seconds[1];				//"am"
	
	 $arr3[] = $years[1];
	 $arr3[] = $years[2];
	
	$time12hms = join(' ', $arr3);
	 $arr[] = $hours[1];
	 $arr[] = $time[1];
	
	$time24hm = join(':', $arr);				//"09:31"
	
	$arr2[] = $time24hm;
	$arr2[] = $seconds[1];
	$time12hm = join(' ', $arr2);				//"09:30 am"
	//If cases for day names after getting dayname
	$dayLong = date('l');
	switch($dayLong){
		case "Monday":
		$dayShort = "Mon";
		break;
		case "Tuesday":
		$dayShort = "Tue";
		break;
		case "Wednesday":
		$dayShort = "Wed";
		break;
		case "Thursday":
		$dayShort = "Thur";
		break;
		case "Friday":
		$dayShort = "Fri";
		break;
		case "Saturday":
		$dayShort = "Sat";
		break;
		case "Sunday":
		$dayShort = "Sun";
		break;
	}
	//if cases for Month Names
	switch($month){
		case "01":
		$monthShort= "Jan";
		$monthLong= "January";
		break;
		case "02":
		$monthShort= "Feb";
		$monthLong= "February";
		break;
		case "03":
		$monthShort= "Mar";
		$monthLong= "March";
		break;
		case "04":
		$monthShort= "Apr";
		$monthLong= "April";
		break;
		case "05":
		$monthShort= "May";
		$monthLong= "May";
		break;
		case "06":
		$monthShort= "June";
		$monthLong= "June";
		break;
		case "07":
		$monthShort= "July";
		$monthLong= "July";
		break;
		case "08":
		$monthShort= "Aug";
		$monthLong= "August";
		break;
		case "09":
		$monthShort= "Sept";
		$monthLong= "September";
		break;
		case "10":
		$monthShort= "Oct";
		$monthLong= "October";
		break;
		case "11":
		$monthShort= "Nov";
		$monthLong= "November";
		break;
		case "12":
		$monthShort= "Dec";
		$monthLong= "December";
		break;
	}
	//give 24 hours time 
	if($timeOfDay == "am"){
		$time24h = $hour;
	}else{
		$time24h = $hour + 12;
	}
	
    	$attributes = new \stdClass();
    	$attributes ->dateFormatted = $date;
	$attributes ->dayInt= $day;
	$attributes ->dayShort= $dayShort ;
	$attributes ->dayLong= $dayLong;
	$attributes ->monthInt= $month;
	$attributes ->monthShort= $monthShort;
	$attributes ->monthLong= $monthLong;
	$attributes ->year= $year;
	$attributes ->time24h= $time24h;
	$attributes ->time12h= $hour;
	$attributes ->timeMin= $minute;
	$attributes ->timeSec= $second;
	$attributes ->timeAmPm= $timeOfDay;
	$attributes ->time12hms= $time12hms;
	$attributes ->time24hms=$years[1];
	$attributes ->time12hm= $time12hm;
	$attributes ->time24hm= $time24hm ;
	$attributes ->timezoneName= $timezoneName;
	$attributes ->greeting= "morning";
	$attributes ->greetingCap= "Morning";
	$set= new \stdClass();
    	$set ->set_attributes = $attributes;
    	$set ->redirect_to_blocks = array("Mobile Number"); 
	
	$myJSON = json_encode($attributes );
	
	echo json_encode($set);
	//echo json_encode($time24hm );
	//echo json_encode($years[1]);
	//echo json_encode($hour +12);

	//var_dump($myJSON );
	}
  
}
