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
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>FROMDATE</th>
                            <th>TODATE</th>
                            <th>Action</th>

                        </tr>
                    <?phP
$fid=Session::get("idd");
$arr=DB::select("select * from applyleave where faculty_id='$fid'");
$sno=1;
?>

                    <tbody>
                        @foreach($arr as $values)
                        <tr>
                            <td><?php echo $sno++; ?></td>
                            <td>{{$values->title}}</td>
                            <td>{{$values->description}}</td>
                            <td>{{$values->fromdate}}</td>
                            <td>{{$values->todate}}</td>
                            <td>

                                <?php
            if($values->status==0)
                echo "Leave Process";
            else if($values->status==1)
            echo "<span style='color:green'>Accepted</span>";
        else
        echo "<span style='color:red'>Rejected</span>";
                                ?>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection