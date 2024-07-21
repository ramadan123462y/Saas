{{-- two coulomn  --}}

@extends('Backend.Saller.Layouts.Master')

@section('css')
    <style>
        .container {
            max-width: 900px;
            margin: 0 auto;
        }



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

        .active1 {

            margin-left: 70%;
            margin-top: 40px;
        }
    </style>
@endsection
@section('title_page')
    Setting
@endsection
@section('one')
    Store
@endsection
@section('two')
    Setting
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-10">



                <form action="{{ url('saller/dashboard/setting/update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">General Setting Store</h5>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-10">
                                    <div class="col-md-8 col-lg-9">
                                        <img src="{{ URL::asset("storage\Images\Profiles\\$store->logo") }}"
                                            style="width:100px;height:100px" alt="Profile">
                                        <div class="pt-2">
                                            <div class="gr" style="display: flex"
                                                style="justify-content: space-between">
                                                <input class="form-control" type="file" name="logo" id="formFile">
                                                <a href="#" style="margin-left: 30px" class="btn btn-danger btn-sm"
                                                    title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ $store->title }}" name="title" class="form-control">
                                    <x-inline_alert name='title'></x-inline_alert>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Sub Domain</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ $store->sub_domain }}" name="sub_domain"
                                        class="form-control">
                                    <x-inline_alert name='sub_domain'></x-inline_alert>

                                </div>
                            </div>


                            <div class="form-check form-switch active1">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                @if ($store->active == true)
                                    <input class="form-check-input" value="on" name="active" checked type="checkbox"
                                        role="switch" id="flexSwitchCheckChecked">
                                @else
                                    <input class="form-check-input" value="on" name="active" type="checkbox"
                                        role="switch" id="flexSwitchCheckChecked">
                                @endif
                                {{-- checked --}}
                            </div>





                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Templete</label>
                                <div class="col-sm-10">
                                    <div class="container">

                                        <h1>Choose Templete </h1>

                                        <div class="row">
                                            @foreach ($templetes as $templete)
                                                <div class="col-md-4 col-lg-4 col-sm-4" >

                                                    <label>
                                                        @if ($store->templete_id == $templete->id)
                                                            <input type="radio" name="templete_id"
                                                                value="{{ $templete->id }}" selected checked
                                                                class="card-input-element" />
                                                        @else
                                                            <input type="radio" name="templete_id"
                                                                value="{{ $templete->id }}" class="card-input-element" />
                                                        @endif
                                                        {{-- selected checked --}}
                                                        <div class="card card-default card-input">
                                                            <div class="card-header">{{ $templete->num_templete }}</div>
                                                            <div class="card-body">
                                                            <img style="width: 100%;height:100%" src="{{ URL::asset("storage/Templetes/$templete->file_name") }}" alt="">
                                                            </div>
                                                        </div>

                                                    </label>

                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Active Payments</label>
                                <div class="col-sm-10">
                                    <div class="container">

                                        <h1>Choose Payment </h1>

                                        <div class="row">
                                            {{-- __________________________________start___________________________ --}}

                                            @foreach ($payment_methods as $method)
                                                <div class="col-md-6 col-lg-6 col-sm-6">

                                                    <label>
                                                        @if (isset($store->paymentmethods[0]) && $store->paymentmethods[0]->method == $method->method)
                                                            <input type="radio" name="paymentmethod_id" selected checked
                                                                value="{{ $method->id }}" class="card-input-element" />
                                                        @else
                                                            <input type="radio" name="paymentmethod_id"
                                                                value="{{ $method->id }}" class="card-input-element" />
                                                        @endif

                                                        <div class="card card-default card-input">

                                                            <img style="object-fit:contain;height:121px;"
                                                                src="{{ URL::asset("Backend/assets/img/Payment/$method->method.png") }}"
                                                                alt="" srcset="">
                                                            @if ($method->method == 'paypal')
                                                                <input type="text"
                                                                    value="{{ isset($store->paymentmethods[0]) ? $store->paymentmethods[0]->pivot->user_name : '' }}"
                                                                    name="user_name" placeholder="User Name"
                                                                    class="form-control">
                                                                <input type="text"
                                                                    value="{{ isset($store->paymentmethods[0]) ? $store->paymentmethods[0]->pivot->password : '' }}"
                                                                    placeholder="Password" name="password"
                                                                    class="form-control">
                                                            @else

                                                                <input type="text" value="{{ isset($store->paymentmethods[0]) ? $store->paymentmethods[0]->pivot->api_key : '' }}" name="api_key[{{ $method->id }}]" placeholder="Api Key" class="form-control">
                                                            @endif

                                                        </div>


                                                    </label>

                                                </div>

                                                {{-- __________________________________end___________________________ --}}
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <button style="margin-left: 80%" type="submit" class="btn btn-primary">Submit
                                        Form</button>
                                </div>
                            </div>

                </form><!-- End General Form Elements -->
            </div>
        </div>

        </div>


        </div>
    </section>
@endsection
@section('js')
@endsection
