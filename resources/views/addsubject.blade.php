@extends("layout.master")

@section('content')
<div class="container-fluid">
    <style>
        .row-container {
            margin-top: 20px; /* Added margin top for spacing */
        }

        .left-column {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-right: 20px; /* Added padding to the right of the left column */
        }

        .left-column img {
            max-width: 100%;
            height: auto; /* Ensures the image maintains its aspect ratio */
            border-radius: 10px; /* Added border radius for rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Added a subtle shadow */
        }

        .right-column {
            background-color: #fff; /* Changed background color to white */
            border-radius: 10px; /* Added border radius for rounded corners */
            padding: 20px; /* Added padding for inner content */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Added a subtle shadow */
        }

        .add-subject-heading {
            text-align: center;
            color: #007bff; /* Changed text color to blue */
            margin-bottom: 20px; /* Added margin bottom for spacing */
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%; /* Ensures the input field and select box occupies full width */
            margin-bottom: 15px; /* Added margin bottom for spacing */
        }

        .form-group input[type="submit"] {
            width: 100%; /* Ensures the button occupies full width */
        }
    </style>
    <div class='row row-container'>
        <div class='col-lg-6 left-column'>
            <a href="viewsubject">
                <h2>View Subject</h2>
                <img src="dist/img/subj.jpg" alt="image" class="img-fluid">
            </a>
        </div>
        <div class='col-lg-6 right-column'>
            <form action="./addsubject" method="post">
                {{ csrf_field()}}
                <h2 class="add-subject-heading">ADD SUBJECT</h2>
                <div class="form-group">
                    <label for="cn">Course Name:</label>
                    <select id="cn" name="cn" class="form-control">
                        <option value="">Select course</option>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                        <option value="MSC-IT">MSC-IT</option>
                    </select>
                </div>
                <div class="form-group">
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
                </div>
                <div class="form-group">
                    <label for="sub">Subject Name:</label>
                    <input type="text" name="sub" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="form-group">
                    <label for="pcd">Paper Code:</label>
                    <input type="text" name="pcd" class="form-control" placeholder="Enter Paper-code">
                </div>
                <div class="form-group">
                    <input type="submit" value="Add subject" class="btn btn-warning text-white">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
