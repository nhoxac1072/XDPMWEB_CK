<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class homecontroller extends Controller
{
    public function index()
    {
        $showproduct = DB::table('showproduct')->where('status',1)->paginate(4);;
        $product = DB::table('product')->get();
        $dongsp = DB::table('dongsp')->get();
        if($showproduct!= null)
        {
            return view('home',compact('showproduct','dongsp','product'));
        }
    }
    public function cateindex($cateid)
    {
        $showproduct = DB::table('showproduct')->where('status',1)->where('cateid',$cateid)->paginate(4);;
        $product = DB::table('product')->get();
        $dongsp = DB::table('dongsp')->get();
        if($showproduct!= null)
        {
            return view('home',compact('showproduct','dongsp','product'));
        }
    }
    public function brandindex($brandid)
    {
        $showproduct = DB::table('showproduct')->where('status',1)->where('brandid',$brandid)->paginate(4);;
        $product = DB::table('product')->get();
        $dongsp = DB::table('dongsp')->get();
        if($showproduct!= null)
        {
            return view('home',compact('showproduct','dongsp','product'));
        }
    }
    public function detailsp($product_id)
    {
        $showproduct = DB::table('showproduct')->where('id',$product_id)->first();

        $catename=DB::table('product')->where('cateid',$showproduct->cateid)->first();

        $brandname=DB::table('dongsp')->where('brandid',$showproduct->brandid)->first();

        $product = DB::table('product')->get();
        $dongsp = DB::table('dongsp')->get();
        return view('single_item',compact('dongsp','product','showproduct','catename','brandname'));
    }
    public function loginpage()
    {
        session()->forget(['username','userid','useremail']);
        return view('login');
    }
    public function registerpage()
    {
        return view('register');
    }
    public function edituserpage()
    {
        $user=DB::table('users')->where('userid',session('userid'))->first();
        return view('edituser',compact('user'));
    }
}

