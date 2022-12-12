@extends('website.master')
@section('css')
@endsection
@section('title')
    معلومات عنا
@endsection
@section('class_to')
    about-page
@endsection

@section('content')
    <div class="main-content main-content-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li class="trail-item trail-end active">
                                معلومات عنا
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area content-about col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <div class="page-main-content">
                            <div class="header-banner banner-image">
                                <div class="banner-wrap">
                                    <div class="banner-header">
                                        <div class="col-lg-5 col-md-offset-7" dir="rtl">
                                            <div class="content-inner">
                                                <h2 class="title" style="text-align: start;">
                                                    مجموعة جديدة لك
                                                </h2>
                                                <div class="sub-title" style="text-align: justify !important;" dir="rtl">
                                                    تسوق أحدث المنتجات بشكل صحيح
                                                    <br/>لدينا لوازم اللحية من أفضل العلامات التجارية.
                                                </div>
                                                <a href="#" class="stelina-button button">تسوق الآن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <div class="stelina-iconbox  layout1">
                                        <div class="iconbox-inner align-text-center">
                                            <div class="icon-item">
                                                <span class="placeholder-text">01</span>
                                                <span class="icon flaticon-rocket-ship"></span>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    شحن مجاني لجميع انحاء المملكة
                                                </h4>
                                                <div class="text" dir="rtl">
                                                    شحن لجميع مناطق الشرق الاوسط فقط مقابل 29.99 AED
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-lg-offset-1">
                                    <div class="stelina-iconbox  layout1">
                                        <div class="iconbox-inner align-text-center">
                                            <div class="icon-item">
                                                <span class="placeholder-text">02</span>
                                                <span class="icon flaticon-return"></span>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    استعادة الأموال
                                                </h4>
                                                <div class="text">
                                                    30 يوم لاستعادة الأموال بدون مشاكل
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-lg-offset-1">
                                    <div class="stelina-iconbox  layout1">
                                        <div class="iconbox-inner align-text-center">
                                            <div class="icon-item">
                                                <span class="placeholder-text">03</span>
                                                <span class="icon flaticon-padlock"></span>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    دعم عبر الإنترنت 24/7
                                                </h4>
                                                <div class="text">
                                                    نحن هنا لدعمك 24/7. دعونا نتسوق الآن!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="row">
                                    <div class="col-sm-12 border-custom">
                                        <span></span>
                                    </div>
                                </div>
                                <h2 class="custom_blog_title center" style="font-size: 4rem;" dir="rtl">
                                    اشخص مهمين في <span style="color: #ab8e66;">ثبات</span>
                                </h2>
                                <div class="team-member-slider nav-center owl-slick"
                                     data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}'
                                     data-responsive='[{"breakpoint":"0","settings":{"slidesToShow":1}},{"breakpoint":"480","settings":{"slidesToShow":1}},{"breakpoint":"767","settings":{"slidesToShow":2}},{"breakpoint":"991","settings":{"slidesToShow":3}},{"breakpoint":"1199","settings":{"slidesToShow":3}},{"breakpoint":"2000","settings":{"slidesToShow":3}}]'>
                                    <div class="stelina-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar full-size">
                                                <img src="{{asset('website/assets/images/kindpng_1600378.png')}}" width="200rem" alt="img">
                                            </div>
                                            <h5 class="member_name">عمر أحمد</h5>
                                            <div class="member_position">
                                                الرئيس التنفيذي والمؤسس ثابات أوزي
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stelina-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar full-size">
                                                <img src="{{asset('website/assets/images/kindpng_1600378.png')}}" alt="img">
                                            </div>
                                            <h5 class="member_name">خالد عبد العزيز</h5>
                                            <div class="member_position">
                                                الرئيس التنفيذي والمؤسس ثابات أوزي
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stelina-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar full-size">
                                                <img src="{{asset('website/assets/images/kindpng_1600378.png')}}" alt="img">
                                            </div>
                                            <h5 class="member_name">خالد عبد العزيز</h5>
                                            <div class="member_position">
                                                الرئيس التنفيذي والمؤسس ثابات أوزي
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
