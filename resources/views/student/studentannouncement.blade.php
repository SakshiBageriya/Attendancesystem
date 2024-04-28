@extends("student.layout.masterstudent")
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
            <th>TITLE</th>
            <th>CATEGOY</th>
            <th> DATE</th>
            <th>ADMIN</th>
            <th> AUDIENCE</th>
            <th> CONTENT</th>
            <th> ATTACHEMENT</th>
        </tr>
        <?php
$arr=DB::select("select * from announcement where audience='student'|| audience='both'");

    ?>
        @foreach($arr as $values)
        <tr>
            <td>{{$values->id}}</td>
            <td>{{$values->title}}</td>
            <td>{{$values->category}}</td>
            <td>{{$values->date}}</a></td>
            <td>{{$values->admin}}</a></td>
            <td>{{$values->audience}}</a></td>
            <td>{{$values->content}}</a></td>
            <td><a href="{{asset('attachement')}}/{{$values->attachement}}" download>download</a></td>
        </tr>
        @endforeach
    </table>
</div>

@endsection