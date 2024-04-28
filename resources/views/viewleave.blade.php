@extends("layout.master")

@section('content')

@section('styles')
<style>
    /* Additional CSS styles */
    .table-responsive {
        overflow-x: auto;
    }

    table {
        width: 100%;
    }

    table th,
    table td {
        padding: 15px; /* Adjust padding for spacing */
        vertical-align: middle; /* Align content vertically in the middle */
        text-align: center; /* Center text horizontally */
    }

    .thead-dark {
        background-color: #343a40;
        color: white;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tbody tr:hover {
        background-color: #e2e2e2;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
        border-collapse: collapse;
    }

    /* Add space between header row and rest of the table */
    .table-header-spacing th {
        padding-bottom: 20px; /* Adjust as needed */
    }
</style>
@endsection

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch">
            <div class="table-responsive">
                <table class="table table-bordered text-center" style="background-color: #f3f4f6;">
                    <thead class="thead-dark table-header-spacing">
                    <tr>
                            <th style="padding-right: 30px;">ID</th>
                            <th style="padding-right: 30px;">FACULTY_ID</th>
                            <th style="padding-right: 30px;">TITLE</th>
                            <th style="padding-right: 30px;">DESCRIPTION</th>
                            <th style="padding-right: 30px;">FROMDATE</th>
                            <th style="padding-right: 30px;">TODATE</th>
                            <th style="padding-right: 30px;">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $arr = DB::select("select * from applyleave where status='0'");
                    $sno = 1;
                    ?>
                    <tbody>
                        @foreach($arr as $values)
                        <tr>
                            <td><?php echo $sno++; ?></td>
                            <td>{{$values->faculty_id}}</td>
                            <td>{{$values->title}}</td>
                            <td>{{$values->description}}</td>
                            <td>{{$values->fromdate}}</td>
                            <td>{{$values->todate}}</td>
                            <td>
                                <a href="{{URL('accept')}}/{{$values->id}}">Accept</a>
                                <a href="{{URL('reject')}}/{{$values->id}}">Reject</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
