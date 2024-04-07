@extends("layout.master")

@section('content')
<style>
  .jumbotron {
    background-image: url('dist/img/cnst.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 120px 0; /* Adjust the padding to center the content vertically */
    margin-bottom: 50px; /* Add some space below the jumbotron */
    border-radius: 10px; /* Rounded corners for the jumbotron */
  }

  .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .card {
    margin: 10px;
    width: 18em;
    border: none; /* Remove border from the card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
    transition: transform 0.3s; /* Add smooth transition on hover */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .card:hover {
    transform: translateY(-5px); /* Move the card up slightly on hover */
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
        <h5 class="card-title">Total Students</h5>
        <p class="card-text">{{ DB::table("student")->count() }}</p>
        <a href="viewstudent" class="btn btn-primary">View Details</a>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Faculty</h5>
        <p class="card-text">{{ DB::table("faculty")->count() }}</p>
        <a href="viewfaculty" class="btn btn-primary">View Details</a>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Subjects</h5>
        <p class="card-text">{{ DB::table("subject")->count() }}</p>
        <a href="viewsubject" class="btn btn-primary">View Details</a>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Courses</h5>
        <p class="card-text">{{ DB::table("course")->count() }}</p>
        <a href="viewcourse" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>
</section>

@endsection
