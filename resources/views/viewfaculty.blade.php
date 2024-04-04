
@extends("layout.master")
@section('content')
<br/><Br/>
<table border="1" align="center" cellspacing=0 cellpadding=10 class="table table-bordered">
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
    @foreach($arr as $values)
    <tr>
        <td>{{$values->id}}</td>
        <td>{{$values->facultyname}}</td>
        <td>{{$values->email}}</td>
        <td>{{$values->contact}}</td>
        <td>{{$values->address}}</td>
        <td><img src={{asset('upload')}}/{{$values->photo}} "height=100 width=100"></td>
        <td>{{$values->qualification}}</td>
        <td>{{$values->password}}</td>
    </tr>
    @endforeach
</table>

@endsection