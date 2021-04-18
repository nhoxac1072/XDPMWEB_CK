<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Mail;
use App\Mail\BillOrderMail;
use Illuminate\support\Facades\Redirect;
use Cart;
use DB;
use Carbon\Carbon;

class billController extends Controller
{
    public function ordermail(Request $request)
    {
        if(Cart::initial()!=0)
        {
        $ngaylap = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');

        $idcart= DB::table('cart')
        ->join('users','users.userid','=','cart.idcart')
        ->where('name',$request->name)
        ->where('email',$request->email)
        ->where('phone',$request->phone)
        ->select('idcart')->first();
    
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

        $hoadon = array();
        $hoadon['idcart'] = $idcart->idcart;
        $hoadon['address'] = $request->address;
        $hoadon['city'] = $request->city;
        $hoadon['content'] = json_encode($content);
        $hoadon['total'] =Cart::initial(0,'.','.');
        $hoadon['ngaylap'] = $ngaylap;
        DB::table('hoadon')->insert($hoadon);

        \Mail::to($request->email)->send(new BillOrderMail($request));
        Cart::destroy();

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
            DB::table('cart')->where('idcart',session('userid'))->update(['content'=>json_encode($content)]);

        return view('ty4buying');
        }
        else
        {
            return \Redirect::to('/');
        }
    }
}
