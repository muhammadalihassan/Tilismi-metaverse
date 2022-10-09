<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\news;
use App\Models\blogs;
use App\Models\Contact;
use Mail;
use Session;
use Helper;
// add new
use Crypt;
use DB;
use App\Mail\MailContact;

use View;
use Illuminate\Support\Facades\Hash;
use Stripe\Customer;
use Stripe;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
       {
       
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('web.index');
    }

   

    public function news()
      {

       $all_latest_news=news::where('is_active',1)->latest()->take(4)->get();
        $all_news=news::latest()->paginate(10);
       
        return view('web.news')->with(compact('all_latest_news','all_news'));
    }  
    //  public function news()
    //    {
    //    $news_latest=news::latest()->first();
    //    $all_latest_news=news::latest()->take(4)->get();
    //     $all_news=news::paginate(10);
       
    //     return view('web.news')->with(compact('news_latest','all_latest_news','all_news'));
    // }    
     public function news_detail($id=""){

       if ($id != "") {
            $id  = base64_decode(urldecode($id));
            $news=news::where('id', $id)->where('is_active',1)->first();
             $all_latest_news=news::where('is_active',1)->latest()->take(4)->get();
         return view('web.news-detail')->with(compact('news','all_latest_news'));
        } else {
            return redirect()->back()->with('error', "No Record Found");
        }



     }

     public function blogs()
      {
       
       $all_latest_blogs=blogs::where('is_active',1)->latest()->take(4)->get();
        $all_blogs=blogs::where('is_active',1)->latest()->paginate(11);
       
        return view('web.blogs')->with(compact('all_latest_blogs','all_blogs'));
    }

    public function blogs_detail($id=""){

       if ($id != "") {
            $id  = base64_decode(urldecode($id));
            $blogs=blogs::where('id', $id)->where('is_active',1)->first();
             $all_latest_blogs=blogs::where('is_active',1)->latest()->take(4)->get();
         return view('web.blogs-detail')->with(compact('blogs','all_latest_blogs'));
        } else {
            return redirect()->back()->with('error', "No Record Found");
        }



     }

       public function contact_us(Request $request)
          {
       
         $token_ignore = ['_token' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);
        $contact = Contact::create($post_feilds);
        $details = ['fname' =>$request->get('fname'),'email'=>$request->get('email'),'phone_number' =>$request->get('phone_number'),'message'=>$request->get('message'), ];
        Mail::to('mohammadalihassan06@gmail.com')->send(new MailContact($details));
        return redirect()->back()->with('message', 'Thank You For Contact Us!');
    }


   
}
