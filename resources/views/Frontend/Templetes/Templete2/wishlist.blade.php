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










    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>

                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wishe_list as $item)
                                    <tr class="tr">
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img style="width: 50px;height:50px;"
                                                    src="{{ URL::asset('storage/Images/products/' . $item->product->file_name) }}"
                                                    alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{ $item->product->name }}</h6>
                                                <h5>${{ $item->product->selling_price }}</h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            {{ $item->product->selling_price }}
                                        </td>

                                        <td class="cart__close"><a href="{{ url('wishlist/delete',$item->id) }}"><i class="fa fa-close"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{ url('/') }}">Continue Shopping</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->






    <!-- Footer Section Begin -->
    @include('Frontend.Templetes.Templete2.Layouts.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->

    <!-- Search End -->

    <!-- Js Plugins -->
    @include('Frontend.Templetes.Templete2.Layouts.script')

</body>

</html>
