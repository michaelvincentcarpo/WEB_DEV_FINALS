<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class MyController extends Controller
{
    //loginpage

    public function Login_Register(Request $request){
     //command for retrieving records from the mysql database
        $textem=$request->input('textem');
        $textpa=$request->input('textpa');
        $users =  DB::SELECT("SELECT * FROM account");
        return view('Login_Register',['users' => $users]);
    }

    public function insertacc(Request $request){
        //initialization
        $uname=$request->input('uname');
        $email=$request->input('email');
        $pass=$request->input('pass');
        //mysql insert command
        DB::INSERT("INSERT into account(uname,email,pass)VALUES(?,?,?)", [$uname,$email,$pass]);
        $users =  DB::SELECT("SELECT * FROM account");
        return view('Login_Register',['users' => $users]);

    }

    //home page
	public function HomePage(){
        return view('HomePage');
    }
    public function About(){
        return view('About');
    }

    //signup form
    public function Form(){
     //command for retrieving records from the mysql database

        $users =  DB::SELECT("SELECT * FROM tblbooking_info");
        return view('Form',['users' => $users]);
    }
    public function insertData(Request $request){
        //initialization
        $lname=$request->input('lname');
        $fname=$request->input('fname');
        $barangay=$request->input('barangay');
        $municipality=$request->input('municipality');
        $province=$request->input('province');
        $phone=$request->input('phone');
        $email=$request->input('email');
        $cottage_no=$request->input('cottage_no');
        $kids=$request->input('kids');
        $adult=$request->input('adult');
        $senior=$request->input('senior');
        $date_of_reg=$request->input('date_of_reg');
        $time_=$request->input('time_');
        $start=$request->input('start');
        $end_=$request->input('end_');
        $cottage_s=$request->input('cottage_s');
        $cottage_m=$request->input('cottage_m');
        $cottage_l=$request->input('cottage_l');
        $venue=$request->input('venue');
        //mysql insert command
        DB::INSERT("INSERT into tblbooking_info(lname,fname,barangay,municipality,province,phone,email,cottage_no,kids,adult,senior,date_of_reg,time_,start,end_,cottage_s,cottage_m,cottage_l,venue)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", [$lname,$fname,$barangay,$municipality,$province,$phone,$email,$cottage_no,$kids,$adult,$senior,$date_of_reg,$time_,$start,$end_,$cottage_s,$cottage_m,$cottage_l,$venue]);
        $users =  DB::SELECT("SELECT * FROM tblbooking_info");
        return view('Form',['users' => $users]);

    }
    //adminpage/
    public function Admin(){
        $id=$request->input('id')
        DB::SELECT("SELECT * FROM tblbooking_info ",;
        return view('Admin');
    }
    public function Update(){
        return view('Update');
    }

}