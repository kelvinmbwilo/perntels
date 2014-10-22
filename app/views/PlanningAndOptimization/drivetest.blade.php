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

                    <p> Our service is categorized into three areas; </p>
                    <ul style="list-style: decimal; margin-left: 56px">
                        <li> Single site Verification. Where we can check and provide full reports on,
                            <ul style="list-style: outside">
                                <li>Handover inter/intra cell, 2G and or 3G and packet switching and Neighbor definition</li>
                                <li>Coverage and Cross feeders</li>
                                <li>Internet connection and GPRS capabilities.</li>
                                <li>Cell reselection and video calls checks</li>
                                <li>Data/Parameter Analysis and network kpi</li>
                            </ul>
                            Then compile detailed report that assist Operators to make necessary corrective actions
                        </li>
                        <li>Clustering.
                            <ul style="list-style: outside">
                                <li>Operator aims at improving or troubleshooting QoS for its subscribers, Engineers measures
                                    the kpi and come with recommendations how to improve QoS of a given cluster.
                                </li>
                            </ul>
                        </li>
                        <li>Benchmarking
                            <ul style="list-style: outside">
                                <li>Competition in Quality of Service between operators make it necessary to do benchmarking Our competent
                                    engineers identify the key geographical areas to record network kpi’s for the selected operators and
                                    hence provide  recommendations for QoS improvement .
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <br>

                </div>
            </div>

        </div>
    </div>
</div>

@stop