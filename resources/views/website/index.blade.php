@extends('website.master')
@section('css')
@endsection
@section('title')
    الصفحه الرئسيه
@endsection
@section('class_to')
home
@endsection

@section('content')

    <div class="">
        <div class="fullwidth-template">
            <div class="home-slider fullwidth rows-space-60">
                <div class="slider-owl owl-slick equal-container nav-center equal-container"
                     data-slick='{"autoplay":true, "autoplaySpeed":10000, "arrows":true, "dots":true, "infinite":true, "speed":800, "rows":1}'
                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>

                    @foreach(App\Models\Silder::all() as $row)
                        <div class="slider-item style4" style="background-image: url({{asset($row->image)}})">
                            <div class="slider-inner equal-element">
                                <div class="container">
                                    <div class="slider-infor">
                                        <h5 class="title-small" dir="rtl">
                                            خصم بنسبة {{$row->discount}}%
                                        </h5>
                                        <h3 class="title-big" dir="rtl">

                                            {{$row->name}}
                                        </h3>
                                        <div class="price" dir="rtl">
                                            سعر جديد:
                                            <span class="number-price" dir="rtl">
                                            AED {{$row->price}},00
                                        </span>
                                        </div>
                                        <a href="#" class="button btn-shop-the-look bgroud-style" dir="rtl">تسوق الأن</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="banner-video-wrapp rows-space-40 type2">
                <div class="container">
                    <div class="row">
                    @foreach(App\Models\Product::get()->take(2) as $row)
                        <div class="col-lg-6">
                            <div class="banner">
                                <div class="item-banner style9 type1" style="background-image: url({{asset($row->image)}});">
                                    <div class="inner">
                                        <div class="banner-content" dir="rtl">
                                            <h4 class="stelina-subtitle">خصومات تصل الى {{$row->discount}}%</h4>
                                            <h3 class="title">{{$row->name}}</h3>
                                            <div class="price" dir="rtl">
                                                 سعر جديد:
                                                <span class="number-price" dir="rtl">
                                            AED {{$row->price}}
                                        </span>
                                            </div>
                                            <a href="{{route('productDetails',$row->id)}}" class="button btn-shop-now">تسوق الأن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">


                <div class="swiper-wrapper">
                    @foreach(App\Models\Product::get() as $row)
                    <div class="swiper-slide">
                        <li class="product-item  col-lg-12 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
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
                                            <img src="{{asset($row->image)}}" alt="img">
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
                    </div>
                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"><i class="bi bi-caret-right-fill"></i></div>
                <div class="swiper-pagination"></div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 1,
                    spaceBetween: 30,
                    slidesPerGroup: 1,
                    loop: true,
                    loopFillGroupWithBlank: true,

                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    slidesPerView: "auto",
                    coverflowEffect: {
                        rotate: 20,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    }
                });
            </script>



            <div class="stelina-product produc-featured rows-space-40">
                <div class="container">
                    <h3 class="custommenu-title-blog">
                        منتجات جديدة
                    </h3>
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
                                            <img src="{{asset($row->image)}}" alt="img">
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
                </div>
            </div>

            <div class="stelina-product layout1">
                <div class="container">
                    <div class="container-wapper">
                        <div class="head" dir="rtl">
                            <h3 class="title">مزايا اسبوعية</h3>
                            <div class="subtitle">اطلع على مزايانا الاسبوعية</div>
                        </div>
                        <div class="product-list-owl owl-slick equal-container nav-center-left"
                             data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800,"infinite":false}'
                             data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":1}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":1}}]'>

                            @foreach(App\Models\Product::inRandomOrder()->limit(2)->get() as $row)
                            <div class="product-item style-1 product-type-variable">
                                <div class="product-inner equal-element">
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
                                                <img src="{{asset($row->image)}}" alt="img">
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
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
