@extends("layout.master")
@section('content')
<style>
  .col-sm-12{
    background-image: url('dist/img/cnst.jpg');
 background-repeat: no-repeat;
  background-attachment: relative;
  background-size: 100% 100%;
  height:20em;
  }
  </style>
<div class=col-sm-12 > 
<h1 style="color:white;font-weight:bold;text-align:center;margin-top:31px;"></br> </br></br></br>Welcome To <br>Mohanlal Sukhadia University
 <br></br<br></br></h1><br>
</div>
<section style="    padding: 3px 23px 14px 246px;">
<div class="row" >
<div class="col-6"  style="width:100%">
  <br></br>
<div class="card" style="width: 18em;">

  <div class="card-body">
    <h5 class="card-title">Total Student</h5>
    <br>
    <?php
$arr=DB::table("student")->count();
echo  "<span style='font-weight:bold'>",$arr,"</span>";
    ?>
    
    <p class="card-text"></p>
    <a href="viewstudent" class="btn btn-primary">Click here</a>
  </div>
</div>
</div>

<div class="col-6"  style="width:100%">
<br></br>
<div class="card" style="width: 18em;">

  <div class="card-body">
    <h5 class="card-title">Faculty</h5>
    <br>
    <?php
$arr=DB::table("faculty")->count();
echo  $arr;
    ?>
    
    <p class="card-text"></p>
    <a href="viewfaculty" class="btn btn-primary">Click here</a>
  </div>
</div>
</div>
</section>
<section style="    padding: 3px 23px 14px 246px;">
<div class="row">
<div class=" col-6" style="width:100%">
<div class=" card" style="width: 18em;">

  <div class="card-body">
    <h5 class="card-title">Total Subject</h5>
    <br>
    <?php
$arr=DB::table("subject")->count();
echo  $arr;
    ?>
    
    <p class="card-text"></p>
    <a href="viewsubject" class="btn btn-primary">Click here</a>
  </div>
</div>
</div>
<div class="col-6"style="width:100%">
<div class="card" style="width: 18em;">

  <div class="card-body">
    <h5 class="card-title">Total Courses</h5>
    <br>
    <?php
$arr=DB::table("course")->count();
echo  $arr;
    ?>
    
    <p class="card-text"></p>
    <a href="viewcourse" class="btn btn-primary">Click here</a>
  </div>
</div>
</div>
</section>

@endsection