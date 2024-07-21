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
    Admins
@endsection
@section('one')
    Admin
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
                            <h5 class="card-title">Roles /Admins </h5>

                            {{-- _______________________________ start Button _______________________________ --}}


                            <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add"
                                data-bs-whatever="@mdo">Add Admin</a>


                            {{-- _______________________________ end Button _______________________________ --}}
                        </div>
                        {{-- _______________________________ Alert _______________________________ --}}


                        {{-- <x-alerts></x-alerts> --}}

                        {{-- _______________________________ Alert _______________________________ --}}


                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Edit/Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- _______________________________ start foreach _______________________________ --}}



                                @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>

                                            <div class="row mb-3">

                                                <div class="col-sm-6">
                                                    <select class="form-select" multiple
                                                        aria-label="multiple select example">
                                                        @foreach ($admin->roles as $role)
                                                            <option readonly disabled value="">{{ $role->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @adminCan('update')
                                                <a class="btn btn-outline-success"
                                                    href="{{ url('admin/dashboard/admins/edit', $admin->id) }}">Edit</a>
                                            @endadminCan
                                            @adminCan('delete')
                                                <a class="btn btn-outline-danger"
                                                    href="{{ url('admin/dashboard/admins/delete', $admin->id) }}">Dlete</a>
                                            @endadminCan
                                        </td>
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

    {{-- model add --}}

    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Admin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ url('admin/dashboard/admins/store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"> Name:</label>
                            <input type="text" class="form-control" name="name" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"> Email:</label>
                            <input type="text" class="form-control" name="email" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"> Password:</label>
                            <input type="text" class="form-control" name="password" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <ul class="list-group">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Choose Role To Admin</h5>

                                        <!-- Accordion without outline borders -->
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Roles
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    @foreach ($roles as $role)
                                                        <li class="list-group-item">
                                                            <input class="form-check-input me-1"
                                                                value="{{ $role->name }}" name="roles[]" type="checkbox"
                                                                value="" aria-label="...">
                                                            {{ $role->name }}
                                                        </li>
                                                    @endforeach

                                                </div>
                                            </div>

                                        </div><!-- End Accordion without outline borders -->

                                    </div>
                                </div>


                            </ul>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- model add --}}
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
