@extends('adminlte::page')

@section('title', 'Dashboard | BASA')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
        <!-----first row grid column---->
        <div class="col-lg-12">
          <div class="row">            
                <div class="col-lg-3">
                    <!-- small box -->
                    <div class="small-box bg-default">
                    <div class="inner">
                        <h3>{{ $members->count() }}</h3>
                        <strong>Total Members</strong>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3">
                    <!-- small box -->
                    <div class="small-box bg-success">
                    <div class="inner">                
                        <h3>{{ number_format($total->sum('total_paid'), 2) }} <spna style="font-size: 12px">BDT</spna></h3>
                        <strong>Total Paid</strong>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    
                    </div>
                </div>
                @foreach($summery as $asummery)
                <div class="col-lg-2">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ number_format($asummery->total) }} <span style="font-size: 12px">BDT</span></h3>
                            <strong>Total {{ $asummery->category }}</strong>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- ./col -->
            </div>   <!-----end first row------>
            <!-- 2nd row -->
            
            <!-- end 2nd row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><strong>PAYMENT SUMMERY</strong></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-5">
                                    <label style="font-weight:bold;">Today Pay</label>
                                </div>
                                <div class="col-md-6 col-6">
                                    <?php
                                        $today = DB::table('transactions')
                                                ->where('created_at', date('Y-m-d'))
                                                ->get();
                                    ?>
                                   <h4>{{ number_format($today->sum('total_paid')) }} BDT</h4> 
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-5">
                                    <label style="font-weight:bold;">This Month Pay</label>
                                </div>
                                <div class="col-md-6 col-6">
                                    <?php 
                                        $months = DB::table('transactions')
                                                    ->whereMonth('created_at', date('m'))
                                                    ->get();
                                    ?>    
                                    <h4>{{ number_format($months->sum('total_paid')) }} BDT</h4>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-5">
                                    <label style="font-weight:bold;">This Year Pay</label>
                                </div>
                                <div class="col-md-6 col-6">
                                    <?php 
                                          $year = DB::table('transactions')
                                                    ->whereYear('created_at', date('Y'))
                                                    ->get();
                                                      
                                    ?>
                                     <h4>{{ number_format($year->sum('total_paid')) }} BDT</h4> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        
        
        
@stop