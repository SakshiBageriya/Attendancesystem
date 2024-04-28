<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report</title>
    <style>
        body {
            background-color: #fff;
            color: #77619e;
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            margin-top: 50px; /* Adjust this value as needed */
        }
        th, td {
            border: 1px solid #77619e;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Course</th>
            <th>{{$course}}</th>
            <th>Semester</th>
            <th>{{$semester}}</th>
        </tr>
        <tr>
            <th>Subject</th>
            <th>{{$subject}}</th>
            <th>Date</th>
            <th><?php echo date('d-m-Y'); ?></th>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Attendance</th>
        </tr>
        <?php
            $arr = DB::select("SELECT * FROM student WHERE coursename='$course' AND semester='$semester'");
            $sno = 1;
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
                <td><?php echo $total; ?></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
