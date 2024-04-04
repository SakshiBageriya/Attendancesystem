@extends("layout.master")
@section('content')

<div class='row' style=" margin: 0px;    padding: 2px; ">
<div class="col-6">
<a href="formassign" style=" font-size:large;color:black"><img src="dist/img/i.jpg" alt="student" width=100% height=70%> </a>
</div>
<div class="col-6">
      <a href="formassign"  style="font-size:large;color:black"><img src="dist/img/fc.jpeg" alt="student" width=100% height=70%></a></div>
</div>
<style>
    .abc{
        background-image:url('dist/img/boxed-bg.png');
    }
    .assign{
        margin-top: -77px;
    color: grey;
    text-decoration: underline;
    margin-left: 6em;
    }
    </style>
    <h1 class="assign">ASSIGNED SUBJECTS TEACHERS</h1><hr>

<table class="abc" border="1" align="center" cellspacing=0 cellpadding=10 >
    <tr>
        <th>ID</th>
        
        <th>Year</th>
        <th>COURSE</th>
        <th> SEMESTER</th>
        <th>SUBJECT</th>
        <th> FACULTY</th>
    </tr>
    @foreach($arr as $values)
    <tr>
        <td>{{$values->id}}</td>
        <td>{{$values->year}}</td>
        <td>{{$values->course}}</td>
        <td>{{$values->semester}}</td>
        <td>{{$values->subject}}</td>
        <td>{{$values->faculty}}</td>
    </tr>
    @endforeach
</table>
<br></br>
@endsection