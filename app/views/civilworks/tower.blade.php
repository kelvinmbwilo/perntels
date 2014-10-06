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
                    <h3 class="bold">Tower Construction</h3>
                </div>
                <div class="panel-body">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/cwnb/tower.png')}}"/><br><br>

                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6 col-sm-6 ">
        <div class="image-detail">
            <div style="padding-top: 20px; padding-left: 8px;" class="panel">

                <div class="panel-body">

                    <p>
                        Perntels has been implementing different telecommunication civil works for Airtel like tower
                        constructions, slab castings and rooftop poles designing and installations. We construct all
                        types of towers from Greenfield, Mini-towers for rooftops to rooftop poles. Our tower construction
                        service can also be offered in a turnkey where we deliver a complete erected tower after surveying,
                        foundation establishment, tower erection, fence installations, slab constructions and grid power connections.
                    </p>
                    <br>

                </div>
            </div>

        </div>
    </div>
</div>

@stop