@extends('Backend.Admin.Layouts.Master')
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('DataTable/dataTables.bootstrap5.min.css') }}">


    <script src="{{ URL::asset('DataTable/jquery-3.7.0.js') }}"></script>
    <script src="{{ URL::asset('DataTable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('DataTable/dataTables.bootstrap5.min.js') }}"></script>

    <script>
        $(document).ready(function name() {

            new DataTable('#example');

        })
    </script>
@endsection
@section('title_page')
    Subscribtions
@endsection
@section('one')
    Subscribtions
@endsection
@section('two')
    Index
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="data_buttons">
                            <h5 class="card-title">Subscribtions In Ecommerce </h5>


                        </div>



                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Store</th>
                                    <th>Payment Id</th>


                                    <th>Status</th>
                                    <th>created_at</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- _______________________________ start foreach _______________________________ --}}



                                @foreach ($transactions as $transaction)
                                    <tr>

                                        <td>{{ $transaction->store->title }}</td>
                                        <td>{{ $transaction->payment_id }}</td>
                                        <td>

                                            @if ($transaction->status_pay == 'pay')
                                                <div style="color: green"> {{ $transaction->status_pay }}</div>
                                            @else
                                                <div style="color: red"> {{ $transaction->status_pay }}</div>
                                            @endif


                                        </td>
                                        <td>{{ $transaction->created_at }}</td>
                                    </tr>
                                @endforeach

                                {{-- _______________________________ end foreach _______________________________ --}}

                                </tfoot>
                        </table>



                    </div>
                </div>

            </div>


        </div>
    </section>
@endsection
