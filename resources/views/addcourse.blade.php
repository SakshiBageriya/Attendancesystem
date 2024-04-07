@extends("layout.master")

@section('content')
<div class="container-fluid">
    <style>
        .row-container {
            margin: 20px 0; /* Adjusted margin for better spacing */
        }

        .left-column {
            padding-right: 10px; /* Added padding to the right of the left column */
        }

        .left-column h3 {
            text-align: center;
            margin-bottom: 20px; /* Added margin bottom for spacing */
        }

        .left-column img {
            width: 100%;
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

        .add-course-heading {
            text-align: center;
            color: #007bff; /* Changed text color to blue */
            margin-bottom: 20px; /* Added margin bottom for spacing */
        }

        .form-group input[type="text"] {
            width: 100%; /* Ensures the input field occupies full width */
        }

        .form-group input[type="submit"] {
            width: 100%; /* Ensures the button occupies full width */
        }
    </style>
    <div class='row row-container'>
        <div class='col-lg-6 left-column'>
            <a href="viewcourse">
                <h3>View Course</h3>
                <img src="dist/img/lb.jpg" alt="image" class="img-fluid">
            </a>
        </div>
        <div class='col-lg-6 right-column'>
            <form action="./addcourse" method="post">
                {{ csrf_field()}}
                <h2 class="add-course-heading">ADD COURSE</h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="nm" value="" placeholder="Enter Course Name">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary text-white" type="submit" value="Add Course">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
