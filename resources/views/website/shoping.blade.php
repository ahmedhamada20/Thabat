@extends('website.master')
@section('css')
@endsection
@section('title')
    عربه التسوق
@endsection
@section('class_to')
    inblog-page
@endsection

@section('content')
    <div class="site-content">
        <main class="site-main  main-container no-sidebar">
            <div class="container">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="">
								<span>
									الرئيسية
								</span>
                            </a>
                        </li>
                        <li class="trail-item trail-end active">
							<span>
								عربة التسوق
							</span>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="main-content-cart main-content col-sm-12">
                        <h3 class="custom_blog_title">
                            عربة التسوق
                        </h3>
                        <div class="page-main-content">
                            <div class="shoppingcart-content">
                                <form action="shoppingcart.html" class="cart-form">
                                    <table class="shop_table">
                                        <thead>
                                        <tr>
                                            <th class="product-remove"></th>
                                            <th class="product-thumbnail"></th>
                                            <th class="product-name"></th>
                                            <th class="product-price"></th>
                                            <th class="product-quantity"></th>
                                            <th class="product-subtotal"></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($cart as $row)
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a href="{{route('deletedCartShopping',$row->rowId)}}" class="btn btn-outline-danger"></a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="{{route('productDetails',$row->id)}}">
                                                    <img src="{{asset(App\Models\Product::findorfail($row->id)->image)}}" alt="img"`
                                                         class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                </a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="{{route('productDetails',$row->id)}}" class="title">{{$row->name}}</a>
                                                <span class="attributes-select attributes-color">Black,</span>
                                                <span class="attributes-select attributes-size">XXL</span>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <div class="control">
                                                        <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                        <input type="text" data-step="1" data-min="0" value="{{$row->qty}}" title="Qty"
                                                               class="input-qty qty" size="4">
                                                        <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-price" data-title="Price">
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">
															AED
														</span>
														{{$row->price}}
													</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td class="actions">
{{--                                                <div class="coupon">--}}
{{--                                                    <label class="coupon_code">رمز الكوبون:</label>--}}
{{--                                                    <input type="text" class="input-text" placeholder="رمز الترويج هنا">--}}
{{--                                                    <a href="#" class="button"></a>--}}
{{--                                                </div>--}}
                                                <div class="order-total">
														<span class="title">
															السعر الكلي:
														</span>
                                                    <span class="total-price">
															AED {{Cart::subtotal()}}
														</span>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <div class="control-cart">
                                    <a href="{{route('website')}}" class="button btn-continue-shopping">
                                        مواصلة التسوق
                                    </a>
                                    <a href="{{route('checkOut')}}">
                                        <button class="button btn-cart-to-checkout">
                                            الدفع
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
