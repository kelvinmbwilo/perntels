@extends('layout.master')

@section('body')
<section id="wpo-mainbody" class="page-space wpo-mainbody">
    <div class="container ">
 <div class="row">
<!-- MAIN CONTENT -->
<div id="wpo-content" class="wpo-content col-xs-12 no-sidebar" style="padding-left: 0px">
    <article id="post-24" class="post-24 page type-page status-publish hentry clearfix" style="padding-left: 0px">
        <section class="clearfix wpb-container "><div class="wpb-inner " ><div class="row">
                    <div class="col-sm-12 wpb_column vc_column_container">
                        <div class="wpb_wrapper">

                            <div id="map_canvas_YH9G4" class="map_canvas" style="width:100%;height:300px;"></div>
                            <script type="text/javascript">
                                jQuery(document).ready(function($) {
                                    var stmapdefault = '39.87093928730387,-104.79356541265878';
                                    var marker = {position:stmapdefault}
                                    jQuery('#map_canvas_YH9G4').gmap({
                                        'zoom': 14  ,
                                        'center': stmapdefault,
                                        'mapTypeId':google.maps.MapTypeId.ROADMAP,
                                        'callback': function() {
                                            var self = this;
                                            self.addMarker(marker).click(function(){
                                                //self.openInfoWindow({'content': '$location'}, self.instance.markers[0]);
                                            });
                                        },
                                        panControl: true		});
                                });
                                // jQuery(window).resize(function(){
                                // 	var stct = new google.maps.LatLng('{$latitude}','{$longitude}');
                                // 	jQuery('#map_canvas').gmap('option', 'center', stct);
                                // });
                            </script>
                        </div>
                    </div>
                </div></div></section><section class="clearfix wpb-container "><div class="wpb-inner " ><div class="row">
                    <div class="col-sm-6 wpb_column vc_column_container">
                        <div class="wpb_wrapper">

                            <section class="widget wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper widget-content">
                                    <div class="contact-form-content">
                                        <div class="media">
                                            <div class="pull-left rounded"><i class="fa fa-home"> </i></div>
                                            <div class="media-body">Perntels Company Limited<br />
                                                Mikocheni B Plot: No 33 Block "A" 2, Dar es Salaam</div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left rounded"><i class="fa fa-phone"> </i></div>
                                            <div class="media-body">(+255) 754 710 296<br />
                                                (+255) 658 444 296<br />
                                                (+255) 787 710 296</div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left rounded"><i class="fa fa-flag-o"> </i></div>
                                            <div class="media-body"><a href="mailto:one@address.com">info@pernitels.co.tz</a><br />
                                                <a href="mailto:two@address.com">main@pernitels.co.tz</a></div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left rounded"><i class="fa fa-check"> </i></div>
                                            <div class="media-body">From Monday to Friday<br />
                                                9:00 a.m. to 5:00 p.m.</div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-6 wpb_column vc_column_container">
                        <div class="wpb_wrapper">
                            <div class="wpcf7" id="wpcf7-f4-p24-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form name="" action="http://pavodemo.com/wpopal/pharmacy/contact/#wpcf7-f4-p24-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="4" />
                                        <input type="hidden" name="_wpcf7_version" value="3.9.3" />
                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-p24-o1" />
                                        <input type="hidden" name="_wpnonce" value="c2af42c456" />
                                    </div>
                                    <div class="form-group">
                                        <label for="your_name">Your Name (required)</label><br />
                                        <span class="wpcf7-form-control-wrap text-799"><input type="text" name="text-799" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="your_name" aria-required="true" aria-invalid="false" /></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="your_email">Your Email (required)</label><br />
                                        <span class="wpcf7-form-control-wrap email-257"><input type="email" name="email-257" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="your_email" aria-required="true" aria-invalid="false" /></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_subject">Subject</label><br />
                                        <span class="wpcf7-form-control-wrap text-144"><input type="text" name="text-144" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" id="contact_subject" aria-invalid="false" /></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="your_message">Your Message</label><br />
                                        <span class="wpcf7-form-control-wrap textarea-552"><textarea name="textarea-552" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" id="your_message" aria-invalid="false"></textarea></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit btn btn-outline" />
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
                        </div>
                    </div>
                </div></div></section>
    </article><!-- #post -->
</div>
<!-- //MAIN CONTENT -->

</div>
</div>
</section>


@stop