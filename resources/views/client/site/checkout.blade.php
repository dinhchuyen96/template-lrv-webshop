@extends('client.layouts.site')
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
                                <li class="breadcrumb-item"><a href="index.html">{{__('main.home')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('checkout.checkout')}}</li>
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
                        @if ($coupon)
                        @else
                            <div class="user-actions-area">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="user-actions user-coupon">
                                            <h3>{{__('checkout.havecoupon')}} <span id="show_coupon">{{__('checkout.clhere')}}</span>
                                            </h3>
                                            <div id="checkout_coupon" class="display-content">
                                                <div class="coupon-info">
                                                    <form action="{{ route('home.checkout_coupon') }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-6">
                                                                <div class="input-group">
                                                                    <input type="text" name="code" value=""
                                                                        placeholder="Coupon Code" id="input-coupon"
                                                                        class="form-control mr-3" required>
                                                                    <input type="submit" value="Apply Coupon"
                                                                        id="button-coupon" class="btn btn-secondary">
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
                                            <h3>{{__('checkout.billing')}}</h3>
                                        </div>

                                        <form role="form" method="POST" id="checkout_form">
                                            @csrf
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="first_name">{{__('checkout.fname')}}<span
                                                            class="text-danger">*</span></label>
                                                    <input name="first_name" value="{{ $acc->first_name }}" type="text"
                                                        class="form-control" id="first_name" required>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="last_name">{{__('checkout.lname')}}<span
                                                            class="text-danger">*</span></label>
                                                    <input name="last_name" type="text" value="{{ $acc->last_name }}"
                                                        class="form-control" id="last_name" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="company_name">{{__('checkout.company')}}</label>
                                                    <input name="company_name" type="text" class="form-control"
                                                        id="company_name">
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="email_address">{{__('checkout.email')}} <span
                                                            class="text-danger">*</span></label>
                                                    <input name="email" value="{{ $acc->email }}" type="email"
                                                        class="form-control" maxlength="40" id="email_address" required>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="col-12 col-sm-12 col-md-6">
                                                    <label>{{__('checkout.city')}}<span class="text-danger">*</span></label>
                                                    <select id="selectProvince" name="province_id" class="form-control" required="">
                                                        @if($province )
                                                            <option value="">{{__('checkout.city')}}</option>
                                                            @foreach($province as $province)
                                                                <option value="{{ $province->city_id}}">{{ $province->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                      
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6">
                                                    <label>{{__('checkout.district')}} <span class="text-danger">*</span></label>
                                                    <select class="form-control display-select" name="district_id" id="selectDistrict" required>
                                                        <option value="">{{__('checkout.district')}}</option>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="form-row mb-3">
                                                 <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label>{{__('checkout.ward')}} <span class="text-danger">*</span></label>
                                                    <select class="form-control display-select" name="ward_id" id="selectWard"required>
                                                        <option value="">{{__('checkout.ward')}}</option>
                                                    </select>
                                                </div> 
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="p_address">{{__('checkout.add')}}<span
                                                            class="text-danger">*</span></label>
                                                    <input name="address" type="text" value="{{ $acc->address }}"
                                                        class="form-control" id="p_address" required>
                                                </div>
                                            </div>


                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="tel_number">{{__('checkout.phone')}}</label>
                                                    <input name="phone" type="tel" value="0{{ $acc->phone }}"
                                                        class="form-control" id="tel_number" pattern="[0-9]{10}">
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="fax_num">{{__('checkout.fax')}}</label>
                                                    <input name="fax" type="text" class="form-control" id="fax_num">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="country_name" class="d-block">{{__('checkout.pmethod')}} <span
                                                            class="text-danger">*</span></label>
                                                    <select name="payment_method" id="country_name"
                                                        class="form-control nice-select" required="">
                                                        <option value="Thanh to??n khi nh???n h??ng">COD</option>
                                                        <option value="Th??? ng??n h??ng">Banking</option>
                                                        <option value="V?? ??i???n t???">Money wallet</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-12 col-sm-12 col-md-6">
                                                    <label for="shipping_method" class="d-block">{{__('checkout.smethod')}}
                                                        <span class="text-danger">*</span></label>
                                                    <select name="shipping_method" id="country_name"
                                                        class="form-control nice-select" required="">
                                                        <option value="Giao trong 4h">Shipping for 4h</option>
                                                        <option value="Chuy???n ph??t nhanh">Normal ship</option>
                                                        <option value="Chuy???n ph??t th?????ng">Flash ship</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="email_address">{{__('checkout.onote')}}</label>
                                                    <input name="order_note" value="" type="text" class="form-control"
                                                        id="email_address">
                                                    <input name="total_price" type="hidden" value="{{ $totalPrice }}"
                                                        class="">
                                                    <input name="fee" type="hidden" value="{{ $fee }}"
                                                        class="">
                                                </div>

                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-12 text-center">
                                                    <button style="width: 50%;" type="submit"
                                                        class=" btn btn-secondary">{{__('checkout.order')}}</button>
                                                </div>
                                            </div>

                                            <input type="hidden" name="status" value="0" />
                                        </form>
                                    </div> <!-- end of checkout-form -->
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                                    <div class="order-summary">
                                        <div class="section-title left-aligned">
                                            <h3>{{__('checkout.yorder')}}</h3>
                                        </div>
                                        <div class="product-container">
                                            @foreach ($carts as $carts)
                                                <input type="hidden" name="category_id" form="checkout_form"
                                                    value="{{ $carts->category_id }}" />
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
                                                            <p class="product-quantity">{{__('cart.qty')}}: {{ $carts->quantity }}
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
                                                            <th>{{__('main.subtt')}}</th>
                                                            <td class="text-center">{{ number_format($subPrice) }}$
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">{{__('main.ecotax')}} </th>
                                                            <td class="text-center">{{ number_format($tax) }}$</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">Vat (10%): </th>
                                                            <td class="text-center">{{ number_format($vat) }}$</td>
                                                        </tr>
                                                        @if ($coupon)
                                                            <tr class="cart-coupon">
                                                                <th>{{__('main.coupon')}}</th>
                                                                <td>
                                                                    @if ($coupon->discount_ab)
                                                                        <h3>-{{ $coupon->discount_ab }}$</h3>
                                                                        <input type="hidden" name="discount_ab"
                                                                            value="{{ $coupon->discount_ab }}"
                                                                            form="checkout_form">
                                                                    @else
                                                                        <h3>-{{ $coupon->discount_rl }}%</h3>
                                                                        <input type="hidden" name="discount_rl"
                                                                            value="{{ $coupon->discount_rl }}"
                                                                            form="checkout_form">
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        <tr class="order-total">
                                                            <th>{{__('cart.total')}}</th>
                                                            <td class="text-center">
                                                                <strong>{{ number_format($totalPrice) }}$ -
                                                                    {{ $totalQuantity }} {{__('checkout.item')}}</strong>
                                                            </td>
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
   

@section('script')
    <script type="text/javascript"></script>
@endsection
@stop()
