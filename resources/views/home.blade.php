@extends("layout.master")

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
.jumbotron {
    background-image: url('dist/img/cnst.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 120px 0;
    /* Adjust the padding to center the content vertically */
    margin-bottom: 50px;
    /* Add some space below the jumbotron */
    border-radius: 10px;
    /* Rounded corners for the jumbotron */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    /* Adjust shadow properties */
}

.card-container {
    width: 60%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 0 auto;
    /* Center the container */
}

.card {
    margin: 10px;
    width: 18em;
    border: none;
    /* Remove border from the card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* Add a subtle box shadow */
    transition: transform 0.3s;
    /* Add smooth transition on hover */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: #e4e9f7;
}

.card:hover {
    transform: translateY(-5px);
    /* Move the card up slightly on hover */
}

.card-body {
    padding: 30px;
}

.card-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.card-text {
    font-size: 18px;
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    /* Added border-radius */
    padding: 10px 20px;
    /* Added padding */
    text-decoration: none;
    /* Remove default underline */
    color: white;
    /* Text color */
    transition: background-color 0.3s, border-color 0.3s;
    /* Smooth transition */
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}
</style>

<div class="jumbotron">
    <h1>Welcome To Mohanlal Sukhadia University</h1>
</div>

<section class="container">
    <div class="card-container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Students <i class="fas fa-user-graduate"></i></h5>
                <p class="card-text">{{ DB::table("student")->count() }}</p>
                <a href="viewstudent" class="btn btn-primary">View Details</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Faculty <i class="fas fa-chalkboard-teacher"></i></h5>
                <p class="card-text">{{ DB::table("faculty")->count() }}</p>
                <a href="viewfaculty" class="btn btn-primary">View Details</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Subjects <i class="fas fa-book"></i></h5>
                <p class="card-text">{{ DB::table("subject")->count() }}</p>
                <a href="viewsubject" class="btn btn-primary">View Details</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Courses <i class="fas fa-graduation-cap"></i></h5>
                <p class="card-text">{{ DB::table("course")->count() }}</p>
                <a href="viewcourse" class="btn btn-primary">View Details</a>
            </div>
        </div>
</div>
    </div>
</section>

@endsection