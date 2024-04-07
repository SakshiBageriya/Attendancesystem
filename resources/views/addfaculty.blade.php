@extends("layout.master")

@section('content')
<div class="container-fluid">
    <style>
    .row-container {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .left-column img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        /* Added margin bottom for spacing */
    }

    .form-container {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .add-faculty-heading {
        text-align: center;
        color: #007bff;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
        display: inline-block;
        width: 45%;
        /* Adjusted label width */
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="file"],
    .form-group textarea {
        width: calc(50% - 10px);
        /* Adjusted width to fit two fields in one row */
        display: inline-block;
        margin-right: 20px;
        /* Added margin between fields */
    }

    .form-group input[type="submit"] {
        width: 100%;
    }
    </style>
    <div class="row row-container">
        <div class="col-lg-12 left-column">
            <img src="dist/img/fc.jpeg" alt="image" style="width: 100%; max-height: 80%; object-fit: cover;">
        </div>



        <div class="col-lg-12 form-container">
            <form action="./addfaculty" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}
                <h2 class="add-faculty-heading">ADD FACULTY</h2>
                <div class="form-group">
                    <label for="fnm">Faculty Name:</label>
                    <input type="text" name="fnm" value="" class="form-control" placeholder="Enter Name">
                    @error('fnm')
                    <span style="color:red;font-weight:bold;">{{$message}}</span>
                    @enderror

                    <label for="email">E-mail:</label>
                    <input type="email" name="email" value="" class="form-control" placeholder="abc123@gmail.com">
                    @error('email')
                    <span style="color:red;font-weight:bold; ">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cont">Contact No.:</label>
                    <input type="text" name="cont" value="" maxlength="10" class="form-control"
                        placeholder="+91 XXXX-XXX-XX-X">
                    @error('cont')
                    <span style="color:red;font-weight:bold;">{{$message}}</span>
                    @enderror

                    <label for="address">Address:</label>
                    <textarea name="address" value="" class="form-control" placeholder="Enter your Address"></textarea>
                    @error('address')
                    <span style="color:red;font-weight:bold;">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" name="aa" class="form-control" placeholder="Choose photo">
                </div>

                <div class="form-group">
                    <label for="qualf">Qualification:</label>
                    <input type="text" name="qualf" value="" class="form-control" placeholder="Enter Qualification">
                    @error('qualf')
                    <span style="color:red;font-weight:bold;">{{$message}}</span>
                    @enderror

                    <label for="pass">Password:</label>
                    <input type="text" name="pass" value="" class="form-control" placeholder="Enter Password">
                    @error('pass')
                    <span style="color:red;font-weight:bold;">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" value="Add Faculty" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection