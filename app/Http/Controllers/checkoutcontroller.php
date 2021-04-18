<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;

class checkoutcontroller extends Controller
{
    public function checkout(Request $re)
    {
        if($re->proceed!=null)
        {
            if(session('userid')==null)
            {
                return \Redirect::to('/registerpage');
            }
            else
            {
                $data=DB::table('cart')
                ->join('users','users.userid','=','cart.idcart')
                ->where('idcart',session('userid'))->first();
                return view('checkout',compact("data"));
            }
        }
        else
        {
            return \Redirect::to('/cart');
        }
    }
}
