@extends("faculty.layout.masterfaculty")
@section('content')



<table border="1" align="center" cellspacing=0 cellpadding=10>
    <tr>
        <th>ID</th>
        <th>SEMESTER</th>
        <th>STUDENT</th>
    
    </tr>
    
    @foreach($arr11 as $values)
    <tr>
        <td>{{$values->id}}</td>
        <td>{{$values->semester}}</td>
        <td>{{$values->studentname}}</td>
    </tr>
    @endforeach
</table>

@endsection