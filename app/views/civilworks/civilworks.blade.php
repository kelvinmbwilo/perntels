@extends('layout.master')

@section('body')

<?php
/**
 * Created by PhpStorm.
 * User: isaiah
 * Date: 9/30/14
 * Time: 10:49 AM
 */ ?>

<div class="container-inner">
    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
        <a class="home" href="http://pavodemo.com/wpopal/pharmacy">Home</a> &#47; CIVIL WORKS AND BUILDINGS </nav>
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
                    <h3 class="widget-title title-default" style="margin-bottom: 0px"><span>Civil Works and Buildings</span></h3>
                    <div class="collapse navbar-collapse navbar-ex1-collapse vertical-menu menu-left">
                        <ul id="menu-vertical-menu" class="nav navbar-nav megamenu">

                            <!-- MW LINKS INSTALLATIONS -->
                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('tower')}}"  ><span class="menu-title">TOWER CONSTRUCTION</span> <b class="caret"></b></a></li>
                            <!--2G/3G SYSTEMS INSTALATIONS -->
                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('site')}}"  ><span class="menu-title">SITE SHARING PREPARATIONS</span> <b class="caret"></b></a></li>
                            <!-- -->
                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('supply')}}"  ><span class="menu-title">SUPPLY AND INSTALLATION OF TELECOM, CIVIL AND POWER MATERIALS</span> <b class="caret"></b></a></li>

                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('access')}}"  ><span class="menu-title">ACCESS ROAD CONSTRUCTION</span> <b class="caret"></b></a></li>

                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('road')}}"  ><span class="menu-title">ROAD CONSTRUCTION</span> <b class="caret"></b></a></li>

                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
@stop
