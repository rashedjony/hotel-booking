@extends('adminlte::page')

@section('title', 'Member List')

@section('content_header')
    <h1 style="margin-top: 20px"><strong>Edit Category</strong></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            @if(Session::has('update'))
                <div class="alert alert-info">
                    {{ Session::get('update') }}
                </div>
            @endif
        </div>
    </div>
   
        <div class="col-md-4 well">
            <div class="row">
                {!! Form::model($editCat, array('route'=> array('category.update', $editCat->id), 'method'=>'PUT')) !!}
                <div class="form-group">
                    {{ Form::label('category', 'Category Name') }}
                    {{ Form::text('cname', null, array('class' => 'form-control')) }}
                </div>
                <div class="fomr-group">
                    {!! Form::label('status', 'Status') !!}
                    {!! Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive')); !!}
                </div>
                <hr>
                <div class="form-group">                
                    {{ Form::submit('Update', array('class' => 'btn btn-warning')) }}
                    {!! Form::close() !!}
                </div>                
            </div>
            
        </div>
    
@stop