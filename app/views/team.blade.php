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
                    <b><h2>Teams</h2></b>
                </div>
                
                <div class = "panel-body">
                  <p> The firm has seasonal, temporally and permanent staffs depending on the requirement at times.
                  The company has experienced teams of Electrical, Civil Works & Telecommunication Engineers, Technicians, Linesmen and Electricians; Mechanical Engineers, technicians and artisans who are equipped with skills acquired while working in a variety of conditions and scenarios.</p>
                </div>
                
	<div class="col-sm-12 col-md-12 wpb_column vc_column_container">
		<div class="wpb_wrapper">
			<div class="wpb_revslider_element no-margin-bottom wpb_content_element"><!-- START REVOLUTION SLIDER 4.1.4 fullwidth mode -->

<div id="rev_slider_6_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:370px;">
	<div id="rev_slider_6_1" class="rev_slider fullwidthabanner" style="display:none;max-height:370px;height:370;">
<ul>	<!-- SLIDE  -->
	<li data-transition="random" data-slotamount="7" data-masterspeed="300" >
		<!-- MAIN IMAGE -->
		<img src="{{asset('wp-content/perntels/team4.png')}}"  alt="slide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption layer_1 randomrotate tp-resizeme"
			data-x="98"
			data-y="100" 
			data-speed="300"
			data-start="500"
			data-easing="Power3.easeInOut"
			data-endspeed="300"
			style="z-index: 2">OUR TEAMS
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption layer_2 skewfromrightshort tp-resizeme"
			data-x="89"
			data-y="126" 
			data-speed="300"
			data-start="800"
			data-easing="Power3.easeInOut"
			data-endspeed="300"
			style="z-index: 3">Perntels
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption layer_button randomrotate tp-resizeme"
			data-x="89"
			data-y="303" 
			data-speed="300"
			data-start="1100"
			data-easing="Power3.easeInOut"
			data-endspeed="300"
			style="z-index: 4"><a href="{{url('/')}}">VIEW MORE <i class="fa fa-caret-right"></i> </a>
		</div>
	</li>
	<!-- SLIDE  -->
	<li data-transition="random" data-slotamount="7" data-masterspeed="300" >
		<!-- MAIN IMAGE -->
		<img src="{{asset('wp-content/perntels/team1.png')}}"  alt="bg-slider2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption layer_1 randomrotate tp-resizeme"
			data-x="165"
			data-y="105" 
			data-speed="300"
			data-start="500"
			data-easing="easeInOutBounce"
			data-endspeed="300"
			style="z-index: 2">OUR TEAMS
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption layer_2 randomrotate tp-resizeme"
			data-x="161"
			data-y="131" 
			data-speed="1000"
			data-start="800"
			data-easing="easeInOutBounce"
			data-endspeed="1000"
			style="z-index: 3">Telecommunication <br/>Department
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption layer_button randomrotate tp-resizeme"
			data-x="167"
			data-y="314" 
			data-speed="300"
			data-start="1100"
			data-easing="easeInOutBounce"
			data-endspeed="300"
			style="z-index: 4"><a href="{{route('telecoms')}}">VIEW MORE <i class="fa fa-caret-right"></i> </a>
		</div>
	</li>
	<!-- SLIDE  -->
	<li data-transition="random" data-slotamount="7" data-masterspeed="300" >
		<!-- MAIN IMAGE -->
		<img src="{{asset('wp-content/perntels/team2.png')}}"  alt="bg-slider3"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption layer_1 skewfromright tp-resizeme"
			data-x="93"
			data-y="97" 
			data-speed="1000"
			data-start="500"
			data-easing="easeOutBounce"
			data-endspeed="1000"
			style="z-index: 2">OUR TEAMS
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption layer_2 skewfromleft tp-resizeme"
			data-x="89"
			data-y="126" 
			data-speed="1000"
			data-start="800"
			data-easing="easeOutBounce"
			data-endspeed="1000"
			style="z-index: 3">Electrical<br/>Department
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption layer_button randomrotate tp-resizeme"
			data-x="89"
			data-y="303" 
			data-speed="1000"
			data-start="1100"
			data-easing="easeInOutBounce"
			data-endspeed="300"
			style="z-index: 4"><a href="{{route('power')}}">VIEW MORE <i class="fa fa-caret-right"></i> </a>
		</div>
	</li>
    
    <!-- SLIDE  -->
	<li data-transition="random" data-slotamount="7" data-masterspeed="300" >
		<!-- MAIN IMAGE -->
		<img src="{{asset('wp-content/perntels/team3.png')}}"  alt="bg-slider3"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption layer_1 skewfromright tp-resizeme"
			data-x="93"
			data-y="97" 
			data-speed="1000"
			data-start="500"
			data-easing="easeOutBounce"
			data-endspeed="1000"
			style="z-index: 2">OUR TEAMS
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption layer_2 skewfromleft tp-resizeme"
			data-x="89"
			data-y="126" 
			data-speed="1000"
			data-start="800"
			data-easing="easeOutBounce"
			data-endspeed="1000"
			style="z-index: 3">Operation<br/>Department
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption layer_button randomrotate tp-resizeme"
			data-x="89"
			data-y="303" 
			data-speed="1000"
			data-start="1100"
			data-easing="easeInOutBounce"
			data-endspeed="300"
			style="z-index: 4"><a href = "{{route('team')}}">VIEW MORE <i class="fa fa-caret-right"></i> </a>
		</div>
	</li>
</ul>
<div class="tp-bannertimer tp-bottom"></div>	</div>
</div>			
			<script type="text/javascript">

				var tpj=jQuery;				
				tpj.noConflict();				
				var revapi6;
				
				tpj(document).ready(function() {
								
				if(tpj('#rev_slider_6_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_6_1');
				else
				   revapi6 = tpj('#rev_slider_6_1').show().revolution(
					{
						dottedOverlay:"none",
						delay:7000,
						startwidth:875,
						startheight:370,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
						navigationType:"none",
						navigationArrows:"solo",
						navigationStyle:"round",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:0,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:0,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						
						shuffle:"off",
						
						autoHeight:"off",						
						forceFullWidth:"off",						
												
												
						hideThumbsOnMobile:"off",
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						videoJsPath:"http://pavodemo.com/wpopal/pharmacy/wp-content/plugins/revslider/rs-plugin/videojs/",
						fullScreenOffsetContainer: ""	
					});
				
				});	//ready
				
			</script>
			
			<!-- END REVOLUTION SLIDER --></div>

		</div> 
	</div>

                <div class="col-md-12">
                    <div class="panel-heading col-lg-12 ">
                        <h6>MANAGING DIRECTOR</h6>
                        Richard Magembe founded Perntels in 2006 and has witnessed all the growth patterns of the company.
                        It is through his dedications and efforts that Perntels is ranked one of the best performing local
                        contracting companies in the Power and Telecom Market.
                    </div>


                    <div class="panel-body col-lg-6">
                        <img src="{{ asset('wp-content/perntels/about_us/managing_director.png') }}"  style="width: 350px"  style="height: 260px"  class="attachment-blog-thumbnails wp-post-image" alt="post2" />

                    </div>
                    <div class="panel-body col-lg-6">
                        <br>
                        His experience span is over 15 years during which he has gained a wealth of experience and come to understand
                        the intricacies of the telecommunications and energy industry globally. He started the technical Carrier early 1995 as Radio call and solar systems technician later accredited sales and Service Engineer in Voice and data radio systems with Old East Trading Co Limited. In 2003 he trained on solar and
                        renewable technologies in Hamburg City in Germany and involved in training solar installation technicians in Tanzania. He also worked as
                        BSS/ TX Engineer with Vodacom Tanzania involved in Installation, commissioning and maintenance of both Transmission and Base Station Subsystems including BTS/BSC and transcoders and later promoted to Operations Management post. He held senior positions with Millicom International as Regional Chief
                        Technical Officer (RCTO) and later 2008 promoted to Head of Northern Region supervising both technical and commercial parts of the business.
                        Richard holds a Full technician Certificate FTC – in Electronics and telecommunication from Dar es salaam Technical College, Bachelor of Science in Electrical Engineering from the University of Dar es Salaam and is undertaking
                        executive MBA course with ESAMI –Eastern and Southern African Management Institute in Arusha.
                    </div>
                    <div class="panel-body col-lg-12 ">
                        Richard holds a Full technician Certificate FTC – in Electronics and telecommunication from Dar es salaam Technical College, Bachelor of Science in Electrical Engineering from the University of Dar es Salaam and is undertaking
                        executive MBA course with ESAMI –Eastern and Southern African Management Institute in Arusha.
                    </div>
                </div>




                <div class="col-md-12">
                    <div class="panel-body col-lg-6 ">
                        <h6>HEAD OF OPERATIONS</h6><br>
                        Edwin is a Bachelor of Science in Telecommunications Engineering graduate at the University of Dar es Salaam. He has implemented a number of projects and to the budget. He has in-depth knowledge and experience in operations Management and possesses a focused Management and projects Logistics skills. Engineer Edwin is involved in Managing growth and subsequent
                        organizational change in a professional and entrepreneurial manner; he is adaptable and flexible, able to rapidly assimilate new concepts, technologies, industries and has expertise across full range of telecoms site survey, Installations and maintenance functions. Through   Selecting, developing and inspiring teams of managers and operators towards common goals Engineer Edwin Adds Value through
                        challenging established practices and delivering creative solutions to complex business problems
                    </div>


                    <div class="panel-body col-lg-6">
                        <br><img src="{{ asset('wp-content/perntels/about_us/head_of_operations.png') }}"  style="width: 350px"  style="height: 200px"  class="attachment-blog-thumbnails wp-post-image" alt="post2" />

                    </div>

                </div>
 </div>
        </div>
    </div></section>

@stop