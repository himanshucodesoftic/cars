@extends('layout.layout')
@section('content')

<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css"
    href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">



<div class="row">
    <div class="col-md-12">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productlist as $list)
                <tr>

                    <td>{{ $list['id'] }}</td>
                    <td>{{ $list['name'] }}</td>
                    <td>{{ $list['description'] }}</td>
                    <td>{{ $list['price'] }}</td>

                    <td><a href="delete/{{$list['id'] }}" class="btn btn-danger">Delete</a></td>
                    <td><a href="{{url('/car_edit')}}/{{$list['id']}}}" class="btn btn-success">Edit</a></td>




                    <td>

                    </td>
                </tr>
                @endforeach
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>car</th>
                    <th>price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8"
    src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function () {
        $(document).ready(function () {
            $('#example').DataTable();
        });
    })

</script>
<script>
    $(document).ready(function () {
        $('.delete_form').on('submit', function () {
            if (confirm("Are you sure you want to delete it?")) {
                return true;
            } else {
                return false;
            }
        });
    });

</script>
@endsection
