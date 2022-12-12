@extends('website.master')
@section('css')
@endsection
@section('title')
   تفاصيل المنتج
@endsection
@section('class_to')
    details-page
@endsection

@section('content')

    <div class="main-content main-content-details single left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li class="trail-item">
                                <a href="#">عطور</a>
                            </li>
                            <li class="trail-item trail-end active">
                                Glorious Eau
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area content-details col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <div class="details-product">
                            <div class="details-thumd">
                                <div class="image-preview-container image-thick-box image_preview_container">
                                    <img id="img_zoom" data-zoom-image="assets/images/perfume-20056.png" src="{{asset('website/assets/images/perfume-20056.png')}}" style="padding: 5rem;" alt="img">
                                    <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="product-preview image-small product_preview">
                                    <div id="thumbnails" class="thumbnails_carousel owl-carousel" data-nav="true" data-autoplay="false" data-dots="false" data-loop="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'>
                                        <a href="#" data-image="assets/images/perfume-20056.png" data-zoom-image="assets/images/perfume-20056.png" class="active">
                                            <img src="{{asset('website/assets/images/perfume-20056.png')}}" data-large-image="assets/images/perfume-20056.png" alt="img">
                                        </a>
                                        <a href="#" data-image="assets/images/perfume-20056.png" data-zoom-image="assets/images/perfume-20056.png">
                                            <img src="{{asset('website/assets/images/perfume-20056.png')}}" data-large-image="assets/images/perfume-20056.png" alt="img">
                                        </a>
                                        <a href="#" data-image="assets/images/perfume-20056.png" data-zoom-image="assets/images/perfume-20056.png">
                                            <img src="{{asset('website/assets/images/perfume-20056.png')}}" data-large-image="assets/images/perfume-20056.png" alt="img">
                                        </a>
                                        <a href="#" data-image="assets/images/perfume-20056.png" data-zoom-image="assets/images/perfume-20056.png">
                                            <img src="{{asset('website/assets/images/perfume-20056.png')}}" data-large-image="assets/images/perfume-20056.png" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="details-infor">
                                <h1 class="product-title">
                                    Glorious Eau
                                </h1>
                                <div class="stars-rating">
                                    <div class="star-rating">
                                        <span class="star-5"></span>
                                    </div>
                                    <div class="count-star">
                                        (7)
                                    </div>
                                </div>
                                <div class="availability">
                                    توافر:
                                    <a href="#">موجود</a>
                                </div>
                                <div class="price">
                                    <span>AED 45</span>
                                </div>
                                <div class="product-details-description">
                                    <ul>
                                        <li>درجة حرارة التصنيع</li>
                                        <li>مستورد</li>
                                        <li>آرت. 06-7680</li>
                                    </ul>
                                </div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button">
                                            <a href="#">أضف إلى قائمة الامنيات</a>
                                        </div>
                                    </div>
                                    <div class="size-chart-wrapp">
                                        <div class="btn-size-chart">
                                            <a id="size_chart" href="{{asset('website/assets/images/size-chart.jpg')}}" class="fancybox">عرض مخطط الحجم</a>
                                        </div>
                                    </div>
                                    <div class="quantity-add-to-cart">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="single_add_to_cart_button button">أضف إلى السلة</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-details-product">
                            <ul class="tab-link">
                                <li class="active">
                                    <a data-toggle="tab" aria-expanded="true" href="#product-descriptions">الأوصاف </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" aria-expanded="true" href="#information">معلومة </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" aria-expanded="true" href="#reviews">المراجعات</a>
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div id="product-descriptions" class="tab-panel active">
                                    <p>
                                        كل واحد سام ، خميرة قبل نهاية الأسبوع ، كرة القدم.
                                        ابتسامة موظف Phasellus ليست استطلاعًا للدورة.
                                        سليم
                                        التصنيع ، بلدي لوريم ، هذا المكتب قبل الكرتون ليس كذلك.
                                        الآن قبل الجبهة ، لا يستحق الكرتون أو لحوم البقر أو ما لم.
                                        مطور المستهلك Maecenas ، الإيكولوجي أو القبيح ، ومؤلف Pritentate Zero. نام سيد لوريت يريد.
                                    </p>
                                    <p>
                                        وعاء بيئي الميكروويف أو الكثير من الأداء.
                                        حتى أعضاء القداس ليسوا مستهدفين ، فإن الشوكولاتة الخالية من موريس خالية فقط من الماكياج المتجري أمر مهم قدر الإمكان.
                                        لا يوجد أكبر تصنيع ، طبقة مهنتي.
                                    </p>
                                </div>
                                <div id="information" class="tab-panel">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>بحجم</td>
                                            <td> XS / S / M / L </td>
                                        </tr>
                                        <tr>
                                            <td>اللون</td>
                                            <td>أبيض/ أسود/ كحلي/ بني</td>
                                        </tr>
                                        <tr>
                                            <td>الخصائص</td>
                                            <td>فستان ملون</td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="reviews" class="tab-panel">
                                    <div class="reviews-tab">
                                        <div class="comments">
                                            <h2 class="reviews-title">
                                                1 مراجعة ل
                                                <span>Glorious Eau</span>
                                            </h2>
                                            <ol class="commentlist">
                                                <li class="conment">
                                                    <div class="conment-container">
                                                        <a href="#" class="avatar">
                                                            <img src="{{asset('website/assets/images/avartar.png')}}" alt="img">
                                                        </a>
                                                        <div class="comment-text">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-5"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (1)
                                                                </div>
                                                            </div>
                                                            <p class="meta">
                                                                <strong class="author">عيد العزيز</strong>
                                                                <span>-</span>
                                                                <span class="time">7 يونيو 2013</span>
                                                            </p>
                                                            <div class="description">
                                                                <p>تصميم بسيط وفعال. واحد من المفضلين لدي.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="review_form_wrapper" dir="rtl">
                                            <div class="review_form">
                                                <div class="comment-respond">
                                                    <span class="comment-reply-title">إضافة إلى استعراض</span>
                                                    <form class="comment-form-review">
                                                        <p class="comment-notes">
                                                            <span class="email-notes">لن يتم نشر عنوان بريدك الإلكتروني. </span>
                                                            يتم تمييز الحقول المطلوبة
                                                            <span class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <label>تقييمك</label>
                                                            <p class="stars" style="display: flex;">
                                        						<span>
                                        							<a class="star-1" href="#"></a>
                                        							<a class="star-2" href="#"></a>
                                        							<a class="star-3" href="#"></a>
                                        							<a class="star-4" href="#"></a>
                                        							<a class="star-5" href="#"></a>
                                        						</span>
                                                            </p>
                                                        </div>
                                                        <p class="comment-form-comment">
                                                            <label>
                                                                مراجعتك
                                                                <span class="required">*</span>
                                                            </label>
                                                            <textarea title="review" id="comment" name="comment" cols="45" rows="8"></textarea>
                                                        </p>
                                                        <p class="comment-form-author" dir="rtl">
                                                            <label>
                                                                اسم
                                                                <span class="">*</span>
                                                            </label>
                                                            <input title="author" id="author" name="author" type="text" value="">
                                                        </p>
                                                        <p class="comment-form-email" dir="rtl">
                                                            <label>
                                                                البريد الإلكتروني
                                                                <span class="">*</span>
                                                            </label>
                                                            <input title="email" id="email" name="email" type="email" value="" >
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit" class="submit" value="ارسال">
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="clear: left;"></div>
                        <div class="related products product-grid">
                            <h2 class="product-grid-title">You may also like</h2>
                            <div class="owl-products owl-slick equal-container nav-center"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
                                <div class="product-item style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="{{asset('website/assets/images/kindpng_7106248.png')}}" alt="img">
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
                                                <a href="#">Blade Runner Turbo</a>
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
                                <div class="product-item style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="{{asset('website/assets/images/kindpng_239356.png')}}" alt="img">
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
                                                <a href="#">Terra Rossa</a>
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
                                <div class="product-item style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="{{asset('website/assets/images/kindpng_7106248.png')}}" alt="img">
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
                                                <a href="#">Blade Runner Turbo</a>
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
                                <div class="product-item style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="{{asset('website/assets/images/kindpng_239356.png')}}" alt="img">
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
                                                <a href="#">Terra Rossa</a>
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
                <div class="sidebar sidebar-details col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="wrapper-sidebar">
                        <div class="widget widget-categories">
                            <h3 class="widgettitle">فئات</h3>
                            <ul class="list-categories">
                                <li>
                                    <input type="checkbox" id="cb1">
                                    <label for="cb1" class="label-text">
                                        الوافدين الجدد
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="cb2">
                                    <label for="cb2" class="label-text">
                                        تناول الطعام
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="cb3">
                                    <label for="cb3" class="label-text">
                                        مكاتب
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="cb5">
                                    <label for="cb5" class="label-text">
                                        مُكَمِّلات
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="cb6">
                                    <label for="cb6" class="label-text">
                                        الجداول
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-testimonials">
                            <h3 class="widgettitle">الشهادات - التوصيات</h3>
                            <div class="slider-related-products owl-slick nav-top-right"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"991","settings":{"slidesToShow":1 }}]'>
                                <div class="testimonials-item">
                                    <div class="Testimonial-inner">
                                        <div class="comment" dir="rtl">
                                            لو كان لي الخيار بان اختار لما كنت غير بائع للازهار فان فاتني الربح لم يفوتني العطر.
                                        </div>
                                        <div class="author">
                                            <div class="avt">
                                                <img src="{{asset('website/assets/images/member1.png')}}" alt="img">
                                            </div>
                                            <h3 class="name">
                                                فلان بن فلان
                                                <span class="position">
													ثبات\المؤسس
												</span>
                                            </h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials-item">
                                    <div class="Testimonial-inner">
                                        <div class="comment" dir="rtl">
                                            لو كان لي الخيار بان اختار لما كنت غير بائع للازهار فان فاتني الربح لم يفوتني العطر.
                                        </div>
                                        <div class="author">
                                            <div class="avt">
                                                <img src="{{asset('website/assets/images/member1.png')}}" alt="img">
                                            </div>
                                            <h3 class="name">
                                                فلان بن فلان
                                                <span class="position">
													ثبات\المؤسس
												</span>
                                            </h3>

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
