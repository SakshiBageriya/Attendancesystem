@extends("layout.master")
@section('content')
<div class="container-fluid">
<div class='row' style=" margin: 0px;  padding: 2px; ">
<style>
    .pp{
        height:30em
    }
    </style>
<div class='col-6 '>
<a href="formsem"><img src="dist/img/pp.jpg" class="pp" alt=image width=100% height=80%></a>

</div>
<div class=' col-6 ' style="background-color:white">
<table border="1" align="center" cellspacing=0 cellpadding=10>
    <tr>
        <th>ID</th>
        <th>COURSE NAME</th>
        <th>SEMESTER</th>
        <th>SUBJECT</th>
        <th>PAPER CODE</th>
    </tr>
    @foreach($arr as $values)
    <tr>
        <td>{{$values->id}}</td>
        <td>{{$values->coursename}}</td>
        <td>{{$values->semester}}</td>
        <td>{{$values->subjectname}}</td>
        <td>{{$values->papercode}}</td>
    </tr>
    @endforeach
</table>
@endsection