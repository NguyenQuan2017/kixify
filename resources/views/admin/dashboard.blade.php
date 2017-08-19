@extends('admin/layouts/master')
@section('content')
<div id="content" class="ui-content ui-content-aside-overlay">
                <div class="ui-content-body">

                    <div class="ui-container">

                        <!--page title and breadcrumb start -->
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> Admin Dashboard
                                    <small>data, statistics, charts, recent reports and many more</small>
                                </h1>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--page title and breadcrumb end -->

                        <!--states start-->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-danger">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">1,3012</h1>
                                        <div class=" pull-right">53% <i class="fa fa-bolt"></i></div>
                                        <strong class="text-uppercase">NEW ORDERS</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-info">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">5,534</h1>
                                        <div class=" pull-right">65% <i class="fa fa-level-up"></i></div>
                                        <strong class="text-uppercase">new users</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-warning">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-laptop"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">$22,329</h1>
                                        <div class=" pull-right">77% <i class="fa fa-level-down"></i></div>
                                        <strong class="text-uppercase">Online Revenue</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-primary">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">$268,188</h1>
                                        <div class=" pull-right">88% <i class="fa fa-level-up"></i></div>
                                        <strong class="text-uppercase">Total Profit</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--states end-->

                    </div>

                    <!--right side widget start-->
                  
                    <!--right side widget end-->

                </div>
 </div>
@endsection 