@extends('adminlte::page')

@section('title', 'Member List')

@section('content_header')
    <h1 style="margin-top: 20px"><strong>BCS Forum Member List</strong></h1>
@stop

@section('content')
        <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Member ID</th>
                <th class="text-center">Service ID</th>
                <th class="text-center">Branch ID</th>
                <th class="text-center">Phone Number</th>                
                <th class="text-center">Email</th>
                <th class="text-center">Office Name</th>
                <th class="text-center">Designation</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($memberList as $mlist)
                <tr>
                    
                    <td class="text-center">{{ $mlist->name }}</td>
                    <td class="text-center">{{ $mlist->member_id }}</td>
                    <td class="text-center">{{ $mlist->service_id }}</td>
                    <td class="text-center">{{ $mlist->batch_id }}</td>
                    <td class="text-center">{{ $mlist->phone_number }}</td>                    
                    <td class="text-center">{{ $mlist->email }}</td>
                    <td class="text-center">{{ $mlist->office_name }}</td>
                    <td class="text-center">{{ $mlist->designation }}</td>
                    <td class="text-center"><a href="{{ url('member-details', $mlist->id) }}">View</a></td>
                </tr>
            @endforeach
        </tbody>       
    </table>   

@stop
