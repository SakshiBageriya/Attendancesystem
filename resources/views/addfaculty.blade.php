<head>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('stylefk.css') }}">

</head>

<body>
    @extends("layout.master")

    @section('content')
    <div class="container">
        <span class="big-circle"></span>
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Add Faculty</h3>
                <p class="text">
                    Here You can Add Faculty as you need <br>
                    Thank You
                </p>
            </div>


            <div class="contact-form" style="margin-top: 20px;">
                <span class="circle one"></span>
                <span class="circle two"></span>
                <form action="./addfaculty" method="post" style="color: white; font-weight: bold;">
                    {{ csrf_field()}}
                    <h2 class="add-faculty-heading" style="margin-bottom: 20px;">ADD FACULTY</h2>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="fnm">Faculty Name:</label>
                            <input type="text" name="fnm" value="" class="form-control">
                            @error('fnm')
                            <span style="color:red;font-weight:bold;">{{$message}}</span>
                            @enderror
                        </div>

                        <div style="flex: 1;">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" value="" class="form-control">
                            @error('email')
                            <span style="color:red;font-weight:bold;">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="cont">Contact No.:</label>
                            <input type="text" name="cont" value="" maxlength="10" class="form-control">
                            @error('cont')
                            <span style="color:red;font-weight:bold;">{{$message}}</span>
                            @enderror
                        </div>

                        <div style="flex: 1;">
                            <label for="photo">Photo:</label>
                            <input type="file" name="aa" class="form-control">
                        </div>
                    </div>

                    <label for="address">Address:</label>
                    <input name="address" value="" class="form-control" style="margin-bottom: 10px;" rows="2"></input>
                    @error('address')
                    <span style="color:red;font-weight:bold;">{{$message}}</span>
                    @enderror

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="qualf">Qualification:</label>
                            <input type="text" name="qualf" value="" class="form-control">
                            @error('qualf')
                            <span style="color:red;font-weight:bold;">{{$message}}</span>
                            @enderror
                        </div>

                        <div style="flex: 1;">
                            <label for="pass">Password:</label>
                            <input type="text" name="pass" value="" class="form-control">
                            @error('pass')
                            <span style="color:red;font-weight:bold;">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 10px;">
                        <input type="submit" value="Add Faculty" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
    @endsection
</body>