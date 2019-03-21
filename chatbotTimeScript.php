<?
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
		 $arr[] = $hours[1];
		 $arr[] = $time[1];
		
		$time24hm = join(':', $arr);				//"09:31"
		$arr3[] = $years[1];
		 $arr3[] = $years[2];
		
		$time12hms = join(' ', $arr3);				//"03:55:21 pm"
		
		$arr2[] = $time24hm;
		$arr2[] = $second;
		$time12hm = join(' ', $arr2);				//"09:30 am"	
		$time24hms=$years[1];
	
	
	}else{
		$time24h = $hour + 12;
		$arr4[] = $time24h;
		$arr4[] = $time[1];
		$arr4[] = $second;
		$time24hms = join(':', $arr4);				//"15:56:10"
		
		$arr[] = $time24h;
		 $arr[] = $time[1];
		
		$time24hm = join(':', $arr);				//"15:56"
		$arr3[] = $years[1];
		 $arr3[] = $years[2];
		
		$time12hms = join(' ', $arr3);				////"03:55:21 pm"
		
		$arr2[] = $hour ;
		$arr2[] = $time[1];
		$time12hm = join(':', $arr2);
		$arr22[] = $time12hm;
		$arr22[] = $seconds[1];
		$time12hm = join(' ', $arr22);				//"03:57 pm"	
		
	}
	//switch cases for greetings 
	/*(Morning     5 am to 12 pm (noon) 
Afternoon     12 pm to 5 pm
Evening     5 pm to 9 pm
Night         9 pm to 5 am*/
	$current_time = $time12hms;
	$morning1= "5:00:00 am";
	$morning2= "11:59:59 am";
	$afternoon1= "12:00:00 pm";
	$afternoon2= "05:00:00 pm";
	$evening1= "5:01:00 pm";
	$evening2= "09:00:00 pm";
	$night1= "09:01:00 pm";
	$night2= "04:59:59 am";
	$date0 = DateTime::createFromFormat('H:i a', $current_time );
	$date1 = DateTime::createFromFormat('H:i a', $morning1);		//{"date":"2019-02-07 05:00:00.000000","timezone_type":3,"timezone":"GMT"}
	$date2 = DateTime::createFromFormat('H:i a', $morning2);
	$date3 = DateTime::createFromFormat('H:i a', $afternoon1);
	$date4 = DateTime::createFromFormat('H:i a', $afternoon2);
	$date5 = DateTime::createFromFormat('H:i a', $evening1);
	$date6 = DateTime::createFromFormat('H:i a', $evening2);
	$date7 = DateTime::createFromFormat('H:i a', $night1);
	$date8 = DateTime::createFromFormat('H:i a', $night2);
	if ($date0 > $date1 && $date0 < $date2)
	{
	   $greeting = 'morning';
	   $greetingCap= 'Morning';
	}
	else if($date0 > $date3 && $date0 < $date4)
	{
	   $greeting = 'afternoon';
	   $greetingCap= 'Afternoon';
	}else if($date0 > $date5 && $date0 < $date6)
	{
	   $greeting = 'evening';
	   $greetingCap= 'Evening';
	}else if($date0 > $date7 && $date0 < $date8)
	{
	   $greeting = 'night';
	   $greetingCap= 'Night';
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
	$attributes ->time24hms=$time24hms;
	$attributes ->time12hm= $time12hm;
	$attributes ->time24hm= $time24hm ;
	$attributes ->timezoneName= $timezoneName;
	$attributes ->greeting= $greeting;
	$attributes ->greetingCap= $greetingCap;
	$set= new \stdClass();
    	$set ->set_attributes = $attributes;
	
	$myJSON = json_encode($attributes );
	
	echo json_encode($set);
	//echo json_encode($date1);
	//echo json_encode($years[1]);
	//echo json_encode($hour +12);

	//var_dump($myJSON );
	?>