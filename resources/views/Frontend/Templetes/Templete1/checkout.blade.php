<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranaz</title>
    <link rel="icon" href="{{ URL::asset('FrontEnd/Templete1/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/owl.carousel.min.css') }}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/nice-select.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/themify-icons.cs') }}s">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/price_rangs.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/style.css') }}">
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
</head>

{{-- @include('Frontend.Templetes.Templete1.Layouts.head') --}}

<body>
    <!--::header part start::-->
    @include('Frontend.Templetes.Templete1.Layouts.header')
    <!-- Header part end-->

    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Producta Checkout</h2>
                            <p>Home <span>-</span> Shop Single</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Checkout Area =================-->
    <section class="checkout_area padding_top">
        <div class="container">
            <form class="row contact_form" action="{{ url('checkout/store_order') }}" method="post"
                novalidate="novalidate">
                @csrf
                {{--

                'country',
                'address1',
                'address2',
                'city',
                'zip', --}}
                <div class="billing_details">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>Billing Details</h3>

                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="first_name" />
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="last_name" />
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>

                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="phone_number" />
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email" />
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select name="country" class="country_select">
                                    <option value="1">Country</option>
                                    <option value="2">Country</option>
                                    <option value="4">Country</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="address1" />
                                <span class="placeholder" data-placeholder="Address line 01"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="address2" />
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city" />
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>

                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip"
                                    placeholder="Postcode/ZIP" />
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="order_box">
                                <h2>Your Order</h2>
                                <ul class="list">
                                    <li>
                                        <a href="#">Product
                                            <span>Total</span>
                                        </a>
                                    </li>
                                    @isset($cart->cart_items)

                                        @foreach ($cart->cart_items as $item)
                                            <li>
                                                <a href="#">{{ $item->product_name }}
                                                    <span class="middle">x {{ $item->quantity }}</span>
                                                    <span class="last">${{ $item->subtotal }}</span>
                                                </a>
                                            </li>
                                        @endforeach

                                    @endisset
                                </ul>
                                @isset($item->subtotal)
                                    <ul class="list list_2">

                                        <li>
                                            <a href="#">Total
                                                <span>$@isset($item->subtotal)
                                                        {{ $cart->subtotal }}
                                                    @endisset
                                                </span>
                                            </a>
                                        </li>
                                    </ul>



                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option4" name="selector" />
                                        <label for="f-option4">I’ve read and accept the </label>
                                        <a href="#">terms & conditions*</a>
                                    </div>



                                    <button class="btn_3" style="margin-left: auto;margin-right: auto;"
                                        type="submit">Proceed to Pay</button>
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
                </div>
            </form>
        </div>

    </section>
    <!--================End Checkout Area =================-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Products</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Managed Website</a></li>
                            <li><a href="">Manage Reputation</a></li>
                            <li><a href="">Power Tools</a></li>
                            <li><a href="">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email"
                                    placeholder="Email Address" class="placeholder hide-on-focus"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a>
                                </li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.nice-select.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/slick.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/contact.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.form.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/mail-script.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/stellar.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/price_rangs.js') }}"></script>
    <!-- custom js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/custom.js') }}"></script>
</body>

</html>
