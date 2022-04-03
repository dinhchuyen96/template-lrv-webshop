
@extends('layouts.site')
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
                                                        @foreach($procompare as $key => $value)
                                                        <td><a href="product-details.html"><strong>{{$value->name}}</strong></a></td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Image</td>
                                                        @foreach($procompare as $key => $value)
                                                        <td> <img src="{{ url('uploads') }}/{{$value->image}}" alt="" width="150" class="img-thumbnail"> </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Price</td>
                                                        @foreach($procompare as $key => $value)
                                                        <td> <del>${{$value->price}}</del> <span>${{$value->sale_price}}</span></td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Model</td>
                                                        @foreach($procompare as $key => $value)
                                                        <td>{{$value->category_id}}</td>
                                                        @endforeach
                                                    </tr>
                                                    {{-- <tr>
                                                        <td class="product-title">Brands</td>
                                                        <td><a class="text-color" href="#">Studio Design</a></td>
                                                        <td><a class="text-color" href="#">Graphic Corner</a></td>
                                                        <td><a class="text-color" href="#">Graphic Corner</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Availability</td>
                                                        <td>In Stock</td>
                                                        <td>In Stock</td>
                                                        <td>In Stock</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Rating</td>
                                                        <td>
                                                            <div class="product-ratings d-flex justify-content-center mb-2">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star disabled"></i></li>
                                                                    <li><i class="fa fa-star disabled"></i></li>
                                                                    <li><i class="fa fa-star disabled"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span>Based on 1 reviews.</span>
                                                        </td>
                                                        <td>
                                                            <div class="product-ratings d-flex justify-content-center mb-2">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star disabled"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span>Based on 3 reviews.</span>
                                                        </td>
                                                        <td>
                                                            <div class="product-ratings d-flex justify-content-center mb-2">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span>Based on 10 reviews.</span>
                                                        </td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td class="product-title">Summary</td>
                                                        @foreach($procompare as $key => $value)
                                                            <td class="description">{{$value->description}}</td>
                                                        @endforeach
                                                    </tr>
                                                    {{-- <tr>
                                                        <td class="product-title">Weight</td>
                                                        <td>0.90kg</td>
                                                        <td>1.00kg</td>
                                                        <td>146.40g</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Dimensions (L x W x H)</td>
                                                        <td>0.00cm x 0.00cm x 0.00cm</td>
                                                        <td>0.00cm x 0.00cm x 0.00cm</td>
                                                        <td>0.00cm x 0.00cm x 0.00cm</td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td class="product-title">Actions</td>
                                                        @foreach($procompare as $key => $value)
                                                        <td>
                                                            <a href="{{route('home.cart-add',$value->id)}}" class="btn btn-primary mb-2 mb-lg-0 mr-xl-2">Add to Cart</a>
                                                            <a href="{{route('home.remove-compare',$value->id)}}" class="btn btn-danger">Remove</a>
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