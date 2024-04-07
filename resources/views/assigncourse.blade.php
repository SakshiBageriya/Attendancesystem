@extends("layout.master")
@section('content')

<div class="container-fluid">
    <style>
        .row-container {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .left-column {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%; /* Set height to 100% */
        }

        .left-column img {
            width: 100%;
            height: 90%; /* Set height to 90% of container height */
            object-fit: cover; /* Maintain aspect ratio */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .form-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .assign-course-heading {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: inline-block;
            width: 30%;
            /* Adjusted label width */
        }

        .form-group select,
        .form-group input[type="submit"] {
            width: 65%;
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>

    <div class="row row-container">
        <div class="col-lg-6 left-column">
            <img src="dist/img/img1.jpg" alt="image">
        </div>

        <div class="col-lg-6 form-container">
            <form action="./assigncourse" method="post">
                {{ csrf_field()}}
                <h2 class="assign-course-heading">ASSIGN COURSE</h2>
                <div class="form-group">
                    <label for="year">Year:</label>
                    <select id="year" name="yr" class="form-control">
                        <option value="">Select Year</option>
                        <?php for($i=2020;$i<=2029;$i++) { $value=$i."-".$i+1; ?>
                        <option value="{{$value}}">{{$value}}</option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="course">Course:</label>
                    <select id="course" name="cr" class="form-control">
                        <option value="">Select Course</option>
                        <?php $arr=DB::table("course")->get(); ?>
                        @foreach($arr as $values)
                        <option value="{{$values->coursename}}">{{$values->coursename}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
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
                </div>

                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <select id="subject" name="sub" class="form-control">
                        <option value="">Select Subject</option>
                        <?php $arr=DB::table("subject")->get(); ?>
                        @foreach($arr as $values)
                        <option value="{{$values->subjectname}}">{{$values->subjectname}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="faculty">Faculty:</label>
                    <select id="faculty" name="fct" class="form-control">
                        <option value="">Select Faculty</option>
                        <?php $arr=DB::table("faculty")->get(); ?>
                        @foreach($arr as $values)
                        <option value="{{$values->facultyname}}">{{$values->facultyname}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" value="ASSIGN" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
