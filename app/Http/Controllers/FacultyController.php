<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class FacultyController extends Controller
{  
//faculty Login
function facultylogin()
{
    return view("faculty.facultylogin");
}

function facultylogin1(Request $req)
{
    $name=$req->input("nm");
    $password=$req->input("ps");
    $data=$req->validate (['nm'=>'required',
    'ps'=>'required']);
    $arr=array("username"=>$name,
    "password"=>$password);
  
    $arr=DB::select("select * from faculty where email='$name' and password='$password'");
   $c=count($arr);
  
   if($c>=1){
   Session::put("email",$arr[0]->facultyname);
   Session::put("idd",$arr[0]->id);
   
    return redirect("facultydashboardmain");
   }
   else
echo "Invalid UserName ANd Password ";
}


function facultydashboardmain()
{
    return view("faculty.facultydashboard");
}

function viewassignfac()
{
    return view("faculty.viewassignfac");
}

function subject($course,$semester,$subject)
{
    
    $arr=DB::select("select * from  student where coursename='$course' and semester='$semester'");
//  print_r($arr);  
  return view("faculty.subject1",["arr11"=>$arr,"course"=>$course,"semester"=>$semester,"subject"=>$subject]);

}
function subject2(Request $req){
    

    $dates=$req->input("dt");
    $fromdate=$req->input("tm");
    $todate=$req->input("tmm");
    $semester=$req->input("semester");
    $course=$req->input("course");
    $subject=$req->input("subject");
    
    $student_id=$req->input("chk");
    $faculty_id=Session::get("idd");

    $data=$req->validate(['dt'=>"required",
    'tm'=>"required",
    'tmm'=>"required",
    'semester'=>"required",
    'course'=>"required"]);

    for($i=0;$i<count($student_id);$i++)
    {
    $arr=array(
        "course"=>$course,
        "semester"=>$semester,
        "subject"=>$subject,
        "dates"=>$dates,
    
    "fromdate"=>$fromdate,
    "todate"=>$todate,
    "semester"=>$semester,
    "student_id"=>$student_id[$i],"faculty_id"=>$faculty_id);


    $r=DB::table("addattendance")->insert($arr);
    }
    if($r)
    return redirect("viewattendance");
    else
    echo"NOT INSERTED";
}  
function viewattendance(){
 echo"Attendence saved sucessfully";
}
function viewattendances($course,$semester,$subject)
{
   return view("faculty.viewattendance",["course"=>$course,"semester"=>$semester,"subject"=>$subject]);
}

function applyleave(){
    return view("faculty.applyleave");
}

function applyleave1(Request $req) {
    $title = $req->input("title");
    $description = $req->input("description");
    $fromdate = $req->input("fromdate");
    $todate = $req->input("todate");
    $status = $req->input("status");
    $faculty_id = Session::get("idd");

    $data = $req->validate([
        'title' => "required",
        'description' => "required",
        'fromdate' => "required|date",
        'todate' => "required|date"
    ]);

    $fromDateTime = new DateTime($fromdate);
    $toDateTime = new DateTime($todate);
    $now = new DateTime(); // Current date

    if ($fromDateTime <= $toDateTime && $fromDateTime >= $now && $toDateTime >= $now) {
        $arr = [
            "title" => $title,
            "description" => $description,
            "fromdate" => $fromdate,
            "todate" => $todate,
            "faculty_id" => $faculty_id
        ];

        $r = DB::table("applyleave")->insert($arr);

        if ($r) {
            echo "Your application has been submitted successfully";
        } else {
            echo "Something went wrong, please try again";
        }
    } else {
        echo "Invalid date range. Please ensure that 'fromdate' is equal to or greater than today and 'todate' is greater than or equal to 'fromdate'.";
    }
}


function facultyleave(){
    return view("faculty.facultyleave");
}

}
