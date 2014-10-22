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
                    <h5>Civil Works & Buildings</h5>
                </div>
                <div class="panel-body">

                    <p> In its state of expanding, Perntels has introduced the discipline of civil works that deals with the design,
                        construction, Tower and maintenance of the physical and naturally built environment, including works like roads,
                        bridges, canals, dams and buildings. Our Civil department works with different Municipals, Mobile operators and
                        Government on infrastructure and road construction.
                        We offer design and construction-related services for new building as well as provide expansion,
                        renovation and refurbishment of existing facilities.
                    </p>
                    <br>
                    <p>
                        Building including:
                        <ul style="list-style: outside; margin-left: 56px">
                            <li>Commercial facilities</li>
                            <li>Office corporate and educational buildings</li>
                            <li>Retail and mixed use centers</li>
                            <li>Health care facilities</li>
                            <li>Research and laboratory facilities</li>
                            <li>Special structures like construction of telecoms towers.</li>
                        </ul>
                    </p>
                    <br>

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
                    <img class="image img-responsive" src="{{ asset('wp-content/perntels/cwnb/civilhome.png')}}"/>
                </div>
            </div>
        </div>

    </div>
</div>

@stop