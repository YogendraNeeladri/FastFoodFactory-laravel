<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Order;
use App\Mail\OrderDeliveredMail;
use App\Mail\OrderCancelledMail;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //
    public function add_food(){
        return view('admin.add_food');
    }

    public function upload_food(REQUEST $req){
        $data=new Food;
        $data->title=$req->title;
        $data->detail=$req->details;
        $data->price=$req->price;

        $image=$req->img;

        
        $filename=time().'.'.$image->getClientOriginalExtension();
        
        $req->img->move('food_img', $filename);

        $data->image=$filename;

        $data->save();

        return redirect()->back();

    }

    public function view_food(){
        $data=Food::all();
        return view('admin.show_food',compact('data'));
    }

    public function delete_food($id){
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_food($id){
        $data=Food::find($id);
        return view('admin.update_food',compact('data'));
    }

    public function edit_food(Request $req,$id){
        $data=Food::find($id);
        $data->title=$req->input('title');
        $data->detail=$req->input('details');
        $data->price=$req->input('price');

        $image=$req->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $req->image->move('food_img',$imagename);
            $data->image=$imagename;
        }

        $data->save();

        return redirect('view_food');
    }

    public function orders(){
        $data=Order::all();
        return view('admin.orders',compact('data'));
    }

    public function on_the_way($id){
        $data=Order::find($id);
        $data->delivery_status="On the Way";
        $data->save();
        return redirect()->back();
    }

    public function delivered($id){
        $data=Order::find($id);
        $data->delivery_status="Delivered";
        $data->save();

        Mail::to($data->email)->send(new OrderDeliveredMail($data));
        return redirect()->back();
    }

    public function cancelled($id){
        $data=Order::find($id);
        $data->delivery_status="Cancelled";
        $data->save();

        Mail::to($data->email)->send(new OrderCancelledMail($data));

        return redirect()->back();
    }

}
