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
    Transactions
@endsection
@section('one')
    Transactions
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

                            {{-- _______________________________ start Button _______________________________ --}}


                            {{-- <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add"
                                data-bs-whatever="@mdo">Add</a> --}}


                            {{-- _______________________________ end Button _______________________________ --}}
                        </div>
                        {{-- _______________________________ Alert _______________________________ --}}


                        {{-- <x-alerts></x-alerts> --}}

                        {{-- _______________________________ Alert _______________________________ --}}


                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Id Payment</th>
                                    <th>Status</th>
                                    <th>Total</th>



                                </tr>
                            </thead>
                            <tbody>
                                {{-- _______________________________ start foreach _______________________________ --}}




                                {{-- ['pending', 'complete', 'failed'] --}}
                                @foreach ($transactions as $transaction)
                                    <tr>

                                        <td>{{ $transaction->order_id }}</td>
                                        <td>{{ $transaction->id_payment }}</td>
                                        <td>
                                            @if ($transaction->status == 'pending')
                                                <div style="color: rgb(0, 0, 255)"> {{ $transaction->status }}</div>
                                            @elseif ($transaction->status == 'complete')
                                                <div style="color: green"> {{ $transaction->status }}</div>
                                            @else
                                                <div style="color:red"> {{ $transaction->status }}</div>
                                            @endif

                                        </td>
                                        <td>{{ $transaction->total }}</td>

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
    {{-- add model ______________________________________________________________ --}}



    {{-- @include('Backend.Saller.Categories.modles.add') --}}

    {{-- end model ______________________________________________________________ --}}

    {{-- edit model ______________________________________________________________ --}}

    {{-- @include('Backend.Saller.Categories.modles.edit') --}}

    {{-- end model ---- ______________________________________________________________ --}}
@endsection
@section('js')
    {{-- jquery modle  model ---- ___________________________________________________ --}}
    {{--
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $('.editbtn').click(function() {

                var id = $(this).data('id');
                var name = $(this).data('name');
                var status = $(this).data('status');
                var description = $(this).data('description');

                $('.id_model').val(id);
                $('.name_model').val(name);

                var file_name = $(this).data('file_name');
                $('.myImage').attr('src', `{{ URL::asset('storage/Images/Categories/${file_name}') }}`);

                if (status) {
                    $('.status_model').prop('checked', true);
                } else {
                    $('.status_model').prop('checked', false);
                }

            })


        });
    </script> --}}


    {{-- jquery modle  model ---- ____________________________________________________ --}}
@endsection
