@extends('Backend.Layouts.Master')
@section('css')
@endsection
@section('title_page')
Blank
@endsection
@section('one')
One
@endsection
@section('two')
Two
@endsection

@section('content')

   <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Example Card</h5>
                            <p>This is an examle page with no contrnt. You can use it as a starter for your custom
                                pages.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Example Card</h5>
                            <p>This is an examle page with no contrnt. You can use it as a starter for your custom
                                pages.</p>
                        </div>
                    </div>

                </div>
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
