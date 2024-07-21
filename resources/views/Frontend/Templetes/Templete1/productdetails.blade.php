<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <link rel="icon" href="{{ URL::asset('img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/lightslider.min.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/magnific-popup.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('FrontEnd/Templete1/css/style.css') }}">
</head>

<body>
    <!--::header part start::-->
    @include('Frontend.Templetes.Templete1.Layouts.header')
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Single</h2>
                            <p>Home <span>-</span> Shop Single</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <!--================End Home Banner Area =================-->

    <!--================Single Product Area =================-->
    <div class="product_image_area section_padding">
        <div class="container">
            <div class="row s_product_inner justify-content-between">
                <div class="col-lg-7 col-xl-7">
                    <div class="product_slider_img">
                        <div id="vertical">
                            {{-- public/storage/Images/Products --}}
                            <div data-thumb="{{ URL::asset("storage/Images/Products/$product->file_name") }}">
                                <img style="height: 100%; width: 100%;"
                                    src="{{ URL::asset("storage/Images/Products/$product->file_name") }}" />
                            </div>
                            <div data-thumb="{{ URL::asset("storage/Images/Products/$product->file_name") }}">
                                <img style="height: 100%; width: 100%;"
                                    src="{{ URL::asset("storage/Images/Products/$product->file_name") }}" />
                            </div>
                            <div data-thumb="{{ URL::asset("storage/Images/Products/$product->file_name") }}">
                                <img style="height: 100%; width: 100%;"
                                    src="{{ URL::asset("storage/Images/Products/$product->file_name") }}" />
                            </div>
                            <div data-thumb="{{ URL::asset("storage/Images/Products/$product->file_name") }}">
                                <img style="height: 100%; width: 100%;"
                                    src="{{ URL::asset("storage/Images/Products/$product->file_name") }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="s_product_text">
                        <h5>previous <span>|</span> next</h5>
                        <h3>{{ $product->name }}</h3>
                        <h2>${{ $product->selling_price }}</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> :{{ $product->categorie->name }}</a>
                            </li>
                            <li>
                                <a href="#"> <span>Availibility</span> : In Stock</a>
                            </li>
                        </ul>
                        <p>
                            {{ $product->description }}
                        </p>

                        <form action="{{ url('cart/store', $product->id) }}"  method="GET">

                        <div class="card_area d-flex justify-content-between align-items-center">
                            <div class="product_count">
                                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="input-number" type="text" name="quantity"
                                    value="{{ $cart_item_quantity }}" min="0" max="">
                                <span class="number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <button  type="submit"  class="btn_3">add to cart</button>
                            <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->

    <!--================End Product Description Area =================-->

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
    <!--::footer_part end::-->
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/lightslider.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.nice-select.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/slick.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/swiper.jquery.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/contact.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.form.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/mail-script.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/stellar.js') }}"></script>
    <!-- custom js -->
    <script src="{{ URL::asset('FrontEnd/Templete1/js/theme.js') }}"></script>
    <script src="{{ URL::asset('FrontEnd/Templete1/js/custom.js') }}"></script>
</body>

</html>
