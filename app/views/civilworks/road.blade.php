@extends('civilworks.civilworks')

@section('content')

<?php
/**
 * Created by PhpStorm.
 * User: isaiah
 * Date: 9/30/14
 * Time: 2:03 PM
 */ ?>

<div class="row">
    <div class="col-md-6 col-sm-6 pull-left">
        <div class="image">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="bold">Building Constructions</h3>
                </div>
                <div class="panel-body">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/cwnb/buildingconstruction.png')}}"/><br><br>

                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6 col-sm-6 ">
        <div class="image-detail">
            <div style="padding-top: 20px; padding-left: 8px;" class="panel">

                <div class="panel-body">

                    <p> As a contractor Perntels through its civil work division has a number of
                        projects in constructing buildings for different purposes like offices, stores, schools, houses and warehouses.
                    </p>
                    <br>

                </div>
            </div>

        </div>
    </div>
</div>

@stop