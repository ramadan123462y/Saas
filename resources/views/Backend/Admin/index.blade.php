{{-- two coulomn  --}}

@extends('Backend.Admin.Layouts.Master')
@push('scripts')
@endpush
@section('css')
@endsection
@section('title_page')
    Admin
@endsection
@section('one')
    Dashboard
@endsection
@section('two')
    Home
@endsection

@section('content')
    <!-- عنصر الـ loader -->
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Example Card</h5>
                        {!! $chart->container() !!}
                        <script src="{{ $chart->cdn() }}"></script>
                        {{ $chart->script() }}
                    </div>
                </div>

            </div>
            <!-- Customers Card -->
            <div class="col-xxl-6 col-xl-6">

                <div class="card info-card customers-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Stores <span>| This Year</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $unactive + $active }}</h6>
                                <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                    class="text-muted small pt-2 ps-1">decrease</span>

                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End Customers Card -->

        </div>
    </section>
@endsection
