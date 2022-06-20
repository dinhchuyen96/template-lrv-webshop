<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" style="max-width: 850px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLongTitle">Related Product
            </h2>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body row d-flex justify-content-center">
            @foreach ($products_search as $key => $value)
                <div class="product-item mb-30">
                    <div class="product-thumb">
                        <a
                            href="{{ route('home.product', ['product' => $value->id, 'category' => $value->category_id, 'slug' => Str::slug($value->name)]) }}">
                            <img src="{{ url('uploads') }}/products/{{ $value->image }}"
                                width="250px" class="pri-img" alt="">
                            <img src="{{ url('uploads') }}/products/{{ $value->image }}"
                                width="250px" class="sec-img" alt="">
                        </a>
                        <div class="box-label">
                            <div class="label-product label_new">
                                <span>new</span>
                            </div>
                            <div class="label-product label_sale">
                                @if ($value->percent_sale > 0)
                                    <span>sale {{ $value->percent_sale }}%</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="product-caption">
                        <div class="manufacture-product">
                            <p><a
                                    href="{{ route('home.category', $value->category_id) }}">{{ $value->cat->name }}</a>
                            </p>
                        </div>
                        <div class="product-name">
                            <h4><a
                                    href="{{ route('home.product', ['product' => $value->id, 'category' => $value->category_id, 'slug' => Str::slug($value->name)]) }}">{{ $value->name }}</a>
                            </h4>
                        </div>
                        <div class="ratings">
                            @if ($value->review_rt->avg('rating') == 0)
                                <span class="yellow"><i
                                        class="lnr lnr-star"></i></span>
                                <span class="yellow"><i
                                        class="lnr lnr-star"></i></span>
                                <span class="yellow"><i
                                        class="lnr lnr-star"></i></span>
                                <span class="yellow"><i
                                        class="lnr lnr-star"></i></span>
                                <span class="yellow"><i
                                        class="lnr lnr-star"></i></span>
                            @else
                                @for ($i = 0; $i < $value->review_rt->avg('rating'); $i++)
                                    <span class="yellow"><i
                                            class="lnr lnr-star"></i></span>
                                @endfor
                            @endif
                        </div>
                        <div class="price-box">
                            @if ($value->sale_price < $value->price && $value->sale_price != 0)
                                <span class="regular-price"><span
                                        class="special-price">{{ number_format($value->sale_price, 0) }}$</span></span>
                                <span
                                    class="old-price"><del>{{ $value->price }}$</del></span>
                            @else
                                <span class="regular-price"><span
                                        class="special-price">{{ $value->price }}$</span></span>
                            @endif
                        </div>
                        <a href="{{ route('home.cart-add', $value->id) }}"
                            class="btn-cart btn " type="button">add to cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>