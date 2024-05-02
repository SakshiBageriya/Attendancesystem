<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class studentcontroller extends Controller
{
    //student Login
function studentlogin()
{
    return view("student.studentlogin");
}
function studentlogin1(Request $req)
{
    $name=$req->input("nm");
    $password=$req->input("ps");
    $data=$req->validate (['nm'=>'required',
    'ps'=>'required']);
    $arr=array("username"=>$name,
    "password"=>$password);
  
    $arr=DB::select("select * from student where email='$name' and password='$password'");
   $c=count($arr);
  
   if($c>=1){
   Session::put("email",$arr[0]->email);
    return redirect("studentdashboardmain");
   }
   else
echo "Invalid UserName ANd Password ";
}

function studentdashboardmain()
{
    return view("student.studentdashboardmain");
}
function studentannouncement()
{
    return view("student.studentannouncement");
}
function studentattendance()
{
    return view("student.studentattendance");
}

function subjectattendance($course,$sem,$subjectname)
{
   return view("student.subjectattendance",["course"=>$course,"semester"=>$sem,"subject"=>$subjectname]);
}
}