@extends("layout.master")
@section('content')

<div class="container-fluid">
<div class='row' style=" margin: 0px;    height: 39em;    padding: 2px; ">

<div class='col-6'>
<img src="dist/img/img1.jpg" alt=image width=100% height=73%>
</div>
<div class="col-6">
<form action="./assigncourse" method="post">
    {{ csrf_field()}}
    <table class="table table-boardered" border='1'align='center' cellspacing=0 cellpadding=10>
    <tr>
            <td colspan=2><h2 style=text-align:center;text-decoration:underline;> ASSIGN COURSE  </h2></td>
</tr>
    <tr>
    <td>
    <label for="year" style=font-weight:bold;>&nbsp;Year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td><td>
    <select id="year" name="yr" class="form-control">
    <option value="">Select Year</option>
    <?php
for($i=2020;$i<=2029;$i++)
    {
        $value=$i."-".$i+1;
    ?>
    <option value="{{$value}}">{{$value}}</option>
    
    <?php } ?>

    </select>
    </td>
    </tr>
    <tr>
    <td>
    <label for="course" style=font-weight:bold;>&nbsp;Course:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td><td>
    <select id="course" name="cr" class="form-control">
        <option value="">Select Course</option>
    <?php
    $arr=DB::table("course")->get();
    ?>
    @foreach($arr as $values)
    
    <option value="{{$values->coursename}}">{{$values->coursename}}</option>
   @endforeach

    </select>
    </td>
    </tr>
    <tr>
    <td>
    <label for="semester" style=font-weight:bold;>&nbsp;Semester:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td><td>
    <select id="semester" name="smst" class="form-control">
    <option value="">Select Semester</option>
    <option value="1st">1st</option>
    <option value="2nd">2nd</option>
    <option value="3rd">3rd</option>
    <option value="4th">4th</option>
    <option value="5th">5th</option>
    <option value="6th">6th</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>
    <label for="subject" style=font-weight:bold;>&nbsp;Subject:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td><td>
    <select id="subject" name="sub" class="form-control">
        <option value="">Select Subject</option>
    <?php
    $arr=DB::table("subject")->get();
    ?>
    @foreach($arr as $values)
    
    <option value="{{$values->subjectname}}">{{$values->subjectname}}</option>
   @endforeach

    </select>
    </td>
    </tr>
    <tr>
    <td>
    <label for="faculty" style=font-weight:bold;>&nbsp;Faculty:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td><td>
    <select id="faculty" name="fct" class="form-control">
   <option value="">Select Faculty</option>
   <?php
    $arr=DB::table("faculty")->get();
    ?>
    @foreach($arr as $values)
    
    <option value="{{$values->facultyname}}">{{$values->facultyname}}</option>
   @endforeach

    
    </select>
    </td>
    </tr>
    <tr>
        <td colspan='2' align='center'><input type="submit" value='ASSIGN' class="btn btn-primary"></td>
        </tr>
    </table>
    </form>

    <br></br>
    @endsection