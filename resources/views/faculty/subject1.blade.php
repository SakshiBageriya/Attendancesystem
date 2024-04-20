<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #77619e;
    }

    form {
        text-align: center;
    }

    input[type="date"],
    input[type="time"],
    input[type="submit"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin: 5px;
        font-size: 16px;
    }

    input[type="date"]:focus,
    input[type="time"]:focus,
    input[type="submit"]:hover {
        outline: none;
        border-color: #77619e;
        box-shadow: 0 0 5px rgba(119, 97, 158, 0.5);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    th {
        background-color: #77619e;
        color: #fff;
        font-weight: bold;
        text-align: center;
    }

    tr:hover {
        background-color: #f2f2f2;
    }

    .link {
        text-align: center;
        margin-top: 20px;
    }

    .link a {
        color: #77619e;
        text-decoration: none;
    }

    .link a:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <h2>Attendance Form</h2>
    <form action="{{url('subject2')}}" method="post">
        <div>
            <label for="dt">Date:</label>
            <input type='date' name='dt' id="dt" value=''>
            <label for="tm">From:</label>
            <input type='time' name='tm' id="tm" value=''>
            <label for="tmm">To:</label>
            <input type='time' name='tmm' id="tmm" values=''>
        </div>
        {{csrf_field()}}
        <table>
            <tr>
                <th>ID</th>
                <th>SEMESTER</th>
                <th>STUDENT</th>
            </tr>
            <?php $sno = 1; ?>
            <input type="hidden" value="<?php echo $course; ?>" name="course">
            <input type="hidden" value="<?php echo $semester; ?>" name="semester">
            <input type="hidden" value="<?php echo $subject; ?>" name="subject">
            @foreach($arr11 as $values)
            <tr>
                <td><?php echo $sno++;?></td>
                <td>{{$values->semester}}</td>
                <td>{{$values->studentname}}
                    <input type='checkbox' name='chk[]' value="{{$values->id}}" checked>
                </td>
            </tr>
            @endforeach
        </table>
        <input type="submit" value="Save">
    </form>
    <div class="link">
        <a href="{{url('viewattendances')}}/{{$course}}/{{$semester}}/{{$subject}}">View Attendance</a>
    </div>
</div>
