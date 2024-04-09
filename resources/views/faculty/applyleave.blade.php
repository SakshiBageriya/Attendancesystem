@extends("faculty.layout.masterfaculty")
@section('content')

<br/><Br/>
<div class="container-fluid">
<div class='row' style=" margin: 0px;    height: 31em;    padding: 2px; ">
<form action="./applyleave1" method="post">
    
    {{ csrf_field()}}
    <table class="table table-bordered" border='1'align='center' cellspacing=0 cellpadding=10>
        <tr>
            <td colspan=2><h2 style="text-align:center;text-decoration:underline;color: #007bff"> APPLICATION FOR LEAVE </h2></td>
</tr>
        <tr>
            <td>Title</td>
            <td><input class="form-control" type="text" name='title' value='' ></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input class="form-control" type="text" name='description' value='' ></td>
        </tr>
        <tr>
            <td>From Date</td>
            <td><input class="form-control" type="date" name='fromdate' value='' ></td>
        </tr>
        <tr>
            <td>To Date</td>
            <td><input class="form-control" type="date" name='todate' value='' ></td>
        </tr>
        
        <tr>
        <td colspan='2' align='center'><input class="btn btn-primary text-white" type="submit" value='Apply'></td>
        </tr>
</table>
</form>
</div>
</div>
@endsection