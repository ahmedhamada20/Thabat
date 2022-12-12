@extends('website.master')
@section('css')
@endsection
@section('title')
    تسجيل الدخول
@endsection
@section('class_to')
    inblog-page
@endsection

@section('content')
    <div class="main-content main-content-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li class="trail-item trail-end active">
                                تسجيل
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <div class="customer_login">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="login-item">
                                        <h5 class="title-login">قم بتسجيل الدخول إلى حسابك</h5>
                                        <form class="login" action="{{route('login')}}" method="post">
                                            @csrf
                                            <p class="form-row form-row-wide">
                                                <label class="text">البريد الالكتروني</label>
                                                <input title="username" name="email" type="text" class="input-text">
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label class="text">كلمة المرور</label>
                                                <input title="password" name="password" type="password" class="input-text">
                                            </p>
                                            <p class="lost_password">
												<span class="inline">
													<input type="checkbox" id="cb1">
													<label for="cb1" class="label-text">تذكرنى</label>
												</span>
                                                <a href="#" class="forgot-pw">هل نسيت كلمة السر؟</a>
                                            </p>
                                            <p class="form-row">
                                                <input type="submit" class="button-submit" value="تسجيل الدخول">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="login-item">
                                        <h5 class="title-login">سجل الان</h5>
                                        <form class="register">
                                            <p class="form-row form-row-wide">
                                                <label class="text">بريدك الالكتروني</label>
                                                <input title="email" type="email" class="input-text">
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label class="text">اسم المستخدم</label>
                                                <input title="name" type="text" class="input-text">
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label class="text">كلمة المرور</label>
                                                <input title="pass" type="password" class="input-text">
                                            </p>
                                            <p class="form-row">
												<span class="inline">
													<input type="checkbox" id="cb2">
													<label for="cb2" class="label-text">وأنا أوافق على<span>البنود و الظروف</span></label>
												</span>
                                            </p>
                                            <p class="">
                                                <input type="submit" class="button-submit" value="سجل الان">
                                            </p>
                                        </form>
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
