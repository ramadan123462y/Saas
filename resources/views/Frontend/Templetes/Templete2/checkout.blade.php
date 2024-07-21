<!DOCTYPE html>
<html lang="zxx">

@include('Frontend.Templetes.Templete2.Layouts.head')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /**
Default Markup
**/


    .container {
        /* max-width: 900px; */
        margin: 0 auto;
    }


    /**
Component
**/

    label {
        width: 100%;
    }

    .card-input-element {
        display: none;
    }

    .card-input {
        margin: 10px;
        padding: 0px;
    }

    .card-input:hover {
        cursor: pointer;
    }

    .card-input-element:checked+.card-input {
        box-shadow: 0 0 5px 5px black;
    }
</style>
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
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/shop') }}">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form class="row contact_form" action="{{ url('checkout/store_order') }}" method="post"
                    novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a
                                    href="#">Click
                                    here</a> to enter your code</h6>
                            <h6 class="checkout__title">Billing Details</h6>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>First Name<span>*</span></p>
                                        <input type="text" name="first_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text" name="country">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add"
                                    name="v">
                                <input type="text" placeholder="Apartment, suite, unit, etc. (optional)"
                                    name="address2">
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" name="city">
                            </div>

                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text" name="zip">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone_number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    @isset($cart->cart_items)
                                        @foreach ($cart->cart_items as $item)
                                            <li>{{ $item->product_name }} <span>$ {{ $item->subtotal }}</span></li>
                                        @endforeach
                                    @endisset

                                </ul>
                                @isset($item->subtotal)
                                    <ul class="checkout__total__all">

                                        <li>Subtotal <span>$@isset($item->subtotal)
                                                    {{ $item->subtotal }}
                                                @endisset
                                            </span></li>

                                    </ul>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua.</p>

                                    <button type="submit" class="site-btn">PLACE ORDER</button>
                                @endisset
                            </div>
                        </div>
                        {{-- cards --}}
                        <div class="container">

                            <h1>Choose Payment</h1>

                            <div class="row">

                                @if ($payment_method['method'] == 'myfatoorah')
                                    @foreach ($payment_methods_myfatoorah as $method)
                                        <div class="col-md-2 col-lg-2 col-sm-2" style="height: 150px">

                                            <label>
                                                <input type="radio" name="payment_method_id" selected checked
                                                    class="card-input-element"
                                                    value='{{ $method['PaymentMethodId'] }}' />
                                                <div class="card card-default card-input">
                                                    <img src="{{ $method['ImageUrl'] }}" alt="">
                                                    <p style="text-align: center">{{ $method['PaymentMethodEn'] }}</p>
                                                </div>

                                            </label>

                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-4 col-lg-4 col-sm-4">

                                        <label>
                                            <input type="radio" name="payment_method_id" selected checked
                                                class="card-input-element"
                                                value='{{ $payment_method->pivot['paymentmethod_id'] }}' />
                                            <div class="card card-default card-input">
                                                <img src="{{ URL::asset('Backend/assets/img/Payment/' . $payment_method['method'] . '.png') }}"
                                                    alt="">
                                            </div>

                                        </label>

                                    </div>
                                @endif

                            </div>

                        </div>
                        {{-- cards --}}
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->












    <!-- Footer Section Begin -->
    @include('Frontend.Templetes.Templete2.Layouts.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->

    <!-- Search End -->

    <!-- Js Plugins -->
    @include('Frontend.Templetes.Templete2.Layouts.script')
</body>

</html>
