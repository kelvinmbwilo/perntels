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
        <div class="image-detail">
            <div style="padding-top: 20px; padding-left: 8px;" class="panel">
                <div class="panel-heading">
                    <h5>SITE SHARING PLANS</h5>
                </div>
                <div class="panel-body">
                    <p>
                        Increasing competition, along with investments in ever-changing technology, has been pushing telecom operators
                        towards new ways of maintaining operation costs through site sharing. Perntels surveys existing telecom sites
                        for new tenants by providing all plans according to the customer needs, like RF plans, transmissions plans,
                        tower space plans and drawings, equipment space drawings, power plans etc. We have surveyed and implemented
                        over 200 sites for Airtel Tanzania.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-6 col-sm-6 pull-right">
        <div class="image">
            <div class="panel">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/cwnb/site.png')}}"/>
                </div>
            </div>
        </div>

    </div>
</div>

@stop