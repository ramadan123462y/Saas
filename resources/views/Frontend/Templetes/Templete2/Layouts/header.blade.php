<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="header__logo">
                <a href="./index.html"><img src="{{ URL::asset("storage/Images/Profiles/$store->logo") }}"
                        alt=""></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <nav class="header__menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/categorie') }}">Shop</a></li>

                    <li><a href="{{ url('/cart') }}">Cart</a></li>

                </ul>
            </nav>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="header__nav__option">
                <a href="#" class="search-switch"><img
                        src="{{ URL::asset('FrontEnd/Templete2/img/icon/search.png') }}" alt=""></a>
                <a href="{{ url('/wishlist') }}"><img src="{{ URL::asset('FrontEnd/Templete2/img/icon/heart.png') }}"
                        alt=""></a>
                <a href="{{ url('/cart') }}"><img src="{{ URL::asset('FrontEnd/Templete2/img/icon/cart.png') }}"
                        alt=""> <span>0</span></a>

            </div>
        </div>
    </div>
    <div class="canvas__open"><i class="fa fa-bars"></i></div>
</div>
