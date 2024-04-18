<head>
    <style>
        .container-fluid {
            width: 100%;
            padding: 15px;
            margin-right: auto;
            margin-left: auto;
            color: #333; /* Dark text color */
            align-self: start;
        }

        .row.abc {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Align items horizontally center */
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
            background-color: #fff; /* White background */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow effect */
            text-align: center; /* Center align text */
        }

        .table.custom-table th,
        .table.custom-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table.custom-table th {
            background-color: #77619e; /* Purple background */
            color: #fff; /* White text color */
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
                            <th>ID</th>
                            <th>COURSE NAME</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($arr as $values)
                        <tr>
                            <td>{{$values->id}}</td>
                            <td>{{$values->coursename}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
</body>
