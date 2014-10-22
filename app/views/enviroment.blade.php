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
                    <p>It is our company policy, and the Occupational Health and Safety (Tanzania) Act 2003 that all staffs, guests and anyone who work with us to receive appropriate health and safety induction course necessary to protect his or her health and their surrounding environment.</p><br>

                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/env/env1.png')}}"/>

                </div>
                <div class="panel-body col-md-6" style="padding: 20px">
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/env/env2.png')}}"/><br><br><br>
                    
                 <p>This training includes information to provide employees or non-employee person with knowledge and skills needed to work in a safe, healthful and environmentally protective manner. The HSE Training Program has been designed to meet the requirements of OSHA (Occupational Safety & Health Authority of Tanzania) and other regulatory agencies.
                   We also review and incorporate the customer's safety program into our works programs to meet all safety concerns specific to their project.</p>
                </div>
            </div>
        </div>
    </div></section>

@stop