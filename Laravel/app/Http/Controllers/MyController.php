<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class MyController extends Controller
{
    //loginpage

    public function Login_Register(){
     //command for retrieving records from the mysql database

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
        return view('Admin');
    }
        public function Admin_v2(){
        return view('Admin_v2');
    }
    public function Update(){
        return view('Update');
    }








    //incase
    public function deleteData($id){

        DB::DELETE("DELETE FROM tblbooking_info WHERE id=?",[$id]);
          $users =  DB::SELECT("SELECT * FROM tblbooking_info");
        return view('Admin_v2',['users' => $users]);
    }

    public function editData($id){
        $profile = DB::SELECT("SELECT * FROM tblbooking_info WHERE id=?",[$id]);
        $isUpdate = "";
        return view('Update',['profile'=> $profile,'isUpdate' => $isUpdate]);
    }

    public function updateData(Request $request, $id){
         //initialization
        $lname=$request->input('lname');
        $fname=$request->input('fname');
        $barangay=$request->input('barangay');

        //updating record
       $isUpdate =  DB::UPDATE('UPDATE tblbooking_info set lname=?,fname=?,barangay=? WHERE id=?',[$lname,$fname,$barangay,$id]);
        $profile = DB::SELECT("SELECT * FROM tblbooking_info WHERE id=?",[$id]);
        
        if ($isUpdate == 1 ) {
            $msg = "Record Updated";
        }else{
            $msg = "Record Not Updated";
        }
        return view('Update',['profile'=> $profile,'msg' => $msg]);
    }
}
