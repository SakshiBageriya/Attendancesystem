<form action="{{URL('subject2')}}" method="post">

<div class="row" style="text-align:center">
<div class="col-6" >
Date:<input type='date' name='dt' value=''>
From:<input type='time' name='tm' value=''>
To:<input type='time' name='tmm' values=''>

<br>
    {{csrf_field()}}
<table border="1" align="center" cellspacing=0 cellpadding=10>
    <tr>
        <th>ID</th>
        <th>SEMESTER</th>
        <th>STUDENT</th>
        
    </tr>

    <?php
        $sno=1;
    ?>
        <input type="hidden" value="<?php echo $course; ?>" name="course">
        <input type="hidden" value="<?php echo $semester; ?>" name="semester">
        <input type="hidden" value="<?php echo $subject; ?>" name="subject">
        
    @foreach($arr11 as $values)
    <tr>
        <td><?PHP  echo $sno++;?></td>
        <td>{{$values->semester}}</td>
        <td>{{$values->studentname}}

        <input type='checkbox' name='chk[]' value="{{$values->id}}" checked>
        </td>
</tr>
    @endforeach
    <tr>
        <td colspan=3 style="text-align:center;"><input type="submit" value="save">
    </tr>
</table>
</form>
<div class="row">
    <tr>
    <a href="{{url('viewattendances')}}/{{$course}}/{{$semester}}/{{$subject}}">View Attendance</a></a>
</tr>
</div>
