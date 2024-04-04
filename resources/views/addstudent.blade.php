@extends("layout.master")
@section('content')


<div class="container-fluid">
<div class='row' style=" margin: 0px;    height: 50em;    padding: 2px; ">

<div class='col-6'>
<a href="viewstudent"><img src="dist/img/tourism.jpg" alt=image width=100% height=50%></br>
<img src="dist/img/awrd2.jpg" alt=image width=100% height=40%></a>
</div>

<div class="col-6">
<form action="./addstudent" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
 
    <table class=table tablebordered  border='1'align='center' cellspacing=0 cellpadding=10>
    <tr>
            <td colspan=2><h2 style="text-align:center;text-decoration:underline;color: #007bff"> ADD STUDENT </h2></td>
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
    <select id="semester" name="sem" class="form-control">
        <option value="">Select Semester</option>
    <?php
    $arr=DB::table("subject")->get();
    ?>
    @foreach($arr as $values)
    <option value="{{$values->semester}}">{{$values->semester}}</option>
   @endforeach

    </select>
    </td>
    </tr>
    <tr>
    <td>
    <label for="btch" style=font-weight:bold;>&nbsp;Batch:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td><td>
    <select id="btch" name="btch"  class="form-control">
    <option value=""> Select Batch</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    </select>
    </td>
    </tr>


<tr>
            <td style=font-weight:bold;>Student Name</td>
            <td><input type="text" name='snm' value='' class="form-control" placeholder="Enter Name">
               @error('fnm')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
              </td>
        </tr>
        <tr>
            <td style=font-weight:bold;>Father's Name</td>
            <td><input type="text" name='fnm' value='' class="form-control" placeholder="Enter Father's Name">
               @error('fnm')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
              </td>
        </tr>
        <tr>
            <td style=font-weight:bold;>Mother's Name</td>
            <td><input type="text" name='mnm' value='' class="form-control" placeholder="Enter Mother's Name">
               @error('fnm')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
              </td>
        </tr>
        <tr>
            <td style=font-weight:bold;> contact No.</td>
            <td><input type="text" name='cont' value='' maxlength=10 class="form-control" placeholder="+91 XXXX-XXX-XX-X">
            @error('cont')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
        </td>
        </tr>
        <tr>
            <td style=font-weight:bold;> E-mail</td>
            <td><input type="email" name='email' value='' class="form-control" placeholder="abc123@gmail.com">
            @error('email')
               <span style="color:red;font-weight:bold; ">{{$message}}</span>
               @enderror
            </td>
        </tr>
        <tr>
            <td style=font-weight:bold;> Address</td>
            <td><textarea name='address' value='' class="form-control" placeholder="Enter your Address"></textarea>
            @error('address')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
    
        </td>
        </tr>
        <tr>
            <td> Password</td>
            <td><input type="text" name='pass' value='' class="form-control" placeholder="Enter Password">
            @error('pass')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
        </td>
        </tr>
        <tr>
        <td colspan='2' align='center'><input type="submit" value='Add Student'></td>
        </tr>
        </tr>
</table>
</form><br></br>
@endsection