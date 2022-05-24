@extends('client.layouts.site')
@section('title', 'Blog')
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
                                        @foreach ($blog_cats as $blog_cat)
                                            <li><a href="{{ route('blog_cat_id', ['blog_cat_id' => $blog_cat->id, 'slug' => Str::slug($blog_cat->name)]) }}"
                                                    @if ($blog_cat->id == $blog_cat_id->id) class="active" @endif>{{ $blog_cat->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- categories filter start -->
                         <div class="single-sidebar mb-45">
                            <div class="sidebar-inner-title mb-25">
                                <h3>Blog archives</h3>
                            </div>
                            <div class="sidebar-content-box">
                                <div class="filter-attribute-container">
                                    <ul>
                                        <li><a class="active" href="">March 2019 (02)</a></li>
                                        <li><a href="#">December 2019 (01)</a></li>
                                        <li><a href="#">April 2019 (05)</a></li>
                                        <li><a href="#">September 2017 (02)</a></li>
                                        <li><a href="#">January 2019 (03)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-first order-lg-last">
                    <div class="blog-wrapper-inner">
                        <div class="single-blogg-item mb-30">
                            
                            <div class="blogg-content">
                                <ul class="listnews">
                                @foreach ($data_blog as $data_blog)
                                    <li>
                                        <a href="{{ route('blog_detail', ['blog_cat_id' => $data_blog->cat_id, 'slug' => Str::slug($blog_cat->name), 'slug2' => Str::slug($data_blog->name), 'blog' => $data_blog->id]) }}"
                                            title="{{ $data_blog->title }}" class="linkimg">
                                            <img width="240" height="116"
                                                src="{{ url('uploads') }}/blog/{{ $data_blog->image_blog }}"
                                                alt="OPPO Find X5 Pro 5G tr&#236;nh l&#224;ng Việt Nam ng&#224;y 05/05/2022: Chinh phục từng khoảnh khắc">

                                        </a>
                                        <a href="{{ route('blog_detail', ['blog_cat_id' => $data_blog->cat_id, 'slug' => Str::slug($blog_cat->name), 'slug2' => Str::slug($data_blog->name), 'blog' => $data_blog->id]) }}"
                                            class="linktitle">
                                            <h3>{!! $data_blog->name !!}</h3>
                                        </a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog wrapper end -->
    @stop
