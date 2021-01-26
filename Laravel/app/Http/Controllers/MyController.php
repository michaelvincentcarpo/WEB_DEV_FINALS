<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
	public function Test(){
    	 return view('Test');
    }
    /*public function index(){
    	 return view('index');
    }*/
    public function generic(){
    	 return view('generic');
    }
    public function elements(){
    	 return view('elements');
    }

    public function index(){
         return view('index');
    }
    public function submit(Request $request)
    {
        $Name = $request->input('name');
        $Father_name = $request->input('father_name');
        $Address = $request->input('address'); 
        $Gender = $request->input('gender'); 
        $State = $request->input('state');  
        $City = $request->input('city');  
        $Birth_date = $request->input('birth_date'); 
        $Pincode = $request->input('pincode');
        $Course = $request->input('course');
        $Email = $request->input('email'); 
    
        return view('index',['name' => $Name, 'father_name' => $Father_name, 'address' => $Address, 'gender' => $Gender, 'state' => $State, 'city'=> $City, 'birth_date' => $Birth_date, 'pincode' => $Pincode, 'course' => $Course, 'email' => $Email]);
    }
/*
     public function app(){
        return view('app');
    }

    public function displayData(Request $request){
        //initialization

        $username = $request->input('uname');
        $password = $request->input('pword');

        return view('app',['uname' => $username, 'pword' => $password]);

    }
*/
}