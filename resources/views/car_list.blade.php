@extends('layout.layout')
@section('content')

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

                    <td><a href="{{url('delete')}}/{{$list['id'] }}" class="btn btn-danger">Delete</a></td>
                    <td><a href="{{url('/car_edit')}}/{{$list['id']}}}" class="btn btn-success">Edit</a></td>
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
@endsection
