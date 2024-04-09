@extends("faculty.layout.masterfaculty")
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch" >
            <div class="table-responsive" >
                <table class="table table-bordered text-center" style="background-color: #f3f4f6;">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>FROMDATE</th>
                            <th>TODATE</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
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