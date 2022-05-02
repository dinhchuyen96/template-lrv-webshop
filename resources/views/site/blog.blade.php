@extends('layouts.site')
@section('title','cart')
@section('main')
    <!-- blog wrapper start -->
   <div class="blog-area-wrapper pt-40 pb-70">
    <div class="container-fluid">
        <div class="row">
             <div class="col-lg-3">
                 <div class="shop-sidebar-inner mb-30">
                     <!-- categories filter start -->
                     <div class="single-sidebar mb-45">
                         <div class="sidebar-inner-title mb-25">
                             <h3>Categories</h3>
                         </div>
                         <div class="sidebar-content-box">
                             <div class="filter-attribute-container">
                                 <ul>
                                     <li><a class="active" href="#">Categories 1 (05)</a></li>
                                     <li><a href="#">Categories 2 (03)</a></li>
                                     <li><a href="#">Categories 3 (10)</a></li>
                                     <li><a href="#">Categories 4 (02)</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!-- categories filter end -->
                     <!-- categories filter start -->
                     <div class="single-sidebar mb-45">
                         <div class="sidebar-inner-title mb-25">
                             <h3>Recent post</h3>
                         </div>
                         <div class="sidebar-content-box">
                             <div class="filter-attribute-container">
                                 <ul>
                                     <li><a class="active" href="#">blog image post</a></li>
                                     <li><a href="#">Post with gallery</a></li>
                                     <li><a href="#">Post with Audio</a></li>
                                     <li><a href="#">Post with Video</a></li>
                                     <li><a href="#">Maecenas ultricies</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!-- categories filter end -->
                     <!-- categories filter start -->
                     <div class="single-sidebar mb-45">
                         <div class="sidebar-inner-title mb-25">
                             <h3>Blog archives</h3>
                         </div>
                         <div class="sidebar-content-box">
                             <div class="filter-attribute-container">
                                 <ul>
                                     <li><a class="active" href="#">March 2019 (02)</a></li>
                                     <li><a href="#">December 2019 (01)</a></li>
                                     <li><a href="#">April 2019 (05)</a></li>
                                     <li><a href="#">September 2017 (02)</a></li>
                                     <li><a href="#">January 2019 (03)</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!-- categories filter end -->
                     <!-- categories filter start -->
                     <div class="single-sidebar mb-45">
                         <div class="sidebar-inner-title mb-25">
                             <h3>Tag</h3>
                         </div>
                         <div class="sidebar-content-box">
                             <div class="blog-tag-line">
                                 <a href="#">fashion</a>
                                 <a href="#">cloath</a>
                                 <a href="#">camera</a>
                                 <a href="#">laptop</a>
                                 <a href="#">bag</a>
                                 <a href="#">watch</a>
                             </div>
                         </div>
                     </div>
                     <!-- categories filter end -->
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
                <div class="blog-wrapper-inner">
                     <div class="single-blogg-item mb-30">
                         <div class="blogg-thumb">
                             <a href="blog-details.html">
                                 <img src="assets/img/blog/blog8.jpg" alt="">
                             </a>
                         </div>
                         <div class="blogg-content">
                             <span class="post-date">20 oct 2019</span>
                             <div>
                             </div>
                             <div class="blogg-meta mb-30 mt-30">
                                 <a href="#">0 comment</a>
                                 / Tags:
                                 <a href="#">Fashion</a>
                             </div>
                             <div class="blog-social-sharing mb-40">
                                 <h3>Share this post</h3>
                                 <ul class="mt-10">
                                     <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                     <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                     <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                     <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                 </ul>
                             </div>
                             <div class="blogg-author-info">
                                 <div class="author-thum">
                                     <img src="assets/img/blog/author.jpg" alt="">
                                 </div>
                                 <div class="author-info">
                                     <h3>about the author:<a href="#">Admin</a> </h3>
                                     <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="blog-comment-wrapper">
                         <h3>leave a reply</h3>
                         <p>Your email address will not be published. Required fields are marked *</p>
                         <form action="{{route('comment.store')}}" method="POST">
                             @csrf
                             <div class="comment-post-box">
                                 <div class="row">
                                     <div class="col-12">
                                         <label>comment</label>
                                         <textarea name="commnent" placeholder="Write a comment"></textarea>
                                     </div>
                                     <div class="col-lg-4 col-md-4 col-sm-4">
                                         <label>Name</label>
                                         <input type="text" name="name" class="coment-field" placeholder="Name">
                                         <input type="hidden" name="product_id" value="{{ $data->id }}">
                                     </div>
                                     <div class="col-lg-4 col-md-4 col-sm-4">
                                         <label>Email</label>
                                         <input type="text" class="coment-field" name="email" placeholder="Email">
                                     </div>
                                     <div class="col-lg-4 col-md-4 col-sm-4">
                                         <label>Website</label>
                                         <input type="text" class="coment-field" name="website" placeholder="Website">
                                     </div>
                                     <div class="col-12">
                                         <div class="coment-btn mt-20">
                                             <input class="btn btn-secondary" type="submit" name="submit" value="post comment">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog wrapper end -->
@stop