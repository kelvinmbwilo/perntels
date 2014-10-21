@extends ('layout.master')
@section('body')
<div class="col-sm-12 wpb_column vc_column_container" style="padding: 0px">
<div class="wpb_wrapper">
<div class="wpb_revslider_element no-margin-bottom wpb_content_element full-width"><!-- START REVOLUTION SLIDER 4.1.4 fullwidth mode -->

<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:445px;">
    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:445px;height:445;">
        <ul>	<!-- SLIDE  -->
            <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                <!-- MAIN IMAGE -->
                <img src="{{ asset('wp-content/perntels/pc/main3.JPG') }}"  alt="slide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption layer_1 randomrotate tp-resizeme"
                     data-x="91"
                     data-y="81"
                     data-speed="1000"
                     data-start="500"
                     data-easing="Power2.easeIn"
                     data-endspeed="1000"
                     style="z-index: 2">WE HELP YOU WITH
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption layer_2 skewfromrightshort tp-resizeme"
                     data-x="89"
                     data-y="126"
                     data-speed="1000"
                     data-start="800"
                     data-easing="Power2.easeIn"
                     data-endspeed="300"
                     style="z-index: 3">Telecommunication</br> Works
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption layer_button randomrotate tp-resizeme"
                     data-x="89"
                     data-y="303"
                     data-speed="1000"
                     data-start="1100"
                     data-easing="Power2.easeIn"
                     data-endspeed="1000"
                     style="z-index: 4"><a href="{{route('telecoms')}}" class='btn btn-outline btn-outline-lg'>VIEW MORE <i class="fa fa-caret-right"></i> </a>
                </div>
            </li>
            <!-- SLIDE  -->
            <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                <!-- MAIN IMAGE -->
                <img src="{{ asset('wp-content/perntels/pc/main1.JPG') }}"  alt="bg-slider2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption layer_1 randomrotate tp-resizeme"
                     data-x="81"
                     data-y="107"
                     data-speed="300"
                     data-start="500"
                     data-easing="Power1.easeIn"
                     data-endspeed="300"
                     style="z-index: 2">WE HELP YOU WITH
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption layer_2 randomrotate tp-resizeme"
                     data-x="82"
                     data-y="133"
                     data-speed="1000"
                     data-start="800"
                     data-easing="Power1.easeIn"
                     data-endspeed="1000"
                     style="z-index: 3">Electrical<br/>Works
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption layer_button randomrotate tp-resizeme"
                     data-x="82"
                     data-y="307"
                     data-speed="300"
                     data-start="1100"
                     data-easing="Power1.easeIn"
                     data-endspeed="300"
                     style="z-index: 4">  <a href="{{route('power')}}" class='btn btn-outline btn-outline-lg'>VIEW MORE <i class="fa fa-caret-right"></i> </a>
                </div>
            </li>
            <!-- SLIDE  -->
            <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                <!-- MAIN IMAGE -->
                <img src="{{ asset('wp-content/perntels/pc/main2.jpg') }}"  alt="bg-slider3"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption layer_1 lfr tp-resizeme"
                     data-x="93"
                     data-y="99"
                     data-speed="1000"
                     data-start="500"
                     data-easing="Cubic.easeIn"
                     data-endspeed="1000"
                     style="z-index: 2">WE HELP YOU WITH
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption layer_2 lfl tp-resizeme"
                     data-x="89"
                     data-y="126"
                     data-speed="1000"
                     data-start="800"
                     data-easing="Cubic.easeIn"
                     data-endspeed="1000"
                     style="z-index: 3">Planning &<br/>Optimization
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption layer_button randomrotate tp-resizeme"
                     data-x="89"
                     data-y="303"
                     data-speed="1000"
                     data-start="1100"
                     data-easing="Quart.easeIn"
                     data-endspeed="300"
                     style="z-index: 4"><a href= "{{asset(route('networkdesign'))}}" class='btn btn-outline btn-outline-lg'>VIEW MORE <i class="fa fa-caret-right"></i> </a>
                </div>
            </li>
            </li>
            

        </ul>
        <div class="tp-bannertimer tp-bottom"></div>	</div>
</div>
<script type="text/javascript">

    var tpj=jQuery;
    tpj.noConflict();
    var revapi1;

    tpj(document).ready(function() {

        if(tpj('#rev_slider_1_1').revolution == undefined)
            revslider_showDoubleJqueryError('#rev_slider_1_1');
        else
            revapi1 = tpj('#rev_slider_1_1').show().revolution(
                {
                    dottedOverlay:"none",
                    delay:7000,
                    startwidth:1170,
                    startheight:445,
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



<!--activities-->

<section class="widget blog-type ">

    <div class="wpb_wrapper widget-content" style=" line-height:2" style="font-size: small" >
        <div class="contact-form-content">
            <h4>Welcome To PERNTELS Tanzania Limited</h4>
  <div class="col-md-12">
      <b>Perntels Company Limited</b> is a fast growing company that provides technical services in Telecommunications, Electrical works and Civil works while giving innovative solutions that meet customer requirements with high professionalism in Tanzania,
      East Africa and the world at large.
</div>
            <div class="col-md-4">
            <img src="{{ asset('wp-content/perntels/about_us/home1.png') }}"  style="width:350px" class="attachment-blog-thumbnails wp-post-image img-rounded" alt="post2" />
            </div>
            <div class="col-md-8">
                The Company is fully registered with Contractors Registration Board (CRB) and TCRA as a telecommunication service provider.<br></div>
            <div class="col-md-4">
                The company has a team of technical and management personnel with main objectives of providing technical services and solutions in power, telecommunication and civil works that meet required customer satisfaction at reasonable prices, cost effective and professionalisms.            </div> <div class="col-md-4">
                <img src="{{ asset('wp-content/perntels/about_us/home2.png') }}"  style="height:250px" class="attachment-blog-thumbnails wp-post-image img-rounded" alt="post2" />
            </div>
           </div>
<!--            <br> We offer design and construction-related services for new building as well as provide expansion, renovation and refurbishment of existing facilities.-->
<!--            We listen to understand the needs of our client, form the best team of people with the right attitude, skills and experience and then deliver the project in a timely and responsible manner.-->


<!--            <div class="col-md-12">-->
<!--                On the other hand Perntels aiming at providing Maintenance Services and support for electrical,-->
<!--                civil works and telecommunication systems in the industries to meet the required customer satisfaction at reasonable prices, cost effective and professionalisms-->
<!--                </div>-->
        </div>
</section>
<section class="widget blog-type ">

        <div class="wpb_wrapper widget-content">
            <div class="contact-form-content">
<h4>PROJECTS</h4>
                </div></div>
    <div class="widget-content">
<?php  $projects=Project::all(); ?>
        @foreach($projects as $pro)
            <div class="col-sm-4 col-md-4 wow fadeInUp " data-wow-duration="0.6s" data-wow-delay="150ms">
                <article class="blog">
                    <figure class="entry-thumb zoom">
                        <a href="{{ url('project/{$pro->id}') }}" title="{{$pro->title}}" class="entry-image">
                            <img src="{{ asset("{$pro->path}") }}" style="height: 240px" class="attachment-blog-thumbnails wp-post-image" alt="post2" />                        </a>
                    </figure>
                    <div class="information">
                        <p class="blog-meta">
                            <span class="blog-date"><span>{{ $pro->date }} </span>
                        </p>
                        <h4 class="entry-title">
                            <a href="{{ url('project/1') }}">{{$pro->title}}</a>
                        </h4>
                        <a class="read-more" href="{{ url("project/{$pro->id}") }}">Read More <i class="fa fa-caret-right"></i></a>
                    </div>
                </article>
            </div>
        @endforeach
<!--            <div class="col-sm-4 col-md-4 wow fadeInUp " data-wow-duration="0.6s" data-wow-delay="350ms">-->
<!--                <article class="blog">-->
<!--                    <figure class="entry-thumb zoom">-->
<!--                        <a href="{{ url('project/2') }}" title="" class="entry-image">-->
<!--                            <img src="{{ asset('activity2.jpg') }}" style="height: 240px" class="attachment-blog-thumbnails wp-post-image" alt="post1" />                        </a>-->
<!--                    </figure>-->
<!--                    <div class="information">-->
<!--                        <p class="blog-meta">-->
<!--                            <span class="blog-date"><span>15</span> <span>May</span> ,<span>2014</span> </span>-->
<!--                        </p>-->
<!--                        <h4 class="entry-title">-->
<!--                            <a href="{{ url('project/2') }}">LINE PROJECTS</a>-->
<!--                        </h4>-->
<!--                        <a class="read-more" href="{{ url('project/{2}') }}">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                    </div>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-sm-4 col-md-4 wow fadeInUp " data-wow-duration="0.6s" data-wow-delay="550ms">-->
<!--                <article class="blog">-->
<!--                    <figure class="entry-thumb zoom">-->
<!--                        <a href="{{ url('project/3') }}" title="" class="entry-image">-->
<!--                            <img src="{{ asset('activity3.jpg') }}" style="height: 240px" class="attachment-blog-thumbnails wp-post-image" alt="post3" />                        </a>-->
<!--                    </figure>-->
<!--                    <div class="information">-->
<!--                        <p class="blog-meta">-->
<!--                            <span class="blog-date"><span>01</span> <span>Jun</span> ,<span>2013</span> </span>-->
<!--                        </p>-->
<!--                        <h4 class="entry-title">-->
<!--                            <a href="{{ url('project/3') }}">TEAM MANAGEMENTS &#8230;</a>-->
<!--                        </h4>-->
<!--                        <a class="read-more" href="{{ url('project/3') }}">Read More <i class="fa fa-caret-right"></i></a>-->
<!--                    </div>-->
<!--                </article>-->
<!--            </div>-->

    </div>
</section>
</div>
</div>
@stop