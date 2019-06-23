@extends('adminlte::page')

@section('title', 'Basa | Payment Category')

@section('content_header')
    <h1 style="margin-top: 20px"><strong>Payment Types | Category</strong></h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if(Session::has('delete'))
                    <div class="alert alert-danger">
                        {{ Session::get('delete') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="col-md-8">
                <form action="{{ route('category.store') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="col-md-6">
                    <div class = "form-group">
                        <label for ="name" class = "col-sm-3 control-label">Category Name</label>
                        <div class ="col-sm-8">
                        <input type ="text" class ="form-control" name="cname" placeholder ="payment type name...">
                        @if($errors->has('cname'))
                            <span style="color: red">{{ $errors->first('cname') }}</span>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class ="form-group">
                        <label for ="Status" class ="col-sm-2 control-label">Status</label>
                        <div class ="col-sm-9">
                        <select name="status" class="form-control">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                        @if($errors->has('status'))
                            <span style="color: red">{{ $errors->first('status') }}</span>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class = "form-group">                        
                        <button type ="submit" class ="btn btn-success">Add New</button>                       
                    </div>
                </div>
                </form>
            </div>
                </div>
            </div>
            
        </div>
   </div>
    <div class="row">
         <div class="col-md-6">
         <h4><strong>Categories List</strong></h4>
         <table class="table table-striped">
            <thead style="background-color: #eeeeee">
                <tr>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $ptypes)
                <tr>
                    <td>{{ $ptypes->cname }}</td>
                    <td>{{ $ptypes->status }}</td>
                    <td>
                        <ul class="list-inline">
                            <li><a href="{{ route('category.edit', $ptypes->id) }}" class="btn btn-xs btn-default">Edit</a></li>
                            <li>
                                {!! Form::open(['method'=>'DELETE', 'route'=>['category.destroy', $ptypes->id]]) !!}
                                {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger'])!!}
                                {!! Form::close()!!}
                            </li>
                        </ul>
                        
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
         </table>
         </div>         
    </div>
    
@stop