<head>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('stylefk.css') }}">

</head>

<body>

    @extends("layout.master")

    @section('content')
    <div class="container">

        <div class="form">
            <div class="contact-info">
                <h3 class="title">Add Student</h3>
                <p class="text">
                    Here You can Add Student as you need <br>
                    Thank You
                </p>
            </div>

            
            <div class="contact-form" style="margin-top: 20px;">
                <span class="circle one"></span>
                <span class="circle two"></span>
                <form action="./addstudent" method="post" style="color: white; font-weight: bold;">
                    {{ csrf_field()}}
                    <h2 class="add-student-heading">ADD STUDENT</h2>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="course">Course:</label>
                            <select id="course" name="cr" class="form-control">
                                <option value="">Select Course</option>
                                <?php $arr=DB::table("course")->get(); ?>
                                @foreach($arr as $values)
                                <option value="{{$values->coursename}}">{{$values->coursename}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div style="flex: 1;">
                            <label for="semester">Semester:</label>
                            <select id="semester" name="sem" class="form-control">
                                <option value="">Select Semester</option>
                                <?php $arr=DB::table("subject")->get(); ?>
                                @foreach($arr as $values)
                                <option value="{{$values->semester}}">{{$values->semester}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="btch">Batch:</label>
                            <select id="btch" name="btch" class="form-control">
                                <option value=""> Select Batch</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>

                        <div style="flex: 1;">
                            <label for="snm">Student Name:</label>
                            <input type="text" name="snm" value="" class="form-control">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="fnm">Father's Name:</label>
                            <input type="text" name="fnm" value="" class="form-control">
                        </div>

                        <div style="flex: 1;">
                            <label for="mnm">Mother's Name:</label>
                            <input type="text" name="mnm" value="" class="form-control">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="cont">Contact No.:</label>
                            <input type="text" name="cont" value="" maxlength="10" class="form-control">
                        </div>

                        <div style="flex: 1;">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" value="" class="form-control">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="photo">Photo:</label>
                            <input type="file" name="aa" class="form-control">
                        </div>

                        <div style="flex: 1;">
                            <label for="pass">Password:</label>
                            <input type="text" name="pass" value="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Add Student" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

</body>