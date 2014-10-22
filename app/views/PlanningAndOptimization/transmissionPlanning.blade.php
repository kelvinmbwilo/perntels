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

                    <p> We provide transmission network designing, Line of site Analysis and survey. We also support our clients in Transmission frequency planning and optimization and providing link budgeting.  </p>
                    <br>
                    <p> Our planners are competent working with different planning tools such as Mentum planet, Attol, Asset, iBwave and Pathloss. </p>
                    <br>

                </div>
            </div>

        </div>
    </div>
</div>

@stop