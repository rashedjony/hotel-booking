@extends('adminlte::page')

@section('title', 'BASA | Transactions')

@section('content')
<style>
hr {
    margin-top: 10px;
    margin-bottom: 10px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
<div class="col-lg-12">
    <div class="row">
        <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <img src="{{ URL::to('uploads/images/' . $member['image']) }}" alt="{{ $member['image'] }}" class="profile-user-img img-circle" />
                <h3 class="pull-right"><button class="btn btn-success btn-xs">Active</button></h3>
            </div>
            <div class="panel-body">
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Full Name</label>
                </div>
                <div class="col-md-8 col-6">
                    {{ $member['name'] }}
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Member ID</label>
                </div>
                <div class="col-md-8 col-6">
                    {{ $member['member_id'] }}
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Service ID</label>
                </div>
                <div class="col-md-8 col-6">
                    {{ $member['service_id'] }}
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Batch ID</label>
                </div>
                <div class="col-md-8 col-6">
                    {{ $member['batch_id'] }}
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Phone Number</label>
                </div>
                <div class="col-md-8 col-6">
                    {{ $member['phone_number'] }}
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Office Name</label>
                </div>
                <div class="col-md-8 col-6">
                    {{ $member['office_name'] }}
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Designation</label>
                </div>
                <div class="col-md-8 col-6">
                    {{ $member['designation'] }}
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Email</label>
                </div>
                <div class="col-md-8 col-6">
                    {{ $member['email'] }}
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Member since</label>
                </div>
                <div class="col-md-8 col-6">
                    {{ $member['created_at'] }}
                </div>
            </div>
            </div>
        </div>
        </div> <!---End column 6--->
        <!-- col 6 -->
        <div class="col-md-6">
            <!---row--->
            <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ number_format($totalPay->sum('total_paid')) }} <span style="font-size: 12px; color: #32373c; font-weight: normal">BDT</span></h3>
                        <p>Total Paid</p>
                    </div>
                </div>
            </div>
            @foreach($summery as $asummery)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ number_format($asummery->total) }} <span style="font-size: 12px; color: #32373c; font-weight: normal">BDT</span> </h3>
                    <p>{{ $asummery->category }}</p>
                </div>
                </div>
            </div>
            @endforeach
          <!-- end col lg 3 -->
        </div>
            <!---end row--->  
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>Member Transaction History</strong></div>
                <div class="panel-body">
                    <table id="example" class="table table-stripe">
                        <thead>
                            <tr>
                                <th>TID</th>
                                <th>Total Paid</th>
                                <th>Category</th>
                                <th>Paid By</th>
                                <th>Transaction Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($history as $paid)
                            <tr>
                                <td>{{ $paid->transaction_id }}</td>
                                <td>{{ $paid->total_paid }}</td>
                                <td>{{ $paid->category }}</td>
                                <td>{{ $paid->paid_by }}</td>
                                <td>{{ $paid->trans_date }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end col 6 -->
    </div> <!---end row--->
</div> <!---end col 12--->

@stop