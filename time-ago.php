<?php
date_default_timezone_set('Asia/Calcutta');
// $t=time();
// echo date('Y-m-d');
echo  time_ago(date('2019-12-11 17:18:00'));

function time_ago($timestamp){
	$time_ago = strtotime($timestamp);
	$current_time = time();
	$time_difference = $current_time - $time_ago;
	$seconds = $time_difference;
	$minutes = round($time_difference / 60);
	$hours = round($time_difference /3600);
	$days = round($time_difference / 24 * 60 * 60);
	$weeks = round($time_difference / 7 * 24 * 60 * 60);
	$months =round($seconds  /262944);
	$years =round($seconds/31553280);

	if($seconds<=60){

		return "just now";
	}
	else if($minutes<=60){
			 if($minutes==1){
			     return "1 minute ago";
		     }
			else{

			return "$minutes minute ago";
			}
		 }
		else if($hours<=24){
			     if($hours==1){

				   return"1 hour ago";
	  		      }
	   		    else{

	   			      return"$hours hour ago";
	  	 	     }
			 }
			 else if($days<=7){
				 	if($days==1){
				 		return"1 day ago";
				 	}
				 	else{
				 		return"$days day ago";
				 	}
			       }
			      else if($weeks<=5.3){  // 52/12 52 week in 1 year i.e. 12 months
			      			if($weeks<=1){
			      				return"1 week ago";
			      			}
			      			else{
			      				return"$weeks week ago";
			      			}
				         }
				         elseif($months<=12){
					         	if($months<1){
					         	return"1 month ago";
					        	 }
					       		 else{
					         	return"$months month ago";
					           }
					    	  }
				            else if($years<=1){
				         	    if($years==1){
				         		   return"1 year ago";
				         	    }
				         	    else{
				         		return"$years year ago";
				         	    }
				              }

 }


?>