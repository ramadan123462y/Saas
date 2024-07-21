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
    Stores
@endsection
@section('one')
    Stores
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
                                    <th>Title</th>
                                    <th>Sub Domain</th>


                                    <th>Status</th>
                                    <th>created_at</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- _______________________________ start foreach _______________________________ --}}



                                @foreach ($stores as $store)
                                    <tr>

                                        <td>{{ $store->title }}</td>
                                        <td>{{ $store->sub_domain }}</td>
                                        <td>

                                            @if ($store->active == 1)
                                                <div style="background-color:rgba(172, 255, 47, 0.553)">Active</div>
                                            @else
                                                <div style="background-color:red">Un Active</div>
                                            @endif



                                        </td>
                                        <td>{{ $store->created_at }}</td>
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
