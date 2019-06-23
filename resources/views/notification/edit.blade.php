@extends('adminlte::page')

@section('title', 'Member List')

@section('content_header')
    <h1 style="margin-top: 20px"><strong>Edit Notification</strong></h1>
@stop

@section('content')
<div class="row" >
                <div class="col-md-4">                    
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }} <a href="{{ route('notifications.index') }}" class="pull-right">Back to list</a>  
                    </div>                                       
                    @endif
                                       
                </div>
</div>

                <div class="col-md-6">
                    <div class="row  well"> 
                    {{ Form::model($notification, array('route' => array('notifications.update', $notification->id), 'method' => 'PUT')) }}
                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('message', 'Message') }}
                        {{ Form::textarea('message', null, array('class' => 'form-control', 'id' => '20')) }}
                    </div>                    
                    {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
                    {{ Form::close() }}
                    </div>
                </div>

@stop