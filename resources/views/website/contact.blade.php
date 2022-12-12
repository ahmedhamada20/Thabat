@extends('website.master')
@section('css')
@endsection
@section('title')
    تواصل معانا
@endsection
@section('class_to')
    inblog-page
@endsection

@section('content')
    <div class="main-content main-content-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li class="trail-item trail-end active">
                                تواصل معنا
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area content-contact col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
        <div class="page-main-content">
            <div class="google-map">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927764.3556126795!2d47.383016360680315!3d24.724150315808046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2INin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2sjo!4v1669203954111!5m2!1sar!2sjo" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-contact">
                            <div class="col-lg-8 no-padding">
                                <div class="form-message">
                                    <h2 class="title" dir="rtl">
                                        ارسل لنا رسالة!
                                    </h2>
                                    <form action="#" class="stelina-contact-fom" dir="rtl">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p>
                                                    <span class="form-label">الاسم</span>
                                                    <span class="form-control-wrap your-name">
														<input title="your-name" type="text" name="your-name" size="40"
                                                               class="form-control form-control-name">
													</span>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>
													<span class="form-label">
														البريد الاكلتروني
													</span>
                                                    <span class="form-control-wrap your-email">
														<input title="your-email" type="email" name="your-email" size="40"
                                                               class="form-control form-control-email">
													</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p>
                                                    <span class="form-label">الرقم</span>
                                                    <span class="form-control-wrap your-phone">
														<input title="your-phone" type="text" name="your-phone"
                                                               class="form-control form-control-phone">
													</span>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>
													<span class="form-label">
														الشركة
													</span>
                                                    <span class="form-control-wrap your-company">
														<input title="your-company" type="text" name="your-company"
                                                               class="form-control your-company">
													</span>
                                                </p>
                                            </div>
                                        </div>
                                        <p>
											<span class="form-label">
												رسالتك
											</span>
                                            <span class="wpcf7-form-control-wrap your-message">
												<textarea title="your-message" name="your-message" cols="40" rows="9"
                                                          class="form-control your-textarea"></textarea>
											</span>
                                        </p>
                                        <p>
                                            <input type="submit" value="ارسل"
                                                   class="form-control-submit button-submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 no-padding">
                                <div class="form-contact-information">
                                    <form action="#" class="stelina-contact-info" dir="rtl">
                                        <h2 class="title">
                                            معلومات التواصل
                                        </h2>
                                        <div class="info" dir="rtl">
                                            <div class="item address">
												<span class="icon">

												</span>
                                                <span class="text">
													 الرياض , شارع ****
												</span>
                                            </div>
                                            <div class="item phone">
												<span class="icon">

												</span>
                                                <span class="text">
													(+000) 0123 4567 89
												</span>
                                            </div>
                                            <div class="item email">
												<span class="icon">

												</span>
                                                <span class="text">
													info@thabat.sa
												</span>
                                            </div>
                                        </div>
                                        <div class="socials">
                                            <a href="#" class="social-item" target="_blank">
												<span class="icon fa fa-facebook">

												</span>
                                            </a>
                                            <a href="#" class="social-item" target="_blank">
												<span class="icon fa fa-twitter-square">

												</span>
                                            </a>
                                            <a href="#" class="social-item" target="_blank">
												<span class="icon fa fa-instagram">

												</span>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
