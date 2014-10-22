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
                <div class="panel-heading" style="padding: 2px">
                    <h3 class="bold">Transmission Planning</h3>
                </div>
                <div class="panel-body" style="padding: 2px">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/pno/transmissionplanning.png')}}"/>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-6 col-sm-6 ">
        <div class="image-detail">
            <div style="padding-top: 20px; padding-left: 8px;" class="panel">

                <div class="panel-body">

                    <p>
                        Transmission engineers at Perntels deliver high quality services in transmission network designing, Line Of sight LOS
                        analysis and technical site surveys. We support our clients in transmission frequency planning and link budgeting.
                        Our planners are competent working using Pathloss planning tool and others depending on client requirement
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

@stop