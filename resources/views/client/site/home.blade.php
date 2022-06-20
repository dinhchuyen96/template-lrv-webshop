@extends('client.layouts.site')
@section('title', 'Home')
@section('main')

    <div class="slider-area">
        <!-- slider area start -->
        <div class="hero-slider-active slick-dot-style slider-arrow-style">
            @foreach ($banners as $banner)
                <div class="single-slider d-flex align-items-center"
                    style="background-image: url({{ url('uploads') }}/banner/{{ $banner->image_slide }});">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 col-sm-8">
                                <div class="slider-text">
                                    <a>{!! $banner->title !!}></a>
                                    <a class="btn-1 home-btn" href="{{ route('home.cart-add', $banner->product_id) }}">{{__('home.sn')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                                    <img src="{{ url('home') }}/assets/img/icon/wrapper1.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>{{ __('home.promotion1') }}</h4>
                                    <p>{{ __('home.promotion1d') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{ url('home') }}/assets/img/icon/wrapper2.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>{{ __('home.promotion2') }}</h4>
                                    <p>{{ __('home.promotion2d') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{ url('home') }}/assets/img/icon/wrapper3.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>{{ __('home.promotion3') }}</h4>
                                    <p>{{ __('home.promotion3d') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{ url('home') }}/assets/img/icon/wrapper4.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>{{ __('home.promotion4') }}</h4>
                                    <p>{{ __('home.promotion4d') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{ url('home') }}/assets/img/icon/wrapper5.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>{{ __('home.promotion5') }}</h4>
                                    <p>{{ __('home.promotion5d') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->

    <!-- product wrapper area start  New product -->
    <div class="product-wrapper fix pb-70">
        <div class="container-fluid">
            <div class="section-title product-spacing hm-11">
                <h3><span>{{__('home.prne')}}</span> {{__('home.pren')}}{{__('home.prnv')}}</h3>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="one">
                    <div class="product-gallary-wrapper">
                        <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                            @foreach ($product_new as $psn)
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a
                                            href="{{ route('home.product', ['product' => $psn->id, 'category' => $psn->category_id, 'slug' => Str::slug($psn->name)]) }}">
                                            <img src="{{ url('uploads') }}/products/{{ $psn->image }}"
                                                class="pri-img" style="width:100%; height: 200px" alt="">
                                            <img src="{{ url('uploads') }}/products/{{ $psn->image }}"
                                                class="sec-img" alt="">
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product label_new">
                                                <span>{{__('home.np')}}</span>
                                            </div>
                                            <div class="label-product label_sale">
                                                @if ($psn->percent_sale > 0)
                                                    <span>{{__('home.sale')}} {{ $psn->percent_sale }}%</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="action-links">
                                            <a href="{{ route('home.add-wishlist', $psn->id) }}" title="{{__('home.wishlist')}}"><i class="fa fa-heart-o" style="font-size:23px;"></i></a>
                                            <a href="{{ route('home.add-compare', $psn->id) }}" title="{{__('home.compare')}}"><i
                                                    class="lnr lnr-sync"></i></a>
                                            <a href="#" title="{{__('home.qw')}}" onclick="quickView({{$psn->id}})"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="manufacture-product">
                                            <p><a
                                                    href="{{ route('home.category', $psn->id) }}">{{ $psn->cat->name }}</a>
                                            </p>
                                        </div>
                                        <div class="product-name">
                                            <h4><a
                                                    href="{{ route('home.product', ['product' => $psn->id, 'category' => $psn->category_id, 'slug' => Str::slug($psn->name)]) }}">{{ $psn->name }}</a>
                                            </h4>
                                        </div>
                                        <div class="ratings">
                                            @if ($psn->review_rt->avg('rating') == 0)
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            @else
                                                @for ($i = 0; $i < $psn->review_rt->avg('rating'); $i++)
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                @endfor
                                            @endif
                                        </div>
                                        <div class="price-box">
                                            @if ($psn->sale_price < $psn->price && $psn->sale_price != 0)
                                                <span class="regular-price"><span
                                                        class="special-price">{{ number_format($psn->sale_price, 0) }}$</span></span>
                                                <span class="old-price"><del>{{ $psn->price }}$</del></span>
                                            @else
                                                <span class="regular-price"><span
                                                        class="special-price">{{ $psn->price }}$</span></span>
                                            @endif
                                        </div>
                                        <a class="btn-cart" href="{{ route('home.cart-add', $psn->id) }}">{{__('home.atc')}}</a>
                                    </div>
                                </div><!-- </div> end single item -->
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="section-title product-spacing hm-11">
                    <h3><span>{{__('home.our')}}<span>{{__('home.ourvi')}}</span> <span>{{__('home.pren')}}</h3>
                    <div class="boxx-tab">
                        <ul class="nav my-tab">
                            @foreach ($cats as $key => $cat)
                                <li>
                                    <a class="{{ $key == 0 ? 'active' : '' }}" data-toggle="tab"
                                        href="#test-{{ $cat->id }}">{{ $cat->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    @foreach ($cats as $key => $cat)
                        <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="test-{{ $cat->id }}">
                            <div class="product-gallary-wrapper">
                                <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                                    @foreach ($cat->products_byParent_Cat as $psl)
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a
                                                    href="{{ route('home.product', ['product' => $psl->id, 'category' => $psl->category_id, 'slug' => Str::slug($psl->name)]) }}">
                                                    <img src="{{ url('uploads') }}/products/{{ $psl->image }}"
                                                        class="pri-img" style="width:100%; height: 200px" alt="">
                                                    <img src="{{ url('uploads') }}/products/{{ $psl->image }}"
                                                        class="sec-img" alt="">
                                                </a>
                                                <div class="box-label">
                                                    <div class="label-product label_new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="label-product label_sale">
                                                        @if ($psl->percent_sale > 0)
                                                            <span>{{__('home.sale')}} {{ $psl->percent_sale }}%</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="action-links">
                                                    <a href="{{ route('home.add-wishlist', $psl->id) }}"
                                                        title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                    <a href="{{ route('home.add-compare', $psl->id) }}"
                                                        title="Compare"><i class="lnr lnr-sync"></i></a>
                                                    <a href="#" title="Quick view"
                                                        data-target="#quickk_view{{ $psl->id }}"
                                                        data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-caption">
                                                <div class="manufacture-product">
                                                    <p><a href="">{{ $psl->cat->name }}</a></p>
                                                </div>
                                                <div class="product-name">
                                                    <h4><a
                                                            href="{{ route('home.product', ['product' => $psl->id, 'category' => $psl->category_id, 'slug' => Str::slug($psl->name)]) }}">{{ $psl->name }}</a>
                                                    </h4>
                                                </div>
                                                <div class="ratings">
                                                    @if ($psl->review_rt->avg('rating') == 0)
                                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    @else
                                                        @for ($i = 0; $i < $psl->review_rt->avg('rating'); $i++)
                                                            <span class="yellow"><i
                                                                    class="lnr lnr-star"></i></span>
                                                        @endfor
                                                    @endif
                                                </div>
                                                <div class="price-box">
                                                    @if ($psl->sale_price < $psl->price && $psl->sale_price != 0)
                                                        <span class="regular-price"><span
                                                                class="special-price">{{ number_format($psl->sale_price, 0) }}$</span></span>
                                                        <span
                                                            class="old-price"><del>{{ $psl->price }}$</del></span>
                                                    @else
                                                        <span class="regular-price"><span
                                                                class="special-price">{{ $psl->price }}$</span></span>
                                                    @endif
                                                </div>
                                                <a class="btn-cart" href="{{ route('home.cart-add', $psl->id) }}"
                                                    type="button">{{__('home.atc')}}</a>
                                            </div>
                                        </div><!-- </div> end single item -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <!-- product wrapper area start -->
        <div class="home-module-three hm-1 fix pb-40">
            <div class="container-fluid">
                <div class="section-title module-three">
                    <h3><span>Hot</span> Collection</h3>
                    <div class="boxx-tab">
                        <ul class="nav my-tab">
                            <li>
                                <a class="active" data-toggle="tab" href="#module-one">{{__('home.bs')}}</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#module-two">{{__('home.os')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="module-one">
                        <div class="module-four-wrapper custom-seven-column">
                            @foreach ($product_top_sale as $top_sale)
                                <div class="col mb-30">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="{{ route('home.product', ['product' => $top_sale->id,'category' => $top_sale->cat->id,'slug' => Str::slug($top_sale->name)]) }}">
                                                <img src="{{ url('uploads') }}/products/{{ $top_sale->image }}"
                                                    class="pri-img" alt="">
                                                <img src="" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    @if ($top_sale->percent_sale > 0)
                                                        <span>{{__('home.sale')}} - {{ $top_sale->percent_sale }}%</span>                                                        
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="{{ route('home.add-wishlist', $top_sale->id) }}"
                                                    title="{{__('home.wishlist')}}"><i class="lnr lnr-heart"></i></a>
                                                <a href="{{ route('home.add-compare', $top_sale->id) }}"
                                                    title="{{__('home.compare')}}"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view"
                                                    data-target="#quickk_view{{ $top_sale->id }}"
                                                    data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a href="{{ route('home.category', $top_sale->cat->id) }}">{{ $top_sale->cat->name }}</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="{{ route('home.product', ['product' => $top_sale->id,'category' => $top_sale->cat->id,'slug' => Str::slug($top_sale->name)]) }}">{{ $top_sale->name }}</a></h4>
                                            </div>
                                            <div class="ratings">
                                                @if ($top_sale->review_rt->avg('rating') == 0)
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                @else
                                                    @for ($i = 0; $i < $top_sale->review_rt->avg('rating'); $i++)
                                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    @endfor
                                                @endif
                                            </div>
                                            <div class="price-box">

                                                @if ($top_sale->sale_price < $top_sale->price && $top_sale->sale_price != 0)
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ number_format($top_sale->sale_price, 0, ',', ',') }}</span></span>
                                                    <span
                                                        class="old-price"><del>${{ $top_sale->price }}</del></span>
                                                @else
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ $top_sale->price }}</span></span>
                                                @endif
                                            </div>
                                            <a href="{{ route('home.cart-add', $top_sale->id) }}" class="btn-cart"
                                                type="button">{{__('home.atc')}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="module-two">
                        <div class="module-four-wrapper custom-seven-column">
                            @foreach ($product_sale as $product_sale_hot)
                                <div class="col mb-30">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="{{ route('home.product', ['product' => $product_sale_hot->id,'category' => $product_sale_hot->cat->id,'slug' => Str::slug($product_sale_hot->name)]) }}">
                                                <img src="{{ url('uploads') }}/products/{{ $product_sale_hot->image }}"
                                                    class="pri-img" alt="">
                                                <img src="" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    @if ($product_sale_hot->percent_sale > 0)
                                                        <span>Sale - {{ $product_sale_hot->percent_sale }}%</span>                                                        
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="{{ route('home.add-wishlist', $product_sale_hot->id) }}"
                                                    title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="{{ route('home.add-compare', $product_sale_hot->id) }}"
                                                    title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view"
                                                    data-target="#quickk_view{{$product_sale_hot->id }}"
                                                    data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a
                                                        href="{{ route('home.category', $product_sale_hot->cat->id) }}">{{ $product_sale_hot->cat->name }}</a>
                                                </p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="{{ route('home.product', ['product' => $product_sale_hot->id,'category' => $product_sale_hot->cat->id,'slug' => Str::slug($product_sale_hot->name)]) }}">{{ $product_sale_hot->name }}</a></h4>
                                            </div>
                                            <div class="ratings">
                                                @if ($product_sale_hot->review_rt->avg('rating') == 0)
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                @else
                                                    @for ($i = 0; $i < $product_sale_hot->review_rt->avg('rating'); $i++)
                                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    @endfor
                                                @endif
                                            </div>
                                            <div class="price-box">
                                                @if ($product_sale_hot->sale_price < $product_sale_hot->price && $product_sale_hot->sale_price != 0)
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ number_format($product_sale_hot->sale_price, 0, ',', ',') }}</span></span>
                                                    <span
                                                        class="old-price"><del>${{ $product_sale_hot->price }}</del></span>
                                                @else
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ $product_sale_hot->price }}</span></span>
                                                @endif
                                            </div>
                                            <a href="{{ route('home.cart-add', $product_sale_hot->id) }}"
                                                class="btn-cart" type="button">{{__('home.atc')}}</a>
                                        </div>
                                    </div>
                                </div> <!-- single item end -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home banner statics area -->
        <div class="banner-statics">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner-statics">
                            <a href="shop-grid-left-sidebar.html"><img
                                    src="{{ url('home') }}/assets/img/banner/img1-top-sinrato1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner-statics">
                            <a href="shop-grid-left-sidebar.html"><img
                                    src="{{ url('home') }}/assets/img/banner/img2-top-sinrato1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner-statics">
                            <a href="shop-grid-left-sidebar.html"><img
                                    src="{{ url('home') }}/assets/img/banner/img3-top-sinrato1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home banner statics end -->


        <!-- brand sale area start -->
        <div class="brand-area pb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3><span>{{__('home.br')}}</span></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="nav brand-active owl-carousel">
                            @foreach ($logo as $key => $logo)
                                <li>
                                    <a class="{{ $key == 0 ? 'active' : '' }}" href="#brand-{{ $logo->category_id }}"
                                        data-toggle="tab">
                                        <img src="{{ url('uploads') }}/logo/{{ $logo->logo }}" alt="">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12">
                        <div class="tab-content">

                            <div class="tab-pane fade {{ $key == 0 ? 'active show' : '' }} " id="brand-">
                                <div class="product-gallary-wrapper">
                                    <div class="product-gallary-active owl-carousel owl-arrow-style sale-nav">

                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src=""
                                                        class="pri-img" alt="">
                                                    <img src=""
                                                        class="sec-img" alt="">
                                                </a>
                                                <div class="box-label">
                                                    <div class="label-product label_new">
                                                        <span>new</span>
                                                    </div>
                                                </div>
                                                <div class="action-links">
                                                    <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                    <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                    <a href="#" title="Quick view" data-target="#quickk_view"
                                                        data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-caption">
                                                <div class="manufacture-product">
                                                    <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                </div>
                                                <div class="product-name">
                                                    <h4><a href="product-details.html">jony XB10 Portable Wireless
                                                            Speaker</a></h4>
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
                                                <button class="btn-cart" type="button">{{__('home.atc')}}</button>
                                            </div>
                                        </div> <!-- </div> end single item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick view modal start -->
        @foreach ($product_new as $psn)
            <div class="modal fade" id="quickk_view{{ $psn->id }}">
                <div class="container">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="product-large-slider mb-20">
                                            <div class="pro-large-img">
                                                <img src="{{ url('uploads') }}/products/{{ $psn->image }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="pro-nav">
                                            <div class="pro-nav-thumb"><img
                                                    src="{{ url('uploads') }}/products/{{ $psn->image }}" alt="" />
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="product-details-inner">
                                            <div class="product-details-contentt">
                                                <div class="pro-details-name mb-10">
                                                    <h3><a
                                                            href="{{ route('home.product', ['product' => $psn->id, 'category' => $psn->category_id, 'slug' => Str::slug($psn->name)]) }}">{{ $psn->name }}</a>
                                                    </h3>
                                                </div>
                                                <div class="pro-details-review mb-20">
                                                    <ul>
                                                        <li>
                                                            @if ($psn->review_rt->avg('rating') == 0)
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            @else
                                                                @for ($i = 0; $i < $psn->review_rt->avg('rating'); $i++)
                                                                    <span><i class="fa fa-star"></i></span>
                                                                @endfor
                                                            @endif
                                                        </li>
                                                        <li><a href="#">{{ $psn->review_rt->count() }} Reviews</a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box mb-15">
                                                    {{-- <span class="regular-price"><span class="special-price">${{$psn->sale_price}}</span></span>
                                                <span class="old-price"><del>${{$psn->price}}</del></span> --}}
                                                    @if ($psn->sale_price > 0)
                                                        <span class="regular-price"><span
                                                                class="special-price">${{ number_format($psn->sale_price, 0) }}</span></span>
                                                        <span
                                                            class="old-price"><del>{{ $psn->price }}$</del></span>
                                                    @else
                                                        <span class="regular-price"><span
                                                                class="special-price">${{ $psn->price }}</span></span>
                                                    @endif
                                                </div>
                                                <div class="product-detail-sort-des pb-20">
                                                    <p>{!! $psn->sort_description !!}</p>
                                                </div>
                                                <div class="pro-details-list pt-20">
                                                    <ul>
                                                        <li><span>Availability :</span>In Stock</li>
                                                    </ul>
                                                </div>
                                                <div class="product-availabily-option mt-15 mb-15">
                                                    <h3>Available Options</h3>
                                                    <div class="color-optionn">
                                                        <h4><sup>*</sup>color</h4>
                                                        <ul>
                                                            <li>
                                                                <a class="c-black" href="#" title="Black"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-blue" href="#" title="Blue"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-brown" href="#" title="Brown"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-gray" href="#" title="Gray"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-red" href="#" title="Red"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pro-quantity-box mb-30">
                                                    <div class="qty-boxx">
                                                        <form method="GET"
                                                            action="{{ route('home.cart-add', $psn->id) }}">
                                                            @csrf
                                                            <label>qty :</label>
                                                            <input type="number" name="quantity" placeholder="0" value="1" min="1"
                                                                max="69">
                                                            <button type="submit"  class="btn btn-cart lg-btn">{{__('home.atc')}}</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="pro-social-sharing">
                                                    <label>share :</label>
                                                    <ul>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="bg-facebook" title="Facebook">
                                                                <i class="fa fa-facebook"></i>
                                                                <span>like 0</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="bg-twitter" title="Twitter">
                                                                <i class="fa fa-twitter"></i>
                                                                <span>tweet</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="bg-google" title="Google Plus">
                                                                <i class="fa fa-google-plus"></i>
                                                                <span>google +</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Quick view modal start -->
        @foreach ($product_top_sale as $product_sale_top)
            <div class="modal fade" id="quickk_view{{ $product_sale_top->id }}">
                <div class="container">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="product-large-slider mb-20">
                                            <div class="pro-large-img">
                                                <img src="{{ url('uploads') }}/products/{{ $product_sale_top->image }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="pro-nav">
                                            <div class="pro-nav-thumb"><img
                                                    src="{{ url('uploads') }}/products/{{ $product_sale_top->image }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="product-details-inner">
                                            <div class="product-details-contentt">
                                                <div class="pro-details-name mb-10">
                                                    <h3>{{ $product_sale_top->name }}</h3>
                                                </div>
                                                <div class="pro-details-review mb-20">
                                                    <ul>
                                                        <li>
                                                            @if ($product_sale_top->review_rt->avg('rating') == 0)
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            @else
                                                                @for ($i = 0; $i < $product_sale_top->review_rt->avg('rating'); $i++)
                                                                    <span><i class="fa fa-star"></i></span>
                                                                @endfor
                                                            @endif
                                                        </li>
                                                        <li><a href="#">{{ $psn->review_rt->count() }} Reviews</a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box mb-15">
                                                    @if ($product_sale_top->sale_price > 0)
                                                        <span class="regular-price"><span
                                                                class="special-price">${{ number_format($product_sale_top->sale_price, 0) }}</span></span>
                                                        <span
                                                            class="old-price"><del>{{ $product_sale_top->price }}$</del></span>
                                                    @else
                                                        <span class="regular-price"><span
                                                                class="special-price">${{ $product_sale_top->price }}</span></span>
                                                    @endif
                                                </div>
                                                <div class="product-detail-sort-des pb-20">
                                                    <p>{!! $product_sale_top->sort_description !!}</p>
                                                </div>
                                                <div class="pro-details-list pt-20">
                                                    <ul>
                                                        <li><span>Availability :</span>In Stock</li>
                                                    </ul>
                                                </div>
                                                <div class="product-availabily-option mt-15 mb-15">
                                                    <h3>Available Options</h3>
                                                    <div class="color-optionn">
                                                        <h4><sup>*</sup>color</h4>
                                                        <ul>
                                                            <li>
                                                                <a class="c-black" href="#" title="Black"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-blue" href="#" title="Blue"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-brown" href="#" title="Brown"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-gray" href="#" title="Gray"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-red" href="#" title="Red"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pro-quantity-box mb-30">
                                                    <div class="qty-boxx">
                                                        <form method="GET"
                                                            action="{{ route('home.cart-add', $product_sale_top->id) }}">
                                                            @csrf
                                                            <label>qty :</label>
                                                            <input type="number" name="quantity" placeholder="0" min="1"
                                                                max="69">
                                                            <button type="submit" class="btn btn-cart lg-btn">{{__('home.atc')}}</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="pro-social-sharing">
                                                    <label>share :</label>
                                                    <ul>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="bg-facebook" title="Facebook">
                                                                <i class="fa fa-facebook"></i>
                                                                <span>like 0</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="bg-twitter" title="Twitter">
                                                                <i class="fa fa-twitter"></i>
                                                                <span>tweet</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="bg-google" title="Google Plus">
                                                                <i class="fa fa-google-plus"></i>
                                                                <span>google +</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach 
        <!-- Quick view modal end -->
        <!-- Quick view modal start -->
        @foreach ($product_sale as $product_sale)
            <div class="modal fade" id="quickk_view{{ $product_sale->id }}">
                <div class="container">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="product-large-slider mb-20">
                                            <div class="pro-large-img">
                                                <img src="{{ url('uploads') }}/products/{{ $product_sale->image }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="pro-nav">
                                            <div class="pro-nav-thumb"><img
                                                    src="{{ url('uploads') }}/products/{{ $product_sale->image }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="product-details-inner">
                                            <div class="product-details-contentt">
                                                <div class="pro-details-name mb-10">
                                                    <h3>{{ $product_sale->name }}</h3>
                                                </div>
                                                <div class="pro-details-review mb-20">
                                                    <ul>
                                                        <li>
                                                            @if ($product_sale->review_rt->avg('rating') == 0)
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            @else
                                                                @for ($i = 0; $i < $product_sale->review_rt->avg('rating'); $i++)
                                                                    <span><i class="fa fa-star"></i></span>
                                                                @endfor
                                                            @endif
                                                        </li>
                                                        <li><a href="#">{{ $psn->review_rt->count() }} Reviews</a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box mb-15">
                                                    @if ($product_sale->sale_price > 0)
                                                        <span class="regular-price"><span
                                                                class="special-price">${{ number_format($product_sale->sale_price, 0) }}</span></span>
                                                        <span
                                                            class="old-price"><del>{{ $product_sale->price }}$</del></span>
                                                    @else
                                                        <span class="regular-price"><span
                                                                class="special-price">${{ $product_sale->price }}</span></span>
                                                    @endif
                                                </div>
                                                <div class="product-detail-sort-des pb-20">
                                                    <p>{{ $product_sale->sort_description }}</p>
                                                </div>
                                                <div class="pro-details-list pt-20">
                                                    <ul>
                                                        <li><span>Availability :</span>In Stock</li>
                                                    </ul>
                                                </div>
                                                <div class="product-availabily-option mt-15 mb-15">
                                                    <h3>Available Options</h3>
                                                    <div class="color-optionn">
                                                        <h4><sup>*</sup>color</h4>
                                                        <ul>
                                                            <li>
                                                                <a class="c-black" href="#" title="Black"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-blue" href="#" title="Blue"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-brown" href="#" title="Brown"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-gray" href="#" title="Gray"></a>
                                                            </li>
                                                            <li>
                                                                <a class="c-red" href="#" title="Red"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pro-quantity-box mb-30">
                                                    <div class="qty-boxx">
                                                        <form method="GET"
                                                            action="{{ route('home.cart-add', $product_sale->id) }}">
                                                            @csrf
                                                            <label>qty :</label>
                                                            <input type="number" name="quantity" placeholder="0" min="1"
                                                                max="69">
                                                            <button type="submit" class="btn btn-cart lg-btn">add to
                                                                cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="pro-social-sharing">
                                                    <label>share :</label>
                                                    <ul>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="bg-facebook" title="Facebook">
                                                                <i class="fa fa-facebook"></i>
                                                                <span>like 0</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="bg-twitter" title="Twitter">
                                                                <i class="fa fa-twitter"></i>
                                                                <span>tweet</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="bg-google" title="Google Plus">
                                                                <i class="fa fa-google-plus"></i>
                                                                <span>google +</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach 
        <!-- Quick view modal end -->
    @stop()
