@extends('client.layouts.site')
@section('title', 'Wishlist')
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

                                    <div class="table-responsive text-center wishlist-style">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Image</td>
                                                    <td>Product Name</td>
                                                    <td>Unit Price</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($wishlists as $wishlist)
                                                    @foreach ($wishlist->details as $wishlistdetail)
                                                        <tr>
                                                            <td>
                                                                <a href="product-details.html"><img
                                                                        src="{{ url('uploads') }}/products/{{ $wishlistdetail->products->image }}"
                                                                        alt="Wishlist Product Image" width="80"
                                                                        title=""></a>
                                                            </td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('home.product', ['product' => $wishlistdetail->products->id, 'category' => $wishlistdetail->products->category_id, 'slug' => Str::slug($wishlistdetail->products->name)]) }}">{{ $wishlistdetail->products->name }}</a>
                                                            </td>
                                                            <td>
                                                                @if ($wishlistdetail->products->sale_price > 0)
                                                                    <span class="regular-price"><span
                                                                            class="special-price">{{ $wishlistdetail->products->sale_price }}$</span></span>
                                                                    <span
                                                                        class="old-price"><del>{{ $wishlistdetail->products->price }}$</del></span>
                                                                @else
                                                                    <span class="regular-price"><span
                                                                            class="special-price">{{ $wishlistdetail->products->price }}$</span></span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <form method="DELETE" action="{{ route('home.remove-wishlist', $wishlistdetail->wishlist->id) }}" method="POST">
                                                                    @csrf @method('DELETE')
                                                                    <a href="{{ route('home.cart-add', $wishlistdetail->products->id) }}"
                                                                        type="button" class="btn btn-primary"><i
                                                                            class="fa fa-shopping-cart"></i></a>
                                                                    <button   
                                                                        class="btn btn-danger" style="background-color:red"><i
                                                                            class="fa fa-times"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of wishlist -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
@stop()
