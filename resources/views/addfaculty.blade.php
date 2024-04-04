@extends("layout.master")
@section('content')


<div class="container-fluid">
<div class='row' style=" margin: 0px;    height: 47em;    padding: 2px; ">

<div class='col-6'>

<img src="dist/img/321763.jpg" alt=image width=100% height=40%>
<a href="viewfaculty"><img src="dist/img/fc.jpeg" alt=image width=100% height=40%></a>
</div>

<div class="col-6">
<form action="./addfaculty" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
 
    <table class=table tablebordered  border='1'align='center' cellspacing=0 cellpadding=10>
    <tr>
            <td colspan=2><h2 style="text-align:center;text-decoration:underline;color: #007bff"> ADD FACULTY </h2></td>
</tr>
        <tr>
            <td > Faculty Name</td>
            <td><input type="text" name='fnm' value='' class="form-control" placeholder="Enter Name">
               @error('fnm')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
              </td>
        </tr>
        <tr>
            <td> E-mail</td>
            <td><input type="email" name='email' value='' class="form-control" placeholder="abc123@gmail.com">
            @error('email')
               <span style="color:red;font-weight:bold; ">{{$message}}</span>
               @enderror
            </td>
        </tr>
        <tr>
            <td> contact No.</td>
            <td><input type="text" name='cont' value='' maxlength=10 class="form-control" placeholder="+91 XXXX-XXX-XX-X">
            @error('cont')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
        </td>
        </tr>
        <tr>
            <td> Address</td>
            <td><textarea name='address' value='' class="form-control" placeholder="Enter your Address"></textarea>
            @error('address')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
    
        </td>
        </tr>
        <tr>
            <td> Photo </td>
            <td><input type="file" name="aa" class="form-control" placeholder="Choose photo"></td>
        </tr>
        <tr>
            <td> Qualification</td>
            <td><input type="text" name='qualf' value='' class="form-control" placeholder="Enter Qualification">
            @error('qualf')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
        </td>
        </tr>
        <tr>
            <td> Password</td>
            <td><input type="text" name='pass' value='' class="form-control" placeholder="Enter Password">
            @error('pass')
               <span style="color:red;font-weight:bold;">{{$message}}</span>
               @enderror
        </td>
        </tr>
        <tr>
        <td colspan='2' align='center'><input type="submit" value='Add Faculty'></td>
        </tr>
        </tr>
</table>
</form><br></br>
@endsection