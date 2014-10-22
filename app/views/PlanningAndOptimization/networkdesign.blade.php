@extends('PlanningAndOptimization.planningMaster')

@section('content')

<?php
/**
 * Created by PhpStorm.
 * User: isaiah
 * Date: 9/30/14
 * Time: 12:04 PM
 */ ?>

<div class="row">
    <div class="col-md-6 col-sm-6 ">
        <div class="image-detail">
            <div style="padding-top: 20px; padding-left: 8px;">

                <h5>Network Design and Optimization</h5>
                <img class="image img-responsive" src="{{ asset('wp-content/perntels/pno/network.png')}}"/>
                <br>
                <br>
                <p>
                    Perntels has a wide experience on network design, planning and site surveys where we have planned and surveyed over
                    1000 sites for Airtel and Vodacom across Tanzania. During survey we provide reports with:
                </p>
            </div>

        </div>
    </div>
    <div class="col-md-6 col-sm-6 pull-right">
        <div class="panel">
            <div class="panel-heading" >

            </div>
            <div class="panel-body">
                <ul style="list-style: outside">
                    <li>	Detailed Technical Site Survey Report that complies with Customer Requirements.</li>
                    <li>	Coverage prediction with Softwares such as Asset, Mentum Planet, IBwave, Attol and Others</li>
                    <li>	Site Documentation which includes Equipments Layout Drawing.</li>
                    <li>	Outdoor and Indoor cable routing.</li>
                    <li>	Quantities of materials.</li>
                </ul>
            </div>

        </div>
    </div>
</div>

@stop