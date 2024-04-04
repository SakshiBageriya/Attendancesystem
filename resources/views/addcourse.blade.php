@extends("layout.master")
@section('content')
<br/><Br/>
<div class="container-fluid">
<div class='row' style=" margin: 0px;    height: 31em;    padding: 2px; ">

<div class='col-6 '>
<a href="viewcourse"><img src="dist/img/lb.jpg" alt=image width=100% height=80%></a>

</div>
<div class=' col-6 ' style="background-color:white">
<form action="./addcourse" method="post">
    
    {{ csrf_field()}}
    <table class="table table-bordered" border='1'align='center' cellspacing=0 cellpadding=10>
        <tr>
            <td colspan=2><h2 style="text-align:center;text-decoration:underline;color: #007bff"> ADD COURSE </h2></td>
</tr>
        <tr>
            <td>Course Name</td>
            <td><input class="form-control" type="text" name='nm' value='' placeholder="Enter Course Name"></td>
        </tr>
        
        <tr>
        <td colspan='2' align='center'><input class="btn btn-primary text-white" type="submit" value='Add Course'></td>
        </tr>
</table>
</form>
</div>
</div>
  
@endsection