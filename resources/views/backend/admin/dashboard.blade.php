@extends ('backend.master')
@section('content')
<section class="content profile-page">
<div class="container-fluid">
<div class="block-header">
<h2>Welcome Admin</h2>
<a class="btn  btn-raised btn-danger waves-effect" href="{{route('adminlogout')}}" >Log Out</a>
<small class="text-muted">Welcome to Deshi Doctor application</small>
</div>
<div class="row clearfix">
<div class="col-lg-10 col-md-8 col-sm-6 col-xs-12 col-lg-offset-1">
    <div class="card">
        <div class="body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="report">
                    <div class="wrap-reset">
                        <div class="mypost-list">
                            <hr>
                            <div class="post-box">
                                <h4>Suppliers</h4>
                                <div class="body p-l-0 p-r-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <?php $sl=0; ?>

                                            <tr>
                                                <th>Serial</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Approval[0=not approve]</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 0?>
                                            @foreach($suppliers as $supplier)
                                                <input type="hidden" id="sId<?php echo $i;?>" value="{{$supplier->id}}">
                                            <tr>
                                                <td>{{++$sl}}</td>
                                                <td>{{$supplier->name}}</td>
                                                <td>{{$supplier->mobile}}</td>
                                                <td>{{$supplier->approval}}</td>
                                                <td>
                                                    @if( $supplier->approval === 0 )
                                                <a href="{{url('supplier/'.$supplier->id)}}"><span id="status" class="label label-danger">Change approve status</span></a>
                                                        @else
                                                        <a href="{{url('supplier/'.$supplier->id)}}"><span class="label label-success">Change approve status</span></a>
                                                      @endif



                                                </td>
                                            </tr>
                                            </tbody>

                                            <?php $i++ ;?>
                                            @endforeach
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