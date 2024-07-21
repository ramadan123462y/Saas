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
    Product
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
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="data_buttons">
                            <h5 class="card-title">Example Card</h5>

                            {{-- _______________________________ start Button _______________________________ --}}
                            <div>

                                <a href="{{ url('saller/dashboard/product/export') }}"class="btn btn-outline-success">Export
                                    Excel </a>

                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Import Excel
                                </button>

                            </div>

                            <a href="{{ url('saller/dashboard/product/create') }}" class="btn btn-outline-primary">Add</a>



                            {{-- _______________________________ end Button _______________________________ --}}
                        </div>
                        {{-- _______________________________ Alert _______________________________ --}}


                        <x-alerts></x-alerts>

                        {{-- _______________________________ Alert _______________________________ --}}


                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Price</th>

                                    <th>Edit/Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- _______________________________ start foreach _______________________________ --}}





                                @foreach ($products as $product)
                                    <tr>
                                        <td>

                                            <img width="50px" height="50px"
                                                src={{ URL::asset("storage/Images/products/$product->file_name") }}>


                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>

                                            @if ($product->status == true)
                                                <div class="form-check form-switch"
                                                    style="margin-top: 10px;margin-bottom: 15px;">
                                                    <input class="form-check-input" disabled checked type="checkbox"
                                                        name="status" role="switch" id="flexSwitchCheckDefault">

                                                </div>
                                            @else
                                                <div class="form-check form-switch"
                                                    style="margin-top: 10px;margin-bottom: 15px;">
                                                    <input class="form-check-input" type="checkbox" disabled name="status"
                                                        role="switch" id="flexSwitchCheckDefault">

                                                </div>
                                            @endif

                                        </td>
                                        <td>{{ $product->selling_price }}</td>
                                        <td>

                                            <a class="btn btn-outline-warning " id="editbtn"
                                                href="{{ url('saller/dashboard/product/edit', $product->id) }}">Edit</a>

                                            <a href="{{ url('saller/dashboard/product/delete', $product->id) }}"
                                                class="btn btn-outline-danger">Delete</a>

                                        </td>


                                    </tr>
                                @endforeach




                                {{-- _______________________________ end foreach _______________________________ --}}

                                </tfoot>
                        </table>



                    </div>
                </div>

            </div>

            {{-- strat model   --}}

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="{{ url('saller/dashboard/product/import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Choose File </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Import from Excel File</label>
                                    <input class="form-control" accept=".csv" name="file_excel" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            {{-- end model  --}}
        </div>
    </section>
@endsection
