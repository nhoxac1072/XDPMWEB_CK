<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Cart;
use Cookie;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;

class usercontroller extends Controller
{
    function userlogin(Request $re)
    {
        $user= DB::table('users')->where('email',$re->email)->where('password',$re->password)->first();
        if($user!=null)
        {
        $re->session()->put('username',$user->name);
        $re->session()->put('userid',$user->userid);
        Cart::destroy();
        $cart=DB::table('cart')->where('idcart',$user->userid)->select('content')->first();
        foreach(json_decode($cart->content,true) as $item)
        {
            Cart::add($item);
        }
        return Redirect::to('/');
        }
        else
        {
            session()->flash('mes','User wrong');
            return Redirect::to('/loginpage');
        }
    }
    function userlogout()
    {  
        Cart::destroy();
        session()->forget(['username','userid','useremail']);
        return Redirect::to('/loginpage');
    }
    function userregister(Request $re)
    {
        $ngaytao = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
        $useremail= DB::table('users')->select('email')->where('email',$re->email)->first();
        if($useremail==null)
        {
            DB::insert('insert into users (email, password,name,gt,phone,ngaytao) values (?, ?,?,?,?,?)', 
            [$re->email,$re->password,$re->name,$re->gt,$re->phone,$ngaytao]);

            $userid=DB::table('users')->select('userid')->where('ngaytao',$ngaytao)->first();
            $content=array();
            foreach (Cart::content() as $item)
            {
                $content[] = array('id' =>$item->id,
                'name' =>$item->name,
                'qty' => $item->qty,
                'price' =>(int)$item->price,
                'weight' => $item->weight,
                'options' => $item->options
                 );
            }
            DB::insert('insert into cart (idcart, content) values (?, ?)', 
            [$userid->userid,json_encode($content)]);
            return Redirect::to('/loginpage');
        }
        else
        {
            echo 'Email trùng';
        }
    }
    public function loginGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function loginGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $userdb = DB::table('users')->where('email',$user->email)->first();
        if(!$userdb)
        {
            session()->put('useremail',$user->email);
            return Redirect::to('/registerpage');
        }
        else
        {
            session()->put('username',$userdb->name);
            session()->put('userid',$userdb->userid);
            Cart::destroy();
            $cart=DB::table('cart')->where('idcart',$userdb->userid)->select('content')->first();
            foreach(json_decode($cart->content,true) as $item)
            {
                Cart::add($item);
            }
            return Redirect::to('/');
        }
    }
    public function loginFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        
        $userdb = DB::table('users')->where('email',$user->email)->first();
        if(!$userdb)
        {
            session()->put('useremail',$user->email);
            return Redirect::to('/registerpage');
        }
        else
        {
            session()->put('username',$userdb->name);
            session()->put('userid',$userdb->userid);
            Cart::destroy();
            $cart=DB::table('cart')->where('idcart',$userdb->userid)->select('content')->first();
            foreach(json_decode($cart->content,true) as $item)
            {
                Cart::add($item);
            }
            return Redirect::to('/');
        }
    }

    public function edituser(Request $re)
    {
        $user=DB::table('users')->where('userid',session('userid'))
        ->update(['name'=>$re->name, 'password'=>$re->password, 'gt'=>$re->gt, 'phone'=>$re->phone]);
        return Redirect::to('/');
    }
}
