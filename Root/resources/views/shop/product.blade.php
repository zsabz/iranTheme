@extends('shop.leyout');

@section('content')

<div class="container">

                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="/img/products/mainimg/{{$product['img']}}" data-zoom-image="assets/images/products/single/1-big.jpg" alt="تصویر محصول">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->

                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $product['title'] }}</font></font></h1><!-- End .product-title -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <a class="ratings-text" href="#product-review-link" id="review-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( 2 نظر )</font></font></a>
                                    </div><!-- End .rating-container -->

                                    <div class="product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                       {{ $product['price'] }} 
                                    </font></font></div><!-- End .product-price -->

                                    <div class="product-content">
                                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sed egestas، ante et vulputate volutpat، eros pede semper est، vitae luctus metus libero eu augue. </font><font style="vertical-align: inherit;">Morbi purus libero، faucibus adipiscing. </font><font style="vertical-align: inherit;">Sed lectus.</font></font></p>
                                    </div><!-- End .product-content -->

                                    <!-- End .details-filter-row -->

                                    <!-- End .details-filter-row -->

                                    <!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                        <span onclick='addToBasket({{$product->id}})' class="btn-product btn-cart"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">به سبد خرید اضافه کنید</font></font></span></span>

                                        <div class="details-action-wrapper">
                                            <a href="#" class="btn-product btn-wishlist" title="لیست علاقه مندیها"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">به لیست علاقه مندی ها اضافه کنید</font></font></span></a>
                                            <a href="#" class="btn-product btn-compare" title="مقایسه کنید"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">افزودن برای مقایسه</font></font></span></a>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">دسته بندی: </font></font></span>
                                            @foreach ( $product->categories as $item )
                                                <span >{{ $item->title }}</span> 
                                            @endforeach
                                        </div><!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">اشتراک گذاری:</font></font></span>
                                            <a href="#" class="social-icon" title="فیس بوک" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="توییتر" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="اینستاگرام" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="پینترست" target="_blank"><i class="icon-pinterest"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                 


                            <figure class="product-media">
                                <span class="product-label label-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">جدید</font></font></span>
                                <a href="product.html">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">به لیست علاقه مندی ها اضافه کنید</font></font></span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="مشاهده سریع"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">مشاهده سریع</font></font></span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="مقایسه کنید"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">مقایسه کنید</font></font></span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">به سبد خرید اضافه کنید</font></font></span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                          

                            <figure class="product-media">
                            

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">به لیست علاقه مندی ها اضافه کنید</font></font></span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="مشاهده سریع"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">مشاهده سریع</font></font></span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="مقایسه کنید"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">مقایسه کنید</font></font></span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">به سبد خرید اضافه کنید</font></font></span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                           
                        </div></div></div></div></div><!-- End .owl-carousel -->
                </div>

<div class='container  mt-5'>
    <div class="row">
         {{-- @dd($product->previews[0]->title)  --}}
        @foreach($product->previews as $pre)
        <div class="col-sm-3 text-center">
        <a href='/pre_view/products/{{$product->id}}/file/{{$pre->file}}'>
        <img src='/pre_view/products/{{$product->id}}/img/{{$pre->img}}' />
        {{$pre->title}}
        </a>
        </div>
        @endforeach
    </div>

</div>

@endsection