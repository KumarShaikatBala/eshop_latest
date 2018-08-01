@extends ('backend.master')
@section('content')

    <section class="content profile-page">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Welcome to suppliers name</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class=" card patient-profile">
                        <img src="assets/images/image-1.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>About suppliers</h2>
                        </div>
                        <div class="body">
                            <strong>Name</strong>
                            <p>Will Smith</p>
                            <strong>Company</strong>
                            <p>UI UX Design</p>
                            <strong>Email ID</strong>
                            <p>will.smith@info.com</p>
                            <strong>Phone</strong>
                            <p>+123 456 789</p>
                            <hr>
                            <strong>Address</strong>
                            <address>85 Bay Drive, New Port Richey, FL 34653</address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#report" data-toggle="tab" aria-expanded="true">Summary</a></li>
                                <li role="presentation" class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Products</a></li>
                                <li role="presentation" class=""><a href="#report-chart" data-toggle="tab" aria-expanded="false">Billing</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="report">
                                    <div class="wrap-reset">
                                        <div class="mypost-list">
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="info-box-4 hover-zoom-effect">
                                                        <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                                                        <div class="content">
                                                            <div class="text">Total Product</div>
                                                            <div class="number">27</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="info-box-4 hover-zoom-effect">
                                                        <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                                                        <div class="content">
                                                            <div class="text">Total Stock</div>
                                                            <div class="number">12</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="info-box-4 hover-zoom-effect">
                                                        <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                                                        <div class="content">
                                                            <div class="text">Total Sell</div>
                                                            <div class="number">2505</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="post-box">
                                                <h4>Recent Products</h4>
                                                <div class="body p-l-0 p-r-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Username</th>
                                                                <th>Diseases</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Virginia </td>
                                                                <td>Rose</td>
                                                                <td>@Rose</td>
                                                                <td><span class="label label-danger">Fever</span> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Julie </td>
                                                                <td>Gaylord</td>
                                                                <td>@Julie </td>
                                                                <td><span class="label label-info">Cancer</span> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Jacqueline </td>
                                                                <td>Woods</td>
                                                                <td>@Woods</td>
                                                                <td><span class="label label-warning">Lakva</span> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Jonathan </td>
                                                                <td>Lewis</td>
                                                                <td>@Jonathan </td>
                                                                <td><span class="label label-success">Dental</span> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Margaret </td>
                                                                <td>Griffin</td>
                                                                <td>@Margaret </td>
                                                                <td><span class="label label-info">Cancer</span> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Joseph </td>
                                                                <td>Hunter</td>
                                                                <td>@Hunter</td>
                                                                <td><span class="label label-success">Dental</span> </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="timeline">
                                    <div class="timeline-body">
                                        <div class="timeline m-border">
                                            <div class="timeline-item">
                                                <div class="item-content">
                                                    <div class="text-small">Just now</div>
                                                    <p>Discharge.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">11:30</div>
                                                    <p>Routine Checkup</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning border-l">
                                                <div class="item-content">
                                                    <div class="text-small">10:30</div>
                                                    <p>Operation </p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning">
                                                <div class="item-content">
                                                    <div class="text-small">3 days ago</div>
                                                    <p>Routine Checkup</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-danger">
                                                <div class="item-content">
                                                    <div class="text--muted">Thu, 10 Mar</div>
                                                    <p>Routine Checkup</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">Sat, 5 Mar</div>
                                                    <p>Routine Checkup</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-danger">
                                                <div class="item-content">
                                                    <div class="text-small">Sun, 11 Feb</div>
                                                    <p>Blood checkup test</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">Thu, 17 Jan</div>
                                                    <p>Admit patient ward no. 21</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="report-chart">
                                    <h4>ECG Report</h4>
                                    <div class="stats-row">
                                        <div class="stat-item col-blue">
                                            <h6>Pulse</h6> <b>76</b></div>
                                        <div class="stat-item col-blush">
                                            <h6>BP</h6> <b>112</b></div>
                                    </div>
                                    <div id="real_time_chart" class="flot-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="657" height="320" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 657px; height: 320px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 33px; top: 298px; left: 8px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 59px; top: 298px; left: 66px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 59px; top: 298px; left: 130px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 59px; top: 298px; left: 194px; text-align: center;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 59px; top: 298px; left: 258px; text-align: center;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 33px; top: 298px; left: 329px; text-align: center;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 59px; top: 298px; left: 386px; text-align: center;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 59px; top: 298px; left: 450px; text-align: center;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 59px; top: 298px; left: 514px; text-align: center;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 59px; top: 298px; left: 578px; text-align: center;">90</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 33px; top: 298px; left: 649px; text-align: center;">100</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 8px; left: 1px; text-align: right;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 293px; left: 1px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 236px; left: 1px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 179px; left: 1px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 122px; left: 1px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 65px; left: 1px; text-align: right;">80</div></div></div><canvas class="flot-overlay" width="657" height="320" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 657px; height: 320px;"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="color-bg"></div>
@endsection