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
                    <h3 class="bold">Site Sharing</h3>
                </div>
                <div class="panel-body">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/pno/sitesharingplans.png')}}"/>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6 col-sm-6 ">
        <div class="image-detail">
            <div style="padding-top: 20px; padding-left: 8px;" class="panel">

                <div class="panel-body">

                    <p> We survey existing telecom sites for new tenants by providing all plans according to the customer needs, like RF plans, transmissions plans, tower space plans and drawings, equipment space drawings, power plans etc. </p>
                    <br>
                    <p> We have surveyed and implemented over 200 sites for Airtel Tanzania. This included site survey and report plans according to the client needs as well as implementation of the plans that include antenna poles supply, installations, slab constructions and power preparations. </p>
                    <br>

                </div>
            </div>

        </div>
    </div>
</div>

@stop