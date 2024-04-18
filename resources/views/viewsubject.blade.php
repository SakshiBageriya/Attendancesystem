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

        .row {
            display: flex;
            justify-content: center; /* Align items horizontally center */
        }

        .col-md-12 {
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
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        .table.table-bordered {
            border-collapse: collapse;
            width: 100%; /* Set table width to 100% */
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
        tr:hover {
        background-color: #ddd;
    }
    </style>
</head>

<body>
    
    @extends("layout.master")
    
    @section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex align-items-stretch">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" style="width: 100%;">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>COURSE NAME</th>
                                <th>SEMESTER</th>
                                <th>SUBJECT</th>
                                <th>PAPER CODE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($arr as $values)
                            <tr>
                                <td>{{$values->id}}</td>
                                <td>{{$values->coursename}}</td>
                                <td>{{$values->semester}}</td>
                                <td>{{$values->subjectname}}</td>
                                <td>{{$values->papercode}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
</body>
