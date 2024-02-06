@extends('shop.leyout');

@section('content')


<main class="main">
        	     <div class="page-content">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row justify-content-center">





                                        @foreach($products as $product)
                                        <div class="col-6 col-md-4 col-lg-4">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <a href="product/{{$product['id']}}">
                                                    <img src="img/products/mainimg/{{$product['img']}}" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <span onclick='addToBasket({{$product->id}})' class="btn-product btn-cart"><span>add to cart</span></span>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">{{$product['name']}}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">  {{$product['title']}}</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    {{$product['price']}} تومان
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 0 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div>
@endforeach




                                </div>
                            </div>



                            <aside class="col-lg-3 order-lg-first">
                                <div class="sidebar sidebar-shop">
                                    <div class="widget widget-clean">
                                        <label>Filters:</label>
                                        <a href="#" class="sidebar-filter-clear">Clean All</a>
                                    </div><!-- End .widget widget-clean -->
    
                                    <div class="ml-5 widget widget-collapsible">
                                        <h3 class="widget-title">
                                            <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                                دسته بندی
                                            </a>
                                        </h3><!-- End .widget-title -->
    
                                        <div class="collapse show" id="widget-1">
                                            <div class="widget-body">
                                                <div class="filter-items filter-items-count">





                                                    @foreach ($category['item'] as $item )
                                                      <div class="filter-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="cat-1">
                                                            <label class="custom-control-label" for="cat-1">{{$item['title']}}</label>
                                                        </div><!-- End .custom-checkbox -->
                                                        </div>
                                                     @endforeach
    


                                                 
    
    
                                                   
                                                </div><!-- End .filter-items -->
                                            </div><!-- End .widget-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .widget -->
    
                       
    
                          
    
                                    
    
                                    <div class="ml-5 widget widget-collapsible">
                                        <h3 class="widget-title">
                                            <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                                                قیمت
                                            </a>
                                        </h3><!-- End .widget-title -->
                                        <label class=''>حد اقل</label>
                                        <input type='number' min='{{$category['price']['min']}}' placeholder='{{$category['price']['min']}}'>
                                            <br>
                                         <label class=''>حد اکثر</label>
                                        <input type='number' max='{{$category['price']['max']}}' placeholder='{{$category['price']['max']}}'>

                                    </div><!-- End .widget -->
                                </div><!-- End .sidebar sidebar-shop -->
                            </aside>


                        </div>
                    </div>
                 </div>
                	<!-- End .col-lg-3 -->
        </main>


<div class="container text-center m-5">
    {{ $products->links() }}
</div>
@endsection