<?php
/**
 * Created by PhpStorm.
 * User: isaiah
 * Date: 10/6/14
 * Time: 10:06 AM
 */ ?>

@extends('layout.master')

@section('body')



<section class="widget blog-type ">

    <div class="wpb_wrapper widget-content contact-form-content col">

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <b><h2>Enviroment</h2></b>
                </div>
                <div class="panel-body col-md-6" style="padding: 20px">
                    <p>It is our company policy, and the Occupational Health and Safety (Tanzania) Act, 2003,   that all staff, participating guests, visitors, and others who perform work at, or for, our firm receive appropriate training necessary to protect their health and perform work in a safe and environmentally sound manner.</p><br>

                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/env/env1.png')}}"/>

                </div>
                <div class="panel-body col-md-6" style="padding: 20px">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/env/env2.png')}}"/><br><br><br>
                    <p>This training must include information regarding job hazards, possible health effects,
                        and  required work practices and procedures, as well as to provide employees with knowledge and skills needed
                        to perform work in a safe, healthful, and environmentally protective manner..
                        The EH&S Training Program has been designed to meet the requirements of OSHA (Occupational Safety & Health Authority
                    </p>
                </div>
            </div>
        </div>
    </div></section>

@stop