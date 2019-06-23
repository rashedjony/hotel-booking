@extends('adminlte::page')

@section('title', 'BASA | Notification')

@section('content_header')
    <h1 style="margin-top: 20px"><strong>Notification List</strong></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            @if(Session::has('delete'))
                <div class="alert alert-danger">
                    {{ Session::get('delete') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($notificationsList as $list)
                                <tr>
                                    <td style="width: 15%">{{ $list->title }}</td>
                                    <td style="width: 70%">{{ $list->message }}</td>
                                    <td style="width: 15%">
                                        <ul class="list-inline">
                                            <li><a class="btn btn-xs btn-primary" href="{{ route('notifications.edit', $list->id) }}">Edit</a></li>
                                            <li>
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['notifications.destroy', $list->id]]) !!}
                                            {!! Form::submit('delete',['class'=>'btn btn-xs btn-danger'])!!}
                                            {!! Form::close() !!}
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <div class="row  well">
                    <h3>Add New Notification</h3>
                    <form action="{{ route('notifications.store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" placeholder="type title" class="form-control">
                            @if($errors->has('title'))
		                        <span style="color: red">{!! $errors->first('title') !!}</span>
		                    @endif
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" class="form-control" id="" cols="30" placeholder="type message" rows="10"></textarea>
                            @if($errors->has('message'))
		                        <span style="color: red">{!! $errors->first('message') !!}</span>
		                    @endif
                        </div>
                        <div class="form-group">
                            <label for="category">Select Category</label>
                            <select name="category" id="" class="form-control">
                                <option value="monthly">Monthly</option>
                                <option value="yealry">Yearly</option>
                                <option value="picnic">Picnic</option>
                            </select>
                            @if($errors->has('category'))
		                        <span style="color: red">{!! $errors->first('category') !!}</span>
		                    @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Published</button>
                        </div>
                    </form>
                    </div>
                    
                </div>
            </div>            
        </div>
    </div>
    
@stop