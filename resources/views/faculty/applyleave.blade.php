<style>
    /* Form container styles */
    .form-container {
        margin: 0 auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Form input styles */
    .form-control {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Form submit button styles */
    .btn-primary {
        background-color: #77619e; /* Your chosen color */
        border: none;
        border-radius: 4px;
        padding: 12px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Table styles */
    .table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 12px;
        border: 1px solid #ccc;
    }

    .table th {
        background-color: #77619e; /* Your chosen color */
        text-align: center;
    }
</style>

@extends("faculty.layout.masterfaculty")

@section('content')
<br/><Br/>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-md-3 form-container">
            <form action="./applyleave1" method="post">
                {{ csrf_field()}}
                <table class="table table-bordered">
                    <tr>
                        <td colspan=2><h2 style="text-align:center;text-decoration:underline;color: #77619e;"> APPLICATION FOR LEAVE </h2></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td><input class="form-control" type="text" name='title' value='' ></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><input class="form-control" type="text" name='description' value='' ></td>
                    </tr>
                    <tr>
                        <td>From Date</td>
                        <td><input class="form-control" type="date" name='fromdate' value='' ></td>
                    </tr>
                    <tr>
                        <td>To Date</td>
                        <td><input class="form-control" type="date" name='todate' value='' ></td>
                    </tr>
                    <tr>
                        <td colspan='2' align='center'><input class="btn btn-primary text-white" type="submit" value='Apply'></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
