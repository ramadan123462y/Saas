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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">

                                                    @foreach ($categories as $categorie)
                                                        <li>
                                                            <a
                                                                href="{{ url('/categorie', $categorie->id) }}">{{ $categorie->name }}</a>
                                                            <span>({{ $categorie->product_count }})</span>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">

                    <div class="row">
                        @if ($products)
                            @foreach ($products as $product)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ URL::asset("storage/Images/products/$product->file_name") }}">
                                        <span class="label">New</span>
                                        <ul class="product__hover">
                                            <li><a href="{{ url('wishlist/store',$product->id) }}"><img
                                                        src="{{ URL::asset('FrontEnd/Templete2/img/icon/heart.png') }}"
                                                        alt=""></a></li>
                                            <li><a href="#"><img
                                                        src="{{ URL::asset('FrontEnd/Templete2/img/icon/compare.png') }}"
                                                        alt="">
                                                    <span>Compare</span></a></li>
                                            <li><a href="{{ url('/product_details', $product->id) }}"><img
                                                        src="{{ URL::asset('FrontEnd/Templete2/img/icon/search.png') }}"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>{{ $product->name }}</h6>
                                        <a href="{{ url('cart/store', $product->id) }}" class="add-cart">+ Add To Cart</a>
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5>$67.24</h5>
                                        <div class="product__color__select">
                                            <label for="pc-1">
                                                <input type="radio" id="pc-1">
                                            </label>
                                            <label class="active black" for="pc-2">
                                                <input type="radio" id="pc-2">
                                            </label>
                                            <label class="grey" for="pc-3">
                                                <input type="radio" id="pc-3">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                        @foreach ($categories as $categorie)
                        @foreach ($categorie->products as $product)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ URL::asset("storage/Images/products/$product->file_name") }}">
                                    <span class="label">New</span>
                                    <ul class="product__hover">
                                        <li><a href="{{ url('wishlist/store',$product->id) }}"><img
                                                    src="{{ URL::asset('FrontEnd/Templete2/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img
                                                    src="{{ URL::asset('FrontEnd/Templete2/img/icon/compare.png') }}"
                                                    alt="">
                                                <span>Compare</span></a></li>
                                        <li><a href="{{ url('/product_details', $product->id) }}"><img
                                                    src="{{ URL::asset('FrontEnd/Templete2/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $product->name }}</h6>
                                    <a href="{{ url('cart/store', $product->id) }}" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$67.24</h5>
                                    <div class="product__color__select">
                                        <label for="pc-1">
                                            <input type="radio" id="pc-1">
                                        </label>
                                        <label class="active black" for="pc-2">
                                            <input type="radio" id="pc-2">
                                        </label>
                                        <label class="grey" for="pc-3">
                                            <input type="radio" id="pc-3">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                            @endforeach
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    @include('Frontend.Templetes.Templete2.Layouts.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->

    <!-- Search End -->

    <!-- Js Plugins -->
    @include('Frontend.Templetes.Templete2.Layouts.script')
</body>

</html>
