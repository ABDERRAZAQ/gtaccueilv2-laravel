
@extends('layouts.master')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <!-- [ page content ] start -->
                <div class="row">

                    <!-- page statustic card start -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow">$30200</h4>
                                        <h6 class="text-muted m-b-0">All Earnings</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart-2 f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-yellow">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green">290+</h4>
                                        <h6 class="text-muted m-b-0">Page Views</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-file-text f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red">145</h4>
                                        <h6 class="text-muted m-b-0">Task</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-calendar f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue">500</h4>
                                        <h6 class="text-muted m-b-0">Downloads</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-thumbs-down f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page statustic card end -->

                    <div class="col-xl-8 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Sales Analytics</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                        <li><i class="feather icon-trash close-card"></i></li>
                                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div id="sales-analytics" style="height: 360px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h3>20500</h3>
                                <p class="text-muted">Site Analysis</p>
                                <div id="seo-anlytics1" style="height:50px"></div>
                            </div>
                        </div>
                        <div class="card bg-c-blue text-white widget-visitor-card">
                            <div class="card-block-small text-center">
                                <h2>5,678</h2>
                                <h6>Daily visitor</h6>
                                <i class="feather icon-file-text"></i>
                            </div>
                        </div>
                        <div class="card bg-c-yellow text-white widget-visitor-card">
                            <div class="card-block-small text-center">
                                <h2>5,678</h2>
                                <h6>Last month visitor</h6>
                                <i class="feather icon-award"></i>
                            </div>
                        </div>
                    </div>

                    <!-- seo start -->
                    <div class="col-xl-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Allocation</h5>
                                <div class="card-header-right">                                                             <ul class="list-unstyled card-option">                                                                 <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>                                                                 <li><i class="feather icon-maximize full-card"></i></li>                                                                 <li><i class="feather icon-minus minimize-card"></i></li>                                                                 <li><i class="feather icon-refresh-cw reload-card"></i></li>                                                                 <li><i class="feather icon-trash close-card"></i></li>                                                                 <li><i class="feather icon-chevron-left open-card-option"></i></li>                                                             </ul>                                                         </div>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div id="allocation-map" style="height:250px"></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div id="allocation-chart" style="height:250px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h3>$16,756</h3>
                                        <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                                    </div>
                                    <div class="col-6">
                                        <div id="seo-chart1" style="height:50px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h3>49.54%</h3>
                                        <h6 class="text-muted m-b-0">Bounce Rate<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                                    </div>
                                    <div class="col-6">
                                        <div id="seo-chart2" style="height:50px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h3>1,62,564</h3>
                                        <h6 class="text-muted m-b-0">Products<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                                    </div>
                                    <div class="col-6">
                                        <div id="seo-chart3" style="height:50px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- seo end -->

                </div>
                <!-- [ page content ] end -->
            </div>
        </div>
    </div>
</div>
@endsection
