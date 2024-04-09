@extends("layout.master")

@section('content')

<head>
<link rel="stylesheet" href="{{ asset('stylefk.css') }}">

</head>
<div class="container">
    <span class="big-circle"></span>
    <div class='form'>
        <div class="contact-info">
            <h3 class="title">Add Subject</h3>
            <p class="text">
                Here You can Add Subject as you need <br>
                Thank You
            </p>
        </div>
        <div class='contact-form' >

            <span class="circle one"></span>
            <span class="circle two"></span>
            <form action="./addsubject" method="post" style="color: white; font-weight: bold;">
                {{ csrf_field()}}
                <h3 class="title">ADD SUBJECT</h3>
                    <label for="cn">Course Name:</label>
                    <select id="cn" name="cn" class="form-control">
                        <option value="">Select course</option>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                        <option value="MSC-IT">MSC-IT</option>
                    </select>
           
                    <label for="sm">Semester:</label>
                    <select id="sm" name="sm" class="form-control">
                        <option value="">Select semester</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                        <option value="6th">6th</option>
                    </select>
                    <label for="sub">Subject Name:</label>
                    <input type="text" name="sub" class="form-control" >
                
                    <label for="sub">Paper Code:</label>
                    <input type="text" name="pcd" class="form-control" >
                <div class="form-group">

                    <input type="submit" value="Add subject" class="btn btn-warning text-white">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection