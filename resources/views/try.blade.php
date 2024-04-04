<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <div class="container">
            <h1>Welcome to Attendance Management System</h1>
            <p>Track attendance with ease!</p>
        </div>
    </header>

    <main>
        <div class="container">
            <!-- Slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="app/assets/images/avatar-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="public/img1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="dist/img/photo1.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- End Slider -->

            <!-- Image Gallery -->
            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <img src="image4.jpg" class="img-fluid" alt="Image 1">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="image5.jpg" class="img-fluid" alt="Image 2">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="image6.jpg" class="img-fluid" alt="Image 3">
                </div>
            </div>
            <!-- End Image Gallery -->

            <!-- Buttons -->
            <div class="text-center mt-5">
                <a href="" class="btn btn-primary mr-3">Login</a>
                <a href="" class="btn btn-success">Sign Up</a>
            </div>
            <!-- End Buttons -->
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Attendance Management System</p>
        </div>
    </footer>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS for slider -->
    <script>
        $('.carousel').carousel();
    </script>

</body>
</html>
