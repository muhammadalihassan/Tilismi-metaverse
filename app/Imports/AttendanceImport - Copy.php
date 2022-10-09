<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use App\Models\User;
use App\Models\attenda;
use DateTime;
use DB;

class AttendanceImport implements ToCollection
{
    /**
    * @param Collection $collection
    */

    // public function collection(Collection $collection)
    // {
    // 	$least_limit = 30; // in min
    // 	$ignorance_limit = 120; // in min
    //     foreach ($collection as $key => $value) {
    //     	if ($key > 0) {
        		
	   //      	$time = new DateTime($value[2]);
				// $att_date = $time->format('n/j/Y');
				// $att_date = date('Y-m-d' , strtotime($att_date)); // Date
				// $att_time = $time->format('H:i'); // Time
				
				// $depart = $value[0];
				// $name = $value[1];
				// $attend_status = $value[3];
				// $emp_id = $value[4];
				
				// $endDay = date('Y-m-d', strtotime($att_date . ' +1 day'));
				// $endDayStart = date('Y-m-d', strtotime($att_date . ' -1 day'));

				// $find_user = User::where('is_active' ,1)->where('emp_id' , $emp_id)->first();

				// if ($find_user) {
				// 	$user_time_in = strtotime($find_user->shift_in);
				// 	$user_time_out = strtotime($find_user->shift_out);

				// 	if ($attend_status == "C/In" || $attend_status ==  "OverTime In") {
				// 		$attenda = attenda::where('emp_id' ,$emp_id)
				// 		->where('day_date' , $att_date)
				// 		->where('time_in' , $att_time)
				// 		->first();

				// 		if (is_null($attenda)) {
				// 			//dd($find_user->shift_in <= $att_time,$find_user->shift_in , $att_time);
				// 			if ($find_user->shift_in <= $att_time) {
				// 				$startTime = date("H:i", strtotime('+'.$least_limit.' minutes', $user_time_in));
				// 				if ($startTime > $att_time) {
				// 					$timein_status = "On-Time";
				// 				}else{
				// 					$timein_status = "Late-In";
				// 				}
				// 				$attendance = new attenda;
				// 				$attendance->emp_id = $emp_id;
				// 				$attendance->day_date = $att_date;
				// 				$attendance->time_in = $att_time;
				// 				$attendance->timein_status = $timein_status;
				// 				$attendance->save();
				// 			}elseif ($find_user->shift_out <= $att_time){
				// 				//$attendance = new attenda;

				// 				$attenda = attenda::where('emp_id' ,$emp_id)
				// 				->where('day_date' , $att_date)
				// 				->where('time_in' , $att_time)
				// 				->first();

				// 				$attendance->emp_id = $emp_id;
				// 				$attendance->day_date = $att_date;
				// 				$attendance->time_out = $att_time;
				// 				$attendance->timeout_status = "On-Time";
				// 				$attendance->time_in = "00:00";
				// 				$attendance->timein_status = "Time-In-Missing";
				// 				$attendance->working_hour = "-";
				// 				$attendance->extra = "-";
				// 				$attendance->save();
				// 			}
				// 		}

				// 	}else{
						
				// 	}
				// }
    //     	}
    //     }
    // }

    public function collection(Collection $collection)
    {
    	$least_limit = 30; // in min
    	$ignorance_limit = 120; // in min
        foreach ($collection as $key => $value) {
        	if ($key > 0) {
        		
	        	$time = new DateTime($value[2]);
				$att_date = $time->format('n/j/Y');
				$att_date = date('Y-m-d' , strtotime($att_date)); // Date
				$att_time = $time->format('H:i'); // Time
				
				$depart = $value[0];
				$name = $value[1];
				$attend_status = $value[3];
				$emp_id = $value[4];
				
				$endDay = date('Y-m-d', strtotime($att_date . ' +1 day'));
				$endDayStart = date('Y-m-d', strtotime($att_date . ' -1 day'));

				$find_user = User::where('is_active' ,1)->where('emp_id' , $emp_id)->first();

				if ($find_user) {
					$user_time_in = strtotime($find_user->shift_in);
					$user_time_out = strtotime($find_user->shift_out);

					if ($attend_status == "C/In" || $attend_status ==  "OverTime In") {
						
						// To check the time limit
						$startTime = date("H:i", strtotime('+'.$least_limit.' minutes', $user_time_in));

						$attenda = attenda::where('emp_id' , $emp_id)->where('day_date' , $att_date)->where("time_in" ,"!=", null)->first();

						if (is_null($attenda)) {
							$attendance = new attenda;
							$attendance->emp_id = $emp_id;
							$attendance->day_date = $att_date;
							$attendance->time_in = $att_time;

							if ($startTime > $att_time) {
								$attendance->timein_status = "On-Time";
							}else{
								$attendance->timein_status = "Late-In";
							}
							$attendance->save();
						}else{

							// Check if user submit check in again within time limit
							//dd($attenda->time_in);
							$att_repeated_check = date("H:i", strtotime('+'.$ignorance_limit.' minutes', strtotime($attenda->time_in)));

							if ($att_repeated_check > $find_user->shift_in) {
								continue;
							}else{

								$attenda->time_out = "00:00";
								$attenda->timeout_status = "Time-Out-Missing";
								$attenda->working_hour = "-";
								$attenda->extra = "-";
								$attenda->save();
								// Close last record

								// Create new record for timein
								$attendance = new attenda;
								$attendance->emp_id = $emp_id;
								$attendance->day_date = $att_date;
								$attendance->time_in = $att_time;
								$attendance->timein_status = "Late-In";	
								$attendance->save();							
							}
						}
					}else{
						// To check the time limit
						$endTime = date("H:i", strtotime('-'.$least_limit.' minutes', $user_time_out));
						$shift_day = $find_user->shift_day;
						if ($shift_day == "Day") {

							$attenda = attenda::where('emp_id' , $emp_id)->where('day_date' , $att_date)->where("time_out" , null)->first();
						}else{
							$attenda = attenda::where('emp_id' , $emp_id)->where('day_date' , $endDayStart)->where("time_out" , null)->first();
						}

						if (is_null($attenda)) {
							$attendance = new attenda;
							$attendance->emp_id = $emp_id;
							$attendance->day_date = $att_date;
							$attendance->time_in = "00:00";
							$attendance->timein_status = "Time-In-Missing";
							$attendance->time_out = $att_time;
							$attendance->timeout_status = "-";
							$attendance->working_hour = "-";
							$attendance->extra = "-";

							$attendance->save();
						}else{

							if ($user_time_out > strtotime($att_time)) {
								$timeout_status = "Early-Out";
							}elseif ($user_time_out <= strtotime($att_time)) {
								$timeout_status = "On-Time";
							}
							$attenda->time_out = $att_time;
							$attenda->timeout_status = $timeout_status;
							$time_in = $attenda->time_in;
							$final_out = strtotime($time_in) - strtotime($att_time);

							$final = date("H:i" , $final_out);

							$hourdiff = round((strtotime($time_in) - strtotime($att_time))/3600, 1);

							$attenda->working_hour = date("H:i" , strtotime($final));
							$extra = date("H:i" , strtotime($hourdiff));
							$attenda->extra = $extra;
							$attenda->save();

						}
					}
				}
        	}
        }
    }

    // public function collection(Collection $collection)
    // {
    // 	$least_limit = 30;
    //     foreach ($collection as $key => $value) {
    //     	if ($key > 0) {
        		
	   //      	$time = new DateTime($value[2]);
				// $att_date = $time->format('n/j/Y');
				// $att_date = date('Y-m-d' , strtotime($att_date));
				// $att_time = $time->format('H:i');
				
				// $depart = $value[0];
				// $name = $value[1];
				// $attend_status = $value[3];
				// $emp_id = $value[4];
				
				// $find_user = User::where('is_active' ,1)->where('emp_id' , $emp_id)->first();
				
				// if ($find_user) {
				// 	$user_time_in = strtotime($find_user->shift_in);
					
				// 	$user_time_out = strtotime($find_user->shift_out);
				// 	if ($attend_status == "C/In" || $attend_status ==  "OverTime In") {
						
				// 		$old_attendance = attenda::where("emp_id" , $emp_id)->where("day_date" , $att_date)->where("time_out" , null)->first();

				// 		$startTime = date("H:i", strtotime('+'.$least_limit.' minutes', $user_time_in));
				// 		$attendance = new attenda;
						
				// 		$attendances = attenda::where("emp_id" , $emp_id)->where("time_out" , null)->first();
				// 		if ($attendances) {
				// 			// Check repeated Marked In
				// 			$differ = strtotime($attendances->time_in) - strtotime($att_time);
				// 			// Time Out Missing
				// 			$attendances->time_out = "00:00";
				// 			$attendances->timeout_status = "Time-Out-Missing";
				// 			$attendances->working_hour = "-";
				// 			$attendances->extra = "-";
				// 			if ($differ > 1000) {
				// 				$attendances->save();
				// 			}
				// 		}

				// 		if ($user_time_in >= $att_time || $startTime < $att_time) {
				// 			// Reached Within time
				// 			$user_time_in = date('H:i' , $user_time_in);

				// 			$attendance->emp_id = $emp_id;
				// 			$attendance->day_date = $att_date;
				// 			$attendance->time_in = $att_time;
				// 			$attendance->timein_status = "On-Time";

				// 		}else{
				// 			// Reached Late
				// 			$attendance->emp_id = $emp_id;
				// 			$attendance->day_date = $att_date;
				// 			$attendance->time_in = $att_time;
				// 			$attendance->timein_status = "Late-In";
				// 		}
				// 		if (is_null($old_attendance)) {
				// 			$attendance->save();
				// 		}
						
						
				// 	}elseif ($attend_status == "C/Out") {
				// 		$attendances = attenda::where("emp_id" , $emp_id)
				// 		//->where("day_date" , $att_date)
				// 		->where("time_out" , null)->first();

				// 		if ($attendances) {
				// 			$user_time_out = strtotime($find_user->shift_out);
				// 			$time_in = $attendances->time_in;
				// 			$final = strtotime($att_time) - strtotime($time_in);
				// 			$final = date('H:i' ,$final);
				// 			if ($user_time_out > strtotime($att_time)) {
				// 				// Early Out
				// 				$attendances->time_out = $att_time;
				// 				$attendances->timeout_status = "Early-Out";
				// 				$attendances->working_hour = $final;
				// 				$extra = date("H:i" , strtotime($att_time) - $user_time_out);
				// 				$attendances->extra = $extra;

				// 				$attendances->save();

				// 			}elseif ($user_time_out <= strtotime($att_time)) {
				// 				// On Time
				// 				$attendances->time_out = $att_time;
				// 				$attendances->timeout_status = "On-Time";
				// 				$attendances->working_hour = $final;
				// 				$extra = date("H:i" , strtotime($att_time) - $user_time_out);
				// 				$attendances->extra = $extra;
				// 				$attendances->save();
				// 			}
								
				// 		}else{
				// 			// Miss the time in
				// 			$attendance = new attenda;
				// 			$attendance->emp_id = $emp_id;
				// 			$attendance->day_date = $att_date;
				// 			$attendance->time_out = $att_time;
				// 			$attendance->timein_status = "Time-In-Missing";
				// 			$attendance->time_in = "00:00";
				// 			$attendance->timeout_status = "-";
				// 			$attendance->working_hour = "-";
				// 			$attendance->extra = "-";
				// 			$attendance->save();
				// 		}
				// 	}
				// }
    //     	}
    //     }
    // }
}
