@extends("layout.master")

@section('content')
<div class="container-fluid mt-6">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>FACULTY NAME</th>
                            <th>E-MAIL</th>
                            <th>CONTACT</th>
                            <th>ADDRESS</th>
                            <th>PHOTO</th>
                            <th>QUALIFICATION</th>
                            <th>PASSWORD</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($arr as $values)
                        <tr>
                            <td>{{$values->id}}</td>
                            <td>{{$values->facultyname}}</td>
                            <td>{{$values->email}}</td>
                            <td>{{$values->contact}}</td>
                            <td>{{$values->address}}</td>
                            <td>
                                <img src="{{ asset('upload') }}/{{ $values->photo }}" alt="Faculty Photo" class="img-fluid" style="max-width: 100px; height: auto;">
                            </td>
                            <td>{{$values->qualification}}</td>
                            <td>{{$values->password}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
