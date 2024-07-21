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

    {{-- <style>
        .data_buttons {


            width: 100%;
            /* height: ; */

            display: flex;
            justify-content: space-between;
            align-items: center;


        }

        .data_buttons>a {


            width: 130px !important;
            height: 50px !important;
            padding-top: 10px !important;



        }
    </style> --}}
@endsection
@section('title_page')
    Categorie
@endsection
@section('one')
    Categories
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
                            <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add"
                                data-bs-whatever="@mdo">Add</a>
                        </div>
                        {{-- alert validation error and any error  --}}
                        <x-alerts></x-alerts>



                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>


                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Edit/Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $categorie)
                                    <tr>
                                        <td>

                                            <img width="50px" height="50px"
                                                src={{ URL::asset("storage/Images/Categories/$categorie->file_name") }}>


                                        </td>
                                        <td>{{ $categorie->name }}</td>
                                        <td>

                                            @if ($categorie->status == true)
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
                                        <td>{{ $categorie->description }}</td>
                                        <td>

                                            {{-- ________________    To Archive     ____________________ --}}
                                            <a href="{{ url("saller/dashboard/categories/delete/$categorie->id") }}"
                                                class="btn btn-outline-dark"> To Archive</a>

                                            {{-- ________________    To edit     ____________________ --}}


                                            <a type="button" class="btn btn-outline-warning editbtn" id="editbtn"
                                                data-bs-toggle="modal" data-bs-target="#edit" data-id="{{ $categorie->id }}"
                                                data-name="{{ $categorie->name }}" data-status="{{ $categorie->status }}"
                                                data-description="{{ $categorie->description }}"
                                                data-file_name="{{ $categorie->file_name }}"
                                                data-bs-whatever="@mdo">Edit</a>

                                            {{-- ________________    To Delete     ____________________ --}}





                                        </td>


                                    </tr>
                                @endforeach
                                </tfoot>
                        </table>



                    </div>
                </div>

            </div>


        </div>
    </section>
    {{-- add model ------------------------------------------------------------------------------ --}}
    @include('Backend.Saller.Categories.modles.add')


    {{-- edit model ------------------------------------------------------------------------------ --}}

    @include('Backend.Saller.Categories.modles.edit')
@endsection
@section('js')
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
    </script>
@endsection
