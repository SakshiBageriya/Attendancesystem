@extends("layout.master")

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-6 mb-4">
            <a href="#" class="image-link">
                <img src="dist/img/garden.jpg" alt="student" class="img-fluid rounded shadow">
            </a>
        </div>
        <div class="col-md-6 mb-4">
            <a href="#" class="image-link">
                <img src="dist/img/maclab.jpg" alt="student" class="img-fluid rounded shadow">
            </a>
        </div>
    </div>

    <h1 class="text-center mb-4" style="color: #6c757d; text-decoration: underline;">Total Students of Mohanlal Sukhadia University</h1>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>COURSE NAME</th>
                    <th>SEMESTER</th>
                    <th>BATCH</th>
                    <th>STUDENT NAME</th>
                    <th>FATHER'S NAME</th>
                    <th>MOTHER'S NAME</th>
                    <th>CONTACT NO</th>
                    <th>E-MAIL</th>
                    <th>ADDRESS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arr as $values)
                <tr>
                    <td>{{$values->id}}</td>
                    <td>{{$values->coursename}}</td>
                    <td>{{$values->semester}}</td>
                    <td>{{$values->batch}}</td>
                    <td>{{$values->studentname}}</td>
                    <td>{{$values->fathersname}}</td>
                    <td>{{$values->mothersname}}</td>
                    <td>{{$values->contactno}}</td>
                    <td>{{$values->email}}</td>
                    <td>{{$values->address}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
</div>
@endsection
