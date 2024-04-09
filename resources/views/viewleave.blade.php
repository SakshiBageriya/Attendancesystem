@extends("layout.master")

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch" >
            <div class="table-responsive" >
                <table class="table table-bordered text-center" style="background-color: #f3f4f6;">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>FACULTY_ID</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>FROMDATE</th>
                            <th>TODATE</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
<?phP

$arr=DB::select("select * from applyleave where status='0'");
$sno=1;
?>

                    <tbody>
                        @foreach($arr as $values)
                        <tr>
                            <td><?php echo $sno++; ?></td>
                            <td>{{$values->faculty_id}}</td>
                            <td>{{$values->title}}</td>
                            <td>{{$values->description}}</td>
                            <td>{{$values->fromdate}}</td>
                            <td>{{$values->todate}}</td>
                            <td>

                            <a href="{{URL('accept')}}/{{$values->id}}">Accept</a>

                            <a href="{{URL('reject')}}/{{$values->id}}">Reject</a>
                            
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
