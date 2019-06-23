@extends('adminlte::page')

@section('title', 'BASA | Transactions')

@section('content')
<div class="col-lg-12">
    <div class="row">
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $summery->sum('total') }}</h3>
                <strong>Total Paid Amount</strong>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          @foreach($summery as $asummery)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $asummery->total }}</h3>
                <strong>{{ $asummery->category }}</strong>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          @endforeach
          <!-- ./col -->
        </div>
        <h3>Advanced Search</h3>
        <!-- search form -->
        <div class="panel panel-primary">
            <div class="panel-body">            
        <form role="search" action="{{ url('search-transaction') }}" method="GET">
            <div class="col-md-4">
            <label for="start date">Select Dates</label>
                <div class="input-group input-daterange">                    
                    <input type="text" class="form-control datepicker" placeholder="start date" name="from">
                    <div class="input-group-addon">to</div>                    
                    <input type="text" class="form-control datepicker" placeholder="end date" name="to">
                </div>
                @if($errors->has('from'))
                        <div style="color: red">{{ $errors->first('from', 'Select Start Date') }}</div>
                    @endif
                @if($errors->has('to'))
                    <div style="color: red">{{ $errors->first('to', 'Select End Date') }}</div>
                @endif
            </div>
            <div class="col-md-2">
                <div class="input-group">   
                    <label for="transactionId">Transaction ID</label>             
                    <input type="text" class="form-control" name="tid"> 
                </div>
                @if($errors->has('tid'))
                    <div style="color: red">{{ $errors->first('tid', 'Input Transaction ID') }}</div>
                @endif
            </div>
            <div class="col-md-2">
                <div class="input-group">
                    <label for="transactionId">Category</label>
                    <select name="cate" class="form-control">
                        <option value="">All</option> 
                        @foreach($category as $acategory)
                        <option value="{{ $acategory->cname }}">{{ $acategory->cname }}</option> 
                        @endforeach                       
                    </select>
                    @if($errors->has('cate'))
                        <div style="color: red">{{ $errors->first('cate', 'Input Transaction ID') }}</div>
                    @endif
                </div>
            </div>
            
            <div class="input-group">
            <label for="start date"></label>
            <input type="submit" class="btn btn-primary" value="SEARCH" style="margin-top: 25px">
            </div>
        </form> 
            </div>
        </div>
           
    </div>
    <div class="row">
    <h3>All Transaction</h3>
    <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">MID</th>
                <th class="text-center">Transaction ID</th>
                <th class="text-center">Bank Transactin ID</th>
                <th class="text-center">Total Amount</th>                
                <th class="text-center">Store Amount</th>
                <th class="text-center">Single Amount</th>
                <th class="text-center">Category</th>
                <th class="text-center">Details</th>
                <th class="text-center">Paid By</th>
                <th class="text-center">Paid Date</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaction as $history)
                <tr>
                    <td class="text-center">{{ $history->mid }}</td>
                    <td class="text-center">{{ $history->transaction_id }}</td>
                    <td class="text-center">{{ $history->bank_trans_id }}</td>                    
                    <td class="text-center">{{ $history->total_paid }}</td>
                    <td class="text-center">{{ $history->store_amount }}</td>
                    <td class="text-center">{{ $history->single_amount }}</td>
                    <td class="text-center">{{ $history->category }}</td>
                    <td class="text-center">{{ $history->category_details }}</td>
                    <td class="text-center">{{ $history->paid_by }}</td>
                    <td class="text-center">{{ $history->trans_date }}</td>
                    <td class="text-center">Success</td>
                </tr>
            @endforeach
        </tbody>       
    </table>
    </div>
</div>

@stop