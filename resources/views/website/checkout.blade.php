@extends('website.master')
@section('css')
@endsection
@section('title')
    الدفع
@endsection
@section('class_to')
    inblog-page
@endsection

@section('content')
    <div class="main-content main-content-checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="{{route('website')}}">الرئيسية</a>
                            </li>
                            <li class="trail-item trail-end active">
                                الدفع
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3 class="custom_blog_title">
                الدفع
            </h3>
            <div class="checkout-wrapp">
{{--                <div class="shipping-address-form-wrapp">--}}
{{--                    <div class="shipping-address-form  checkout-form">--}}
{{--                        <div class="row-col-1 row-col">--}}
{{--                            <div class="shipping-address">--}}
{{--                                <h3 class="title-form">--}}
{{--                                    عنوان الشحن--}}
{{--                                </h3>--}}
{{--                                <p class="form-row form-row-first">--}}
{{--                                    <label class="text">الاسم الاول</label>--}}
{{--                                    <input title="first" type="text" class="input-text">--}}
{{--                                </p>--}}
{{--                                <p class="form-row form-row-last">--}}
{{--                                    <label class="text">اللقب</label>--}}
{{--                                    <input title="last" type="text" class="input-text">--}}
{{--                                </p>--}}
{{--                                <p class="form-row forn-row-col forn-row-col-1">--}}
{{--                                    <label class="text">دولة</label>--}}
{{--                                    <select title="country" data-placeholder="United Kingdom" class="chosen-select"--}}
{{--                                            tabindex="1">--}}
{{--                                        <option value="United States">الولايات المتحدة</option>--}}
{{--                                        <option value="United Kingdom">المملكة المتحدة</option>--}}
{{--                                        <option value="Afghanistan">أفغانستان</option>--}}
{{--                                        <option value="Aland Islands">جزر آلاند</option>--}}
{{--                                        <option value="Albania">ألبانيا</option>--}}
{{--                                        <option value="Algeria">الجزائر</option>--}}
{{--                                        <option value="American Samoa">ساموا الأمريكية</option>--}}
{{--                                        <option value="Andorra">أندورا</option>--}}
{{--                                        <option value="Angola">أنغولا</option>--}}
{{--                                        <option value="Anguilla">أنغيلا</option>--}}
{{--                                        <option value="Antarctica">أنتاركتيكا</option>--}}
{{--                                        <option value="Antigua and Barbuda">أنتيغوا وبربودا</option>--}}
{{--                                        <option value="Argentina">الأرجنتين</option>--}}
{{--                                        <option value="Armenia">أرمينيا</option>--}}
{{--                                        <option value="Aruba">أروبا</option>--}}
{{--                                        <option value="Australia">أستراليا</option>--}}
{{--                                    </select>--}}
{{--                                </p>--}}
{{--                                <p class="form-row forn-row-col forn-row-col-2">--}}
{{--                                    <label class="text">حالة</label>--}}
{{--                                    <select title="state" data-placeholder="London" class="chosen-select" tabindex="1">--}}
{{--                                        <option value="United States">لندن</option>--}}
{{--                                        <option value="United Kingdom">طوكيو</option>--}}
{{--                                        <option value="Afghanistan">سيول</option>--}}
{{--                                        <option value="Aland Islands">مدينة مكسيكو</option>--}}
{{--                                        <option value="Albania">القمر</option>--}}
{{--                                        <option value="Algeria">دلهي</option>--}}
{{--                                        <option value="American Samoa">نيويورك</option>--}}
{{--                                        <option value="Andorra">جاكرتا</option>--}}
{{--                                        <option value="Angola">ساو باولو</option>--}}
{{--                                        <option value="Anguilla">أوساكا</option>--}}
{{--                                        <option value="Antarctica">كراتشي</option>--}}
{{--                                    </select>--}}
{{--                                </p>--}}
{{--                                <p class="form-row forn-row-col forn-row-col-3">--}}
{{--                                    <label class="text">مدينة</label>--}}
{{--                                    <select title="city" data-placeholder="London" class="chosen-select" tabindex="1">--}}
{{--                                        <option value="United States">لندن</option>--}}
{{--                                        <option value="United Kingdom">طوكيو</option>--}}
{{--                                        <option value="Afghanistan">سيول</option>--}}
{{--                                        <option value="Aland Islands">مدينة مكسيكو</option>--}}
{{--                                        <option value="Albania">القمر</option>--}}
{{--                                        <option value="Algeria">دلهي</option>--}}
{{--                                        <option value="American Samoa">نيويورك</option>--}}
{{--                                        <option value="Andorra">جاكرتا</option>--}}
{{--                                        <option value="Angola">ساو باولو</option>--}}
{{--                                        <option value="Anguilla">أوساكا</option>--}}
{{--                                        <option value="Antarctica">كراتشي</option>--}}
{{--                                    </select>--}}
{{--                                </p>--}}
{{--                                <p class="form-row form-row-first">--}}
{{--                                    <label class="text">الرمز البريدي</label>--}}
{{--                                    <input title="zip" type="text" class="input-text">--}}
{{--                                </p>--}}
{{--                                <p class="form-row form-row-last">--}}
{{--                                    <label class="text">تبوك</label>--}}
{{--                                    <input title="address" type="text" class="input-text">--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row-col-2 row-col">--}}
{{--                            <div class="your-order">--}}
{{--                                <h3 class="title-form">--}}
{{--                                    طلبك--}}
{{--                                </h3>--}}
{{--                                <ul class="list-product-order">--}}
{{--                                    <li class="product-item-order">--}}
{{--                                        <div class="product-thumb">--}}
{{--                                            <a href="#">--}}
{{--                                                <img src="assets/product_images/product-item-1.jpg" alt="img">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-order-inner">--}}
{{--                                            <h5 class="product-name">--}}
{{--                                                <a href="#">3D Dining Chair</a>--}}
{{--                                            </h5>--}}
{{--                                            <span class="attributes-select attributes-color">Black,</span>--}}
{{--                                            <span class="attributes-select attributes-size">XXL</span>--}}
{{--                                            <div class="price">--}}
{{--                                                AED 45--}}
{{--                                                <span class="count">x1</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="product-item-order">--}}
{{--                                        <div class="product-thumb">--}}
{{--                                            <a href="#">--}}
{{--                                                <img src="assets/product_images/product-item-2.jpg" alt="img">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-order-inner">--}}
{{--                                            <h5 class="product-name">--}}
{{--                                                <a href="#">3D Dining Chair</a>--}}
{{--                                            </h5>--}}
{{--                                            <span class="attributes-select attributes-color">Black,</span>--}}
{{--                                            <span class="attributes-select attributes-size">XXL</span>--}}
{{--                                            <div class="price">--}}
{{--                                                AED 45--}}
{{--                                                <span class="count">x1</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <div class="order-total">--}}
{{--									<span class="title">--}}
{{--										السعر الكلي:--}}
{{--									</span>--}}
{{--                                    <span class="total-price">--}}
{{--										AED 95--}}
{{--									</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="#" class="button button-payment">دفع</a>--}}
{{--                </div>--}}
                <div class="payment-method-wrapp">
                    <div class="payment-method-form checkout-form">
                        <div class="row-col-1 row-col">
                            <div class="payment-method">
                                <h3 class="title-form">
                                    طريقة الدفع او السداد
                                </h3>
                                <div class="group-button-payment">
                                    <a href="#" class="button btn-credit-card">بطاقة الائتمان</a>
                                    <a href="#" class="button btn-paypal">PayPal</a>
                                </div>
                                <p class="form-row form-row-card-number">
                                    <label class="text">رقم البطاقة</label>
                                    <input type="text" class="input-text" placeholder="xxx - xxx - xxx - xxx">
                                </p>
                                <p class="form-row forn-row-col forn-row-col-1">
                                    <label class="text">شهر</label>
                                    <select title="month" data-placeholder="01" class="chosen-select" tabindex="1">
                                        <option value="thang01">01</option>
                                        <option value="thang02">02</option>
                                        <option value="thang03">03</option>
                                        <option value="thang04">04</option>
                                        <option value="thang05">05</option>
                                        <option value="thang06">06</option>
                                        <option value="thang07">07</option>
                                        <option value="thang08">08</option>
                                        <option value="thang09">09</option>
                                        <option value="thang10">10</option>
                                        <option value="thang11">11</option>
                                        <option value="thang12">12</option>
                                    </select>
                                </p>
                                <p class="form-row forn-row-col forn-row-col-2">
                                    <label class="text">سنة</label>
                                    <select title="Year" data-placeholder="2017" class="chosen-select" tabindex="1">
                                        <option value="nam2010">2010</option>
                                        <option value="nam2011">2011</option>
                                        <option value="nam2012">2012</option>
                                        <option value="nam2013">2013</option>
                                        <option value="nam2014">2014</option>
                                        <option value="nam2015">2015</option>
                                        <option value="nam2016">2016</option>
                                        <option value="nam2017">2017</option>
                                        <option value="nam2018">2018</option>
                                        <option value="nam2020">2020</option>
                                    </select>
                                </p>
                                <p class="form-row forn-row-col forn-row-col-3">
                                    <label class="text">CVV</label>
                                    <select title="CVV" data-placeholder="238" class="chosen-select" tabindex="1">
                                        <option value="cvv1">238</option>
                                        <option value="cvv2">354</option>
                                        <option value="cvv3">681</option>
                                        <option value="cvv4">254</option>
                                        <option value="cvv5">687</option>
                                        <option value="cvv6">123</option>
                                        <option value="cvv7">951</option>
                                        <option value="cvv8">852</option>
                                        <option value="cvv9">753</option>
                                        <option value="vcc10">963</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <div class="row-col-2 row-col">
                            <div class="your-order">
                                <h3 class="title-form">
                                    طلبك
                                </h3>
                                <ul class="list-product-order">
                                    @foreach($cart as $row)
                                    <li class="product-item-order">
                                        <div class="product-thumb">
                                            <a href="{{route('productDetails',$row->id)}}">
                                                <img src="{{asset(App\Models\Product::findorfail($row->id)->image)}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="product-order-inner">
                                            <h5 class="product-name">
                                                <a href="{{route('productDetails',$row->id)}}">{{$row->name}}</a>
                                            </h5>
                                            <span class="attributes-select attributes-color">Black,</span>
                                            <span class="attributes-select attributes-size">XXL</span>
                                            <div class="price">
                                                AED {{$row->price}}
                                                <span class="count">x{{$row->qty}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="order-total">
									<span class="title">
										السعر الكلي:
									</span>
                                    <span class="total-price">
										AED  {{Cart::subtotal()}}
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-control">
                        <a href="{{route('website')}}" class="button btn-back-to-shipping">العودة إلى التسوق</a>
                        <a href="#" class="button btn-pay-now">ادفع الآن</a>
                    </div>
                </div>
                <div class="end-checkout-wrapp">
                    <div class="end-checkout checkout-form">
                        <div class="icon">
                        </div>
                        <h3 class="title-checkend">
                            هنيئاً! تمت معالجة طلبك.
                        </h3>
                        <div class="sub-title">
                            سيتم العمل على شحن طلبك في اقرب وقت ممكن.
                        </div>
                        <a href="index.html" class="button btn-return">العودة إلى المتجر</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
