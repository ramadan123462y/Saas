{{-- two coulomn  --}}

@extends('Backend.Saller.Layouts.Master')
@push('styles')
    <style>
        .list-group-item.active {
            background: #ffc107;
        }

        /* end common class */
        .top-status ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            justify-content: center;
            flex-wrap: wrap;
            padding: 0;
            margin: 0;
        }

        .top-status ul li {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #fff;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            border: 8px solid #ddd;
            box-shadow: 1px 1px 10px 1px #ddd inset;
            margin: 10px 5px;
        }

        .top-status ul li.active {
            border-color: #ffc107;
            box-shadow: 1px 1px 20px 1px #ffc107 inset;
        }

        /* end top status */

        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 20px 0;
            padding-left: 30px;
        }

        ul.timeline>li:before {
            content: '\2713';
            background: #fff;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 0;
            left: 5px;
            width: 50px;
            height: 50px;
            z-index: 400;
            text-align: center;
            line-height: 50px;
            color: #d4d9df;
            font-size: 24px;
            border: 2px solid #d4d9df;
        }

        ul.timeline>li.active:before {
            content: '\2713';
            background: #28a745;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 0;
            left: 5px;
            width: 50px;
            height: 50px;
            z-index: 400;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 30px;
            border: 2px solid #28a745;
        }

        /* end timeline */
    </style>
@endpush
@section('css')
@endsection
@section('title_page')
    Order Details
@endsection
@section('one')
    Order Details
@endsection
@section('two')
    Order Details
@endsection

@section('content')
    <!-- عنصر الـ loader -->
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Example Card</h5>
                        <!doctype html>
                        <html lang="en">

                        <head>
                            <!-- Required meta tags -->
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                            <!-- Bootstrap CSS -->
                            <link rel="stylesheet"
                                href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                                crossorigin="anonymous">
                            <title>Simple Profile</title>
                        </head>

                        <body>
                            <section class="my-5">
                                <div class="container">
                                    <div class="main-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column align-items-center text-center">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                                alt="Admin" class="rounded-circle p-1 bg-warning"
                                                                width="110">
                                                            <div class="mt-3">
                                                                <h4>{{ $order->user->name }}</h4>
                                                                <p class="text-secondary mb-1">{{ $order->user->email }}</p>
                                                                <p class="text-muted font-size-sm">Customer</p>
                                                            </div>
                                                        </div>
                                                        <div class="list-group list-group-flush text-center mt-4">
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action border-0 active">
                                                                Profile Informaton
                                                            </a>
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action border-0">Orders</a>
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action border-0">Address
                                                                Book</a>
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action border-0">Settings</a>
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action border-0">Logout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="top-status">
                                                            <h5>ORDER# {{ $order->id }}</h5>
                                                            <ul>
                                                                <li class="active">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                                        data-name="Layer 1" viewBox="0 0 512 512"
                                                                        width="50" height="50">
                                                                        <title> Clock Delivery package </title>
                                                                        <path
                                                                            d="M316.96,424.4A96,96,0,1,1,400,472.22,95.391,95.391,0,0,1,316.96,424.4Z"
                                                                            style="fill:#6fe3ff" />
                                                                        <path
                                                                            d="M400,135.55V280.22A96.008,96.008,0,0,0,316.96,424.4L208,487.3V246.38L399.98,135.54Z"
                                                                            style="fill:#c16752" />
                                                                        <polygon
                                                                            points="208 246.38 141.14 207.78 333.13 96.94 399.98 135.54 208 246.38"
                                                                            style="fill:#e48e66" />
                                                                        <polygon
                                                                            points="333.13 96.94 141.14 207.78 92.21 179.53 284.19 68.69 333.13 96.94"
                                                                            style="fill:#e5d45a" />
                                                                        <polygon
                                                                            points="208 24.7 284.19 68.69 92.21 179.53 92.2 179.53 16.02 135.54 208 24.7"
                                                                            style="fill:#af593c" />
                                                                        <polygon
                                                                            points="208 246.38 208 487.3 16 376.45 16 135.55 16.02 135.54 92.2 179.53 92.2 339.28 115.45 329.68 140.8 358.48 140.8 207.98 141.14 207.78 208 246.38"
                                                                            style="fill:#e48e66" />
                                                                        <polygon
                                                                            points="141.14 207.78 140.8 207.98 140.8 358.48 115.45 329.68 92.2 339.28 92.2 179.53 92.21 179.53 141.14 207.78"
                                                                            style="fill:#f8ec7d" />
                                                                        <path
                                                                            d="M284.75,269.594l-17.9-18.959a7,7,0,0,0-11.256,1.49l-16.9,31.44a7,7,0,0,0,6.16,10.316,7.185,7.185,0,0,0,6.292-3.687L255,283.247V343.42a7,7,0,1,0,14,0V273.051l5.69,6.154a6.927,6.927,0,0,0,9.835.285A7,7,0,0,0,284.75,269.594Z"
                                                                            style="fill:#6fe3ff" />
                                                                        <path
                                                                            d="M40.83,378.37a7,7,0,0,1-7-7V345.45a7,7,0,0,1,14,0v25.92A7,7,0,0,1,40.83,378.37Z"
                                                                            style="fill:#f8ec7d" />
                                                                        <path
                                                                            d="M69.25,395a7,7,0,0,1-7-7V364.65a7,7,0,0,1,14,0V388A7,7,0,0,1,69.25,395Z"
                                                                            style="fill:#f8ec7d" />
                                                                        <path
                                                                            d="M97.68,411.41a7,7,0,0,1-7-7V383.85a7,7,0,0,1,14,0v20.56A7,7,0,0,1,97.68,411.41Z"
                                                                            style="fill:#f8ec7d" />
                                                                        <path
                                                                            d="M126.1,427.82a7,7,0,0,1-7-7V403.05a7,7,0,0,1,14,0v17.77A7,7,0,0,1,126.1,427.82Z"
                                                                            style="fill:#f8ec7d" />
                                                                        <path
                                                                            d="M154.52,444.61a7,7,0,0,1-7-7V422.25a7,7,0,0,1,14,0v15.36A7,7,0,0,1,154.52,444.61Z"
                                                                            style="fill:#f8ec7d" />
                                                                        <path
                                                                            d="M247.777,384.941a7,7,0,0,1-3.507-13.064l31.89-18.41a7,7,0,0,1,7,12.125L251.27,384A6.964,6.964,0,0,1,247.777,384.941Z"
                                                                            style="fill:#f8ec7d" />
                                                                        <path
                                                                            d="M432.039,413.22a6.975,6.975,0,0,1-4.783-1.89l-32.04-30A7,7,0,0,1,393,376.22V313.97a7,7,0,0,1,14,0v59.215l29.824,27.925a7,7,0,0,1-4.785,12.11Z"
                                                                            style="fill:#2561a1" />
                                                                    </svg>
                                                                    <span>{{ $order->status }}</span>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mt-4">
                                                    <div class="card-body p-0 table-responsive">
                                                        <h4 class="p-3 mb-0">Order Details</h4>
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Description</th>
                                                                    <th scope="col">Product Name </th>
                                                                    <th scope="col">Quantity</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach ($order->orderitems as $item)
                                                                    <tr>

                                                                        <th>
                                                                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                                                alt="product" class=""
                                                                                width="80">
                                                                        </th>
                                                                        <td>{{ $item->product_name }}</td>
                                                                        <td>${{ $item->price }} X {{ $item->quintitie }}
                                                                        </td>
                                                                        <td><strong>${{ $item->price * $item->quintitie }}
                                                                            </strong></td>

                                                                        @if ($order->status == 'pending')
                                                                            <td><span
                                                                                    class="badge badge-warning">{{ $order->status }}</span>
                                                                            </td>
                                                                        @elseif ($order->status == 'sucess')
                                                                            <td><span
                                                                                    class="badge badge-success">{{ $order->status }}</span>
                                                                            </td>
                                                                        @else
                                                                            <td><span
                                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                                            </td>
                                                                        @endif

                                                                    </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <th colspan="2">
                                                                        <span>Status:</span>

                                                                        @if ($order->status == 'pending')
                                                                    <td><span
                                                                            class="badge badge-warning">{{ $order->status }}</span>
                                                                    </td>
                                                                @elseif ($order->status == 'sucess')
                                                                    <td><span
                                                                            class="badge badge-success">{{ $order->status }}</span>
                                                                    </td>
                                                                @else
                                                                    <td><span
                                                                            class="badge badge-danger">{{ $order->status }}</span>
                                                                    </td>
                                                                    @endif
                                                                    </th>
                                                                    <td>
                                                                        <span class="text-muted">Total Price</span>
                                                                        <strong>${{ $order_sum->sum_price }}</strong>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted">Total Paid</span>
                                                                        <strong>${{ $order_sum->sum_price }}</strong>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted">Due</span>
                                                                        <strong>${{ $order_sum->sum_price }}</strong>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="card mt-4">
                                                    <div class="card-body">
                                                        <h4>Timeline</h4>
                                                        <ul class="timeline">
                                                            <li class="active">
                                                                <h6>PICKED</h6>
                                                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet,
                                                                    consectetur adipiscing elit. Quisque Lorem ipsum dolor
                                                                </p>
                                                                <o class="text-muted">21 March, 2014</p>
                                                            </li>
                                                            <li>
                                                                <h6>PICKED</h6>
                                                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet,
                                                                    consectetur adipiscing elit. Quisque</p>
                                                                <o class="text-muted">21 March, 2014</p>
                                                            </li>
                                                            <li>
                                                                <h6>PICKED</h6>
                                                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet,
                                                                    consectetur adipiscing elit. Quisque</p>
                                                                <o class="text-muted">21 March, 2014</p>
                                                            </li>
                                                            <li>
                                                                <h6>PICKED</h6>
                                                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet,
                                                                    consectetur adipiscing elit. Quisque</p>
                                                                <o class="text-muted">21 March, 2014</p>
                                                            </li>
                                                            <li>
                                                                <h6>PICKED</h6>
                                                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet,
                                                                    consectetur adipiscing elit. Quisque</p>
                                                                <o class="text-muted">21 March, 2014</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Optional JavaScript -->
                            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
                            </script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
                            </script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
                            </script>
                        </body>

                        </html>
                    </div>
                </div>

            </div>


        </div>
    </section>
@endsection
@section('js')
@endsection
