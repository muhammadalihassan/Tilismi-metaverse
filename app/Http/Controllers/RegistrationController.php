<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TelegramController;
use Illuminate\Http\Request;
use App\Http\Requests\RequestUser;
use App\Models\User;
use App\Models\role_assign;
use App\Models\attributes;
use App\Models\company;
use App\Models\packages;
use App\Models\orders;
use App\Models\resetpass;
use App\Models\orderdetails;
use App\Models\promotions;
use App\Models\events;
use App\Models\config;
use App\Models\navbar;
use App\Models\discount;
use App\Models\logo;
use App\Models\generateEvent;
use App\Models\newsletter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use View;
use Carbon\Carbon;
use App\Mail\MailRegistraion;
use App\Mail\Mailnewsletter;
use App\Mail\Mailunsubscribe;
use App\Mail\MailPromotions;
use Mail;
use File;
use Auth;
use Session;
use PDF;
use validate;

class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $nav1 = navbar::find(1);
        $nav2 = navbar::find(2);
        $nav3 = navbar::find(3);
        $nav4 = navbar::find(4);
        $nav5 = navbar::find(5);
        $nav6 = navbar::find(6);
        $nav7 = navbar::find(7);
        $nav8 = navbar::find(8);
        $logo = logo::find(1);
        View::share(compact('nav1', 'nav2', 'nav3', 'nav4', 'nav5', 'nav6', 'nav7', 'nav8', 'logo'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function registration_submit(Request $request)
    {
        $rules = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
            'phonenumber' => 'required',
            'address' => 'required'


        ]);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->phonenumber = $request->phonenumber;
        $users->password = Hash::make($request->password);
        $users->save();
        $details = ['name' => $request->get('name'), 'address' => $request->get('address'), 'email' => $request->get('email'), 'phonenumber' => $request->get('phonenumber'),];
        Mail::to('chris@smartvoltsolar.com')->send(new MailRegistraion($details));
        return redirect()->route('welcome')->with('message', ' Thank You For Yor Registration');
    }

    public function show_discount($id = "")
    {
        if ($id != "") {
            $data = discount::where('show_discount', 1)->first();
            if ($data != "") {
                if ($data->show_discount != 0) {

                    $data->show_discount = 0;
                    $data->save();
                }
            }




            $discount = discount::where('id', $id)->first();

            $discount->show_discount = 1;

            $discount->save();

            return back()->with('message', 'Discount Enable on Website');
        } else {

            return redirect()->back()->with('error', "No Record Found");
        }
    }
    public function disable_discount($id = "")
    {

        if ($id != "") {

            $discount = discount::where('id', $id)->first();
            if ($discount->show_discount != 0) {

                $discount->show_discount = 0;
            }
            $discount->save();

            return back()->with('message', 'Discount Disable on Website');
        } else {

            return redirect()->back()->with('error', "No Record Found");
        }
    }


    public function orders_delete($id = "")
    {
        if ($id != "") {
            $order_details = orderdetails::find($id)->delete();
            return redirect()->back()->with('message', 'Data has been deleted');
        } else {
            return redirect()->back()->with('error', "No Record Found");
        }
    }

    public function order_details($id = "")
    {
        if ($id != "") {
            $order_details = orderdetails::where('id', $id)->get();
            return view('web.order-details')->with(compact('order_details'));
        } else {
            return redirect()->back()->with('error', "No Record Found");
        }
    }


    public function newsletter_send()
    {
        $newsletter = newsletter::where('is_active', 1)->get();
        $promotions = promotions::where('status', 1)->first();
        $user = Auth::User();
        $user_email = array();
        $link = route('unsubscribe_newsletter', [$user->id]);
        foreach ($newsletter as $user) {
            $emails = array_push($user_email, $user->email);
        }
        $details = ['heading' => $promotions->heading, 'img' => $promotions->img, 'desc' => $promotions->desc, 'title' => $promotions->title, 'paragraph' => $promotions->paragraph, 'link' => $link,];
        foreach ($user_email as $user) {
            Mail::to($user)->send(new \App\Mail\MailPromotions($details));
        }
        $event = generateEvent::where('promotion_id', $promotions->id)->first();
        $event->status = 1;
        $event->save();
        return redirect()->back()->with('message', 'promotions send');
    }


    public function email_newsletter($id = "")
    {
        if ($id != "") {
            $user = Auth::User();
            $promotions = promotions::where('id', $id)->first();
            $promotions->status = 1;
            $promotions->save();
            $events = new generateEvent;
            $events->promotion_id = $promotions->id;
            $events->save();
            return redirect()->back()->with('message', 'promotions enable');
        } else {
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
    

    public function newsletter_disable($id = "")
    {
        if ($id != "") {
            $user = Auth::User();
            $promotions = promotions::where('id', $id)->first();
            $promotions->status = 0;
            $promotions->save();

            return redirect()->back()->with('message', 'promotions disable');
        } else {
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('welcome')->withSuccess('Sign Out');
    }




    

}
