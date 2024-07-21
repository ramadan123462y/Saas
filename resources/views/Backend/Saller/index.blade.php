@extends('Backend.Saller.Layouts.Blank')
@section('css')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Example Card</h5>
                            <div style="width: 80%; margin: auto;">
                                <canvas id="barChart"></canvas>
                            </div>

                            <script>
                                var ctx = document.getElementById('barChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: @json($data['labels']),
                                        datasets: [{
                                            label: 'Data',
                                            data: @json($data['data']),
                                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                            borderColor: 'rgba(75, 192, 192, 1)',
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>

                </div>

                {{-- <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('saller/dashboard') }}">adgsdfg</a></h5>
                            <p>This is an examle page with no contrnt. You can use it as a starter for your custom
                                pages.</p>
                        </div>
                    </div>

                </div> --}}
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
