@section('styles')

<head>
    <style>
    .container-fluid {
        width: 100%;
        padding: 15px;
        margin-right: auto;
        margin-left: auto;
        color: #333;
        /* Dark text color */
        align-self: start;
    }

    .row.abc {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        /* Align items horizontally center */
    }

    .col-12 {
        flex: 0 0 100%;
        max-width: 70%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .table.custom-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        /* White background */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Shadow effect */
        text-align: center;
        /* Center align text */
    }

    .table.custom-table th,
    .table.custom-table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .table.custom-table th {
        background-color: #77619e;
        /* Purple background */
        color: #fff;
        /* White text color */
        font-weight: bold;
    }

    tr:hover {
        background-color: #ddd;
    }
    </style>
</head>

<body>
    @extends("layout.master")

    @section('content')

    <div class="container-fluid">
        <div class='row abc'>
            <div class='col-12'>
                <table class="table custom-table" border="1" cellspacing="0" cellpadding="10">
                    <thead>
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

    @endsection

</body>