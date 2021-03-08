@extends('layout.layout')
@section('content')


<div class="row">
    <div class="col-md-12">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>Email</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($productlist as $list)
                <tr>
                    <td>{{ $list['id'] }}</td>
                    <td>{{ $list['name'] }}</td>
                    <td>{{ $list['email'] }}</td>
                

                    </tr>
                @endforeach
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>Email</th>
                
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection