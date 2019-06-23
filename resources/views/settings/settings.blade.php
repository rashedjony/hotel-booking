@extends('adminlte::page')

@section('title', 'BASA | Settings')

@section('content')
<div class="col-lg-12">
    <div class="row">
        <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>USER INFO</strong></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Full Name</label>
                    </div>
                    <div class="col-md-8 col-6">
                        {{ $user['name'] }}
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Email Address</label>
                    </div>
                    <div class="col-md-8 col-6">
                        {{ $user['email'] }}
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">User Created</label>
                    </div>
                    <div class="col-md-8 col-6">
                        {{ $user['created_at'] }}
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Password</label>
                    </div>
                    <div class="col-md-8 col-6">
                        ******
                    </div>
                </div>
                <hr />
                <div class="row">
                    
                    <div class="col-md-8 col-6">
                        <a href="{{ url('change-password', Auth::id()) }}" class="btn btn-warning">Change Password</a>
                    </div>
                </div>
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