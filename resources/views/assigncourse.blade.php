

<head>
    <link rel="stylesheet" href="{{ asset('stylefk.css') }}">

</head>

<body>
    @extends("layout.master")
    @section('content')

    <div class="container">
    <span class="big-circle"></span>
        <div class="form">
        <div class="contact-info">
                <h3 class="title">Assign Course</h3>
                <p class="text">
                    Here You can Assign course as you need <br>
                    Thank You
                </p>
            </div>
            <div class="contact-form">
            <span class="circle one"></span>
                <span class="circle two"></span>
                <form action="./assigncourse" method="post">
                    {{ csrf_field()}}
                    <h3 class="assign-course-heading">ASSIGN COURSE</h3>
                        <label for="year">Year:</label>
                        <select id="year" name="yr" class="form-control">
                            <option value="">Select Year</option>
                            <?php for($i=2020;$i<=2029;$i++) { $value=$i."-".$i+1; ?>
                            <option value="{{$value}}">{{$value}}</option>
                            <?php } ?>
                        </select>
                  

                        <label for="course">Course:</label>
                        <select id="course" name="cr" class="form-control">
                            <option value="">Select Course</option>
                            <?php $arr=DB::table("course")->get(); ?>
                            @foreach($arr as $values)
                            <option value="{{$values->coursename}}">{{$values->coursename}}</option>
                            @endforeach
                        </select>

                        <label for="semester">Semester:</label>
                        <select id="semester" name="smst" class="form-control">
                            <option value="">Select Semester</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                            <option value="6th">6th</option>
                        </select>

                        <label for="subject">Subject:</label>
                        <select id="subject" name="sub" class="form-control">
                            <option value="">Select Subject</option>
                            <?php $arr=DB::table("subject")->get(); ?>
                            @foreach($arr as $values)
                            <option value="{{$values->subjectname}}">{{$values->subjectname}}</option>
                            @endforeach
                        </select>

                        <label for="faculty">Faculty:</label>
                        <select id="faculty" name="fct" class="form-control">
                            <option value="">Select Faculty</option>
                            <?php $arr=DB::table("faculty")->get(); ?>
                            @foreach($arr as $values)
                            <option value="{{$values->facultyname}}">{{$values->facultyname}}</option>
                            @endforeach
                        </select>

                    <div class="form-group">
                        <input type="submit" value="ASSIGN" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

</body>
