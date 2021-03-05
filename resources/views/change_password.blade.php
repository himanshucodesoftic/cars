@extends('layout.layout')
@section('content')
<div class="row" style="text-align:center">
    <div class="col-md-12">
        <div class="login-box">
            <form class="login-form" method="post" action="{{url('/changepasswordhere')}}/{{$jp_obj['adm_id']}}">
                @csrf
                <h3 class="login-head"><i class=""></i>Enter you New Password</h3>
                <div class="form-group">
                    <label class="control-label">password</label>
                    <input class="form-control" name="password" placeholder="password" autofocus>
                </div>
                <div class="form-group">
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label>

                            </label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>please </button>
        </div>
        </form>
    </div>


    @endsection
