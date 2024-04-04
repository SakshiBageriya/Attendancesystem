@extends("layout.master")
@section('content')
<div class="container-fluid" >

<div class='row' style=" margin: 0px;    padding: 2px; ">
<div class="col-6">
<a href="" style=" font-size:large;color:black"><img src="dist/img/garden.jpg" alt="student" width=100% height=70%> </a>
</div>
<div class="col-6">
      <a href="formstudent"  style="font-size:large;color:black"><img src="dist/img/maclab.jpg" alt="student" width=100% height=70%></a></div>
</div>
<h1 style="text-align:center;    margin-top: -92px; color:grey; text-decoration:underline">Total Students of Mohanlal Sukhadia University</h1><hr>
<table border="1" align="center" cellspacing=0 cellpadding=10>
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
</table>
<hr>
@endsection