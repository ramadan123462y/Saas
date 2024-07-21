{{-- two coulomn  --}}

@extends('Backend.Admin.Layouts.Master')
@section('css')
@endsection
@section('title_page')
    Edit Admin
@endsection
@section('one')
    Admin
@endsection
@section('two')
    Edit
@endsection

@section('content')
    <!-- عنصر الـ loader -->
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <section class="section">
        <div class="row">

            <form action="{{ url('admin/dashboard/admins/update') }}" method="post" style="display: flex;justify-content: space-between" >

                @csrf
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Admin</h5>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="admin_id" value="{{ $admin->id }}" >
                                <input type="text" name="name"  value="{{ $admin->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ $admin->email }}"  class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="password"  type="password" class="form-control">
                            </div>
                        </div>
                        <button style="margin-left: 83%" type="submit" class="btn btn-outline-primary">Update</button>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Roles</h5>
                        <!-- Accordion without outline borders -->
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Roles
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    @foreach ($roles as $role)
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1"
                                                {{ in_array($role->id, $ids_roles) ? 'checked' : '' }} value="{{ $role->name }}"
                                                name="roles[]" type="checkbox" value="" aria-label="...">
                                            {{ $role->name }}
                                        </li>
                                    @endforeach

                                </div>
                            </div>

                        </div><!-- End Accordion without outline borders -->

                    </div>
                </div>

            </div>
        </form>
        </div>
    </section>
@endsection
