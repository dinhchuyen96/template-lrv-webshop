@extends('layouts.site')
@section('title','Home')
@section('main')
<div class="slider-area">
        <div class="hero-slider-active slick-dot-style slider-arrow-style">
            <div class="single-slider d-flex align-items-center" style="background-image: url({{url('home')}}/assets/img/slider/slider1-home1.jpg);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-8">
                            <div class="slider-text">
                                <h1>New Range Of<br>sumsang Camera</h1>
                                <p>sumsang EOS600D/Kiss X5</p>
                                <a class="btn-1 home-btn" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider d-flex align-items-center" style="background-image: url({{url('home')}}/assets/img/slider/slider2-home1.jpg);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-8">
                            <div class="slider-text">
                                <h1>Game, Consoles &amp;<br>much more</h1>
                                <p>Sega Saturn Disc Drive Replacement</p>
                                <a class="btn-1 home-btn" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider area end -->

    <!-- feature area start -->
    <div class="feature-style-one pt-70 pb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-inner fix">
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{url('home')}}/assets/img/icon/wrapper1.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>free shipping</h4>
                                    <p>free shipping on all us order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{url('home')}}/assets/img/icon/wrapper2.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Support 24/7</h4>
                                    <p>Contact us 24 hours a day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{url('home')}}/assets/img/icon/wrapper3.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>100% Money Back</h4>
                                    <p>You have 30 days to Return</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{url('home')}}/assets/img/icon/wrapper4.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>90 Days Return</h4>
                                    <p>If goods have problems</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{url('home')}}/assets/img/icon/wrapper5.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Payment Secure</h4>
                                    <p>We ensure secure payment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->

    <!-- product wrapper area start -->
    <div class="product-wrapper fix pb-70">
        <div class="container-fluid">
            <div class="section-title product-spacing hm-11">
                <h3><span>New</span> product</h3>
                <div class="boxx-tab">
                    <ul class="nav my-tab">
                        <li>
                            <a class="active" data-toggle="tab" href="#one">Camera, Photo & Video</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#two">Audio & Home Theater</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#three">Cellphones & Accessories</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="one">
                    <div class="product-gallary-wrapper">
                        <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                            @foreach($product_new as $ps)
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="{{route('home.product',['product'=>$ps->id,'slug'=>Str::slug($ps->name)])}}">
                                        <img src="{{url('uploads')}}/{{$ps->image}}" class="pri-img" style="width:100%; height: 200px" alt="">
                                        <img src="{{url('uploads')}}/{{$ps->image}}" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="{{route('home.add-wishlist',$ps->id)}}" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="{{route('home.add-compare',$ps->id)}}" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="{{route('home.category',$ps->cat->id)}}">{{$ps->cat->name}}</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="{{route('home.product',['product'=>$ps->id,'slug'=>Str::slug($ps->name)])}}">{{$ps->name}}</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">{{$ps->price}}$</span>
                                    </div>
                                    <a class="btn-cart" href="{{route('home.cart-add',$ps->id)}}" >add to cart</a>
                                </div>
                            </div><!-- </div> end single item -->
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="section-title product-spacing hm-11">
                    <h3><span>Our</span> product</h3>
                    {{-- <div class="boxx-tab">
                        <ul class="nav my-tab">
                            <li>
                                <a class="active" data-toggle="tab" href="#one">Camera, Photo & Video</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#two">Audio & Home Theater</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#three">Cellphones & Accessories</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="one">
                        <div class="product-gallary-wrapper">
                            <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                                @foreach($product_sale as $psn)
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="{{route('home.product',['product'=>$psn->id,'slug'=>Str::slug($psn->name)])}}">
                                            <img src="{{url('uploads')}}/{{$psn->image}}" class="pri-img" style="width:100%; height: 200px" alt="">
                                            <img src="{{url('uploads')}}/{{$psn->image}}" class="sec-img" alt="">
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product label_new">
                                                @if($psn->sale_price == 0)
                                                <span>new</span>
                                                @else
                                                <span>sale {{$psn->sale_price}}$</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="action-links">
                                            <a href="{{route('home.add-wishlist',$psn->id)}}" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                            <a href="{{route('home.add-compare',$psn->id)}}" title="Compare"><i class="lnr lnr-sync"></i></a>
                                            <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="manufacture-product">
                                            <p><a href="">{{$psn->cat->name}}</a></p>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="{{route('home.product',['product'=>$psn->id,'slug'=>Str::slug($psn->name)])}}">{{$psn->name}}</a></h4>
                                        </div>
                                        <div class="ratings">
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">{{$psn->price}}$</span>
                                        </div>
                                        <a class="btn-cart" href="{{route('home.cart-add',$psn->id)}}" type="button">add to cart</a>
                                    </div>
                                </div><!-- </div> end single item -->
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                <div class="tab-pane fade" id="two">
                    <div class="product-gallary-wrapper">
                        <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£78.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-10.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-5%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£90.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-3.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                                <span>new</span>
                                            </div>
                                        <div class="label-product label_sale">
                                            <span>-10%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">lg</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-10%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£78.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">hitachi</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£46.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£65.00</span></span>
                                        <span class="old-price"><del>£90.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">jamuna</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£30.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="three">
                    <div class="product-gallary-wrapper">
                        <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£78.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-13.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-10.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-5%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£90.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                                <span>new</span>
                                            </div>
                                        <div class="label-product label_sale">
                                            <span>-10%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div><!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-10%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£78.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div> <!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£46.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div> <!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">hitachi</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£65.00</span></span>
                                        <span class="old-price"><del>£90.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div> <!-- </div> end single item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-13.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£30.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div> <!-- </div> end single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- product wrapper area start -->

    <!-- home banner statics area -->
    <div class="banner-statics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner-statics">
                        <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/banner/img1-top-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner-statics">
                        <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/banner/img2-top-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner-statics">
                        <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/banner/img3-top-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home banner statics end -->

    <!-- featured categories area start -->
    <div class="featured-categories-area">
        <div class="container-fluid">
            <div class="section-title hm-12">
                <h3><span>Featured</span> product</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="featured-cat-active owl-carousel owl-arrow-style">
                        <div class="pro-layout-two-single-item">
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Audio & Home Theater</a></h4>
                                    <p class="total-items"> 9 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Cellphones & Accessories</a></h4>
                                    <p class="total-items"> 6 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img2.jpg" alt=""></a>
                                </div>
                            </div>
                        </div> <!-- </ end single item -->
                        <div class="pro-layout-two-single-item">
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Camera, Photo & Video</a></h4>
                                    <p class="total-items"> 5 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img3.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Audio & Home Theater</a></h4>
                                    <p class="total-items"> 12 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img4.jpg" alt=""></a>
                                </div>
                            </div>
                        </div> <!-- </ end single item -->
                        <div class="pro-layout-two-single-item">
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Smart Watch & Accessories</a></h4>
                                    <p class="total-items"> 10 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img5.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Laptop & Computere</a></h4>
                                    <p class="total-items"> 18 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div> <!-- </ end single item -->
                        <div class="pro-layout-two-single-item">
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Headphones & Accessories</a></h4>
                                    <p class="total-items"> 0 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img7.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Network Devices</a></h4>
                                    <p class="total-items"> 5 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img8.jpg" alt=""></a>
                                </div>
                            </div>
                        </div> <!-- </ end single item -->
                        <div class="pro-layout-two-single-item">
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Video Games Cosoles</a></h4>
                                    <p class="total-items"> 0 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img9.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="product-layout-two mb-30">
                                <div class="product-layout-info">
                                    <h4 class="pro-name"><a href="shop-grid-left-sidebar.html">Quadcopters & Accessories</a></h4>
                                    <p class="total-items"> 4 products </p>
                                    <a href="shop-grid-left-sidebar.html" class="shop-btn">+ shop now</a>
                                </div>
                                <div class="product-layout-thumb">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/product/pro-layout-img10.jpg" alt=""></a>
                                </div>
                            </div>
                        </div> <!-- </ end single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured categories area end -->

    <!-- home product module three start -->
    <div class="home-module-three hm-1 fix pb-40">
        <div class="container-fluid">
            <div class="section-title module-three">
                <h3><span>Hot</span> Collection</h3>
                <div class="boxx-tab">
                    <ul class="nav my-tab">
                        <li>
                            <a class="active" data-toggle="tab" href="#module-one">Featured Products</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#module-two">On sale Products</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#module-three">Best sellers Products</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="module-one">
                    <div class="module-four-wrapper custom-seven-column">
                        <div class="col col-2 mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="shop-grid-left-sidebar.html">
                                        <img src="{{url('home')}}/assets/img/product/img-module1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div> <!-- single item end -->               
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">office uses  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£10.00</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-5.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">sumsang XB10 Portable headphone</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£60.99</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->        
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10  Wireless color printer</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">walton smart watch with blutooth</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£99.99</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-10.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-8%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">Nokia</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Nokia smart phone with 32gb rom</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£78.99</span></span>
                                        <span class="old-price"><del>£99.99</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-12.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-13.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">walton Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£33.33</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->        
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-14.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jamuna XB10 Portable  Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£30.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-12%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Apple iPhone SE 16GB memory rom Factory</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£25.50</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£32.18</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->        
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-25%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Apple iPad with Retina ready Display</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£30.3</span></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Amazon Cloud Cam  Security Camera</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£00.00</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                    </div>
                </div>
                <div class="tab-pane" id="module-two">
                    <div class="module-four-wrapper custom-seven-column">
                        <div class="col col-2 mb-30">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="shop-grid-left-sidebar.html">
                                            <img src="{{url('home')}}/assets/img/product/img-module1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                        </div> <!-- single item end -->  
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-25%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Apple iPad with Retina ready Display</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£30.3</span></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->                   
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10  Wireless color printer</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Amazon Cloud Cam  Security Camera</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£00.00</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">walton smart watch with blutooth</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£99.99</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-12%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-12.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-13.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">walton Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£33.33</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end --> 
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-10%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">office uses  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£10.00</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->  
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-5.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">sumsang XB10 Portable headphone</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£60.99</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->      
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-14.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jamuna XB10 Portable  Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£30.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-10.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-8%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">Nokia</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Nokia smart phone with 32gb rom</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£78.99</span></span>
                                        <span class="old-price"><del>£99.99</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Apple iPhone SE 16GB memory rom Factory</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£25.50</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£32.18</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->        
                    </div>
                </div>
                <div class="tab-pane" id="module-three">
                    <div class="module-four-wrapper custom-seven-column">
                        <div class="col col-2 mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="shop-grid-left-sidebar.html">
                                        <img src="{{url('home')}}/assets/img/product/img-module1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div> <!-- single item end -->  
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-14.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jamuna XB10 Portable  Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£30.31</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->                    
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10  Wireless color printer</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-10.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-8%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">Nokia</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Nokia smart phone with 32gb rom</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£78.99</span></span>
                                        <span class="old-price"><del>£99.99</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-12.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-13.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">walton Portable  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£33.33</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end --> 
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-5.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">sumsang XB10 Portable headphone</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£60.99</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->        
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            <span>-12%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">office uses  Wireless Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£10.00</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Apple iPhone SE 16GB memory rom Factory</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£25.50</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">jony XB10 Portable  Speaker</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£32.18</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->  
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">walton smart watch with blutooth</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£99.99</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->      
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_sale">
                                            <span>-25%</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Apple iPad with Retina ready Display</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price"><span class="special-price">£30.3</span></span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                        <div class="col mb-30">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                        <img src="{{url('home')}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                        <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Amazon Cloud Cam  Security Camera</a></h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        <span><i class="lnr lnr-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">£00.00</span>
                                    </div>
                                    <button class="btn-cart" type="button">add to cart</button>
                                </div>
                            </div>
                        </div> <!-- single item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home product module three end -->

    <!-- home banner statics area -->
    <div class="banner-statics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner-statics">
                        <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/banner/img1-middle-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner-statics">
                        <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/banner/img2-middle-sinrato1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home banner statics end -->

    <!-- home product module four start -->
    <div class="home-module-four">
        <div class="container-fluid">
            <div class="section-title">
                <h3><span>Laptop</span> & computer</h3>
            </div>
            <div class="pro-module-four-active owl-carousel owl-arrow-style">
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price"><span class="special-price">£30.00</span></span>
                            <span class="old-price"><del>£450.00</del></span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-14.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">Walton</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">Koss Porta Pro On Ear  Headphones </a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price">£30.31</span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-3.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">Jamuna</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">JBL Flip 3 Portable Bluetooth</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price"><span class="special-price">£40.00</span></span>
                            <span class="old-price"><del>£60.00</del></span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-10.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">jony KD55X72 55-Inch  4k Ultra HD</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price">£30.31</span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-11.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
            </div>
        </div>
    </div>
    <!-- home product module four end -->

    <!-- home product module five start -->
    <div class="home-module-five">
        <div class="container-fluid">
            <div class="section-title">
                <h3><span>Headphones</span> & Accessories </h3>
            </div>
            <div class="pro-module-four-active owl-carousel owl-arrow-style">
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">Beats EP Wired Headphone-Black</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price"><span class="special-price">£30.00</span></span>
                            <span class="old-price"><del>£450.00</del></span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-8.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">JBL Flip 3 Portable Bluetooth</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price">£30.31</span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-4.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">Marshall Portable  Bluetooth Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price"><span class="special-price">£40.00</span></span>
                            <span class="old-price"><del>£60.00</del></span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-6.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price">£30.31</span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-2.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
            </div>
        </div>
    </div>
    <!-- home product module five end -->

    <!-- home product module six start -->
    <div class="home-module-six mb-70">
        <div class="container-fluid">
            <div class="section-title">
                <h3><span>Business</span> & office</h3>
            </div>
            <div class="pro-module-four-active owl-carousel owl-arrow-style">
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">JBL Flip 3 Portable Bluetooth</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price"><span class="special-price">£30.00</span></span>
                            <span class="old-price"><del>£450.00</del></span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-2.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">Marshall Portable  Bluetooth Speaker </a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price">£30.31</span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-9.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">Beats EP Wired Headphone-Black</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price"><span class="special-price">£40.00</span></span>
                            <span class="old-price"><del>£60.00</del></span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-13.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
                <div class="product-module-four-item">
                    <div class="product-module-caption">
                        <div class="manufacture-com">
                            <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                        </div>
                        <div class="product-module-name">
                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box-module">
                            <span class="regular-price">£30.31</span>
                        </div>
                    </div>
                    <div class="product-module-thumb">
                        <a href="product-details.html">
                            <img src="{{url('home')}}/assets/img/product/product-7.jpg" alt="">
                        </a>
                    </div>
                </div> <!-- end single item -->
            </div>
        </div>
    </div>
    <!-- home product module five end -->

    <!-- home banner statics area -->
    <div class="banner-statics">
        <div class="container-fluid">
            <div class="single-banner-statics">
                <a href="shop-grid-left-sidebar.html"><img src="{{url('home')}}/assets/img/banner/img-bottom-sinrato1.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <!-- home banner statics area end -->

    <!-- brand sale area start -->
    <div class="brand-area pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3><span>Brand</span> sale</h3>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="nav brand-active owl-carousel">
                        <li>
                            <a class="active" href="#brand-one" data-toggle="tab">
                                <img src="{{url('home')}}/assets/img/brand/brand1.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#brand-two" data-toggle="tab">
                                <img src="{{url('home')}}/assets/img/brand/brand2.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#brand-three" data-toggle="tab">
                                <img src="{{url('home')}}/assets/img/brand/brand3.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#brand-one" data-toggle="tab">
                                <img src="{{url('home')}}/assets/img/brand/brand4.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#brand-three" data-toggle="tab">
                                <img src="{{url('home')}}/assets/img/brand/brand5.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#brand-two" data-toggle="tab">
                                <img src="{{url('home')}}/assets/img/brand/brand6.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="brand-one">
                            <div class="product-gallary-wrapper">
                                <div class="product-gallary-active owl-carousel owl-arrow-style sale-nav">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£30.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-3.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                        <span>new</span>
                                                    </div>
                                                <div class="label-product label_sale">
                                                    <span>-10%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                <span class="old-price"><del>£60.00</del></span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£46.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    <span>-10%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">toshiba</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£78.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-10.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">hitachi</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£90.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    <span>-20%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    <span>-7%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">nokia</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£78.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="brand-two">
                            <div class="product-gallary-wrapper">
                                <div class="product-gallary-active owl-carousel owl-arrow-style sale-nav">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    <span>-7%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£78.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-10.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£90.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-3.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                        <span>new</span>
                                                    </div>
                                                <div class="label-product label_sale">
                                                    <span>-10%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">lg</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                <span class="old-price"><del>£60.00</del></span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    <span>-10%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£78.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">hitachi</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£46.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    <span>-20%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">jamuna</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£30.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="brand-three">
                            <div class="product-gallary-wrapper">
                                <div class="product-gallary-active owl-carousel owl-arrow-style sale-nav">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    <span>-7%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£78.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-13.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-10.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£90.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                        <span>new</span>
                                                    </div>
                                                <div class="label-product label_sale">
                                                    <span>-10%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                <span class="old-price"><del>£60.00</del></span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    <span>-10%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£78.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£46.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div> <!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-9.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    <span>-20%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">hitachi</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{url('home')}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                                <img src="{{url('home')}}/assets/img/product/product-13.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">£30.31</span>
                                            </div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop()