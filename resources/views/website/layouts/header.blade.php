<header class="header style2">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message" dir="rtl">
                    حياك الله في متجرنا!
                </div>
            </div>
            <div class="top-bar-right">

                <ul class="header-user-links">
                    <li>
                        @guest
                            <a href="{{route('login')}}">تسجيل دخول أو إنشاء حساب</a>
                        @else
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="" :href="route('logout')"
                                   onclick="event.preventDefault();
                                                this.closest('form').submit();">تسجيل الخروج</a>

                            </form>
                        @endguest

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-4 col-xs-7 col-ts-12 header-element">
                    <div class="block-search-block">
                        <form class="form-search">
                            <div class="form-content">
                                <div class="inner">
                                    <input type="text" class="input" name="s" value="" placeholder="أبحث">
                                    <button class="btn-search" type="submit">
                                        <span class="icon-search"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 col-xs-5 col-ts-12">
                    <div class="logo">
                        <a href="{{route('website')}}">
                            <img src="{{asset('website/assets/images/logo.png')}}" width="30%" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart stelina-mini-cart block-header stelina-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-stelina="stelina-dropdown">
                                السلة
                                <span class="count">
                                        {{ Cart::count() }}
                                    </span>
                            </a>
                            <div class="no-product stelina-submenu">
                                <p class="text">
                                    لديك
                                    <span>
                                            {{ Cart::count() }} منتج
                                        </span>
                                    في حقيبتك
                                </p>
                                <hr>
                                <a href="{{route('shoppingCart')}}">اذهب لسلة التسوق</a>
                            </div>
                        </div>
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="stelina-clone-mobile-menu stelina-nav main-menu " id="menu-main-menu" dir="rtl">
                            <li class="menu-item">
                                <a href="{{route('website')}}" title="home">الرئيسية</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('shop')}}" title="shop">المتجر</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('listproducts')}}" title="shop">قائمة الرغبات</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('contact')}}" title="Contact-us">تواصل معنا</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('about')}}" class="stelina-menu-item-title" title="About">معلومات عنا</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('assets/images/logo.png')}}" width="30%" alt="img">
                </a>
            </div>
        </div>
        <div class="item item mobile-search-box has-sub">
            <a href="#">
                    <span class="icon">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-searchform-box">
                    <form class="header-searchform">
                        <div class="searchform-wrap">
                            <input type="text" class="search-input" placeholder="...تدخل كلمات البحث هنا">
                            <input type="submit" class="submit button" value="ابحث">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item mobile-settings-box has-sub">
            <a href="#">
                    <span class="icon">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="block-sub-item">
                    <h5 class="block-item-title">العملة</h5>
                    <form class="currency-form stelina-language">
                        <ul class="stelina-language-wrap">
                            <li class="active">
                                <a href="#">
                                        <span>
                                            ريال (SA)
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span>
                                            دولار (USA)
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span>
                                            جنيه (EGY)
                                        </span>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="item menu-bar">
            <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>
