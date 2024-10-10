<?php

namespace App\Http\Controllers;

use App\Models\Blog_Model;
use App\Models\Category_Model;
use App\Models\Rent_Model;
use App\Models\Tools_Model;
use Illuminate\Http\Request;

class User_controller extends Controller
{
    function index(Request $res){
        $data = Category_Model::all();
        if($res->session()->has('email') && $res->session()->has('u_id')){
            return view("user/index",compact('data'));
        }else{
            return redirect()->route('login');
        }
    }
    function tools(Request $res){
        if(isset($res->sea)){
            $data = Tools_Model::where("name","like",$res->sea)->paginate(3);
        }else{
            $data = Tools_Model::paginate(3);
        }
        if($res->session()->has('email') && $res->session()->has('u_id')){
            return view("user/Tools",compact('data'));
        }else{
            return redirect()->route('login');
        }
    }
    function Tooldetails($id){
        $data = Tools_Model::where("id",$id)->get();
        $email = session()->get('email');
        $u_id = session()->get('u_id');
        if($email != null && $u_id != null){
            return view("user/Tooldetails",compact("data"));
        }else{
            return redirect()->route('login');
        }
    }
    function about(Request $res){
        if($res->session()->has('email') && $res->session()->has('u_id')){
            return view("user/about");
        }else{
            return redirect()->route('login');
        }
    }
    function contact(Request $res){
        if($res->session()->has('email') && $res->session()->has('u_id')){
            return view("user/contactus");
        }else{
            return redirect()->route('login');
        }
    }
    function Category(Request $res ,$id){
        if(isset($res->sea)){
            $data = Tools_Model::where("name","like",$res->sea)->get();
        }else{
            $data = Tools_Model::where("cat_id",$id)->get();
        }
        return view("user/cat_prodect",compact('data'));
    }
    
    function Chakoute(Request $res){
        if($res->session()->has('u_id') && $res->session()->has('email')){
            if(isset($res->submit)){
                $name="";
                $Rate_Per_Day="";
                $Rate_Per_Month="";
                $Rate_Per_Year="";
                $Rate_Per_Hour_With_Operator="";
                $data  = Tools_Model::where("id","=",$res->id)->get();
       foreach($data as $value){
            $name = $value->name;
            $Rate_Per_Day = $value->Rate_Per_Day;
            $Rate_Per_Month = $value->Rate_Per_Month;
            $Rate_Per_Year = $value->Rate_Per_Year;
            $Rate_Per_Hour_With_Operator = $value->Rate_Per_Hour_With_Operator;
            $img= $value->img;
       }
        $Hire_Type = "No Operator";
        if($res->PAYEMENT=="Daily"){
            $price = $Rate_Per_Day;
        }elseif($res->PAYEMENT=="monthly"){
            $price = $Rate_Per_Month;
        }elseif($res->PAYEMENT=="yearly"){
            $price = $Rate_Per_Year;
        }elseif($res->PAYEMENT=="Hour"){
            $Hire_Type = "With_Operator";
            $price = $Rate_Per_Hour_With_Operator;
        }
       $result = Rent_Model::create([
            "name"=>$name,
            "Starting_Date"=>$res->str_date,
            "Ending_Date"=>$res->end_date,
            "Price"=>$price,
            "Directions"=>$res->PAYEMENT,
            "Hire_Type"=>$Hire_Type,
            "u_id"=>session()->get('u_id'),
            "img"=>$img,
        ]);
        if($result){
            return redirect()->route('Cart');
        }
    }
}
}
    function Cart(Request $res){
        $error = "";
        $u_id = session()->get('u_id');
        if(isset($res->sea)){
            $data = Rent_Model::where("u_id","=",$u_id)->where("name","like",$res->sea)->get();
        }else{
            $data = Rent_Model::where("u_id","=",$u_id)->get();    
        }
        if(count($data)==0){
            $error = "You have not purchased any product.";
        }

        return view('user/cart',compact('data','error'));
    }
    function blog(Request $res){
       $data =  Blog_Model::all();
       return view('user/blog',compact('data'));
    }
}