<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
    /* Your CSS code here */
    /* * * * * General CSS * * * * */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #666666;
        background: #eaeff4;
    }

    .wrapper {
        margin: 0 auto;
        width: 100%;
        max-width: 1140px;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .container {
        position: relative;
        width: 100%;
        max-width: 600px;
        height: auto;
        display: flex;
        background: #ffffff;
        box-shadow: 0 0 5px #999999;
    }

    .credit {
        position: relative;
        margin: 25px auto 0 auto;
        width: 100%;
        text-align: center;
        color: #666666;
        font-size: 16px;
        font-weight: 400;
    }

    .credit a {
        color: #222222;
        font-size: 16px;
        font-weight: 600;
    }

    .col-left,
    .col-right {
        padding: 30px;
        display: flex;
    }

    .col-left {
        width: 60%;
        -webkit-clip-path: polygon(0 0, 0% 100%, 100% 0);
        clip-path: polygon(0 0, 0% 100%, 100% 0);
        background: #44c7f5;
    }

    .col-right {
        padding: 60px 30px;
        width: 50%;
        margin-left: -10%;
    }

    @media(max-width: 575.98px) {
        .container {
            flex-direction: column;
            box-shadow: none;
        }

        .col-left,
        .col-right {
            width: 100%;
            margin: 0;
            -webkit-clip-path: none;
            clip-path: none;
        }

        .col-right {
            padding: 30px;
        }
    }

    .login-text {
        position: relative;
        width: 100%;
        color: #ffffff;
    }

    .login-text h2 {
        margin: 0 0 15px 0;
        font-size: 30px;
        font-weight: 700;
    }

    .login-text p {
        margin: 0 0 20px 0;
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
    }

    .login-text .btn {
        display: inline-block;
        padding: 7px 20px;
        font-size: 16px;
        letter-spacing: 1px;
        text-decoration: none;
        border-radius: 30px;
        color: #ffffff;
        outline: none;
        border: 1px solid #ffffff;
        box-shadow: inset 0 0 0 0 #ffffff;
        transition: .3s;
        -webkit-transition: .3s;
    }

    .login-text .btn:hover {
        color: #44c7f5;
        box-shadow: inset 150px 0 0 0 #ffffff;
    }

    .login-form {
        position: relative;
        width: 100%;
    }

    .login-form h2 {
        margin: 0 0 15px 0;
        font-size: 22px;
        font-weight: 700;
        color: #44c7f5;
        /* Font color for form headings */
    }

    .login-form p {
        margin: 0 0 10px 0;
        text-align: left;
        color: #666666;
        font-size: 15px;
    }

    .login-form p:last-child {
        margin: 0;
        padding-top: 3px;
    }

    .login-form p a {
        color: #44c7f5;
        font-size: 14px;
        text-decoration: none;
    }

    .login-form label {
        display: block;
        width: 100%;
        margin-bottom: 2px;
        letter-spacing: .5px;
    }

    .login-form p:last-child label {
        width: 60%;
        float: left;
    }

    .login-form label span {
        color: #ff574e;
        padding-left: 2px;
    }

    .login-form input {
        display: block;
        width: 100%;
        height: 35px;
        padding: 0 10px;
        outline: none;
        border: 1px solid #cccccc;
        border-radius: 30px;
    }

    .login-form input:focus {
        border-color: #ff574e;
    }

    .login-form button,
    .login-form input[type=submit] {
        display: inline-block;
        width: 100%;
        margin-top: 5px;
        color: #44c7f5;
        font-size: 16px;
        letter-spacing: 1px;
        cursor: pointer;
        background: transparent;
        border: 1px solid #44c7f5;
        border-radius: 30px;
        box-shadow: inset 0 0 0 0 #44c7f5;
        transition: .3s;
        -webkit-transition: .3s;
    }

    .login-form button:hover,
    .login-form input[type=submit]:hover {
        color: #ffffff;
        box-shadow: inset 250px 0 0 0 #44c7f5;
    }

    /* Custom CSS for Form Styling */
    .login-card-body form {
        max-width: 400px;
        margin: 0 auto;
    }

    .login-card-body h1 {
        margin-bottom: 30px;
        color: turquoise;
        /* Font color for the heading */
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 20px;
        padding: 15px;
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s;
        color: #333;
        /* Font color for the form controls */
    }

    .form-control:focus {
        background-color: white;
        box-shadow: 0 0 15px turquoise;
    }

    .btn-primary {
        background-color: turquoise;
        border: none;
        border-radius: 20px;
        padding: 15px 20px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #39cccc;
        /* Lighter shade of turquoise on hover */
    }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome Back</h2>
                    <p>Student <br> How are you ?</p>

                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="./studentlogin1" method="post">
                        {{ csrf_field()}}
                        <p>
                            <label>Username or email address<span>*</span></label>
                            <input class="form-control" type="text" name='nm' value='' placeholder="Enter User Name">
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input class="form-control" type="password" name='ps' value='' placeholder="Enter Password">
                        </p>
                        <p>
                            <input class="btn btn-primary text-white" type="submit" value='Submit'>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>