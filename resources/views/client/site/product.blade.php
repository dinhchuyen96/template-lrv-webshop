@extends('client.layouts.site')
@section('title', 'Product detail')
@section('main')


    @if ($check === true)
    @endif

    <body>
        <div class="breadcrumb-area mb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product details external</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- product details wrapper start -->
        <div class="product-details-main-wrapper pb-50 pt-35">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="product-large-slider mb-20">
                            <div class="pro-large-img">
                                <img src="{{ url('uploads') }}/products/{{ $product->image }}" />
                                <div class="img-view">
                                    <a class="img-popup"
                                        href="{{ url('uploads') }}/products/{{ $product->image }}"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="pro-large-img">
                                <img src="assets/img/product/product-5.jpg" alt="" />
                                <div class="img-view">
                                    <a class="img-popup" href="assets/img/product/product-5.jpg"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="pro-large-img">
                                <img src="assets/img/product/product-6.jpg" alt="" />
                                <div class="img-view">
                                    <a class="img-popup" href="assets/img/product/product-6.jpg"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="pro-large-img">
                                <img src="assets/img/product/product-7.jpg" alt="" />
                                <div class="img-view">
                                    <a class="img-popup" href="assets/img/product/product-7.jpg"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="pro-large-img">
                                <img src="assets/img/product/product-8.jpg" alt="" />
                                <div class="img-view">
                                    <a class="img-popup" href="assets/img/product/product-8.jpg"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="pro-large-img">
                                <img src="assets/img/product/product-9.jpg" alt="" />
                                <div class="img-view">
                                    <a class="img-popup" href="assets/img/product/product-9.jpg"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="pro-nav">
                            <div class="pro-nav-thumb"><img src="assets/img/product/product-4.jpg" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="assets/img/product/product-5.jpg" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="assets/img/product/product-6.jpg" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="assets/img/product/product-7.jpg" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="assets/img/product/product-8.jpg" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="assets/img/product/product-9.jpg" alt="" /></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-details-inner">
                            <div class="product-details-contentt">
                                <div class="pro-details-name mb-10">
                                    <h3>{{ $product->name }}</h3>
                                </div>
                                <div class="pro-details-review mb-20">
                                    <ul>
                                        <li>
                                            @if ($product->review_rt->avg('rating') == 0)
                                                <span><i style="color:yellow" class="fa fa-star"></i></span>
                                                <span><i style="color:yellow" class="fa fa-star"></i></span>
                                                <span><i style="color:yellow" class="fa fa-star"></i></span>
                                                <span><i style="color:yellow" class="fa fa-star"></i></span>
                                                <span><i style="color:yellow" class="fa fa-star"></i></span>
                                            @else
                                                @for ($i = 0; $i < $product->review_rt->avg('rating'); $i++)
                                                    <span><i style="color:yellow" class="fa fa-star"></i></span>
                                                @endfor
                                            @endif
                                        </li>
                                        <li>{{ $reviews->count() }} Review</li>
                                    </ul>
                                </div>
                                <div class="price-box mb-15">
                                    <span class="regular-price">
                                        @if ($product->sale_price < $product->price && $product->sale_price != 0)
                                            <span
                                                class="special-price">{{ number_format($product->sale_price, 0) }}$</span>
                                    </span>
                                    <span class="old-price"><del>{{ $product->price }}$</del></span>
                                @else
                                    <span class="special-price">{{ $product->price }}$</span></span>
                                    @endif
                                </div>
                                <div class="product-detail-sort-des pb-20">
                                    {!! $product->sort_description !!}
                                </div>
                                <div class="pro-details-list pt-20 mb-20">
                                    <ul>
                                        <li><span>Availability :</span>200 In Stock</li>
                                    </ul>
                                </div>
                                <form action="{{ route('home.cart-add', $product->id) }}" method="get">
                                    @csrf
                                    <div class="pro-quantity-box mb-30">
                                        <div class="qty-boxx">
                                            <label>qty :</label>
                                            <input type="number" name="quantity" placeholder="1" value="1" min="1" max="69"
                                                required>
                                            <button class="btn-cart lg-btn">Buy Now</button>
                                        </div>
                                        @error('quantity')
                                            <span class="btn btn-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
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
        <!-- product details wrapper end -->

        <!-- product details reviews start -->
        <div class="product-details-reviews pb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-info mt-half">
                            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="nav_desctiption" data-toggle="pill"
                                        href="#tab_description" role="tab" aria-controls="tab_description"
                                        aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav_review" data-toggle="pill" href="#tab_review"
                                        role="tab" aria-controls="tab_review" aria-selected="false">Reviews
                                        ({{ $reviews->count() }})</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_description" role="tabpanel"
                                    aria-labelledby="nav_desctiption">
                                    {!! $product->description !!}
                                </div>
                                <div class="tab-pane fade" id="tab_review" role="tabpanel" aria-labelledby="nav_review">
                                    <div class="product-review">
                                        <div class="customer-review">

                                            <table class="table table-striped table-bordered">
                                                @foreach ($reviews as $reviews)
                                                    <tbody>
                                                        <tr>
                                                            <td class="row"
                                                                style="text-align: left; border:none;">
                                                                <div class="col-md-8 mt-1">
                                                                    <strong>{{ $reviews->name_reviewer }} </strong>
                                                                </div>
                                                                <div class="product-ratings col-md-4 mb-3">
                                                                    <ul class="ratting d-flex mt-2">
                                                                        <li><span style="color: #fedc19"><i
                                                                                    {{ $reviews->rating <= '4' ? 'hidden' : '' }}
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                        <li><span style="color: #fedc19"><i
                                                                                    {{ $reviews->rating <= '3' ? 'hidden' : '' }}
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                        <li><span style="color: #fedc19"><i
                                                                                    {{ $reviews->rating <= '2' ? 'hidden' : '' }}
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                        <li><span style="color: #fedc19"><i
                                                                                    {{ $reviews->rating <= '1' ? 'hidden' : '' }}
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                        <li><span style="color: #fedc19"><i
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>

                                                            <td class="text-right">
                                                                {{ $reviews->created_at->format('d-m-Y') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <form method="POST"
                                                                    action="{{ route('review.destroy', ['product' => $product->id, 'category' => $product->category_id, 'slug' => Str::slug($product->name), 'review' => $reviews->id]) }}">
                                                                    @csrf @method('DELETE')
                                                                    <p class="content-comment mx-1" style=" line-he"
                                                                        id="review">
                                                                        {{ $reviews->content_review }}-
                                                                        @if ($reviews->account_id == $acc->id || $acc->id == '-1')
                                                                            <button id="btn-delete"
                                                                                onclick="return confirm('are you sure?')"
                                                                                class="btn">
                                                                                <i style="color:rgb(240, 29, 29)"
                                                                                    class="fa fa-window-close"
                                                                                    aria-hidden="true"></i>
                                                                            </button>
                                                                        @endif

                                                                    </p>
                                                                </form>
                                                                <div class="row mx-1 mt-1">
                                                                    <p style="text-align: left"><a
                                                                            class="reply-comment">Thích</a></p>
                                                                    <p class="mx-2" style="text-align: left">
                                                                        <a id="reply-comment-{{ $reviews->id }}"
                                                                            class="reply-comment"
                                                                            onclick="showForm(this.id)">
                                                                            Phản hồi</a>
                                                                    </p>
                                                                </div>
                                                                @if ($check === true)
                                                                    <form id="form-reply-comment-{{ $reviews->id }}"
                                                                        class="form-repcomment" method="POST"
                                                                        action="{{ route('review.store', ['product' => $product->id, 'category' => $product->category_id, 'slug' => Str::slug($product->name)]) }}"
                                                                        class="review-form">
                                                                        @csrf
                                                                        <div class="form-group row">
                                                                            <div class="col-md-2 col-lg-1 mt-1"
                                                                                style="margin-right: -1.5rem">
                                                                                <img src="{{ url('uploads') }}/avatars/{{ $acc->avatar }}"
                                                                                    class="rounded-circle" width="84"
                                                                                    height="50" alt="">
                                                                            </div>
                                                                            <div class="col-lg-11 col-md-10">
                                                                                <input type="hidden" name="parent_id" value="{{ $reviews->id}}">
                                                                                <textarea class="form-control" name="content_review" required></textarea>
                                                                                <div style="color: red;">
                                                                                    @error('content_review')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="buttons d-flex justify-content-end">
                                                                            <button class="btn-cart rev-btn"
                                                                                type="submit"></button>
                                                                        </div>
                                                                    </form>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach
                                            </table>
                                        </div> <!-- end of customer-review -->

                                        @if ($check === true)
                                            <form id="form_get_review" name="form_get_review" method="POST"
                                                action="{{ route('review.store', ['product' => $product->id, 'category' => $product->category_id, 'slug' => Str::slug($product->name)]) }}"
                                                class="review-form">
                                                @csrf
                                                <h2>Write a review</h2>
                                                <div class="form-group row">
                                                    <div class="col-md-1">
                                                        <h4 style="width: 200px">{{ $acc->first_name }} {{ $acc->last_name }}</h4>
                                                        <img src="@if ($acc->avatar == null) 
                                                            @if ($acc->sex == 'anh')
                                                                {{ url('uploads') }}/avatars/man.jpg
                                                            @else
                                                                {{ url('uploads') }}/avatars/woman.jpg
                                                             @endif
                                                        @else
                                                            {{ url('uploads') }}/avatars/{{ $acc->avatar }}
                                                         @endif"
                                                        class="rounded-circle mt-1" width="59" height="35" alt="">
                                                    </div>
                                                    <div class="col-md-10 mt-4" style="padding:0">
                                                        <textarea class="form-control" minlength="2" maxlength="300" name="content_review" id="content_review"
                                                            required></textarea>
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">

                                                        <div style="color: red;">
                                                            <h6 id="err"></h6>
                                                        </div>
                                                        <div class="help-block pt-10"><span
                                                                class="text-danger">Note:</span> HTML is not translated!
                                                        </div>
                                                        <div style="color: red;">
                                                            @error('content_review')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span
                                                                class="text-danger">*</span>
                                                            Rating</label>
                                                        &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                        <input type="radio" value="1" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="2" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="3" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="4" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="5" name="rating" checked>
                                                        &nbsp;Good
                                                    </div>
                                                </div>
                                                <div class="buttons d-flex justify-content-end">
                                                    <button class="btn-cart rev-btn" id="btn_send"
                                                        type="submit">Continue</button>
                                                </div>
                                            </form> <!-- end of review-form -->
                                        @endif
                                    </div> <!-- end of product-review -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Start related-product -->

        <div class="related-product-area mb-40">
            <div class="container-fluid">
                <div class="section-title">
                    <h3><span>Related</span> product </h3>
                </div>
                <div class="flash-sale-active4 owl-carousel owl-arrow-style">
                    @foreach ($products_related as $products)
                        @if ($products->id != $product->id)
                            <div class="product-item mb-30">
                                <div class="product-thumb">
                                    <a
                                        href="{{ route('home.product', ['product' => $products->id, 'category' => $category->id, 'slug' => Str::slug($products->name)]) }}">
                                        <img src="{{ url('uploads') }}/products/{{ $products->image }}"
                                            class="pri-img" alt="">
                                        <img src="{{ url('uploads') }}/products/{{ $products->image }}"
                                            class="sec-img" alt="">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product label_new">
                                            <span>new</span>
                                        </div>
                                        <div class="label-product label_sale">
                                            @if ($products->percent_sale > 0)
                                                <span>sale {{ $products->percent_sale }}%</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="action-links">
                                        <a href="{{ route('home.add-wishlist', $products->id) }}" title="Wishlist"><i
                                                class="lnr lnr-heart"></i></a>
                                        <a href="{{ route('home.add-compare', $products->id) }}" title="Compare"><i
                                                class="lnr lnr-sync"></i></a>
                                        <a href="" title="Quick view" data-target="#quickk_view-{{ $products->id }}"
                                            data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="manufacture-product">
                                        <p><a href="shop-grid-left-sidebar.html">{{ $products->cat->name }}</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h4><a
                                                href="{{ route('home.product', ['product' => $products->id, 'category' => $category->id, 'slug' => Str::slug($products->name)]) }}">{{ $products->name }}</a>
                                        </h4>
                                    </div>
                                    <div class="ratings">
                                        @if ($products->review_rt->avg('rating') == 0)
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        @else
                                            @for ($i = 0; $i < $products->review_rt->avg('rating'); $i++)
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            @endfor
                                        @endif
                                    </div>
                                    <div class="price-box">
                                        @if ($products->sale_price < $products->price && $products->sale_price != 0)
                                            <span class="regular-price"><span
                                                    class="special-price">{{ number_format($products->sale_price, 0) }}$</span></span>
                                            <span class="old-price"><del>{{ $products->price }}$</del></span>
                                        @else
                                            <span class="regular-price"><span
                                                    class="special-price">{{ $products->price }}$</span></span>
                                        @endif
                                    </div>
                                    <a href="{{ route('home.cart-add', $products->id) }}" class="btn-cart"
                                        type="button">add to cart</a>
                                </div>
                            </div><!-- </div> end single item -->
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <!--  end related-product -->




        <!-- Quick view modal start -->
        @foreach ($products_related as $product_rl)
            <div class="modal fade" id="quickk_view-{{ $product_rl->id }}">
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
                                                <img src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-large-img">
                                                <img src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-large-img">
                                                <img src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-large-img">
                                                <img src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-large-img">
                                                <img src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-large-img">
                                                <img src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="pro-nav">
                                            <div class="pro-nav-thumb"><img
                                                    src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-nav-thumb"><img
                                                    src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-nav-thumb"><img
                                                    src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-nav-thumb"><img
                                                    src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-nav-thumb"><img
                                                    src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                            <div class="pro-nav-thumb"><img
                                                    src="{{ url('uploads') }}/products/{{ $product_rl->image }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="product-details-inner">
                                            <div class="product-details-contentt">
                                                <div class="pro-details-name mb-10">
                                                    <a
                                                        href="{{ route('home.product', ['product' => $product_rl->id, 'category' => $category->id, 'slug' => Str::slug($product_rl->name)]) }}">
                                                        <h3>{{ $product_rl->name }}</h3>
                                                    </a>
                                                </div>
                                                <div class="pro-details-review mb-20">
                                                    <ul>
                                                        <li>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                        </li>
                                                        <li><a href="#">{{ $product_rl->review_rt->count() }} Reviews</a>
                                                        </li>
                                                        <li><a href="#">Write a Review</a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box mb-15">
                                                    @if ($product_rl->sale_price < $product_rl->price && $product_rl->sale_price != 0)
                                                        <span class="regular-price"><span
                                                                class="special-price">${{ $product_rl->sale_price }}</span></span>
                                                        <span
                                                            class="old-price"><del>${{ $product_rl->price }}</del></span>
                                                    @else
                                                        <span class="regular-price"><span
                                                                class="special-price">${{ $product_rl->price }}</span></span>
                                                    @endif
                                                </div>
                                                <div class="product-detail-sort-des pb-20">
                                                    <p>{{ $product_rl->sort_description }}</p>
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
                                                        <label>qty :</label>
                                                        <input type="number" placeholder="0" min="1" max="69">
                                                        <a href="{{ route('home.cart-add', $product_rl->id) }}"
                                                            class="btn-cart lg-btn">add to cart</a>
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
