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
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartitems as $item)
                                    <tr class="tr">
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img style="width: 50px;height:50px;"
                                                    src="{{ URL::asset('storage/Images/products/' . $item->product->file_name) }}"
                                                    alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{ $item->product_name }}</h6>
                                                <h5>${{ $item->product->selling_price }}</h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="quantity ">
                                                <div class="pro-qty-2 qtySelector">

                                                    <input type="text" class="qtyValue" name=""
                                                        value="{{ $item->quantity }}">

                                                </div>
                                                <input type="hidden" class="id" name="id"
                                                    value="{{ $item->id }}">
                                            </div>
                                        </td>
                                        <td class="cart__price total">${{ $item->subtotal }}</td>
                                        <td class="cart__close"><i class="fa fa-close"></i></td>
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
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="{{ url('/cart') }}"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ @isset($item->subtotal)
                                {{ $item->subtotal }}
                            @endisset</span></li>
                            <li>Total <span>$ @isset($item->subtotal)
                                {{ $item->subtotal }}
                            @endisset</span></li>
                        </ul>
                        <a href="{{ url('checkout') }}" class="primary-btn">Proceed to checkout</a>
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
    <script src="{{ URL::asset('FrontEnd/Templete1/js/jquery-1.12.1.min.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.2.4/dist/flasher.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".qtybtn").click(function() {
                var row_q = $(this).closest(".qtySelector");
                var val_q = row_q.children(".qtyValue").val();

                var row = $(this).closest(".tr");
                var id = row.find(".id").val();


                var url = "{{ url('cart/increase_item') }}/" + id + "/" + val_q;

                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        // Handle the successful response here

                        row.find(".total").text('$'+response);
                        flasher.success("Data has been saved successfully!");
                    },
                    error: function(xhr, status, error) {
                        // Handle errors here
                        console.error(xhr.responseText);
                    },
                });
            });
        });
    </script>

</body>

</html>
