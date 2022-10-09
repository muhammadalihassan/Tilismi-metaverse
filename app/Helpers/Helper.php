<?php

namespace App\Helpers;
use Auth;
use App\Models\role_assign;
use App\Models\sessions;
use App\Models\attributes;
use App\Models\config;
use App\Models\web_cms;
use Session;

class Helper
{
    public static function curren_user()
    {
    	$user = Auth::user();
        return $user;
    }

    public static function create_sidebar($data)
    {
    	$user = Auth::user();
    	$temp = array();
    	foreach ($data as $key => $value) {
			$name = explode('_', $value);
    		if (!in_array($name[0], $temp)) {
    			$temp[$key] = $name[0];
    		}
    	}
        return array_values($temp);
    }

    public static function get_sidebar_icon($data)
    {
        $attributes = attributes::where("is_active" ,1)->where("attribute" , $data)->first();
        $icon = "fa fa-eye";
        if ($attributes) {
            $icon = $attributes->icon;
        }
        return $icon;
    }


    public static function check_rights($slug)
    {
        $user = Auth::user();
        $temp = array();
        $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();
        $verify = unserialize($role_assign->assignee);
        foreach ($verify as $key => $value) {
            if (str_contains($value , $slug)) {
                if (!in_array($value, $temp)) {
                    $temp[$key] = $value;
                }
            }
        }
        return array_values($temp);
    }

    public static function can_create($slug='')
    {
        $user = Auth::user();
        $temp = false;
        $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();
        $verify = unserialize($role_assign->assignee);
        foreach ($verify as $key => $value) {
            if ($value == $slug."_1") {
                $temp = true;
            }
        }
        return $temp;
    }

    public static function can_view($slug='')
    {
        $user = Auth::user();
        $temp = false;
        $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();
        $verify = unserialize($role_assign->assignee);
        foreach ($verify as $key => $value) {
            if ($value == $slug."_2") {
                $temp = true;
            }
        }
        return $temp;
    }

    public static function can_edit($slug='')
    {
        $user = Auth::user();
        return $user;
    }
    
    public static function get_project($id)
    {
        $user = Auth::user();
        if(!Session::has("project_id")){
            $id = $user->project_id;
        }
        $attributes = attributes::find($id);
        if(!$attributes){
            
        }
        return $attributes;
    }

    public static function activity_log($slug="" , $data = [])
    {
        $project_id = $data['project_id'];

        if ($slug == "login") {
            $sessions = new sessions;
            $sessions->user_id = Auth::user()->id;
            $sessions->project_id = $project_id;
            $sessions->ip_address = \Request::ip();
            $sessions->slot = $slug;
            $sessions->save();
        }
    }

    public static function config($val='')
    {
        $config = config::where("type" , $val)->first();
        return $config->value;
    }
    

    public static function editck($t, $class, $desc, $slug )
    {
        $content = web_cms::where("slug",$slug)->orderBy('id','desc')->first();
        if (Auth::user() && Auth::user()->role_id ==1) {
            if ($content) {
                $body = '<div class="'.$class.'clickable" data-slug="'.$slug.'" data-class="'.$class.'" data-tag="'.$t.'">'.$content->desc.'</div>';
            } else{
                $body = '<div class="'.$class.'clickable" data-slug="'.$slug.'" data-class="'.$class.'" data-tag="'.$t.'"><'.$t.' class="'.$class.'"> '.$desc.' </'.$t.'></div>';
            }
        } else{
            if ($content) {
                $body = $content->desc;
            } else{
                $body = '<'. $t .' class="'.$class.'"> '.$desc.' </'. $t .'>';
            }
        }
        return $body;
    }
}