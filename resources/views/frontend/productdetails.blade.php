@extends('layouts.app_frontend')
@section('og_image')
<meta property="og:image" content="{{ asset('uploads/product_photoes') }}/{{ $single_product_info->product_photo }}">
@endsection
@section('content')

<style>

.rating-product .rating-wrap{
    font-size: 16px;
    line-height: 1;
    position: relative;
    color: #e4e4e4;
    white-space: nowrap;
}

.rating-product .rating-wrap::before{
    font-family: FontAwesome;
    content: "\f005 \f005 \f005 \f005 \f005";
    /* content: Fontawsome star icon Unicode */
}

.rating-product .rating-wrap .star{
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
    color: #ffde00;
}

.rating-product .rating-wrap .star::before{
    font-family: FontAwesome;
    content: "\f005 \f005 \f005 \f005 \f005";
}

</style>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Products</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $single_product_info->product_name }}</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Product_thumbnail::where('product_id', $single_product_info->id)->get() as $thumbnail)
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="{{ asset('uploads/product_thumbnails') }}/{{ $thumbnail->product_thumbnail_name }}"
                                    alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-container zoom-thumbs mt-3 mb-3">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Product_thumbnail::where('product_id', $single_product_info->id)->get() as $thumbnail)
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="{{ asset('uploads/product_thumbnails') }}/{{ $thumbnail->product_thumbnail_name }}"
                                    alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    @if (session('stockout'))
                        <div class="alert alert-danger">
                            {{ session('stockout') }}
                        </div>
                    @endif
                    <div class="product-details-content quickview-content">
                        <h2>{{ $single_product_info->product_name }}</h2>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">${{ $single_product_info->product_price }}</li>
                            </ul>
                        </div>
                        <div class="pro-details-rating-wrap rating-product">
                            {{-- <div class="rating-product">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div> --}}
                            <span class="rating-wrap">
                                <span class="star" style="width: {{ rating_percentage($single_product_info->id) }}%"></span>
                            </span>
                            <span class="read-review"><a class="reviews" href="#">( {{ how_many_review($single_product_info->id) }} )</a></span>
                        </div>
                        {{-- <p class="mt-30px mb-0">  </p> --}}
                        <span class="mt-30px mb-0">{{ $single_product_info->product_short_description }}</span>



                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart">
                                    {{-- <form action="" method="POST">
                                        @csrf
                                    </form> --}}
                                    @auth
                                    <a href="{{ route('addtocart', $single_product_info->id) }}" class="add-cart" type="submit"> Add To Cart</a>
                                    @else
                                    <a href="{{ route('login') }}" class="add-cart" data-bs-toggle="modal" data-bs-target="#loginActive"> Add To Cart</a>
                                    @endauth
                                </div>

                                @auth
                                {{-- style="color: #fb5d5d" --}}
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        @if ($wishlist_status)
                                            <a href="{{ route('wishlist.remove', $wishlist_id) }}"><i class="fa fa-heart" style="color: #fb5d5d"></i></a>
                                        @else
                                            <a href="{{ route('wishlist.insert', $single_product_info->id) }}"><i class="fa fa-heart-o"></i></a>
                                        @endif
                                    </div>
                                @endauth

                                @guest
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#loginActive"><i class="pe-7s-like"></i></a>
                                    </div>
                                @endguest
                                <div class="pro-details-compare-wishlist pro-details-compare">
                                    <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                </div>
                            </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Available Stock : </span>
                            <ul class="d-flex">
                              @if ($single_product_info->product_quantity > 0)
                                <li>
                                    <a>{{ $single_product_info->product_quantity}}</a>
                                </li>
                              @else
                              <li>
                                    <a class="text-danger">Stockout</a>
                                </li>
                              @endif

                            </ul>
                        </div>
                        <div class="pro-details-sku-info pro-details-same-style  d-flex">
                            <span>SKU: </span>
                            <ul class="d-flex">
                                <li>
                                    <a>{{ $single_product_info->product_code }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Category: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="{{ route('categorywiseproducts', $single_product_info->category_id) }}">
                                        {{ $single_product_info->relationtocategory->category_name }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-social-info pro-details-same-style d-flex">
                            <span>Share: </span>
                            <ul class="d-flex">
                                <li>
                                    <a target="_blank" href="http://www.facebook.com/sharer.php?u={{ url()->full() }}"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://twitter.com/share?url={{ url()->full() }}&hashtags=simplesharebuttons"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- product details description area start -->
    <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details2">Information</a>
                    <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                    <a data-bs-toggle="tab" href="#des-details3">{{ how_many_review($single_product_info->id) }}</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane">
                        <div class="product-anotherinfo-wrapper text-start">
                            <ul>
                                <li><span>Weight</span> 400 g</li>
                                <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            {{ $single_product_info->product_long_description }}
                            {{-- <p></p> --}}
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="review-wrapper">
                                    {{-- {{ $reviews }} --}}
                                    @foreach ($reviews as $review)
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img width="125" height="auto" src="{{ asset('uploads/profile_photoes') }}/{{ $review->relationwithuser->profile_photo }}" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>{{ $review->relationwithuser->name }}</h4>
                                                    </div>
                                                    <div class="pro-details-rating-wrap rating-product">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: {{ $review->rate * 20 }}%"></span>
                                                        </span>
                                                    </div>
                                                    {{-- <div class="rating-product">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    {{ $review->review }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->


    <!-- Related product Area Start -->
    <div class="related-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-30px0px line-height-1">
                        <h2 class="title m-0">Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                <div class="new-product-wrapper swiper-wrapper">
                    @forelse ($related_products as $related_product)
                        <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                            <div class="product">
                                <div class="thumb">
                                    <a href="{{ url('product/details') }}/{{ $related_product->product_slug }}" class="image">
                                        <img src="{{ asset('uploads/product_photoes') }}/{{ $related_product->product_photo }}" alt="Product" />
                                    </a>
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="actions">
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="pe-7s-like"></i></a>
                                        <a href="#" class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                class="pe-7s-refresh-2"></i></a>
                                    </div>
                                    <button title="Add To Cart" class=" add-to-cart">Add
                                        To Cart</button>
                                </div>
                                <div class="content">
                                    <span class="ratings">
                                        <span class="rating-wrap">
                                            <span class="star" style="width: 100%"></span>
                                        </span>
                                        <span class="rating-num">( 5 Review )</span>
                                    </span>
                                    <h5 class="title">
                                        <a href="{{ url('product/details') }}/{{ $related_product->product_slug }}">
                                            {{ $related_product->product_name }}
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">${{ $related_product->product_price }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger col-12">
                           No Product To Show
                        </div>
                    @endforelse
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related product Area End -->
@endsection
