








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url('dist/img/admin_login image.jpg');"
<div class="login-box">
  <div class="login-logo">
  <h1 class="login-box-msg" style=" margin: 0;
    padding: 4px 2px 6px;
    text-align: center;
    /* size: b4; */
    font-size: x-large;
    color: turquoise;
    font-weight: normal;
    text-decoration: overline;">Please Sign in to System</h1>
    <a href="../../Adminslogin"><b>ADMIN LOGIN </b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style=" background-color: #fff;
    border-top: 0;
    color: #666;
    padding: 10px;
    width: 155%;
    margin: 1px 0px -5px -72px;
    border-radius: 38px;">
     

      <form action="./adminlogin1" method="post">
    
    {{ csrf_field()}}
    <table class="table table-bordered"  align='center' cellspacing=0 cellpadding=10 width=100%>
        <tr>
            <td style="
    border: 1px solid #dee2e6;
    width: 16px;
    font-size: larger;
    color: #9d174e;
    font-weight: 600;
">User Name</td>
            <td><input class="form-control" type="text" name='nm' value='' placeholder="Enter User Name"></td>
        </tr>
        
        <tr>
            <td style="
    border: 1px solid #dee2e6;
    width: 16px;
    font-size: larger;
    color: #9d174e;
    font-weight: 600;
">Password</td>
            <td><input class="form-control" type="password" name='ps' value='' placeholder="Enter Password"></td>
        </tr>
        <tr>
        <td colspan='2' align='center'><input class="btn btn-primary text-white" type="submit" value='Submit'></td>
        </tr>
</table>
</form>
</div>