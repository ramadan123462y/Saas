@extends('Backend.Saller.Layouts.Master')
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
    Customers
@endsection
@section('one')
    Customers
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
                            <h5 class="card-title">Example Card</h5>


                        </div>



                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- _______________________________ start foreach _______________________________ --}}


                                @foreach ($customers as $customer)
                                    <tr>

                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
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
