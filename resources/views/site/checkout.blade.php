@extends('layouts.site')
@section('title', 'checkout')
@section('main')
    <!-- header area end -->

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-60">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of Checkout Wrapper -->
    <div class="checkout-wrapper pt-10 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        @if($coupon)
                        @else
                        <div class="user-actions-area">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="user-actions user-coupon">
                                        <h3>Have A Coupon? <span id="show_coupon">Click Here To Enter Your Code.</span></h3>
                                        <div id="checkout_coupon" class="display-content">
                                            <div class="coupon-info">
                                                <form action="{{route('home.checkout_coupon')}}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-6">
                                                            <div class="input-group">
                                                                <input type="text" name="code" value=""
                                                                    placeholder="Coupon Code" id="input-coupon"
                                                                    class="form-control mr-3" required>
                                                                <input type="submit" value="Apply Coupon" id="button-coupon"
                                                                    class="btn btn-secondary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- end of user-actions -->
                                </div>
                            </div> <!-- end of row -->
                        </div> <!-- end of user-actions -->
                        @endif
                        <div class="checkout-area">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                                    <div class="checkout-form">
                                        <div class="section-title left-aligned">
                                            <h3>Billing Details</h3>                                            
                                        </div>

                                        <form role="form" method="POST" id="checkout_form">
                                            @csrf
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="first_name">First Name <span
                                                            class="text-danger">*</span></label>
                                                    <input name="first_name" value="{{ $acc->first_name }}" type="text" class="form-control"
                                                        id="first_name" required>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="last_name">Last Name <span
                                                            class="text-danger">*</span></label>
                                                    <input name="last_name" type="text" value="{{$acc->last_name}}" class="form-control"
                                                        id="last_name" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="company_name">Company</label>
                                                    <input name="company_name" type="text" class="form-control" id="company_name">
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="email_address">Email Address <span
                                                            class="text-danger">*</span></label>
                                                    <input name="email" value="{{ $acc->email }}" type="email" class="form-control"
                                                        id="email_address" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="p_address">Address <span
                                                            class="text-danger">*</span></label>
                                                    <input name="address" type="text" value="{{ $acc->address }}" class="form-control"
                                                        id="p_address" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="tel_number">telephone</label>
                                                    <input name="phone" type="tel" value="{{ $acc->phone }}" class="form-control"
                                                        id="tel_number">
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="fax_num">Fax</label>
                                                    <input name="fax" type="text" class="form-control" id="fax_num">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="country_name" class="d-block">Payment method <span
                                                            class="text-danger">*</span></label>
                                                    <select name="payment_method" id="country_name"
                                                        class="form-control nice-select" required="">
                                                        <option value="Thanh toán khi nhận hàng">COD</option>
                                                        <option value="Thẻ ngân hàng">Banking</option>
                                                        <option value="Ví điện tử">Money wallet</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="shipping_method" class="d-block">Shipping method <span class="text-danger">*</span></label>
                                                    <select name="shipping_method" id="country_name"
                                                        class="form-control nice-select" required="">
                                                        <option value="Giao trong 4h">Shipping for 4h</option>
                                                        <option value="Chuyển phát nhanh">Normal ship</option>
                                                        <option value="Chuyển phát thường">Flash ship</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="email_address">Order note</label>
                                                    <input name="order_note" value="" type="text" class="form-control"
                                                        id="email_address">
                                                    <input name="total_price" type="hidden" value="{{$totalPrice}}" class="">
                                                    <input name="fee" type="hidden" value="{{$fee}}" class="">
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-12 text-center">
                                                    <button style="width: 50%;" type="submit" class=" btn btn-secondary" >Order</button>
                                                </div>
                                            </div>
                                        
                                            <input type="hidden" name="status" value="0" />
                                        </form>
                                    </div> <!-- end of checkout-form -->
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                                    <div class="order-summary">
                                        <div class="section-title left-aligned">
                                            <h3>Your Order</h3>
                                        </div>
                                        <div class="product-container">
                                            @foreach ($carts as $carts)
                                            <input type="hidden" name="category_id" form="checkout_form" value="{{$carts->category_id}}" />
                                                <div class="product-list">
                                                    <div class="product-inner media align-items-center">
                                                        <div class="product-image mr-4 mr-sm-5 mr-md-4 mr-lg-5">
                                                            <a href="#">
                                                                <img src="{{ url('uploads') }}/products/{{ $carts->image }}"
                                                                    alt="Compete Track Tote" title="Compete Track Tote">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>{{ $carts->name }}</h5>
                                                            <p class="product-quantity">Quantity: {{ $carts->quantity }}
                                                            </p>
                                                            <p class="product-final-price">${{ $carts->price }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div> <!-- end of product-container -->
                                        <div class="order-review">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td class="text-center">{{ $subPrice }}$</td>
                                                            
                                                        </tr> <tr>
                                                            <th class="text-center">Eco Tax (-2%): </th>
                                                            <td class="text-center">{{ $tax }}$</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">Vat (10%): </th>
                                                            <td class="text-center">{{ number_format($vat) }}$</td>
                                                        </tr>
                                                        @if($coupon)
                                                            <tr class="cart-coupon">
                                                                <th>Coupon
                                                                    <form method="GET">
                                                                        @csrf
                                                                         <a href="{{route('home.del_coupon')}}" onclick="return confirm('Are you sure?')" type="submit" style="color:black;position:absolute;top:494px; left:421px;" class="btn"><i style="font-size:25px" class="fa fa-times-circle"></i></a>
                                                                    </form>
                                                                   
                                                                </th>
                                                                <td>
                                                                    @if($coupon->discount_ab)
                                                                        <h3>-{{$coupon->discount_ab}}$</h3>
                                                                        <input type="hidden" name="discount_ab" value="{{$coupon->discount_ab}}" form="checkout_form">
                                                                    @else
                                                                        <h3>-{{$coupon->discount_rl}}%</h3>
                                                                        <input type="hidden" name="discount_rl" value="{{$coupon->discount_rl}}" form="checkout_form">
                                                                    @endif                                                                   
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td class="text-center">
                                                                <strong>{{number_format($totalPrice)}}$ - {{$totalQuantity}} items</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- end of order-summary -->
                                </div>
                            </div> <!-- end of row -->
                        </div> <!-- end of checkout-area -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Checkout Wrapper -->
    @if(session()->has('ok'))
    <div class="modal fade" id="overlay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(255, 255, 255)">
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
                    <h3 class="modal-title" style="color: green">{{session()->get('ok') }}</h3>
                </div>
            </div>
        </div>
    </div>
@endif
@if(session()->has('no'))
    <div class="modal fade" id="overlay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(255, 255, 255)">
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
                    <h3 class="modal-title" style="color: red">{{session()->get('no') }}</h3>
                </div>
            </div>
        </div>
    </div>
@endif
    <!-- scroll to top -->
@stop()
