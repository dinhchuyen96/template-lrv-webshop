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
                                <li class="breadcrumb-item"><a href="index.html">{{__('main.home')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('cart.cart')}}</li>
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
                                        <h3>{{__('cart.spcart')}}</h3>
                                    </div>
                                    @if($carts)
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>{{__('cart.image')}}</td>
                                                        <td>{{__('cart.pname')}}</td>
                                                        <td>{{__('cart.brand')}}</td>
                                                        <td>{{__('cart.qty')}}</td>
                                                        <td>{{__('cart.uprice')}}</td>
                                                        <td>{{__('cart.total')}}</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($carts as $product)
                                                    <tr>
                                                        <td>{{$loop->index+1}}</td>
                                                        <td>
                                                            <a href="{{route('home.product',['product'=>$product->id,'category' => $product->category_id,'slug'=>Str::slug($product->name)])}}"><img src="{{url('uploads')}}/products/{{$product->image}}" alt="Cart Product Image" title="Ảnh minh họa" class="img-thumbnail"></a>
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
                                                                        <input type="number" name="quantity" value="{{$product->quantity}}" class="quantityInCart" title="Số lượng đặt mua"  min="1" max="10">
                                                                    </div>
                                                                    <span class="input-group-btn">
                                                                        <button type="submit" class="btn btn-primary" title="Cập nhật số lượng giỏ hàng" id="cart-update" onclick="return confirm('Cập nhật số sản phẩm?')"><i class="fa fa-refresh"></i></button>
                                                                        <a href="{{route('home.cart-remove',$product->id)}}" title="Xóa sản phẩm khỏi giỏ hàng" onclick="return confirm('Xóa sản phẩm khỏi giỏ hàng?')" type="submit" style="height: 40px" class="btn btn-danger pull-right"><i class="fa fa-times-circle"></i></a>
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
                                                <a href="{{route('home.cart-clear')}}" class="btn btn-danger"  title="Xóa toàn bộ giỏ hàng"  onclick="return confirm('Hành động sẽ xóa toàn bộ giỏ hàng?')">{{__('cart.cleanall')}}</a>
                                            </div>
                                        </div>
                                        <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                            <a href="{{route('home')}}" class="btn btn-secondary" title="Quay lại trang chủ" >{{__('cart.conshop')}}</a>
                                            <a href="{{route('home.order_checkout')}}"  title="Đến trang thanh toán"  class="btn btn-secondary dark align-self-end">{{__('cart.checkout')}}</a>
                                        </div>
                                   
                                    

                                    <div class="cart-amount-wrapper">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>{{__('main.subtt')}}</strong></td>
                                                            <td>{{number_format($subPrice)}}$</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>{{__('main.ecotax')}}</strong></td>
                                                            <td>{{number_format($tax)}}$</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Vat (10%):</strong></td>
                                                            <td>{{number_format($vat)}}$</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>{{__('cart.total')}}</strong></td>
                                                            <td><span class="color-primary">{{number_format($totalPrice)}}$</span></td>
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