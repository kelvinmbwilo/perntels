@extends('layout.master')

@section('body')

<section class="clearfix wpb-container " xmlns="http://www.w3.org/1999/html"><div class="wpb-inner " ><div class="row">
            <div class="col-lg-12 wpb_column vc_column_container">
                <div class="wpb_wrapper">

                    <section class="widget wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper widget-content">
                            <div class="contact-form-content">

                                <div class="media">
                                    <div class=""><i class="fa fa-lightbulb-o"> </i>
                                    <div class="media-body">
                                       {{ $project->title }}<br />
                                       <br />
                                       </div>
                                </div></div>
                                <div class="media">
                                    <div class="pull-left rounded"></div>
                                    <div class="media-body">
                                        <p>{{ $project->introduction }}</p>
                                        <br>
                                        <p>{{ $project->body }}</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
</section>

@stop