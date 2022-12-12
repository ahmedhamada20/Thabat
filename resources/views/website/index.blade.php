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
                    <div class="slider-item style4">
                        <div class="slider-inner equal-element">
                            <div class="container">
                                <div class="slider-infor">
                                    <h5 class="title-small" dir="rtl">
                                        خصم بنسبة 40%
                                    </h5>
                                    <h3 class="title-big" dir="rtl">
                                        لوقت محدود<br />
                                        لا يفوتك
                                    </h3>
                                    <div class="price" dir="rtl">
                                        سعر جديد:
                                        <span class="number-price" dir="rtl">
                                            AED 25.00
                                        </span>
                                    </div>
                                    <a href="#" class="button btn-shop-the-look bgroud-style" dir="rtl">تسوق الأن</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item style5">
                        <div class="slider-inner equal-element">
                            <div class="container">
                                <div class="slider-infor">
                                    <h5 class="title-small" dir="rtl">
                                        خصم بنسبة 40%
                                    </h5>
                                    <h3 class="title-big" dir="rtl">
                                        لوقت محدود<br />
                                        لا يفوتك
                                    </h3>
                                    <div class="price" dir="rtl">
                                        سعر جديد:
                                        <span class="number-price" dir="rtl">
                                            AED 25.00
                                        </span>
                                    </div>
                                    <a href="#" class="button btn-shop-the-look bgroud-style" dir="rtl">تسوق الأن</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item style6">
                        <div class="slider-inner equal-element">
                            <div class="container">
                                <div class="slider-infor">
                                    <h5 class="title-small" dir="rtl">
                                        خصم بنسبة 40%
                                    </h5>
                                    <h3 class="title-big" dir="rtl">
                                        لوقت محدود<br />
                                        لا يفوتك
                                    </h3>
                                    <div class="price" dir="rtl">
                                        سعر جديد:
                                        <span class="number-price" dir="rtl">
                                            AED 25.00
                                        </span>
                                    </div>
                                    <a href="#" class="button btn-shop-the-look bgroud-style" dir="rtl">تسوق الأن</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-video-wrapp rows-space-40 type2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner">
                                <div class="item-banner style9">
                                    <div class="inner">
                                        <div class="banner-content" dir="rtl">
                                            <h4 class="stelina-subtitle">لا تتأخر علينا</h4>
                                            <h3 class="title">عرض رهيب<br />خصم 30%</h3>
                                            <div class="code">
                                                كود الخصم:
                                                <span class="nummer-code">THABAT</span>
                                            </div>
                                            <a href="#" class="button btn-shop-now">توسق الأن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner">
                                <div class="item-banner style9 type1">
                                    <div class="inner">
                                        <div class="banner-content" dir="rtl">
                                            <h4 class="stelina-subtitle">خصومات تصل الى 50%</h4>
                                            <h3 class="title">احصل على تحديثات <br /> يومية</h3>
                                            <div class="code">
                                                كود الخصم:
                                                <span class="nummer-code">THABAT</span>
                                            </div>
                                            <a href="#" class="button btn-shop-now">تسوق الأن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">


                <div class="swiper-wrapper">
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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-1.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="product-item  col-lg-12 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element" style="height: auto;">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-2.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-3.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="product-item  col-lg-12 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element" style="height: auto;">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-4.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-1.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-2.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-3.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-4.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-5.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-6.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-7.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                                        <a href="product-view.html">
                                            <img src="{{asset('website/assets/product_images/product-item-8.jpg')}}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Blanche Parfum</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>
                                                AED 65
                                            </del>
                                            <ins>
                                                AED 45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="banner-pinmap-wrapp rows-space-70">
                <div>
                    <div class="banner">
                        <div class="item-banner style21">
                            <div class="inner">
                                <div class="banner-content container">
                                    <div class="banner-content-inner" dir="rtl">
                                        <h4 class="stelina-subtitle">زين نفسك</h4>
                                        <h3 class="title">
                                            مجموعة<br />
                                            خصومات <span>15%</span> خصم
                                        </h3>
                                        <div class="start-from">
                                            تبدأ من <span>27 ديسمبر</span> الى <span>ديسمبر 29</span>
                                        </div>
                                        <a href="#" class="button btn-shop-now">تسوق الأن</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stelina-testimonials-newsletter-wrapp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="stelina-testimonials-wrapp">
                                <div class="stelina-testimonials default">
                                    <div class="owl-slick equal-container"
                                         data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800}'
                                         data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                                        <div class="testimonial-item" dir="rtl">
                                            <div class="image">
                                                <img src="{{asset('website/assets/images/man-g6bf1a2ad9_1920.png')}}" width="100rem"
                                                     alt="img">
                                            </div>
                                            <div class="info">
                                                <h5 class="name">
                                                    عمر خالد
                                                    <span>صاحب المتجر</span>
                                                </h5>
                                                <div class="text">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elit diam
                                                        consequat est,
                                                        eleifend conubia himenaeos ac vel cursus interdum eu varius non
                                                        nam, scelerisque
                                                        eros rhoncus nascetur porttitor urna nisi gravida lacinia. Quam
                                                        dictumst non bibendum
                                                        venenatis malesuada nec lacinia volutpat ante
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-item" dir="rtl">
                                            <div class="image">
                                                <img src="{{asset('website/assets/images/man-g6bf1a2ad9_1920.png')}}" width="100rem"
                                                     alt="img">
                                            </div>
                                            <div class="info">
                                                <h5 class="name">
                                                    عمر خالد
                                                    <span>صاحب المتجر</span>
                                                </h5>
                                                <div class="text">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipiscing elit diam
                                                        consequat est,
                                                        eleifend conubia himenaeos ac vel cursus interdum eu varius non
                                                        nam, scelerisque
                                                        eros rhoncus nascetur porttitor urna nisi gravida lacinia. Quam
                                                        dictumst non bibendum
                                                        venenatis malesuada nec lacinia volutpat ante
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3" dir="rtl">
                            <div class="stelina-newsletter default">
                                <div class="newsletter-head">
                                    <h3 class="title">الاخبار</h3>
                                    <div class="subtitle">اطلع على احدث الاخبار من متجرنا!</div>
                                </div>
                                <div class="newsletter-form-wrap">
                                    <input class="input-text email email-newsletter" type="email" name="email"
                                           placeholder="ايميلك...">
                                    <button class="button btn-submit submit-newsletter">إرسال</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            <a href="#">
                                                <img src="{{asset('website/assets/product_images/product-item-1.jpg')}}" alt="img">
                                            </a>
                                            <div class="thumb-group">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button">
                                                        <a href="#">اضف الى المضلة</a>
                                                    </div>
                                                </div>
                                                <a href="#" class="button quick-wiew-button">اطلع على المنتج</a>
                                                <div class="loop-form-add-to-cart">
                                                    <button class="single_add_to_cart_button button">إضافة الى السلة
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="#">تيرا روز</a>
                                        </h5>
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star">
                                                    (3)
                                                </div>
                                            </div>
                                            <div class="price">
                                                <del>
                                                    AED 65
                                                </del>
                                                <ins>
                                                    AED 45
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <a href="#">
                                                <img src="{{asset('website/assets/product_images/product-item-2.jpg')}}" alt="img">
                                            </a>
                                            <div class="thumb-group">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button">
                                                        <a href="#">اضف الى المضلة</a>
                                                    </div>
                                                </div>
                                                <a href="#" class="button quick-wiew-button">اطلع على المنتج</a>
                                                <div class="loop-form-add-to-cart">
                                                    <button class="single_add_to_cart_button button">إضافة الى السلة
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="#">تيرا روز</a>
                                        </h5>
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star">
                                                    (3)
                                                </div>
                                            </div>
                                            <div class="price">
                                                <del>
                                                    AED 65
                                                </del>
                                                <ins>
                                                    AED 45
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
