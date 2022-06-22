@extends('client.layouts.site')
@section('title', 'cart')
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
                                <li class="breadcrumb-item active" aria-current="page">Compare</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start compare Wrapper -->
    <div class="comparison-wrapper pb-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="comparison">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h3>Product Comparison</h3>
                                    </div>
                                    <form action="#">
                                        <div class="table-responsive  text-center">
                                            <table class="table table-bordered compare-style">
                                                <thead>
                                                    <tr>
                                                        <td colspan="4"><strong>Product Details</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="product-title">Product</td>
                                                        @foreach ($procompare as $key => $value)
                                                            <td><a
                                                                    href="{{ route('home.product', ['product' => $value->id,'category' => $value->category_id,'slug' => Str::slug($value->name)]) }}"><strong>{{ $value->name }}</strong></a>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Image</td>
                                                        @foreach ($procompare as $key => $value)
                                                            <td> <img src="{{ url('uploads') }}/products/{{ $value->image }}"
                                                                    alt="" width="150" class="img-thumbnail"> </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Price</td>
                                                        @foreach ($procompare as $key => $value)
                                                            <td>
                                                                @if ($value->sale_price < $value->price && $value->sale_price != 0)
                                                                    <span class="regular-price"><span
                                                                            class="special-price">{{ number_format($value->sale_price, 0) }}$</span></span>
                                                                    <span
                                                                        class="old-price"><del>{{ $value->price }}$</del></span>
                                                                @else
                                                                    <span class="regular-price"><span
                                                                            class="special-price">{{ $value->price }}$</span></span>
                                                                @endif
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Brand</td>
                                                        @foreach ($procompare as $value)
                                                            <td>
                                                                <a
                                                                    href="{{ route('home.category', $value->cat->id) }}">{{ $value->cat->name }}</a>
                                                            </td>
                                                        @endforeach

                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Rating</td>
                                                        @foreach ($procompare as $value)
                                                            <td>
                                                                <div
                                                                    class="product-ratings d-flex justify-content-center mb-2">
                                                                    @if ($value->review_rt->avg('rating') == 0)
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    @else
                                                                        @for ($i = 0; $i < $value->review_rt->avg('rating'); $i++)
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        @endfor
                                                                    @endif
                                                                    
                                                                </div>
                                                                <span>Based on {{$value->review_rt->count()}} reviews.</span>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Summary</td>
                                                        @foreach ($procompare as $key => $value)
                                                            <td class="description">{!! $value->sort_description !!}</td>
                                                        @endforeach
                                                    </tr>

                                                    <tr>
                                                        <td class="product-title">Actions</td>
                                                        @foreach ($procompare as $key => $value)
                                                            <td>
                                                                <a href="{{ route('home.cart-add', $value->id) }}"
                                                                    class="btn btn-primary mb-2 mb-lg-0 mr-xl-2">Add to
                                                                    Cart</a>
                                                                <a href="{{ route('home.remove-compare', $value->id) }}"
                                                                    class="btn btn-danger">Remove</a>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end of comparison -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End compare Wrapper -->

    <!-- scroll to top -->
@stop()
