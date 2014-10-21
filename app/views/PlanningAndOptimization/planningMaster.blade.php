@extends('layout.master')

@section('body')

<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 9/30/14
 * Time: 10:49 AM
 */ ?>

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
                    <h3 class="widget-title title-default"><span>Planning and optimization</span></h3>
                    <div class="collapse navbar-collapse navbar-ex1-collapse vertical-menu menu-left">
                        <ul id="menu-vertical-menu" class="nav navbar-nav megamenu">

                            <!-- MW LINKS INSTALLATIONS -->
                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('networkdesign')}}"  ><span class="menu-title">NETWORK DESIGN AND PLANNING</span> <b class="caret"></b></a></li>
                            <!--2G/3G SYSTEMS INSTALATIONS -->
                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('transmission')}}"  ><span class="menu-title">TRANSMISSION PLANNING</span> <b class="caret"></b></a></li>
                            <!-- -->
                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('sitesharing')}}"  ><span class="menu-title">SITE SHARING PLANS</span> <b class="caret"></b></a></li>

                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('siteaudit')}}"  ><span class="menu-title">SITE AUDITS</span> <b class="caret"></b></a></li>

                            <li id="menu-item-2407" class="menu-item-2407 dropdown parent mega depth-0 aligned-left" data-id="2407"    data-alignsub="left" data-level="1"><a href="{{route('drivetest')}}"  ><span class="menu-title">DRIVE TEST AND OPTIMIZATION</span> <b class="caret"></b></a></li>

                        </ul>
                    </div>
                </aside>
            </div>
        </div>
     </div>
    </div>
@stop
