@extends('client.layouts.site')
@section('title','cart')
@section('main')
    <!-- header area end -->

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start cart Wrapper -->
    <div class="shopping-cart-wrapper pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="shopping-cart">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h3>Shopping Cart</h3>
                                    </div>
                                    @if($carts)
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>Image</td>
                                                        <td>Product Name</td>
                                                        <td>Brand</td>
                                                        <td>Quantity</td>
                                                        <td>Unit Price</td>
                                                        <td>Total</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($carts as $product)
                                                    <tr>
                                                        <td>{{$loop->index+1}}</td>
                                                        <td>
                                                            <a href="{{route('home.product',['product'=>$product->id,'category' => $product->category_id,'slug'=>Str::slug($product->name)])}}"><img src="{{url('uploads')}}/products/{{$product->image}}" alt="Cart Product Image" title="Compete Track Tote" class="img-thumbnail"></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('home.product',['product'=>$product->id,'category' => $product->category_id,'slug'=>Str::slug($product->name)])}}">{{$product->name}}</a>
                                                            <span>Delivery Date: 2019-09-22</span>
                                                            <span>Color: Brown</span>
                                                            <span>Reward Points: 300</span>
                                                        </td>
                                                        <td>3</td>
                                                        <td>
                                                            <form action="{{route('home.cart-update',$product->id)}}" method="get" id="cart-update">
                                                                <div class="input-group btn-block">
                                                                    <div class="product-qty mr-3">
                                                                        <input type="number" name="quantity" value="{{$product->quantity}}"  min="1" max="69">
                                                                    </div>
                                                                    <span class="input-group-btn">
                                                                        <button type="submit" class="btn btn-primary" id="cart-update"><i class="fa fa-refresh"></i></button>
                                                                        <a href="{{route('home.cart-remove',$product->id)}}" onclick="return confirm('Are you sure?')" type="submit" style="height: 40px" class="btn btn-danger pull-right"><i class="fa fa-times-circle"></i></a>
                                                                    </span>
                                                                </div>
                                                            </form>
                                                        </td>
                                                        <td>${{$product->price}}</td>
                                                        <td>${{$product->quantity*$product->price}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="text-center">
                                                <a href="{{route('home.cart-clear')}}" class="btn btn-danger"onclick="return confirm('Are you sure?')">Clean all</a>
                                            </div>
                                        </div>
                                        <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                            <a href="{{route('home')}}" class="btn btn-secondary">Continue Shopping</a>
                                            <a href="{{route('home.order_checkout')}}" class="btn btn-secondary dark align-self-end">Checkout</a>
                                        </div>
                                   
                                    <div class="cart-accordion-wrapper mt-full mt-40">
                                        <h3>What would you like to do next?</h3>
                                        <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                        <div id="cart_accordion" class="mt-4" role="tablist">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingCoupon">
                                                    <h4 class="mb-0">
                                                        <a data-toggle="collapse" href="#collapseCoupon" aria-expanded="false" aria-controls="collapseCoupon">Use Coupon Code<i class="ion ion-ios-arrow-down"></i></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseCoupon" class="collapse" role="tabpanel" aria-labelledby="headingCoupon" data-parent="#cart_accordion">
                                                    <div class="card-body">
                                                        <div class="input-group">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-coupon">Enter your coupon here</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <div class="input-group">
                                                                <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
                                                                <input type="button" value="Apply Coupon" id="button-coupon" class="btn btn-secondary cart-pg">
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTax">
                                                    <h4 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseTax" aria-expanded="false" aria-controls="collapseTax">Estimate Shipping &amp; Taxes<i class="ion ion-ios-arrow-down"></i></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTax" class="collapse" role="tabpanel" aria-labelledby="headingTax" data-parent="#cart_accordion">
                                                    <div class="card-body cart-select">
                                                        <p class="pb-20">Enter your destination to get a shipping estimate.</p>
                                                        <div class="input-group form-group">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-country"><span class="text-danger">*</span> Country</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <select name="country_id" id="input-country" class="form-control nice-select">
                                                                    <option value=""> --- Please Select --- </option>
                                                                    <option value="">Argentina</option>
                                                                    <option value="">Bangladesh</option>
                                                                    <option value="">Belgium</option>
                                                                    <option value="">Brazil</option>
                                                                    <option value="">Germany</option>
                                                                    <option value="">India</option>
                                                                    <option value="">United Kingdom</option>
                                                                    <option value="">United States</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="input-group form-group">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-zone"><span class="text-danger">*</span> Region / State</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <select name="zone_id" id="input-zone" class="form-control nice-select">
                                                                    <option value=""> --- Please Select --- </option>
                                                                    <option value="">Alabama</option>
                                                                    <option value="">Arizona</option>
                                                                    <option value="">California</option>
                                                                    <option value="">Florida</option>
                                                                    <option value="">Newyork</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="input-group form-group mb-5">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-postcode"><span class="text-danger">*</span> Post Code</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control mb-0">
                                                            </div>
                                                        </div>
                                                        <button type="button" id="button-quote" class="btn btn-secondary">Get Quotes</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingGift">
                                                    <h4 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseGift" aria-expanded="false" aria-controls="collapseGift">Use Gift Certificate<i class="ion ion-ios-arrow-down"></i></a>
                                                        </h4>
                                                </div>
                                                <div id="collapseGift" class="collapse" role="tabpanel" aria-labelledby="headingGift" data-parent="#cart_accordion">
                                                    <div class="card-body">
                                                        <div class="input-group">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-voucher">Enter your gift certificate code here</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <div class="input-group">
                                                                    <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
                                                                    <input type="button" value="Apply Gift Certificate" id="button-boucher" class="btn btn-secondary cart-pg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cart-amount-wrapper">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Sub-Total:</strong></td>
                                                            <td>{{$totalPrice}}$</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Total:</strong></td>
                                                            <td><span class="color-primary">{{$totalPrice}}$</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <h2 class="text-center alert alert-success">Giỏ hàng rỗng, vui lòng đặt hàng</h2>
                                    <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                        <a href="{{route('home')}}" class="btn btn-secondary">Continue Shopping</a>
                                        {{-- <a href="{{route('home.order_checkout')}}" class="btn btn-secondary dark align-self-end">Checkout</a> --}}
                                    </div>
                                    @endif
                                    
                                </div>
                            </div>
                        </div> <!-- end of shopping-cart -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End cart Wrapper -->
    @stop()