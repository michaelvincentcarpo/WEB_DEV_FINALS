<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use DB;
class HomeController extends Controller
{
    public function Admin_v2(){
     //command for retrieving records from the mysql database

        $users =  DB::SELECT("SELECT * FROM tblbooking_info");
    	return view('Admin_v2',['users' => $users]);
    }
    public function home(){
     //command for retrieving records from the mysql database

        $users =  DB::SELECT("SELECT * FROM tblbooking_info");
    	return view('home',['users' => $users]);
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
        return view('home',['users' => $users]);

    }
    

    public function editData($id){
        $profile = DB::SELECT("SELECT * FROM tblbooking_info WHERE id=?",[$id]);
        $isUpdate = "";
        return view('Update_v2',['profile'=> $profile,'isUpdate' => $isUpdate]);
    }

    public function updateData(Request $request, $id){
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

        //updating record
       $isUpdate =  DB::UPDATE('UPDATE tblbooking_info set lname=?,fname=?,barangay=?,municipality=?,province=?,phone=?,email=?,cottage_no=?,kids=?,adult=?,senior=?,date_of_reg=?,time_=?,start=?,end_=?,cottage_s=?,cottage_m=?,cottage_l=?,venue=? WHERE id=?',[$lname,$fname,$barangay,$municipality,$province,$phone,$email,$cottage_no,$kids,$adult,$senior,$date_of_reg,$time_,$start,$end_,$cottage_s,$cottage_m,$cottage_l,$venue, $id]);
        $profile = DB::SELECT("SELECT * FROM tblbooking_info WHERE id=?",[$id]);
        
        if ($isUpdate == 1 ) {
            $msg = "Record Updated";
        }else{
            $msg = "Record Not Updated";
        }
        return view('/Update_v2',['profile'=> $profile,'msg' => $msg]);
    }


}
