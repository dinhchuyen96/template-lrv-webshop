@extends('layouts.site')
@section('title', 'Laptop - Mobile Phone')
@section('main')
    <div class="main-wrapper pt-35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-sidebar-inner mb-30">
                        <!-- filter-price-content start -->

                        <!-- filte price end -->
                        <!-- categories filter start -->
                        <div class="single-sidebar mb-45">
                            <div class="sidebar-inner-title mb-25">
                                <h3>Categories</h3>
                            </div>
                            <div class="sidebar-content-box">
                                <div class="filter-attribute-container">
                                    <ul>
                                        @foreach ($cats as $cat)
                                            @if ($cat->children->isNotEmpty())
                                                @if ($cat->id == $category->id)
                                                    <h3 class="">{{ $cat->name }}</h3>
                                                    <p>({{ $products1->count() }}-products)</p>
                                                    <br>
                                                @endif
                                                @foreach ($cat->children as $ccat)
                                                    @if (($ccat->parent_id == $category->id) | ($ccat->parent_id == $category->parent_id))
                                                        <li>
                                                            <a @if ($ccat->id == $category->id) class="active" @endif
                                                                class=""
                                                                href="{{ route('home.category', $ccat->id) }}">
                                                                {{ $ccat->name }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- categories filter end -->
                        <!-- categories filter start -->
                        {{-- <div class="single-sidebar mb-45">
                          <div class="sidebar-inner-title mb-25">
                              <h3>Manufacturer</h3>
                          </div>
                          <div class="sidebar-content-box">
                              <div class="filter-attribute-container">
                                  <ul>
                                      <li><a class="active" href="shop-grid-left-sidebar.html">Christian Dior (2)</a></li>
                                      <li><a href="shop-grid-left-sidebar.html">ferragamo (7)</a></li>
                                      <li><a href="shop-grid-left-sidebar.html">hermes (7)</a></li>
                                      <li><a href="shop-grid-left-sidebar.html">louis vuitton (6)</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div> --}}
                        <!-- categories filter end -->
                        <!-- categories filter start -->
                        {{-- <div class="single-sidebar mb-45">
                          <div class="sidebar-inner-title mb-25">
                              <h3>Select by color</h3>
                          </div>
                          <div class="sidebar-content-box">
                              <div class="filter-attribute-container">
                                  <ul>
                                      <li><a class="active" href="shop-grid-left-sidebar.html">Black (2)</a></li>
                                      <li><a href="shop-grid-left-sidebar.html">blue (7)</a></li>
                                      <li><a href="shop-grid-left-sidebar.html">brown (7)</a></li>
                                      <li><a href="shop-grid-left-sidebar.html">white (6)</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div> --}}
                    </div>
                    <!-- sidebar promote picture start -->
                    <div class="single-sidebar mb-30">
                        <div class="sidebar-thumb">
                            <a href="#"><img src="assets/img/banner/img-static-sidebar.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- sidebar promote picture end -->
                </div>
                <div class="col-lg-9 order-first order-lg-last">
                    <div class="product-shop-main-wrapper mb-50">
                        <div class="shop-baner-img mb-70">
                            <a href="#"><img src="assets/img/banner/category-image.jpg" alt=""></a>
                        </div>
                        <div class="shop-top-bar mb-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode">
                                            <a class="active" href="#" data-target="column_3"><span>3-col</span></a>
                                            <a href="#" data-target="grid"><span>4-col</span></a>
                                            <a href="#" data-target="list"><span>list</span></a>
                                        </div>
                                        <div class="product-page">
                                            {{ $products->links() }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="top-bar-right">
                                        <div class="per-page">
                                            <p>Show : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">10</option>
                                                <option value="sales">20</option>
                                                <option value="sales">30</option>
                                                <option value="rating">40</option>
                                                <option value="date">50</option>
                                                <option value="price-asc">60</option>
                                                <option value="price-asc">70</option>
                                                <option value="price-asc">100</option>
                                            </select>
                                        </div>
                                        <div class="product-short">
                                            <p>Sort By : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name (A - Z)</option>
                                                <option value="sales">Name (Z - A)</option>
                                                <option value="rating">Price (Low &gt; High)</option>
                                                <option value="date">Rating (Lowest)</option>
                                                <option value="price-asc">Model (A - Z)</option>
                                                <option value="price-asc">Model (Z - A)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="shop-product-wrap grid column_3 row">
                            @foreach ($products as $product_cat)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-item mb-30">
                                        <div class="product-thumb">
                                            <a
                                                href="{{ route('home.product', ['product' => $product_cat->id,'category' => $category->id,'slug' => Str::slug($product_cat->name)]) }}">
                                                <img src="{{ url('uploads') }}/{{ $product_cat->image }}"
                                                    class="pri-img" alt="">
                                                <img src="assets/img/product/product-2.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="{{ route('home.add-wishlist', $product_cat->id) }}"
                                                    title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="{{ route('home.add-compare', $product_cat->id) }}"
                                                    title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view"
                                                    data-target="#quickk_view-product-{{ $product_cat->id }}"
                                                    data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a
                                                        href="{{ route('home.category', $category->id) }}">{{ $category->name }}</a>
                                                </p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a
                                                        href="{{ route('home.product', ['product' => $product_cat->id,'category' => $category->id,'slug' => Str::slug($product_cat->name)]) }}">{{ $product_cat->name }}</a>
                                                </h4>
                                            </div>
                                            <div class="ratings">
                                                @if ($product_cat->review_rt->avg('rating') == 0)
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                @else
                                                    @for ($i = 0; $i < $product_cat->review_rt->avg('rating'); $i++)
                                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    @endfor
                                                @endif
                                            </div>
                                            <div class="price-box">
                                                @if ($product_cat->sale_price < $product_cat->price && $product_cat->sale_price != 0)
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ number_format($product_cat->sale_price, 0) }}</span></span>
                                                    <span
                                                        class="old-price"><del>${{ $product_cat->price }}</del></span>
                                                @else
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ $product_cat->price }}</span></span>
                                                @endif
                                            </div>
                                            <a href="{{ route('home.cart-add', $product_cat->id) }}"
                                                class="btn btn-cart lg-btn">Add to cart</a>
                                        </div>
                                    </div> <!-- end single grid item -->
                                    <div class="sinrato-list-item mb-30">
                                        <div class="sinrato-thumb">
                                            <a
                                                href="{{ route('home.product', ['product' => $product_cat->id,'category' => $category->id,'slug' => Str::slug($product_cat->name)]) }}">
                                                <img src="{{ url('uploads') }}/{{ $product_cat->image }}"
                                                    class="pri-img" alt="">
                                                <img src="assets/img/product/product-9.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    @if ($product_cat->percent_sale > 0)
                                                        <span>sale {{ $product_cat->percent_sale }}%</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sinrato-list-item-content">
                                            <div class="manufacture-product">
                                                <span><a href="#">{{ $product_cat->cat->name }}</a></span>
                                            </div>
                                            <div class="sinrato-product-name">
                                                <h4><a
                                                        href="{{ route('home.product', ['product' => $product_cat->id,'category' => $category->id,'slug' => Str::slug($product_cat->name)]) }}">{{ $product_cat->name }}</a>
                                                </h4>
                                            </div>
                                            <div class="sinrato-ratings mb-15">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="sinrato-product-des">
                                                <p>{{ $product_cat->sort_description }}</p>
                                            </div>
                                        </div>
                                        <div class="sinrato-box-action">
                                            <div class="price-box">
                                                @if ($product_cat->sale_price < $product_cat->price && $product_cat->sale_price != 0)
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ number_format($product_cat->sale_price, 0) }}</span></span>
                                                    <span
                                                        class="old-price"><del>${{ $product_cat->price }}</del></span>
                                                @else
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ $product_cat->price }}</span></span>
                                                @endif
                                            </div>
                                            <a href="{{ route('home.cart-add', $product_cat->id) }}"
                                                class="btn btn-cart lg-btn">Add to cart</a>
                                            <div class="action-links sinrat-list-icon">
                                                <a href="{{ route('home.add-wishlist', $product_cat->id) }}"
                                                    title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="{{ route('home.add-compare', $product_cat->id) }}"
                                                    title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view"
                                                    data-target="#quickk_view-product-{{ $product_cat->id }}"
                                                    data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div> <!-- end single list item -->
                                </div>
                            @endforeach


                            {{-- Grounp by Parent ID --}}
                            @foreach ($products1 as $products_byParent_Cat)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-item mb-30">
                                        <div class="product-thumb">
                                            <a
                                                href="{{ route('home.product', ['product' => $products_byParent_Cat->id,'category' => $category->id,'slug' => Str::slug($products_byParent_Cat->name)]) }}">
                                                <img src="{{ url('uploads') }}/{{ $products_byParent_Cat->image }}"
                                                    class="pri-img" alt="">
                                                <img src="assets/img/product/product-2.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    @if ($products_byParent_Cat->percent_sale > 0)
                                                        <span>sale {{ $products_byParent_Cat->percent_sale }}%</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="{{ route('home.add-wishlist', $products_byParent_Cat->id) }}"
                                                    title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="{{ route('home.add-compare', $products_byParent_Cat->id) }}"
                                                    title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view"
                                                    data-target="#quickk_view-product-{{ $products_byParent_Cat->id }}"
                                                    data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="manufacture-product">
                                                <p><a
                                                        href="{{ route('home.category', $products_byParent_Cat->cat->id) }}">{{ $products_byParent_Cat->cat->name }}</a>
                                                </p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a
                                                        href="{{ route('home.product', ['product' => $products_byParent_Cat->id,'category' => $products_byParent_Cat->cat->id,'slug' => Str::slug($products_byParent_Cat->name)]) }}">{{ $products_byParent_Cat->name }}</a>
                                                </h4>
                                            </div>
                                            <div class="ratings">
                                                @if ($products_byParent_Cat->review_rt->avg('rating') == 0)
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                @else
                                                    @for ($i = 0; $i < $products_byParent_Cat->review_rt->avg('rating'); $i++)
                                                        <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                    @endfor
                                                @endif
                                            </div>
                                            <div class="price-box">
                                                @if ($products_byParent_Cat->sale_price < $products_byParent_Cat->price && $products_byParent_Cat->sale_price != 0)
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ number_format($products_byParent_Cat->sale_price, 0) }}</span></span>
                                                    <span
                                                        class="old-price"><del>${{ $products_byParent_Cat->price }}</del></span>
                                                @else
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ $products_byParent_Cat->price }}</span></span>
                                                @endif
                                            </div>
                                            <a href="{{ route('home.cart-add', $products_byParent_Cat->id) }}"
                                                class="btn btn-cart lg-btn">Add to cart</a>
                                        </div>
                                    </div> <!-- end single grid item -->
                                    <div class="sinrato-list-item mb-30">
                                        <div class="sinrato-thumb">
                                            <a
                                                href="{{ route('home.product', ['product' => $products_byParent_Cat->id,'category' => $category->id,'slug' => Str::slug($products_byParent_Cat->name)]) }}">
                                                <img src="{{ url('uploads') }}/{{ $products_byParent_Cat->image }}"
                                                    class="pri-img" alt="">
                                                <img src="assets/img/product/product-9.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_sale">
                                                    @if ($products_byParent_Cat->percent_sale > 0)
                                                        <span>sale {{ $products_byParent_Cat->percent_sale }}%</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sinrato-list-item-content">
                                            <div class="manufacture-product">
                                                <span><a href="">{{ $products_byParent_Cat->cat->name }}</a></span>
                                            </div>
                                            <div class="sinrato-product-name">
                                                <h4><a
                                                        href="{{ route('home.product', ['product' => $products_byParent_Cat->id,'category' => $category->id,'slug' => Str::slug($products_byParent_Cat->name)]) }}">{{ $products_byParent_Cat->name }}</a>
                                                </h4>
                                            </div>
                                            <div class="sinrato-ratings mb-15">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="sinrato-product-des">
                                                <p>{{ $products_byParent_Cat->sort_description }}</p>
                                            </div>
                                        </div>
                                        <div class="sinrato-box-action">
                                            <div class="price-box">
                                                @if ($products_byParent_Cat->sale_price < $products_byParent_Cat->price && $products_byParent_Cat->sale_price != 0)
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ number_format($products_byParent_Cat->sale_price, 0) }}</span></span>
                                                    <span
                                                        class="old-price"><del>${{ $products_byParent_Cat->price }}</del></span>
                                                @else
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ $products_byParent_Cat->price }}</span></span>
                                                @endif
                                            </div>
                                            <a href="{{ route('home.cart-add', $products_byParent_Cat->id) }}"
                                                class="btn btn-cart lg-btn">Add to cart</a>
                                            <div class="action-links sinrat-list-icon">
                                                <a href="{{ route('home.add-wishlist', $products_byParent_Cat->id) }}"
                                                    title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="{{ route('home.add-compare', $products_byParent_Cat->id) }}"
                                                    title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view"
                                                    data-target="#quickk_view-product-{{ $products_byParent_Cat->id }}"
                                                    data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div> <!-- end single list item -->
                                </div>
                            @endforeach

                        </div>

                        <div class="pagination-area style-2 pt-35 pb-20">
                            <div class="row">
                                <div class="col-sm-6">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page main wrapper end -->
    @foreach ($products1 as $product)
        <!-- Quick view modal start -->
        <div class="modal fade" id="quickk_view-product-{{ $product->id }}">
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
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="pro-nav">
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-inner">
                                        <div class="product-details-contentt">
                                            <div class="pro-details-name mb-10">
                                                <h3><a
                                                        href="{{ route('home.product', ['product' => $product->id,'category' => $category->id,'slug' => Str::slug($product->name)]) }}">{{ $product->name }}</a>
                                                </h3>
                                            </div>
                                            <div class="pro-details-review mb-20">
                                                <ul>
                                                    <li>
                                                        @if ($product->review_rt->avg('rating') == 0)
                                                            <span></span><i class="fa fa-star"></i></span>
                                                            <span></span><i class="fa fa-star"></i></span>
                                                            <span></span><i class="fa fa-star"></i></span>
                                                            <span></span><i class="fa fa-star"></i></span>
                                                            <span></span><i class="fa fa-star"></i></span>
                                                        @else
                                                            @for ($i = 0; $i < $product->review_rt->avg('rating'); $i++)
                                                                <span></span><i class="fa fa-star"></i></span>
                                                            @endfor
                                                        @endif
                                                    </li>
                                                    <li><a href="#">{{ $product->review_rt->count() }} Reviews</a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box mb-15">
                                                @if ($product->sale_price < $product->price && $product->sale_price != 0)
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ number_format($product->sale_price, 0) }}</span></span>
                                                    <span
                                                        class="old-price"><del>{{ $product->price }}$</del></span>
                                                @else
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ $product->price }}</span></span>
                                                @endif
                                            </div>
                                            <div class="product-detail-sort-des pb-20">
                                                <p>{{ $product->sort_description }}</p>
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
                                                    <input type="text" placeholder="0">
                                                    <a href="{{ route('home.cart-add', $product->id) }}"
                                                        class="btn btn-cart lg-btn">Add to cart</a>
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
        <!-- Quick view modal end -->
    @endforeach
    @foreach ($products as $product)
        <!-- Quick view modal start -->
        <div class="modal fade" id="quickk_view-product-{{ $product->id }}">
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
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                        <div class="pro-large-img">
                                            <img src="{{ url('uploads') }}/{{ $product->image }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="pro-nav">
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img
                                                src="{{ url('uploads') }}/{{ $product->image }}" alt="" /></div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-inner">
                                        <div class="product-details-contentt">
                                            <div class="pro-details-name mb-10">
                                                <h3><a
                                                        href="{{ route('home.product', ['product' => $product->id,'category' => $category->id,'slug' => Str::slug($product->name)]) }}">{{ $product->name }}</a>
                                                </h3>
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
                                                    <li><a href="#">1 Reviews</a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box mb-15">
                                                @if ($product->sale_price < $product->price && $product->sale_price != 0)
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ $product->sale_price }}</span></span>
                                                    <span
                                                        class="old-price"><del>{{ $product->price }}$</del></span>
                                                @else
                                                    <span class="regular-price"><span
                                                            class="special-price">${{ $product->price }}</span></span>
                                                @endif
                                            </div>
                                            <div class="product-detail-sort-des pb-20">
                                                <p>{{ $product->sort_description }}</p>
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
                                                    <input type="text" placeholder="0">
                                                    <a href="{{ route('home.cart-add', $product->id) }}"
                                                        class="btn btn-cart lg-btn">Add to cart</a>
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
        <!-- Quick view modal end -->
    @endforeach

@stop()
