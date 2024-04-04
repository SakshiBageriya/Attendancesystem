@extends("layout.master")
@section('content')
<div class="container-fluid">
    <style>
        .abc{
            background-image:url('dist/img/vivhl.jpg');
            background-repeat: no-repeat;
  background-attachment: relative;
  background-size: 100% 100%;
        }
        .table{
            text-align: center;
            background-color: #dfddd2;
    width: 20em;
    margin-top: 99px;
    margin-left: 11em;
    border-radius: 20px;
        }
        </style>
<div class='row  abc' style=" margin: 0px;    height: 31em;    padding: 2px; ">

<div class='col-6 '>

</div>
<div class=' col-6 '>
<table class="table" border="1" align="center" cellspacing=0 cellpadding=10>
    <tr>
        <th>ID</th>
        <th>COURSE NAME</th>
    </tr>
    @foreach($arr as $values)
    <tr>
        <td>{{$values->id}}</td>
        <td>{{$values->coursename}}</td>
    </tr>
    @endforeach
</table>
@endsection
