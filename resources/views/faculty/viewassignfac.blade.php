@extends("faculty.layout.masterfaculty")
@section('content')
<style>
.assign {
    text-align: center;
    margin-bottom: 20px;
}

.table-container {
    margin: 0 auto;
    width: 70%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /* Added box shadow */

}

.abc {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
}

.abc th,
.abc td {
    border: 1px solid #ddd;
    padding: 8px;
}

.abc th {
    background-color: #77619e;
    color: #fff;
    font-weight: bold;
    text-align: center;
}


.abc tr:hover {
    background-color: #ddd;
}
</style>
<div class="table-container">

<table class="abc abc-table">
        <tr>
            <th>ID</th>

            <th>Year</th>
            <th>COURSE</th>
            <th> SEMESTER</th>
            <th>SUBJECT</th>
            <th> FACULTY</th>
        </tr>
        <?php
$fname=Session::get("email");
$arr=DB::select("select * from assign where faculty='$fname'");

    ?>
        @foreach($arr as $values)
        <tr>
            <td>{{$values->id}}</td>
            <td>{{$values->year}}</td>
            <td>{{$values->course}}</td>
            <td>{{$values->semester}}</a></td>
            <td>
                <a
                    href="{{url('subject')}}/{{$values->course}}/{{$values->semester}}/{{$values->subject}}">{{$values->subject}}</a>
            </td>
            <td>{{$values->faculty}}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection