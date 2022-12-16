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
                                {{$row->name}}
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
                                    <img id="img_zoom" data-zoom-image="assets/images/perfume-20056.png" src="{{asset($row->image)}}" style="padding: 5rem;" alt="img">
                                    <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="product-preview image-small product_preview">
                                    <div id="thumbnails" class="thumbnails_carousel owl-carousel" data-nav="true" data-autoplay="false" data-dots="false" data-loop="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'>

                                       @foreach($row->photos as $photo)
                                        <a href="#" data-image="{{asset($photo->Filename)}}" data-zoom-image="{{asset('admin/pictures/product/'.$row->id . '/'.$photo->Filename)}}" class="active">
                                            <img src="{{asset('admin/pictures/product/'.$row->id . '/'.$photo->Filename)}}" data-large-image="assets/images/perfume-20056.png" alt="img">
                                        </a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="details-infor">
                                <h1 class="product-title">
                                   {{$row->name}}
                                </h1>

                                <div class="availability">
                                    توافر:
                                    <a href="#">موجود</a>
                                </div>
                                <div class="price">
                                    <span>AED {{$row->price}}</span>
                                </div>
                                <div class="product-details-description">
                                    <ul>
                                        @foreach($row->categoryProdut as $category)
                                        <li>{{$category->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="group-button">

                                    <div class="quantity-add-to-cart">


                                        @isset($cart)

                                            @if ($done =$cart->where('id',$row->id)->first())
                                                <form action="{{ route('deletedCart') }}" method="POST">
                                                    @csrf

                                                    <input type="hidden" value="{{ $done->rowId }}"
                                                           name="cart_id">

                                                    <button type="submit" class="single_add_to_cart_button button">حذف من السله</button>

                                                </form>
                                            @else




                                                <form action="{{ route('addToCart') }}" method="POST">
                                                    @csrf

                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input type="text" data-step="1" data-min="0" value="1" title="Qty" name="qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="product_id"
                                                           value="{{ $row->id }}">

{{--                                                    <button class="btn btn-danger">addd</button>--}}
                                                    <button type="submit" class="single_add_to_cart_button button">أضف إلى السلة</button>
                                                </form>
                                            @endif

                                        @endisset
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

                            </ul>
                            <div class="tab-container">
                                <div id="product-descriptions" class="tab-panel active">
                                    <p>
                               {{$row->notes}}
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

                            </div>
                        </div>
                        <div style="clear: left;"></div>
                        <div class="related products product-grid">
                            <h2 class="product-grid-title">You may also like</h2>
                            <div class="owl-products owl-slick equal-container nav-center"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
                              @foreach(App\Models\Product::inRandomOrder()->limit(3)->get() as $product)
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
                                                <a href="{{route('productDetails',$product->id)}}">
                                                    <img src="{{asset($product->image)}}" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="{{route('productDetails',$product->id)}}">{{$product->name}}</a>
                                            </h5>
                                            <div class="group-info">

                                                <div class="price">
                                                    <del>

                                                        AED {{$product->discount}}

                                                    </del>
                                                    <ins>
                                                        AED {{$product->price}}
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
                <div class="sidebar sidebar-details col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="wrapper-sidebar">
                        <div class="widget widget-categories">
                            <h3 class="widgettitle">فئات</h3>
                            <ul class="list-categories">
                                @foreach(App\Models\Category::get()->take(5) as $category)
                                <li>
                                    <input type="checkbox" id="cb1">
                                    <label for="cb1" class="label-text">
                                        {{$category->name}}
                                    </label>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
