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
                    <h3 class="bold">Site Audit</h3>
                </div>
                <div class="panel-body">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/pno/siteaudit.png')}}"/>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-6 col-sm-6 ">
        <div class="image-detail">
            <div style="padding-top: 20px; padding-left: 8px;" class="panel">

                <div class="panel-body">

                    <p> Perntels have competent engineers with good understanding of telecommunication network who can identify and audit different assets at site. Our engineers are also capable of auditing RF and Transmission services’ parameters for optimization and service improvement. </p>
                    <br>
                    <p> We also audit and provide solutions to site power systems for better performance and energy savings. </p>
                    <br>

                </div>
            </div>

        </div>
    </div>
</div>

@stop