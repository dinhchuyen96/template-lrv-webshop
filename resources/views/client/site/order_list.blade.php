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
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Your-Order</li>
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
                                        <h3>History of your order</h3>
                                    </div>
                                    @if($orders->count())
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>Serial</td>
                                                        <td>purchase date</td>
                                                        <td>Status</td>
                                                        <td>Quantity</td>
                                                        <td>Total Pay</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orders as $order)
                                                    <tr>
                                                        <td>{{$i-=1}}</td>
                                                        <td>
                                                            <a href="{{route('home.product',['product'=>$order->id,'category'=>$order->category_id, 'slug'=>Str::slug($order->name)])}}">{{$order->name}}</a>
                                                            <span>{{$order->created_at->format('d-m-Y')}}</span>
                                                        </td>
                                                        <td>
                                                            @if ($order->status == 0)
                                                                <span class="btn btn-primary">Chờ xác nhận</span>
                                                            @elseif($order->status == 1)
                                                                <span class="btn btn-info">Đã xác nhận</span>
                                                            @elseif($order->status == 2)
                                                                <span class="btn btn-warning">Đang giao hàng</span>
                                                            @elseif($order->status == 3)
                                                                <span class="btn btn-success">Đã giao thành công</span>
                                                            @elseif($order->status == 4)
                                                                <span class="btn btn-danger">Hoàn đơn</span>
                                                            @endif
                                                        </td>
                                                        <td> {{$order->totalQuantity()}}</td>
                                                        <td>${{number_format($order->total_price)}}</td>
                                                        <td><a href="{{route('home.order_detail',$order->id)}}" type="button" class="btn btn-info">Detail</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                            <a href="{{route('home')}}" class="btn btn-secondary">Continue Shopping</a>
                                            {{-- <a href="{{route('home.order_checkout')}}" class="btn btn-secondary dark align-self-end">Checkout</a> --}}
                                        </div>
                                        
                                    @else
                                    <h2 class="text-center alert alert-success">Bạn chưa đặt hàng lần nào</h2>
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