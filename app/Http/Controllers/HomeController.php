<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConformOrderMail;




class HomeController extends Controller
{
    //

    public function my_home(){
        $data=Food::all();
        return view('home.index',compact('data'));
    }
    public function index(){

        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                $data=Food::all();

                return view('home.index',compact('data'));
            }
            else{

                $total_user=User::where('usertype','=','user')->count();
                $total_foods=Food::count();
                $total_orders=Order::count();
                $total_delivered=Order::where('delivery_status','=','delivered')->count();

                return view('admin.index',compact('total_user','total_foods','total_orders','total_delivered'));
            }
        }
    }

    public function add_cart(Request $req,$id){
        if(Auth::id()){
            $data=Food::find($id);
            $title=$data->title;
            $details=$data->detail;
            $price=$data->price;
            $image=$data->image;



            $cart=new Cart;

            $cart->title=$title;
            $cart->details=$details;
            $cart->price=$price*$req->qty;
            $cart->image=$image;
            $cart->quantity=$req->qty;

            $cart->userid=Auth()->user()->id;

            $cart->save();

            return redirect()->back();


        }
        else{
            return redirect("login");
        }
    }

    public function my_cart(){
        $user_id=Auth()->user()->id;
        $data=Cart::where('userid','=',$user_id)->get();
        return view('home.my_cart',compact('data'));
    }

    public function remove_cart($id){
        $data=Cart::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function confirm_order(Request $req){
        $user_id=Auth()->user()->id;
        $cart=Cart::where('userid','=',$user_id)->get();

        foreach($cart as $cart){
            $order=new Order;

            $order->name=$req->name;
            $order->email=$req->email;
            $order->phone=$req->phone;
            $order->address=$req->address;

            $order->title=$cart->title;
            $order->quantity=$cart->quantity;
            $order->price=$cart->price;
            $order->image=$cart->image;

            $order->save();

            
            $data=Cart::find($cart->id);
            
            $data->delete();
            
        }
        Mail::to($order->email)->send(new ConformOrderMail($order));

        return redirect()->back();
    }

}
