@extends('Backend.Saller.Layouts.Master')
@section('css')
@endsection
@section('title_page')
    Products
@endsection
@section('one')
    Products
@endsection
@section('two')
    Index
@endsection


@section('content')
    <section class="section">
        <div class="row">
            <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Products Sales</h5>
                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-justified" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-justified" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">SEO Tages</button>
                            </li>

                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact-justified" type="button" role="tab"
                                    aria-controls="contact" aria-selected="false">Image</button>
                            </li>
                        </ul>
                        <form action="{{ url('saller/dashboard/product/update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <div class="tab-content pt-2" id="myTabjustifiedContent">

                                <div class="tab-pane fade show active" id="home-justified" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <!-- General Form Elements -->

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="name" value="{{ $product->name }}"
                                                class="form-control">
                                                <x-inline_alert name='name'></x-inline_alert>
                                        </div>
                                    </div>

                                    <div class="row mb-3  justify-content-between">
                                        <label for="inputNumber" class="col-sm-2 col-form-label">Quintite:</label>
                                        <div class="col-sm-2">
                                            <input type="number" name="quantity" value="{{ $product->quantity }}"
                                                class="form-control">
                                                <x-inline_alert name='quantity'></x-inline_alert>
                                        </div>


                                        <label for="inputNumber" class="col-2 form-label">Slug:</label>
                                        <div class="col-sm-2">
                                            <input type="text" name="slug" value="{{ $product->slug }}"
                                                class="form-control">
                                                <x-inline_alert name='slug'></x-inline_alert>
                                        </div>

                                    </div>

                                    <div class="row  justify-content-between">
                                        <div class="col-4 mb-3">
                                            <label for="inputNumber" class="col-sm-4 col-form-label">Original price</label>
                                            <div class="col-sm-6">
                                                <input type="number" value="{{ $product->original_price }}"
                                                    name="original_price" class="form-control">
                                                    <x-inline_alert name='original_price'></x-inline_alert>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="inputNumber" class="col-sm-4 col-form-label">Selling Price</label>
                                            <div class="col-sm-6">
                                                <input type="number" value="{{ $product->selling_price }}"
                                                    name="selling_price" class="form-control">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Categorie</label>
                                        <div class="col-sm-6">
                                            <select class="form-select" name="categorie_id"
                                                aria-label="Default select example">
                                                <option disabled selected>Open this Categorie</option>

                                                @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie->id }}"
                                                        @if ($categorie->id == $product->categorie_id) {{ 'selected' }} @endif>
                                                        {{ $categorie->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class=" row mb-3">



                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">small
                                                Descreption</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" value="{{ $product->small_description }}" name="small_description"
                                                    style="height: 60px"></textarea>
                                            </div>

                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Descreption</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" value="{{ $product->description }}" name="description" style="height: 60px"></textarea>
                                            </div>
                                            <div class="form-check form-switch col-sm-4">
                                                @if ($product->status==true)
                                                    <input class="form-check-input" type="checkbox" value="on"
                                                        checked name="status" role="switch"
                                                        id="flexSwitchCheckDefault">
                                                @else
                                                    <input class="form-check-input" type="checkbox" value="on"
                                                        name="status" role="switch" id="flexSwitchCheckDefault">
                                                @endif
                                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                                    Active</label>
                                            </div>
                                        </div>








                                        <!-- End General Form Elements -->

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="profile-justified" role="tabpanel"
                                    aria-labelledby="profile-tab">

                                    <!-- General Form Elements -->

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Meta_title</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="meta_title" value="{{ $product->meta_title }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Meta
                                            Descreption</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="meta_keyword" value="{{ $product->meta_keyword }}" style="height: 50px"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Meta
                                            Keyword</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="meta_descreption" value="{{ $product->meta_descreption }}"
                                                style="height: 50px"></textarea>
                                        </div>
                                    </div>


                                    <!-- End General Form Elements -->



                                </div>


                                <div class="tab-pane fade" id="contact-justified" role="tabpanel"
                                    aria-labelledby="contact-tab">


                                    <img width="50px" height="50px"
                                        src={{ URL::asset('storage/Images/Products/' . $product->file_name) }}>

                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" value="" type="file" name="file_name"
                                                id="formFile">
                                        </div>
                                    </div>





                                    <div class="row mb-3">
                                        <label class="col-sm-10 col-form-label">Submit Button</label>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-primary">Submit Form</button>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- End Default Tabs -->
                        </form>

                    </div>

                </div>
            </div><!-- End Recent Sales -->

        </div>
    </section>
@endsection
@section('js')
@endsection

@push('styles')
    <link href="{{ URL::asset('Backend/assets/css/style.css') }}" rel="stylesheet">
@endpush
@push('styles')
    <link href="{{ URL::asset('Backend/assets/css/style.css') }}" rel="stylesheet">
@endpush
@push('styles')
    <link href="{{ URL::asset('Backend/assets/css/style.css') }}" rel="stylesheet">
@endpush
