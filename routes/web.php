<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\http\controllers\facultycontroller;
use App\http\controllers\studentcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("try",[Admincontroller::class,"try"]);


Route::get("form",[Admincontroller::class,"form"]);
 Route::post("addcourse",[Admincontroller::class,"addcourse"]);
 Route::get("viewcourse",[Admincontroller::class,"viewcourse"]);


 Route::get("formsem",[Admincontroller::class,"formsem"]);
 Route::post("addsubject",[Admincontroller::class,"addsubject"]);
 Route::get("viewsubject",[Admincontroller::class,"viewsubject"]);


 Route::get("formfaculty",[Admincontroller::class,"formfaculty"]);
 Route::post("addfaculty",[Admincontroller::class,"addfaculty"]);
 Route::get("viewfaculty",[Admincontroller::class,"viewfaculty"]);

 
 Route::get("formassign",[Admincontroller::class,"formassign"]);
 Route::post("assigncourse",[Admincontroller::class,"assigncourse"]);
 Route::get("viewassign",[Admincontroller::class,"viewassign"]);



 Route::get("formstudent",[Admincontroller::class,"formstudent"]);
 Route::post("addstudent",[Admincontroller::class,"addstudent"]);
 Route::get("viewstudent",[Admincontroller::class,"viewstudent"]);



 Route::get("Adminslogin",[Admincontroller::class,"Adminslogin"]);
 Route::post("adminlogin1",[Admincontroller::class,"adminlogin1"]);     

 Route::get("home",[Admincontroller::class,"home"]);

 Route::get("facultylogin",[FacultyController::class,"facultylogin"]);
 Route::post("facultylogin1",[FacultyController::class,"facultylogin1"]);


 Route::get("facultydashboardmain",[FacultyController::class,"facultydashboardmain"]);
 Route::get("viewassignfac",[FacultyController::class,"viewassignfac"]);
 Route::get("subject/{id}/{id1}/{id2}",[FacultyController::class,"subject"]);

 Route::get("studentlogin",[studentController::class,"studentlogin"]);
 Route::post("studentlogin1",[studentController::class,"studentlogin1"]);
 
 Route::get("studentdashboardmain",[studentController::class,"studentdashboardmain"]);

 Route::post("subject2",[FacultyController::class,"subject2"]);
 Route::get("viewattendance",[FacultyController::class,"viewattendance"]);
 Route::get("viewattendances/{id}/{id1}/{id2}",[FacultyController::class,"viewattendances"]);


 Route::get("applyleave",[FacultyController::class,"applyleave"]);
 Route::post("applyleave1",[FacultyController::class,"applyleave1"]);
 
 Route::get("viewleave",[Admincontroller::class,"viewleave"]);
 Route::get("accept/{id}",[Admincontroller::class,"accept"]);
 Route::get("reject/{id}",[Admincontroller::class,"reject"]);
 
 Route::get("facultyleave",[FacultyController::class,"facultyleave"]);