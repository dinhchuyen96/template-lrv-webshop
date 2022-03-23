@extends('layouts.site')
@section('title','cart')
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
                                    @foreach($cats as $cat)
                                      <li><a class="" href="{{route('home.category',$cat->id)}}">{{$cat->name}}</a></li>
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
                                        {{$products->links()}}
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
                         @foreach($products as $product)
                         <div class="col-lg-3 col-md-4 col-sm-6">
                             <div class="product-item mb-30">
                                 <div class="product-thumb">
                                     <a href="product-details.html">
                                         <img src="{{url('uploads')}}/{{$product->image}}" class="pri-img" alt="">
                                         <img src="assets/img/product/product-2.jpg" class="sec-img" alt="">
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
                                         <p><a href="shop-grid-left-sidebar.html">{{$category->name}}</a></p>
                                     </div>
                                     <div class="product-name">
                                         <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                     </div>
                                     <div class="ratings">
                                         <span class="yellow"><i class="lnr lnr-star"></i></span>
                                         <span class="yellow"><i class="lnr lnr-star"></i></span>
                                         <span class="yellow"><i class="lnr lnr-star"></i></span>
                                         <span class="yellow"><i class="lnr lnr-star"></i></span>
                                         <span><i class="lnr lnr-star"></i></span>
                                     </div>
                                     <div class="price-box">
                                         <span class="regular-price">{{$product->price}}$</span>
                                     </div>
                                     <button class="btn-cart" type="button">add to cart</button>
                                 </div>
                             </div> <!-- end single grid item -->
                             <div class="sinrato-list-item mb-30">
                                 <div class="sinrato-thumb">
                                     <a href="product-details.html">
                                         <img src="{{url('uploads')}}/{{$product->image}}" class="pri-img" alt="">
                                         <img src="assets/img/product/product-9.jpg" class="sec-img" alt="">
                                     </a>
                                     <div class="box-label">
                                         <div class="label-product label_sale">
                                             <span>-10%</span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="sinrato-list-item-content">
                                     <div class="manufacture-product">
                                         <span><a href="#">Canon</a></span>
                                     </div>
                                     <div class="sinrato-product-name">
                                         <h4><a href="product-details.html">Beats EP Wired Headphone-Black</a></h4>
                                     </div>
                                     <div class="sinrato-ratings mb-15">
                                         <span><i class="fa fa-star"></i></span>
                                         <span><i class="fa fa-star"></i></span>
                                         <span><i class="fa fa-star"></i></span>
                                         <span><i class="fa fa-star"></i></span>
                                         <span><i class="fa fa-star"></i></span>
                                     </div>
                                     <div class="sinrato-product-des">
                                         <p>Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned with marketing talk this particular statement is clearly pretty accurate...</p>
                                     </div>
                                 </div>
                                 <div class="sinrato-box-action">
                                     <div class="price-box">
                                         <span class="regular-price"><span class="special-price">£50.00</span></span>
                                         <span class="old-price"><del>£60.00</del></span>
                                     </div>
                                     <button class="btn-cart" type="button">add to cart</button>
                                     <div class="action-links sinrat-list-icon">
                                         <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                         <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                         <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                     </div>
                                 </div>
                             </div> <!-- end single list item -->
                         </div>
                         @endforeach                         
                     </div>
                     
                     <div class="pagination-area style-2 pt-35 pb-20">
                         <div class="row">
                             <div class="col-sm-6">
                                {{$products->links()}}
                             </div>
                         </div>
                     </div> 
                 </div>
            </div>
        </div>
    </div>
</div>
<!-- shop page main wrapper end -->


@stop()