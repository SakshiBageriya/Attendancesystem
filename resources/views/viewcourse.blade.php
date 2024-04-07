@extends("layout.master")

@section('content')
<div class="container-fluid">
    <style>
        .abc {
            background-image: url('dist/img/vivhl.jpg');
            background-repeat: no-repeat;
            background-attachment: relative;
            background-size: cover;
            height: 31em;
            padding: 2px;
            display: flex;
            align-items: flex-end; /* Align items to the bottom */
            justify-content: flex-end; /* Justify content to the right */
            position: relative; /* Add relative positioning */
        }

        .custom-table {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            width: 20em;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a slight shadow */
            position: absolute; /* Add absolute positioning */
            bottom: 20px; /* Position 20px from the bottom */
            right: 20px; /* Position 20px from the right */
        }
    </style>
    <div class='row abc'>
        <div class='col-12'>
            <table class="table custom-table" border="1" align="center" cellspacing=0 cellpadding=10>
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
