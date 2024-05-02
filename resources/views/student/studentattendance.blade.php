
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
</table>
<br/>
<table border="1" align="center" cellspacing=0 cellpadding=10>
    <tr>
        <th>ID</th>
        <th>Semester</th>
        <th>course</th>
        <th> Subject name</th>
    
    </tr>
<?php
$email=Session::get("email");
//echo $email;
$arr=DB::select("select * from student where email='$email'");

$sem=$arr[0]->semester;

$course=$arr[0]->coursename;


            

//echo $sem,$course;
$arr=DB::select("select * from subject where  coursename='$course' and semester='$sem'");
$sno=1;
?>

@foreach($arr as $values)



    <tr>
        <td><?php echo $sno++; ?></td>
          <td><?php echo $sem;?></td>
            <td><?php echo $course;?></td>
            <td> <a href="{{url('subjectattendance')}}/{{$course}}/{{$sem}}/{{$values->subjectname}}"">{{$values->subjectname}}</a></td>
    </tr>

    
    @endforeach
    
</table>

@endsection
