@extends('PlanningAndOptimization.planningMaster')

@section('content')

<?php
/**
 * Created by PhpStorm.
 * User: isaiah
 * Date: 9/30/14
 * Time: 12:25 PM
 */ ?>

<div class="row">
    <div class="col-md-6 col-sm-6 pull-left">
        <div class="image">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="bold">Drive Test And Optimization</h3>
                </div>
                <div class="panel-body">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/pno/drivetest.png')}}"/><br><br>

                    <p>
                        It is not possible to measure remotely what a mobile subscriber experiences at a given geographical area,
                        through drive testing an operator can detect and record a wide variety of actual physical and virtual
                        parameters of mobile cellular service. Perntels offers drive test service for GSM, 3G, WiMAX, EDGE / GPRS,
                        CDMA, EVDO, LTE using tools such as TERMS Investigation.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-6 col-sm-6 ">
        <div class="image-detail">
            <div style="padding-top: 20px; padding-left: 8px;" class="panel">
                <div class="panel-body">


                    <p> Perntels will work with client to analyze and profile hotspots in a network to identify the best solution to optimize the existing capacity and expand the network. In network optimization what a client can expect from us is  </p>

                    <ul style="list-style: outside; margin-left: 56px">
                        <li>Monitoring, reporting of network capacity and performance</li>
                        <li>KPI-based problem solving and troubleshooting</li>
                        <li>Optimizing capacity and performance in both a reactive and proactive way</li>
                        <li>Implementation of additional hardware solutions</li>
                        <li>Multi-layer optimization to ensure all technology layers works seamlessly together</li>
                    </ul>

                    <br>

                </div>
            </div>

        </div>
    </div>
</div>

@stop