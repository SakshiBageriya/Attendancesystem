<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Software</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f1f1df;
     }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 90px auto;
      max-width: 900px; /* Adjust as needed */
    }
    .box {
      flex: 1;
      margin: 0 10px; /* Add space between the boxes */
      border: 8px solid #280650fb;
      padding: 20px;
      text-align: center;
      background-color: #2f95a9;
    }
    .box img {
      max-width: 100%;
      height: auto;
    }
    .btn {
      display: block;
      margin-top: 20px;
      background-color: #1b1b9b;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn:hover {
      background-color: #8adae3;
    }
     
    .h1{
      color: #280650fb;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-style: italic;
    }


  </style>
</head>
<body>

  <h1 class="h1" style="text-align: center;"><u><i><b>Welcome to Attendance Management System</b></i></u></h1>
  <div class="container">
    <div class="box">
      <h2>Admin Login</h2>
      <img src="https://img.freepik.com/free-photo/computer-security-with-login-password-padlock_107791-16191.jpg?w=1060&t=st=1710612750~exp=1710613350~hmac=c9f998f7ab9c450ad5edecf4d9ca1e7f8948ddc74d6f120103d0709bb5406c5a" alt="Image 1">
      <a href="Adminslogin" class="btn">login</a>
    </div>
    <div class="box">
      <h2>Faculty Login</h2>
      <img src="https://img.freepik.com/free-photo/computer-security-with-login-password-padlock_107791-16191.jpg?w=1060&t=st=1710612750~exp=1710613350~hmac=c9f998f7ab9c450ad5edecf4d9ca1e7f8948ddc74d6f120103d0709bb5406c5a" alt="Image 1">
      <a href="facultylogin" class="btn">login</a>
    </div>
    <div class="box">
      <h2> Student Login</h2>
      <img src="https://img.freepik.com/free-photo/computer-security-with-login-password-padlock_107791-16191.jpg?w=1060&t=st=1710612750~exp=1710613350~hmac=c9f998f7ab9c450ad5edecf4d9ca1e7f8948ddc74d6f120103d0709bb5406c5a" alt="Image 2">
      <a href="studentlogin"class="btn">login</a>
    </div>
  </div>
</body>
</html>