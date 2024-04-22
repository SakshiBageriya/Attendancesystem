<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Admincontroller extends Controller
{
    //for Adding Course
    function form()
    {
        return view("addcourse");
    }
    function addcourse(Request $req)
    {
        $name=$req->input("nm");
        $data=$req->validate (['nm'=>'required']);
        $arr=array("coursename"=>$name);
        $r=DB::table("course")->insert($arr);
        if($r)
        return redirect("viewcourse");
        else
        echo"NOT INSERTED";
    }
    function viewcourse()
    {
        $arr=DB::select("select * from course");
        return view("viewcourse",["arr"=>$arr]);
    }

//for Adding subjects
    function formsem()
    {
        return view("addsubject");
    }
    function addsubject(Request $req)
    {
        $data=$req->validate(['cn'=>"required",
        'sm'=>"required",
        'sub'=>"required",
        'pcd'=>"required"]);

        $name=$req->input("cn");
        $semester=$req->input("sm");
        $subject=$req->input("sub");
        $papercode=$req->input("pcd"); 

        $arr=array("coursename"=>$name,
        "semester"=>$semester,
        "subjectname"=>$subject,
        "papercode"=>$papercode);
        $r=DB::table("subject")->insert($arr);
        if($r)
        return redirect("viewsubject");
        else
        echo"NOT INSERTED";
    }
    function viewsubject()
    {
        $arr=DB::select("select * from subject");
        return view("viewsubject",["arr"=>$arr]);
    }



    
//for Adding Faculty
function formfaculty()
{
    return view("addfaculty");
}
function addfaculty(Request $req)
{


    $name=$req->input("fnm");
    $email=$req->input("email");
    $contact=$req->input("cont");
    $address=$req->input("address");
    $files=$req->file('aa');
    $qualification=$req->input("qualf");
    $password=$req->input("pass");

    $photo=$files->getClientOriginalName();
    $files->move("upload",$files->getClientOriginalName());

    $data=$req->validate(['fnm'=>"required",
    'email'=>"required",
    'cont'=>"required",
    'address'=>"required",
    'qualf'=>"required",
    'pass'=>"required"]);
    $arr=array("facultyname"=>$name,
    "email"=>$email,
    "contact"=>$contact,
    "address"=>$address,
    "photo"=>$photo,
    "qualification"=>$qualification,
    "password"=>$password);
    $r=DB::table("faculty")->insert($arr);
    if($r)
    return redirect("viewfaculty");
    else
    echo"NOT INSERTED";
}
function viewfaculty()
{
    $arr=DB::select("select * from faculty");
    return view("viewfaculty",["arr"=>$arr]);
}


//for assigning subject
function formassign()
{
    return view("assigncourse");
}
function assigncourse(Request $req)
{
    $year=$req->input("yr");
    $course=$req->input("cr");
    $semester=$req->input("smst");
    $subject=$req->input("sub");
    $faculty=$req->input("fct");
    $arr=array("year"=>$year,
    "course"=>$course,
    "semester"=>$semester,
    "subject"=>$subject,
    "faculty"=>$faculty);
    $r=DB::table("assign")->insert($arr);
    if($r)
    return redirect("viewassign");
    else
    echo"NOT  INSERTED";
}
function viewassign()
{
    $arr=DB::select("select * from assign");
    return view("viewassign",["arr"=>$arr]);
}


   
//for Adding Student
function formstudent()
{
    return view("addstudent");
}
function addstudent(Request $req)
{

    
    $data=$req->validate(['cr'=>"required",
    'sem'=>"required",
    'btch'=>"required",
    'snm'=>"required",
    'fnm'=>"required",
    'mnm'=>"required",
    'email'=>"required",
    'cont'=>"required|min:10",
    'address'=>"required",
    'pass'=>"required"]);


    $course=$req->input("cr");
    $semester=$req->input("sem");
    $batch=$req->input("btch");
    $name=$req->input("snm");
    $fathersname=$req->input("fnm");
    $mothersname=$req->input("mnm");
    $email=$req->input("email");
    $contact=$req->input("cont");
    $address=$req->input("address");
    $password=$req->input("pass");
    $arr=array("coursename"=>$course,
    "batch"=>$batch,
    "semester"=>$semester,
    "studentname"=>$name,
    "fathersname"=>$fathersname,
    "mothersname"=>$mothersname,
    "contactno"=>$contact,
    "email"=>$email,
    "address"=>$address,
    "password"=>$password);
    $r=DB::table("student")->insert($arr);
    if($r)
    return redirect("viewstudent");
    else
    echo"NOT INSERTED";
}
function viewstudent()
{
    $arr=DB::select("select * from student");
    return view("viewstudent",["arr"=>$arr]);
}

//Admin Login
function Adminslogin()
    {
        return view("Adminlogin");
    }
    function adminlogin1(Request $req)
    {
        $name=$req->input("nm");
        $password=$req->input("ps");
        $data=$req->validate (['nm'=>'required',
        'ps'=>'required']);
        $arr=array("username"=>$name,
        "password"=>$password);
       $arr=DB::select("select * from adminlogin where username='$name' and password='$password'");
       $c=count($arr);
       if($c>=1)
       return redirect("home");
    else
    echo "Invalid UserName ANd Password ";
    }

function try()
{
    return view("try");
}
function home()
{
    return view("home");
}
function accept($id)
{
    $r=DB::update("update applyleave set status='1' where id='$id'");
    return redirect("viewleave");
}
function reject($id)
{
    $r=DB::update("update applyleave set status='2' where id='$id'");
    return redirect("viewleave");
}

function viewleave(){
    return view ("viewleave");
}

function Announcement(){
    return view("Announcement");
}
function announcement1(request $req){

    
    $title=$req->input("title");
    $category=$req->input("category");
    $date=$req->input("date");
    $admin=$req->input("admin");
    $audience=$req->input("audience");
    $content=$req->input("content");
    $files=$req->file('aa');

    $attachment=$files->getClientOriginalName();
    $files->move("attachement",$files->getClientOriginalName());


    $data=$req->validate(['title'=>"required",
    'category'=>"required",
    'date'=>"required",
    'admin'=>"required",
    'audience'=>"required",
    'content'=>"required"]);


    $arr=array("title"=>$title,
    "category"=>$category,
    "date"=>$date,
    "admin"=>$admin,
    "audience"=>$audience,
    "content"=>$content,
    "attachement"=>$attachment);
    $r=DB::table("announcement")->insert($arr);
    if($r)
    echo"sent";
    else
    echo"Try Again";
}
}


