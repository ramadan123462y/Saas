<!doctype html>
<html lang="zxx">
@include('Frontend.Templetes.Templete1.Layouts.head')

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
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">

                                    @foreach ($categories as $categorie)
                                        <li>
                                            <a href="{{ url('/categorie', $categorie->id) }}">{{ $categorie->name }}</a>
                                            <span>({{ $categorie->product_count }})</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>


                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu">
                                    <p><span> @isset($categories->counts)
                                                {{ $categories->counts }}
                                            @endisset </span> Prodict Found</p>
                                </div>

                                <div class="single_product_menu d-flex">
                                    <form action="{{ url('/categorie') }}" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Product"
                                                name="product_name" aria-describedby="inputGroupPrepend">
                                            <div class="input-group-prepend">
                                                {{-- <span class="input-group-text" id="inputGroupPrepend"></span> --}}


                                                @csrf
                                                <button type="submit"
                                                    style="width: 60px;padding-top: 10px;    border: none;background: white;"><i
                                                        class="ti-search"></i></button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center latest_product_inner">

                        @if ($products)

                            @foreach ($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ URL::asset("storage/Images/products/$product->file_name") }}"
                                            alt="">
                                        <div class="single_product_text">
                                            <h4><a
                                                    href="{{ url('/product_details', $product->id) }}">{{ $product->name }}</a>
                                            </h4>
                                            <h3>${{ $product->selling_price }}</h3>
                                            <a href="{{ url('cart/store', $product->id) }}" class="add_cart">+ add to
                                                cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @foreach ($categories as $categorie)
                                @foreach ($categorie->products as $product)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="{{ URL::asset("storage/Images/products/$product->file_name") }}"
                                                alt="">
                                            <div class="single_product_text">
                                                <h4><a
                                                        href="{{ url('/product_details', $product->id) }}">{{ $product->name }}</a>
                                                </h4>
                                                <h3>${{ $product->selling_price }}</h3>
                                                <a href="{{ url('cart/store', $product->id) }}" class="add_cart">+ add
                                                    to
                                                    cart<i class="ti-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        @endif


                    </div>
                    <div class="col-lg-12">
                        <div class="pageination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- product_list part start-->

    <!-- product_list part end-->

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
    @include('Frontend.Templetes.Templete1.Layouts.script')
</body>

</html>
