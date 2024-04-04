@extends("faculty.layout.masterfaculty")
@section('content')


<table border="1" align="center" cellspacing=0 cellpadding=10>
    <tr>
        <th>ID</th>
        
        <th>Year</th>
        <th>COURSE</th>
        <th> SEMESTER</th>
        <th>SUBJECT</th>
        <th> FACULTY</th>
    </tr>
    <?php
$fname=Session::get("email");
$arr=DB::select("select * from assign where faculty='$fname'");

    ?>
    @foreach($arr as $values)
    <tr>
        <td>{{$values->id}}</td>
        <td>{{$values->year}}</td>
        <td>{{$values->course}}</td>
        <td>{{$values->semester}}</a></td>
        <td>
            <a href="{{url('subject')}}/{{$values->course}}/{{$values->semester}}/{{$values->subject}}">{{$values->subject}}</a></td>
        <td>{{$values->faculty}}</td>
    </tr>
    @endforeach
</table>

@endsection