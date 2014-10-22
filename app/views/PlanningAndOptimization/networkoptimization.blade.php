@extends('PlanningAndOptimization.planningMaster')

@section('content')
<?php
/**
 * Created by PhpStorm.
 * User: Isaiah
 * Date: 10/22/14
 * Time: 9:17 AM
 */
?>

<div class="row">
    <div class="col-md-6 col-sm-6 pull-left">
        <div class="image">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="bold">Network Optimization</h3>
                </div>
                <div class="panel-body">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/pno/netO.png')}}"/><br><br>

                    <p>
                        Perntels have Engineers capable for helping mobile operators dynamically manage and optimize their
                        complex GSM/GPRS/EDGE/WCDMA/HSDPA/LTE network and continue to deliver quality services to customers.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-6 col-sm-6 ">
        <div class="image-detail">
            <div style="padding-top: 20px; padding-left: 8px;" class="panel">
                <div class="panel-body">

                    <p> Our portfolio of network optimization solutions includes;  </p>

                    <ul style="list-style: outside; margin-left: 56px">
                        <li> Monitoring, reporting of network capacity and performance </li>
                        <li> KPI-based problem solving and troubleshooting.</li>
                        <li>Optimizing capacity and performance in both a reactive and proactive way.</li>
                        <li>Implementation of additional hardware solutions.</li>
                        <li>Multi-layer optimization to ensure all technology layers work seamlessly together.</li>
                    </ul>

                    <br>

                </div>
            </div>

        </div>
    </div>
</div>

@stop