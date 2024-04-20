<head>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('stylefk.css') }}"> -->

</head>
<body>
    @extends("layout.master")
    @section('content')
        <div class="container-fluid">
            <h1>Total Students of Mohanlal Sukhadia University</h1>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>COURSE NAMEE</th>

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
        </div>
    @endsection
</body>
