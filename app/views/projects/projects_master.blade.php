@extends('layout.master')

@section('body')
<section id="wpo-mainbody" class="page-space wpo-mainbody">
    <div class="container ">
        <div class="row">
            <div class="container-inner">

                <div class="row">
                    <section id="wpo-content" class="col-xs-12  col-md-9 col-md-push-3 no-sidebar-right" style="margin-bottom: 20px;">


                        <section class=" woo-single-product" style="background-color: white; text-decoration-color: black;">

                            <div itemscope itemtype="http://schema.org/Product" id="product-290" class="post-290 product type-product status-publish has-post-thumbnail featured shipping-taxable purchasable product-type-simple instock">

                                <div id="single-product" class="product-info">


                                    @yield('content')


                                    <meta itemprop="url" content="index.html" />

                                </div><!-- #product-290 -->

                        </section>

                        <!-- <aside class="wpo-sidebar col-md-3">
                                </aside> -->


                    </section>

                    <div class="wpo-sidebar wpo-sidebar-1 col-xs-12  col-md-3 col-md-pull-9">
                        <div class="sidebar-inner clearfix">

                            <aside id="wpo_menu_vertical-3" class="widget  clearfix widget_wpo_menu_vertical">
                                <h3 class="widget-title title-default"><span>Project Management</span></h3>

                                <div class="collapse navbar-collapse navbar-ex1-collapse vertical-menu menu-left">
                                    <ul id="menu-vertical-menu" class="nav navbar-nav megamenu">

                                        <!-- MW LINKS INSTALLATIONS -->
                                        <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('tunkey')}}"  ><span class="menu-title">TUNKEY PROJECT</span> <b class="caret"></b></a></li>
                                        <!--2G/3G SYSTEMS INSTALATIONS -->
                                        <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('teammanager')}}"  ><span class="menu-title">TEAM MANAGEMENTS</span> <b class="caret"></b></a></li>

                                        </li>

                                    </ul>
                                </div>
                            </aside>




                        </div>
                    </div>

</section>
@stop
