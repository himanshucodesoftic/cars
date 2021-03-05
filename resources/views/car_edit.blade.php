@extends('layout.layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Content Row -->
        <div class="row justify-content-center">
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><b></b></h6>
                    </div>
                    <div class="card-body">
                        <h1 style="color:green;">
                            {{session('msg')}}</h1>
                        <form action="{{route('todo.update',[$todoArr->id])}}" method="post" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">

                                <div class="form-group col-lg-6">
                                    <label for="name"><b>Name</b></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                        style="width:100%;" value="{{$todoArr->name}}" required />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name"><b>Model</b></label>
                                    <input type="text" name="model" class="form-control" id="name" placeholder="Model"
                                        style="width:100%;" value="{{$todoArr->model}}" required />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="name"><b>Description</b></label>
                                    <input type="text" name="description" class="form-control" id="name"
                                        placeholder="Description" style="width:100%;" value="{{$todoArr->description}}"
                                        required />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name"><b>price</b></label>
                                    <input type="text" name="price" class="form-control" id="name" placeholder="price"
                                        style="width:100%;" value="{{$todoArr->price}}" required />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="name"><b>Sitting Type</b></label>
                                    <input type="text" name="sittingtype" class="form-control" id="name"
                                        placeholder="sittingtype" style="width:100%;" value="{{$todoArr->sittingtype}}"
                                        required />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="name"><b>GearBox</b></label>
                                    <input type="text" name="GearBox" class="form-control" id="name"
                                        placeholder="GearBox" style="width:100%;" value="{{$todoArr->Gearbox}}"
                                        required />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="name"><b>Image</b></label>
                                    <br>
                                    <input type="file" name="image[]" class="form-control"
                                        data-file_types="jpg|jpeg|gif|png" accept="image/png, image/jpeg"
                                        value="{{$todoArr->image}}" multiple>
                                    <input type="hidden" name="old_image" value="">
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <div class="form-group col-lg-6">
                                        <label for="name"><b>Curent Image</b></label>
                                        <br>
                                        {{-- <input type="text" class="form-cntrl-file" name="image" id="image"  value="{{$jp_obj['p_image']}}"
                                        > --}}
                                        <img src="{{$todoArr->image}}" class="form-cntrl-file" name="" height="70px;"
                                            alt="">
                                        <input type="hidden" name="old_image" value="{{$todoArr->image}}">
                                        <div class="validate"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="name"><b>years</b></label>
                                    <input type="text" name="years" class="form-control" id="years" placeholder="years"
                                        style="width:100%;" value="{{$todoArr->year}}" required />
                                    <div class="validate"></div>
                                </div>
                            </div>
                    </div>
                    <div class="row" style="text-align:center;">
                        <div class="col-lg-12 ml-auto">
                            <button class="btn btn-primary  btn-register"><b>Add Cars</b></button>
                        </div>
                    </div>
                    </form>
                    <!-- Content Row -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
