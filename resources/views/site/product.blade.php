@extends('layouts.site')
@section('title','cart')
@section('main')
    


<body>

    <div class="breadcrumb-area mb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                            <img src="{{url('uploads')}}/{{$product->image}}"  />
                            <div class="img-view">
                                <a class="img-popup" href="{{url('uploads')}}/{{$product->image}}" ><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="pro-large-img">
                            <img src="assets/img/product/product-5.jpg" alt=""/>
                            <div class="img-view">
                                <a class="img-popup" href="assets/img/product/product-5.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="pro-large-img">
                            <img src="assets/img/product/product-6.jpg" alt=""/>
                            <div class="img-view">
                                <a class="img-popup" href="assets/img/product/product-6.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="pro-large-img">
                            <img src="assets/img/product/product-7.jpg" alt=""/>
                            <div class="img-view">
                                <a class="img-popup" href="assets/img/product/product-7.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="pro-large-img">
                            <img src="assets/img/product/product-8.jpg" alt=""/>
                            <div class="img-view">
                                <a class="img-popup" href="assets/img/product/product-8.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="pro-large-img">
                            <img src="assets/img/product/product-9.jpg" alt=""/>
                            <div class="img-view">
                                <a class="img-popup" href="assets/img/product/product-9.jpg"><i class="fa fa-search"></i></a>
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
                                <h3>{{$product->name}}</h3>
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
                                <span class="regular-price"><span class="special-price">{{$product->sale_price}}$</span></span>
                                <span class="old-price"><del>{{$product->price}}$</del></span>
                            </div>
                            <div class="product-detail-sort-des pb-20">
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="pro-details-list pt-20 mb-20">
                                <ul>
                                    <li><span>Availability :</span>200 In Stock</li>
                                </ul>
                            </div>
                            <div class="pro-quantity-box mb-30">
                                <div class="qty-boxx">
                                    <button class="btn-cart lg-btn">Buy Now</button>
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
                                <a class="nav-link active" id="nav_desctiption" data-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav_review" data-toggle="pill" href="#tab_review" role="tab" aria-controls="tab_review" aria-selected="false">Reviews (1)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="tab-pane fade" id="tab_review" role="tabpanel" aria-labelledby="nav_review">
                                <div class="product-review">
                                    <div class="customer-review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Sinrato Themes</strong></td>
                                                    <td class="text-right">09/04/2019</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>It’s both good and bad. If Nikon had achieved a high-quality wide lens camera with a 1 inch sensor, that would have been a very competitive product. So in that sense, it’s good for us. But actually, from the perspective of driving the 1 inch sensor market, we want to stimulate this market and that means multiple manufacturers.</p>
                                                        <div class="product-ratings">
                                                            <ul class="ratting d-flex mt-2">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end of customer-review -->
                                    <form action="#" class="review-form">
                                        <h2>Write a review</h2>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label class="col-form-label"><span class="text-danger">*</span> Your Name</label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                                <textarea class="form-control" required></textarea>
                                                <div class="help-block pt-10"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label class="col-form-label"><span class="text-danger">*</span> Rating</label>
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
                <div class="product-item mb-30">
                    <div class="product-thumb">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-1.jpg" class="pri-img" alt="">
                            <img src="assets/img/product/product-2.jpg" class="sec-img" alt="">
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
                            <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box">
                            <span class="regular-price"><span class="special-price">£65.00</span></span>
                            <span class="old-price"><del>£90.00</del></span>
                        </div>
                        <button class="btn-cart" type="button">add to cart</button>
                    </div>
                </div><!-- </div> end single item -->
                <div class="product-item mb-30">
                    <div class="product-thumb">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-6.jpg" class="pri-img" alt="">
                            <img src="assets/img/product/product-8.jpg" class="sec-img" alt="">
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
                            <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box">
                            <span class="regular-price"><span class="special-price">£65.00</span></span>
                            <span class="old-price"><del>£90.00</del></span>
                        </div>
                        <button class="btn-cart" type="button">add to cart</button>
                    </div>
                </div><!-- </div> end single item -->
                <div class="product-item mb-30">
                    <div class="product-thumb">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-3.jpg" class="pri-img" alt="">
                            <img src="assets/img/product/product-4.jpg" class="sec-img" alt="">
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
                            <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box">
                            <span class="regular-price"><span class="special-price">£65.00</span></span>
                            <span class="old-price"><del>£90.00</del></span>
                        </div>
                        <button class="btn-cart" type="button">add to cart</button>
                    </div>
                </div><!-- </div> end single item -->
                <div class="product-item mb-30">
                    <div class="product-thumb">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-10.jpg" class="pri-img" alt="">
                            <img src="assets/img/product/product-12.jpg" class="sec-img" alt="">
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
                            <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box">
                            <span class="regular-price"><span class="special-price">£65.00</span></span>
                            <span class="old-price"><del>£90.00</del></span>
                        </div>
                        <button class="btn-cart" type="button">add to cart</button>
                    </div>
                </div><!-- </div> end single item -->
                <div class="product-item mb-30">
                    <div class="product-thumb">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-11.jpg" class="pri-img" alt="">
                            <img src="assets/img/product/product-14.jpg" class="sec-img" alt="">
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
                            <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box">
                            <span class="regular-price"><span class="special-price">£65.00</span></span>
                            <span class="old-price"><del>£90.00</del></span>
                        </div>
                        <button class="btn-cart" type="button">add to cart</button>
                    </div>
                </div><!-- </div> end single item -->
                <div class="product-item mb-30">
                    <div class="product-thumb">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-13.jpg" class="pri-img" alt="">
                            <img src="assets/img/product/product-12.jpg" class="sec-img" alt="">
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
                            <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                        </div>
                        <div class="ratings">
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box">
                            <span class="regular-price"><span class="special-price">£65.00</span></span>
                            <span class="old-price"><del>£90.00</del></span>
                        </div>
                        <button class="btn-cart" type="button">add to cart</button>
                    </div>
                </div><!-- </div> end single item -->
            </div>
        </div>
    </div> 
    <!--  end related-product -->

   


    <!-- Quick view modal start -->
    <div class="modal fade" id="quickk_view">
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
                                        <img src="assets/img/product/product-4.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-5.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-6.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-7.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-8.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-9.jpg" alt=""/>
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
                                            <h3>Bose SoundLink Bluetooth Speaker</h3>
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
                                                <li><a href="#">Write a Review</a></li>
                                            </ul>
                                        </div>
                                        <div class="price-box mb-15">
                                            <span class="regular-price"><span class="special-price">£50.00</span></span>
                                            <span class="old-price"><del>£60.00</del></span>
                                        </div>
                                        <div class="product-detail-sort-des pb-20">
                                            <p>Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned</p>
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
                                                <button class="btn-cart lg-btn">add to cart</button>
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

    @stop()