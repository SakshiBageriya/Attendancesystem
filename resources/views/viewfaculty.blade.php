@extends("layout.master")

@section('content')
<style>
    .container-fluid {
        width: 100%;
        padding: 15px;
        margin-right: auto;
        margin-left: auto;
        color: #333; /* Dark text color */
    }

    .row {
        display: flex;
        justify-content: center; /* Align items horizontally center */
    }

    .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .table-responsive {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Added box shadow */
    }

    .table.table-bordered {
        border-collapse: collapse;
        margin-top: 20px; /* Added margin to separate from container */
    }

    .table.table-bordered th,
    .table.table-bordered td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .table.table-bordered thead th {
        background-color: #77619e; /* Purple background */
        color: #fff; /* White text color */
        font-weight: bold;
    }

    .table.table-bordered tbody td {
        text-align: center; /* Center align text */
    }

    .table.table-bordered tbody td img {
        max-width: 100px;
        height: auto;
    }
    tr:hover {
        background-color: #ddd;
    }
</style>

<div class="container-fluid mt-6">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>FACULTY NAME</th>
                            <th>E-MAIL</th>
                            <th>CONTACT</th>
                            <th>ADDRESS</th>
                            <th>PHOTO</th>
                            <th>QUALIFICATION</th>
                            <th>PASSWORD</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($arr as $values)
                        <tr>
                            <td>{{$values->id}}</td>
                            <td>{{$values->facultyname}}</td>
                            <td>{{$values->email}}</td>
                            <td>{{$values->contact}}</td>
                            <td>{{$values->address}}</td>
                            <td>
                                <img src="{{ asset('upload') }}/{{ $values->photo }}" alt="Faculty Photo" class="img-fluid">
                            </td>
                            <td>{{$values->qualification}}</td>
                            <td>{{$values->password}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
