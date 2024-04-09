<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('stylefk.css') }}">
</head>

<body>
    @extends("layout.master")

    @section('content')

    <div class="container">
        <span class="big-circle"></span>
        <!-- <img src="img/shape.png" class="square" alt="" /> -->
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Add Course</h3>
                <p class="text">
                    Here You can Add course as you need <br>
                    Thank You
                </p>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="./addcourse" method="post">
                    {{ csrf_field() }}
                    <h3 class="title">Add Course</h3>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nm" placeholder="Course Name" />
                    </div>
                    <input class="btn btn-primary text-white" type="submit" value="Add Course">
                </form>
            </div>
        </div>
    </div>


    <script src="app.js"></script>
    @endsection

</body>

</html>