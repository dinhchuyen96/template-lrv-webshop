@extends('layouts.site')
@section('title', 'checkout')
@section('main')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of wishlist Wrapper -->
    <div class="wishlist-wrapper mb-55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="wishlist">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h3>Wishlist</h3>
                                    </div>
                                    <form action="#">
                                        <div class="table-responsive text-center wishlist-style">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>Image</td>
                                                        <td>Product Name</td>
                                                        <td>Model</td>
                                                        <td>Stock</td>
                                                        <td>Unit Price</td>
                                                        <td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($wishlists as $wishlist)
                                                    <tr>
                                                        <td>
                                                            <a href="product-details.html"><img src="{{url('uploads')}}/{{$wishlist->image}}" alt="Wishlist Product Image" width="80" title="Compete Track Tote"></a>
                                                            </td>
                                                            <td>
                                                                <a href="{{route('home.product',['product'=>$wishlist->id,'slug'=>Str::slug($wishlist->name)])}}">{{$wishlist->name}}</a>
                                                            </td>
                                                            <td>3</td>
                                                            <td>In Stock</td>
                                                            <td>
                                                                <div class="price"><small><del>${{$wishlist->price}}</del></small> <strong>$1{{$wishlist->sale_price}}</strong></div>
                                                            </td>
                                                            <td>
                                                        
                                                                <a href="{{route('home.cart-add',$wishlist->id)}}" type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a>
                                                                <a href="{{route('home.remove-wishlist',$wishlist->id)}}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                            </td>
                                                    </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end of wishlist -->
                        </main> <!-- end of #primary -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
  @stop()
