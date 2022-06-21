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
                        </div>
                        <div class="pro-nav">
                            <div class="pro-nav-thumb"><img src="" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="" alt="" /></div>
                            <div class="pro-nav-thumb"><img src="" alt="" /></div>
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
                                <form action="{{route('home.cart-add',$product->id)}}" method="GET">
                                @csrf
                                    <div class="pro-quantity-box mb-30">
                                        <div class="qty-boxx">
                                            <label>qty :</label>
                                            <input type="number" name="quantity" class="cartquantity" placeholder="1" value="1" min="1" max="69"
                                                required>
                                            <button type="submit" class="btn-cart lg-btn">Buy Now</button>
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
                                                @foreach ($reviews as $reviews1)
                                                    @if($reviews1->parent_id == 0)
                                                    <tbody>
                                                        <tr>
                                                            <td class="row"
                                                                style="text-align: left; border:none;">
                                                                <div class="col-md-9 mt-1">
                                                                    <img class="rounded-circle"
                                                                        src="{{ url('uploads') }}/avatars/{{ $reviews1->avatar }}"
                                                                        style="width: 50px" alt="">
                                                                    <strong> {{ $reviews1->name_reviewer }} </strong>
                                                                </div>
                                                                <div class="product-ratings col-md-3 mb-3">
                                                                    <ul class="ratting d-flex mt-2">
                                                                        <li><span style="color: #fedc19"><i
                                                                                    {{ $reviews1->rating <= '4' ? 'hidden' : '' }}
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                        <li><span style="color: #fedc19"><i
                                                                                    {{ $reviews1->rating <= '3' ? 'hidden' : '' }}
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                        <li><span style="color: #fedc19"><i
                                                                                    {{ $reviews1->rating <= '2' ? 'hidden' : '' }}
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                        <li><span style="color: #fedc19"><i
                                                                                    {{ $reviews1->rating <= '1' ? 'hidden' : '' }}
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                        <li><span style="color: #fedc19"><i
                                                                                    class="fa fa-star"></i></span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                {{ $reviews1->created_at->format('d-m-Y') }}
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            {{-- Begin show content_review s1 --}}
                                                            <form method="POST"
                                                                action="{{ route('review.destroy', ['product' => $product->id, 'category' => $product->category_id, 'slug' => Str::slug($product->name), 'review' => $reviews1->id]) }}">
                                                                @csrf @method('DELETE')
                                                                <td colspan="2">
                                                                    <p style="text-align: left" id="review">
                                                                        {{ $reviews1->content_review }}&nbsp;
                                                                        @if ($reviews1->account_id == $acc->id || $acc->id == '-1')
                                                                            <button id="btn-delete"
                                                                                onclick="return confirm('are you sure?')"
                                                                                class="btn" type="submit">
                                                                                <i style="color:rgb(240, 29, 29)"
                                                                                    class="fa fa-window-close"
                                                                                    aria-hidden="true"></i>
                                                                            </button>
                                                                        @endif
                                                            </form>
                                                            <div class="feedback">
                                                                <p>{{ $reviews1->created_at->format('d-m') }}</p>
                                                                <p>Thích </p>
                                                                <p id="{{ $reviews1->id }}" onclick="showForm(this.id)">
                                                                    Phản hồi</p>
                                                            </div>
                                                            {{-- End show content_review s1 --}}
                                                            @if ($check === true)
                                                            {{-- Begin form input S2 --}}
                                                            <div class="row mx-5">
                                                                <div class="col-md-6">
                                                                    <form class="form-repcomment"
                                                                        action="{{ route('review.store', ['product' => $product->id, 'category' => $product->category_id, 'slug' => Str::slug($product->name)]) }}"
                                                                        class="form-repcomment" method="POST" method="POST"
                                                                        id="form-reply-{{ $reviews1->id }}"
                                                                        name="form-reply">
                                                                        @csrf
                                                                        <p class="is_reply row">Đang trả lời
                                                                            &nbsp;<strong>{{ $reviews1->name_reviewer }}</strong>
                                                                        </p>
                                                                        <div class="row">
                                                                            <img class="rounded-circle mt-2" src="@if ($acc->avatar == null) @if ($acc->sex == 'anh')
                                                                                    {{ url('uploads') }}/avatars/man.jpg
                                                                                @else
                                                                                    {{ url('uploads') }}/avatars/woman.jpg @endif
                                                                                @else
                                                                                    {{ url('uploads') }}/avatars/{{ $acc->avatar }}
                                                                                  @endif
                                                                            " style="width: 50px; height:37px"
                                                                            alt="">
                                                                            <input class="form-control mt-2 col-md-6"
                                                                                type="text" required style="width:80%"
                                                                                name="content_review"
                                                                                placeholder="Input field"
                                                                                value="{{ $reviews1->last_name }}">

                                                                            <input type="hidden" name="parent_id" required
                                                                                value="{{ $reviews1->id }}">
                                                                            <button
                                                                                style="height:37px; width: 88px; text-align: center"
                                                                                class="btn-cart btn rev-btn" type="submit"
                                                                                form="form-reply-{{ $reviews1->id }}">Send</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            {{-- End form input S2 --}}

                                                            @foreach ($reviews1->children as $reviews2)
                                                                @if ($reviews1->children->isNotEmpty())
                                                                    {{-- Begin Show content S2 --}}
                                                                    <div class="mx-5">
                                                                        <form method="POST"
                                                                            action="{{ route('review.destroy', ['product' => $product->id, 'category' => $product->category_id, 'slug' => Str::slug($product->name), 'review' => $reviews1->id]) }}"
                                                                            id="">
                                                                            @csrf @method('DELETE')
                                                                            <div class="row">
                                                                                <img class="mb-2 rounded-circle mt-2" src="
                                                                                @if ($reviews2->avatar == null) 
                                                                                    {{ url('uploads') }}/avatars/man.jpg
                                                                                @else
                                                                                    {{ url('uploads') }}/avatars/{{ $reviews2->avatar }}
                                                                                @endif
                                                                                " style="width: 37px; height:30px"
                                                                                alt=""> &nbsp;
                                                                                <div class="mt-2">
                                                                                    <p style="text-align: left" id="review">
                                                                                        <strong>{{ $reviews2->name_reviewer }}</strong>
                                                                                        - {{ $reviews2->content_review }}
                                                                                        &nbsp;
                                                                                        @if ($reviews2->account_id == $acc->id || $acc->id == '-1')
                                                                                            <button id="btn-delete"
                                                                                                onclick="return confirm('are you sure?')"
                                                                                                class="btn"
                                                                                                type="submit">
                                                                                                <i style="color:rgb(240, 29, 29)"
                                                                                                    class="fa fa-window-close"
                                                                                                    aria-hidden="true"></i>
                                                                                            </button>
                                                                                        @endif
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <div class="feedback1">
                                                                            <p>{{ $reviews2->created_at->format('d-m') }}
                                                                            </p>
                                                                            <p>Thích
                                                                            <p>
                                                                            <p id="{{ $reviews2->id }}"
                                                                                onclick="showForm2(this.id)">
                                                                                Phản hồi
                                                                            <p>
                                                                        </div>
                                                                    </div>
                                                                    {{-- End Show comment S2 --}}
                                                                @endif
                                                            @endforeach                                                         

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    @endif
                                                @endforeach
                                            </table>
                                        </div> <!-- end of customer-review -->

                                        @if ($check === true)
                                            <form id="form_get_review" method="POST"
                                                action="{{ route('review.store', ['product' => $product->id, 'category' => $product->category_id, 'slug' => Str::slug($product->name)]) }}"
                                                class="review-form">
                                                @csrf
                                                <h2>Write a review</h2>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span
                                                                class="text-danger">*</span>
                                                            Your Review</label>
                                                        <textarea class="form-control" name="content_review" required></textarea>
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
                                                {{-- Review Rating --}} <div class="form-group row">
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
                                                    <button class="btn-cart rev-btn" type="submit">Continue</button>
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
                                                        <input type="number" placeholder="0" min="1"  name="quantity" max="69">
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
