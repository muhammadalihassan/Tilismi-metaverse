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
					$data['user'] = $find_user;
					$data['status'] = $attend_status;
					$data['timer'] = $att_time;
					$data['date'] = $att_date;

					$result = $this->user_timing($data);
				}
        	}
        }
    }

    // Get and check if the user is login or logout as per his/her timing
    private function user_timing($data)
    {
    	$least_limit = 30;
    	$status = "";
    	$policy = $data['user']->policy;
    	//Get User shift timing for IN
    	$user_timein = $data['user']->shift_in;
    	$user_timein = date("H:i" , strtotime($user_timein));

    	//Get User shift timing for OUT
    	$user_timeout = $data['user']->shift_out;
    	$user_timeout = date("H:i" , strtotime($user_timeout));

    	if ($policy == 1) {
    		$half_day_mint = 120;
    		$half_day_limit = 180;
    		$halfday_timein = date("H:i", strtotime('+'.$half_day_mint.' minutes', strtotime($user_timein)));
			$halfday_timeout = date("H:i", strtotime('-'.$half_day_mint.' minutes', strtotime($user_timeout)));

			$halfdaylimit_timein = date("H:i", strtotime('+'.$half_day_limit.' minutes', strtotime($user_timein)));
			$halfdaylimit_timeout = date("H:i", strtotime('-'.$half_day_limit.' minutes', strtotime($user_timeout)));

    	}elseif($policy == 2){
    		$half_day_mint = 120;
    		$half_day_limit = 180;
    		$halfday_timein = date("H:i", strtotime('+'.$half_day_mint.' minutes', strtotime($user_timein)));
    		$halfday_timeout = date("H:i", strtotime('-'.$half_day_mint.' minutes', strtotime($user_timeout)));

    		$halfdaylimit_timein = date("H:i", strtotime('+'.$half_day_limit.' minutes', strtotime($user_timein)));
			$halfdaylimit_timeout = date("H:i", strtotime('-'.$half_day_limit.' minutes', strtotime($user_timeout)));
    	}

    	$user_grace_time_in = date("H:i", strtotime('+'.$least_limit.' minutes', strtotime($user_timein)));
    	$user_grace_time_out = date("H:i", strtotime('-'.$least_limit.' minutes', strtotime($user_timeout)));

    	if ($data['timer'] >= $user_timein && $user_grace_time_in >= $data['timer']) {
    		$status = "On-Time";
    		$attend = "In";

    		$temp['day'] = $data['date'];
    		$temp['user'] = $data['user'];
    		$temp['time'] = $data['timer'];
    		$temp['status'] = $status;
    		$temp['attend'] = $attend;
    		$duplicate_result = $this->check_duplicate($temp);

    	}elseif($data['timer'] >= $user_grace_time_in && $halfday_timein >= $data['timer']){
    		$status = "Late-In";
    		$attend = "In";

    		$temp['day'] = $data['date'];
    		$temp['user'] = $data['user'];
    		$temp['time'] = $data['timer'];
    		$temp['status'] = $status;
    		$temp['attend'] = $attend;
    		$duplicate_result = $this->check_duplicate($temp);

    	}elseif ($data['timer'] >= $halfday_timein && $halfdaylimit_timein >= $data['timer']) {
    		$status = "Half-Day";
    		$attend = "In";

    		$temp['day'] = $data['date'];
    		$temp['user'] = $data['user'];
    		$temp['time'] = $data['timer'];
    		$temp['status'] = $status;
    		$temp['attend'] = $attend;
    		$duplicate_result = $this->check_duplicate($temp);

    	}elseif ($data['timer'] >= $user_timeout) { // Time Out 
    		$status = "On-Time";
    		$attend = "Out";

    		$temp['day'] = $data['date'];
    		$temp['user'] = $data['user'];
    		$temp['time'] = $data['timer'];
    		$temp['status'] = $status;
    		$temp['attend'] = $attend;
    		$duplicate_result = $this->check_duplicate($temp);

    	}elseif($user_grace_time_out <= $data['timer'] && $data['timer'] >= $halfdaylimit_timeout){
    		$status = "Early-Out";
    		$attend = "Out";

    		$temp['day'] = $data['date'];
    		$temp['user'] = $data['user'];
    		$temp['time'] = $data['timer'];
    		$temp['status'] = $status;
    		$temp['attend'] = $attend;
    		$duplicate_result = $this->check_duplicate($temp);

    	}elseif ($halfdaylimit_timeout < $data['timer'] && $halfdaylimit_timeout <= $data['timer']) {
    		$status = "Half-Day";
    		$attend = "Out";

    		$temp['day'] = $data['date'];
    		$temp['user'] = $data['user'];
    		$temp['time'] = $data['timer'];
    		$temp['status'] = $status;
    		$temp['attend'] = $attend;
    		$duplicate_result = $this->check_duplicate($temp);

    	}else{
    		$status = "Absent";
    		$attend = "Absent";
    	}

    	$result['status'] = $status;
    	$result['attend'] = $attend;
    	return $result;
    }

    private function check_duplicate($data)
    {
    	//Get User shift timing for IN
    	$user_timein = $data['user']->shift_in;
    	$user_timein = date("H:i" , strtotime($user_timein));

    	//Get User shift timing for OUT
    	$user_timeout = $data['user']->shift_out;
    	$user_timeout = date("H:i" , strtotime($user_timeout));
    	if ($data['attend'] == "In") {
    		$attenda = attenda::where("day_date" , $data['day'])->whereTime("time_in" , "<=" , $data['time'])->first();
    		if ($attenda) {
    			// Record found so don't take any action
    		}else{
    			$attendance = new attenda;
				$attendance->emp_id = $data['user']->emp_id;
				$attendance->day_date = $data['day'];
				$attendance->time_in = $data['time'];
				$attendance->timein_status = $data['status'];
				$attendance->save();
    		}
    	}elseif ($data['attend'] == "Out") {
    		$endDay = date('Y-m-d', strtotime($data['day'] . ' -1 day'));
    		$attenda = attenda::where("day_date" , $endDay)->whereTime("time_in" , "!=" , "")->first();
    		//dd($attenda,$endDay);
    		if ($attenda) {
    			$attenda->time_out = $data['time'];
				$attenda->timeout_status = $data['status'];

				// Calculate Working hour of user
				$time_in = $attenda->time_in;
				$final = strtotime($data['time']) - strtotime($time_in);
				$final = date('H:i' ,$final);
				
				// Calculate Working hour of user

				$attenda->working_hour = $final;

				$user_time_out = strtotime($data['user']->shift_out);

				$extra = date("H:i" , strtotime($data['time']) - $user_time_out);
				$attenda->extra = $extra;
				$attenda->save();
    		}else{
    			$attendance = new attenda;
				$attendance->emp_id = $data['user']->emp_id;
				$attendance->day_date = $data['day'];
				
				$attendance->time_in = "00:00";
				$attendance->timein_status = "Time-In-Missing";
				$attendance->time_out = $data['time'];
				$attendance->timeout_status = $data['status'];
				$attendance->working_hour = "-";

				$attendance->save();
    		}
    	}else{
    		dd("error");
    	}
    return true;
    }
}
