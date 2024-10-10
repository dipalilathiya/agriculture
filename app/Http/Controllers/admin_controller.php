<?php

namespace App\Http\Controllers;

use App\Models\Blog_Model;
use App\Models\Category_Model;
use App\Models\Contact_Model;
use App\Models\Rent_Model;
use App\Models\Tools_Model;
use Illuminate\Http\Request;

class admin_controller extends Controller
{
    function index(Request $res){
        $Tools = Tools_Model::count();
        $rent = Rent_Model::count();
        $type = Category_Model::count();
        $contect = Contact_Model::count();
        if($res->session()->has('email') ){
            return view("admin/index",compact('Tools','rent','type','contect'));
        }else{
            return redirect()->route('login');
        }
    }
    function Category(Request $res){
        $data = Category_Model::all();
        if(isset($res->id)){
            $file = $res->file('img');
            $destinationPath = 'img/';
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);
            Category_Model::where("id","=",$res->id)->update(
                [
                    "name"=>$res->name,
                    "img"=>$originalFile,
                ]
            );
            $data = Category_Model::all(); 
        }else{
            if(isset($res->name)){
                $file = $res->file('img');
                $destinationPath = 'img/';
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);
            Category_Model::create(
                [
                    "name"=>$res->name,
                    "img"=>$originalFile,
                    ]
                );
                $data = Category_Model::all();
            }
        }
        if($res->session()->has('email') ){
            return view("admin/category",compact('data'));
        }else{
            return redirect()->route('login');
        }
    }
    function Rent(){
        $data = Rent_Model::all();
        return view("admin/Rent",compact('data'));
    }
    function Tools(Request $res){
        $data = Tools_Model::all();
        if(isset($res->id)){
            $file = $res->file('img');
            $destinationPath = "img/";
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath,$originalFile);
            Tools_Model::where("id","=",$res->id)->update([
                "name"=>$res->name,
                "Rate_Per_Day"=>$res->r_p_d,
                "Rate_Per_Month"=>$res->r_p_m,
                "Rate_Per_Year"=>$res->r_p_y,
                "Rate_Per_Hour_With_Operator"=>$res->r_p_h_w_o,
                "Location"=>$res->Location,
                "Description"=>$res->Description,
                "cat_id"=>$res->cat_id,
                "img"=>$originalFile,
            ]);      
        }else{
                if(isset($res->name)){
                    $file = $res->file('img');
                    $destinationPath = "img/";
                    $originalFile = $file->getClientOriginalName();
                    $file->move($destinationPath,$originalFile);
                    Tools_Model::create([
                        "name"=>$res->name,
                        "Rate_Per_Day"=>$res->r_p_d,
                        "Rate_Per_Month"=>$res->r_p_m,
                        "Rate_Per_Year"=>$res->r_p_y,
                        "Rate_Per_Hour_With_Operator"=>$res->r_p_h_w_o,
                        "Location"=>$res->Location,
                        "Description"=>$res->Description,
                        "cat_id"=>$res->cat_id,
                        "img"=>$originalFile,
                    ]);

        }
    }
        if($res->session()->has('email') ){
            return view("admin/Tools",compact('data'));
        }else{
            return redirect()->route('login');
        }
    }
    function Contact(Request $res){
        if($res->session()->has('email') ){
            return view("admin/contectus");
        }else{
            return redirect()->route('login');
        }    }
    function Blog(Request $res){
        $data = Blog_Model::all();
        if($res->session()->has('email') ){
            return view("admin/Blog",compact('data'));
        }else{
            return redirect()->route('login');
        }   
     }
     function update($id){
        $data = Category_Model::all();
        return view('admin/category',compact('id','data'));
     }
     function delete($id){
        $data = Category_Model::find($id)->delete();
        if($data){
            return redirect()->route('Category');
        }
     }
     function update_cat($id){
        $data = Tools_Model::all();
        return view("admin/tools",compact('data','id'));
     }
     function delete_tools($id){
        $data = Tools_Model::find($id)->delete();
        if($data){
            return redirect()->route('Tools');
        }
     }
     function delete_rent($id){
        $data = Rent_Model::find($id)->delete();
        if($data){
            return redirect()->route('Rent');
        }  
     }
}