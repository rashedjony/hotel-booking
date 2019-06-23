@extends('adminlte::page')

@section('title', 'BASA | Settings')

@section('content')
<div class="col-lg-12">
    <div class="row">
        <div class="col-md-6">
        @if(Session::has('update'))
            <div class="alert alert-success">
                {{ Session::get('update') }}
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading"><strong>UPDATE PASSWORD</strong></div>
            <div class="panel-body">
                <form action="{{ url('update-password', Auth::id()) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-5">
                        <label style="font-weight:bold;">New Password</label>
                    </div>
                    <div class="col-md-8 col-6">
                        <input type="password" name="password" class="form-control">
                        @if($errors->has('password'))
                            <div style="color: red">{!! $errors->first('password', 'Password Minimum 6 Digit') !!}</div>
                        @endif
                    </div>                    
                </div>                
                <hr />
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-5">
                        <label style="font-weight:bold;">Confirm Password</label>
                    </div>
                    <div class="col-md-8 col-6">
                        <input type="password" name="confirm" class="form-control">
                        @if($errors->has('confirm'))
                            <div style="color: red">{!! $errors->first('confirm', 'Password does not matched') !!}</div>
                        @endif
                    </div>                   
                </div>                
                <hr />
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-5">
                        <label style="font-weight:bold;"></label>
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="submit" value="Update Password" class="btn btn-warning">
                    </div>
                    <div class="col-md-2 col-6">
                        <a href="{{ url('settings') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- end panel -->
        </div>
        <!-- end col 6 -->
    </div>
    <!-- end row     -->
</div>
<!-- end col lg 12 -->
@stop