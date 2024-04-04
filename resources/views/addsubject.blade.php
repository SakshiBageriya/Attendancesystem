@extends("layout.master")
@section('content')

<div class="container-fluid">
<div class='row' style=" margin: 0px;    height: 31em;    padding: 2px; ">

<div class='col-6 '>
<a href="viewsubject"><img src="dist/img/subj.jpg" alt=image width=100% height=80%></a>

</div>
<div class=' col-6 ' style="background-color:white">
<div style="width:600px;margin:auto">
<form action="./addsubject" method="post">
    {{ csrf_field()}}

    <table class=table tableboardered border='1'align='center' cellspacing=0 cellpadding=10>
    <tr>
            <td colspan=2><h2 style="text-align:center;text-decoration:underline;color: #007bff"> ADD SUBJECT </h2></td>
</tr>
    <tr>
    <td>
    <label for="Cn" style=font-weight:bold;>&nbsp;Course Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td><td>
    <select id="cn" name="cn" class="form-control">
        <option value=""> Select course</option>

        <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="MSC-IT">MSC-IT</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>
    <label for="sm" style=font-weight:bold;>&nbsp;Semester:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td><td>
    <select id="sm" name="sm"  class="form-control">
    <option value=""> Select semester</option>
    <option value="1st">1st</option>
    <option value="2nd">2nd</option>
    <option value="3rd">3rd</option>
    <option value="4th">4th</option>
    <option value="5th">5th</option>
    <option value="6th">6th</option>
    </select>
    </td>
    </tr>
        <tr>
            <td style=font-weight:bold;>Subject Name</td>
            <td ><input type="text" name='sub' value=''  class="form-control" placeholder="Enter Subject"></td>
        </tr>
        <tr>
            <td style=font-weight:bold;>paper code</td>
            <td><input type="text" name='pcd' value=''  class="form-control" placeholder="Enter Paper-code"></td>
        </tr>
        
        <tr>
        <td colspan='2' align='center'><input type="submit" value='Add subject' class="btn btn-warning text-white"></td>
        </tr>
</table>
</form><br></br>
</div>
</div>
</div>
</div>
@endsection

