
<div style="width:500px;margin:auto">
<form action="./facultylogin1" method="post">
    
    {{ csrf_field()}}
    <table class="table table-bordered" border='1'align='center' cellspacing=0 cellpadding=10>
        <tr>
            <td colspan=2><h2 style=text-align:center;text-decoration:underline;> FACULTY LOGIN </h2></td>
</tr>
        <tr>
            <td>User Name</td>
            <td><input class="form-control" type="text" name='nm' value='' placeholder="Enter User Name"></td>
        </tr>
        
        <tr>
            <td>Password</td>
            <td><input class="form-control" type="password" name='ps' value='' placeholder="Enter Password"></td>
        </tr>
        <tr>
        <td colspan='2' align='center'><input class="btn btn-primary text-white" type="submit" value='Submit'></td>
        </tr>
</table>
</form>
</div>