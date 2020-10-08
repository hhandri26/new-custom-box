@extends('layouts.admin_tmp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Dashboard<small>Admin</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3 class="m-t-10"><i class="fa fa-picture-o"></i><b> </b></h3>
                                <p class="text-muted">Total Request</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3 class="m-t-10"><i class="fa fa-users"></i><b></b></h3>
                                <p class="text-muted">Total Member</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3 class="m-t-10"><i class="fa fa-shopping-bag"></i><b> </b></h3>
                                <p class="text-muted">Total Transaction</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center b-0">
                                <h3 class="m-t-10"><i class="fa fa-dropbox"></i><b> </b></h3>
                                <p class="text-muted">Total Piso</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Transaction<small>Per Month</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <canvas id="patroli"></canvas>
                </div>
            </div>
        </div>
    </div>
    
</div>





<!-- script chart -->


@endsection
@section('more_js')
<script src="{{asset('public/plugins/chart-js/Chart.js')}}"></script>
<script>

</script>

@endsection
