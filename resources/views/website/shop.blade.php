@extends('website.master')
@section('css')
@endsection
@section('title')
    المتجر
@endsection
@section('class_to')
    productsgrid-pag
@endsection

@section('content')
    <div class="main-content main-content-product left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="{{route('website')}}">الرئيسية</a>
                            </li>
                            <li class="trail-item trail-end active">
                                المتجر
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area shop-grid-content no-banner col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <div class="shop-top-control" dir="rtl">
                            <form class="select-item select-form">
                                <span class="title">تصنيف</span>
                                <select title="sort" data-placeholder="12 Products/Page" class="chosen-select">
                                    <option value="1">12 منتجات/صفحة</option>
                                    <option value="2">9 منتجات/صفحة</option>
                                    <option value="3">10 منتجات/صفحة</option>
                                    <option value="4">8 منتجات/صفحة</option>
                                    <option value="5">6 منتجات/صفحة</option>
                                </select>
                            </form>
                            <form class="filter-choice select-form">
                                <span class="title">تصنيف عن طريق</span>
                                <select title="sort-by" data-placeholder="Price: Low to High" class="chosen-select text-end" dir="rtl">
                                    <option value="1">السعر: من الارخص للاعلى مرتفع</option>
                                    <option value="2">الفرز حسب الشعبية</option>
                                    <option value="3">فرز حسب متوسط التصنيف</option>
                                    <option value="4">فرز حسب الحداثة</option>
                                </select>
                            </form>
                        </div>
                        <ul class="row list-products auto-clear equal-container product-grid">
                            @foreach(App\Models\Product::get()->take(8) as $row)
                            <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                <div class="product-inner equal-element" style="height: auto;">
                                    <div class="product-top">
                                        <div class="flash">
                                        <span class="onnew">
                                            <span class="text">
                                                جديد
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="{{route('productDetails',$row->id)}}">
                                                <img src="{{asset($row->image)}}"
                                                     alt="img">
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="{{route('productDetails',$row->id)}}">{{$row->name}}</a>
                                        </h5>
                                        <div class="group-info">

                                            <div class="price">
                                                <del>

                                                    AED {{$row->discount}}

                                                </del>
                                                <ins>
                                                    AED {{$row->price}}
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
{{--                        <div class="pagination clearfix style3">--}}
{{--                            <div class="nav-link">--}}
{{--                                <a href="#" class="page-numbers"><i class="icon fa fa-angle-left"--}}
{{--                                                                    aria-hidden="true"></i></a>--}}
{{--                                <a href="#" class="page-numbers">1</a>--}}
{{--                                <a href="#" class="page-numbers">2</a>--}}
{{--                                <a href="#" class="page-numbers current">3</a>--}}
{{--                                <a href="#" class="page-numbers"><i class="icon fa fa-angle-right"--}}
{{--                                                                    aria-hidden="true"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="wrapper-sidebar shop-sidebar">
                        <div class="widget woof_Widget">
                            <div class="widget widget-categories">
                                <h3 class="widgettitle">التصنيفات</h3>
                                <ul class="list-categories">
                                    <li>
                                        <input type="checkbox" id="cb1">
                                        <label for="cb1" class="label-text">
                                            New Arrivals
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cb2">
                                        <label for="cb2" class="label-text">
                                            Dining
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cb3">
                                        <label for="cb3" class="label-text">
                                            Desks
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cb4">
                                        <label for="cb4" class="label-text">
                                            Accents
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cb5">
                                        <label for="cb5" class="label-text">
                                            Accessories
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cb6">
                                        <label for="cb6" class="label-text">
                                            Tables
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_filter_price">
                                <h4 class="widgettitle">
                                    السعر
                                </h4>
                                <div class="price-slider-wrapper">
                                    <div data-label-reasult="Range:" data-min="0" data-max="3000" data-unit="AED "
                                         class="slider-range-price " data-value-min="0" data-value-max="1000">
                                    </div>
                                    <div class="price-slider-amount">
                                        <span class="from">AED 45</span>
                                        <span class="to">AED 215</span>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-brand">
                                <h3 class="widgettitle">البراند</h3>
                                <ul class="list-brand">
                                    <li>
                                        <input id="cb7" type="checkbox">
                                        <label for="cb7" class="label-text">New Arrivals</label>
                                    </li>
                                    <li>
                                        <input id="cb8" type="checkbox">
                                        <label for="cb8" class="label-text">Dining</label>
                                    </li>
                                    <li>
                                        <input id="cb9" type="checkbox">
                                        <label for="cb9" class="label-text">Desks</label>
                                    </li>
                                    <li>
                                        <input id="cb10" type="checkbox">
                                        <label for="cb10" class="label-text">Accents</label>
                                    </li>
                                    <li>
                                        <input id="cb11" type="checkbox">
                                        <label for="cb11" class="label-text">Accessories</label>
                                    </li>
                                    <li>
                                        <input id="cb12" type="checkbox">
                                        <label for="cb12" class="label-text">Tables</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="widget widget_filter_size">
                                <h4 class="widgettitle">الحجم</h4>
                                <ul class="list-brand">
                                    <li>
                                        <input id="cb13" type="checkbox">
                                        <label for="cb13" class="label-text">14.0 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb14" type="checkbox">
                                        <label for="cb14" class="label-text">14.4 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb15" type="checkbox">
                                        <label for="cb15" class="label-text">14.8 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb16" type="checkbox">
                                        <label for="cb16" class="label-text">15.2 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb17" type="checkbox">
                                        <label for="cb17" class="label-text">15.6 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb18" type="checkbox">
                                        <label for="cb18" class="label-text">16.0 mm</label>
                                    </li>
                                </ul>
                            </div> -->

{{--                            <div class="widget widget-tags">--}}
{{--                                <h3 class="widgettitle">--}}
{{--                                    تاق--}}
{{--                                </h3>--}}
{{--                                <ul class="tagcloud">--}}
{{--                                    <li class="tag-cloud-link">--}}
{{--                                        <a href="#">مكتب</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="tag-cloud-link">--}}
{{--                                        <a href="#">المزهرة</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="tag-cloud-link active">--}}
{{--                                        <a href="#">اكسسوارات</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="tag-cloud-link">--}}
{{--                                        <a href="#">تناول الطعام</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
