@extends("layout.master")

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch" >
            <div class="table-responsive" >
                <table class="table table-bordered text-center" style="background-color: #f3f4f6;">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>COURSE NAME</th>
                            <th>SEMESTER</th>
                            <th>SUBJECT</th>
                            <th>PAPER CODE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($arr as $values)
                        <tr>
                            <td>{{$values->id}}</td>
                            <td>{{$values->coursename}}</td>
                            <td>{{$values->semester}}</td>
                            <td>{{$values->subjectname}}</td>
                            <td>{{$values->papercode}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
