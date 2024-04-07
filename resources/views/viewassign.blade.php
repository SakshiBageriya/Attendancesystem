@extends("layout.master")
@section('content')

<style>
    .image-container {
        margin-top: 20px;
        margin-bottom: 20px;
        height: 300px; /* Set a fixed height for the image containers */
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure images fill the container */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding-left: 20px;
    }

    .abc {
        background-image: url('dist/img/boxed-bg.png');
    }

    .assign {
        color: grey;
        text-decoration: underline;
        margin-left: 6em;
        margin-bottom: 10px;
    }

    .abc-table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .abc-table th,
    .abc-table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .abc-table th {
        background-color: #f2f2f2;
    }

    /* Added media query for smaller screens */
    @media (max-width: 768px) {
        .abc-table {
            width: 90%;
        }
    }

    /* Added styling for image and table containers */
    .image-table-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .image-container,
    .abc-table {
        flex: 1 1 50%; /* Make each container take up 50% of the available space */
    }

    /* Adjust the width of the image container for smaller screens */
    @media (max-width: 768px) {
        .image-container {
            height: auto; /* Allow the image container to adjust its height */
        }
    }
</style>

<h1 class="assign">ASSIGNED SUBJECTS TEACHERS</h1>

<div class="image-table-container">
    <div class="image-container">
        <a href="formassign"><img src="dist/img/i.jpg" alt="student"></a>
    </div>
    <div class="image-container">
        <a href="formassign"><img src="dist/img/fc.jpeg" alt="student"></a>
    </div>
</div>

<table class="abc abc-table">
    <tr>
        <th>ID</th>
        <th>Year</th>
        <th>COURSE</th>
        <th>SEMESTER</th>
        <th>SUBJECT</th>
        <th>FACULTY</th>
    </tr>
    @foreach($arr as $values)
    <tr>
        <td>{{$values->id}}</td>
        <td>{{$values->year}}</td>
        <td>{{$values->course}}</td>
        <td>{{$values->semester}}</td>
        <td>{{$values->subject}}</td>
        <td>{{$values->faculty}}</td>
    </tr>
    @endforeach
</table>

<br>
@endsection
