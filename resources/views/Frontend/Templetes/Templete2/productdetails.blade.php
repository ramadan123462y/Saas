<!DOCTYPE html>
<html lang="zxx">

@include('Frontend.Templetes.Templete2.Layouts.head')

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    <!-- Header Section Begin -->
    <header class="header">

        @include('Frontend.Templetes.Templete2.Layouts.header')
    </header>
    <!-- Header Section End -->






<!-- Shop Details Section Begin -->
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="./index.html">Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Product Details</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="{{ URL::asset("storage/Images/Products/$product->file_name") }}">
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="{{ URL::asset("storage/Images/Products/$product->file_name") }}">
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="{{ URL::asset("storage/Images/Products/$product->file_name") }}}">
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="{{ URL::asset("storage/Images/Products/$product->file_name") }}">
                                    <i class="fa fa-play"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img style="width: 100%; height: 100%;" src="{{ URL::asset("storage/Images/Products/$product->file_name") }}" alt="">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{ URL::asset("storage/Images/Products/$product->file_name") }}" alt="">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{ URL::asset("storage/Images/Products/$product->file_name") }}" alt="">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{ URL::asset("storage/Images/Products/$product->file_name") }}" alt="">
                                <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="video-popup"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__details__content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="product__details__text">
                        <h4>{{ $product->name }}</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span> - 5 Reviews</span>
                        </div>
                        <h3>${{ $product->selling_price }} <span>${{ $product->selling_price }}</span></h3>
                       
                        <form action="{{ url('cart/store', $product->id) }}"  method="GET">
                        <div class="product__details__cart__option">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" name="quantity" value="{{ $cart_item_quantity }}" min="0" max="">
                                </div>
                            </div>
                            <button  type="submit" class="primary-btn">add to cart</button>
                        </div>
                    </form>
                        <div class="product__details__btns__option">
                            <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                            <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                        </div>
                        <div class="product__details__last__option">
                            <h5><span>Guaranteed Safe Checkout</span></h5>
                            <img src="{{ URL::asset('FrontEnd/Templete2/img/shop-details/details-payment.png') }}" alt="">
                            <ul>
                                <li><span>SKU:</span> ${{ $product->selling_price }}</li>
                                <li><span>Categories:</span> {{ $product->categorie->name }}</li>
                       
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Shop Details Section End -->





    <!-- Footer Section Begin -->
    @include('Frontend.Templetes.Templete2.Layouts.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->

    <!-- Search End -->

    <!-- Js Plugins -->
    @include('Frontend.Templetes.Templete2.Layouts.script')
</body>

</html>
