
<table border="1" align="center" cellspacing=0 cellpadding=10>
    <tr>
        <th>ID</th>
        <th> STUDENT Name</th>
        <th> Attendence</th>

    </tr>
<?php


$arr=DB::select("select * from student where  coursename='$course' and semester='$semester'");
$sno=1;
?>

@foreach($arr as $values)


<?php
$total = DB::table('addattendance')
->where('course', $course)
->where('semester', $semester)
->where('subject', $subject)
->where('student_id', $values->id)
->count();

// Checking if $total is greater than zero before accessing its properties
if ($total > 0) {
$total = DB::table('addattendance')
    ->select(DB::raw('count(distinct dates) as total_students'))
    ->where('course', $course)
    ->where('semester', $semester)
    ->where('subject', $subject)
    ->where('student_id', $values->id)
    ->first()->total_students;
} else {
// Handling the case where no records are found
$total = 0;
}
?>


    <tr>
        <td><?php echo $sno++; ?></td>

        <td>{{$values->studentname}}</td>
        <td><?php echo $total; ?></a></td>
    </tr>
    
    @endforeach
    
</table>
