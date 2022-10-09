<?php 
use App\Models\products;
use App\Models\wishlist;
use Illuminate\Support\Facades\Auth;
  function wishlist($id){
  
   if(!Auth::user())
        {
           $user=Null;
         

        }else{
   return wishlist::where('product_id',$id)->where('user_id',Auth::user()->id)->first();
    }
     
    }

   








 




