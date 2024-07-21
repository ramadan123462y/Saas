{{-- two coulomn  --}}

@extends('Backend.Admin.Layouts.Master')
@section('css')
@endsection
@section('title_page')
    Permision
@endsection
@section('one')
    Permision
@endsection
@section('two')
    Index
@endsection

@section('content')
    <!-- عنصر الـ loader -->
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Permissions</h5>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Choose Permission To Role </h5>

                                <!-- List group With Checkboxes and radios -->

                                <form action="{{ url('admin/dashboard/role/update_permission') }}" method="POST">
                                    @csrf
                                    <ul class="list-group">

                                        <input type="hidden" name="role_id" value="{{ $id_role }}">

                                        @foreach ($permissions as $permission)
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" value="{{ $permission->name }}" name="permission[]"
                                                    {{ in_array($permission->id, $ids_permission) ? 'checked' : '' }}
                                                    type="checkbox" value="" aria-label="..."  >
                                                {{ $permission->name }}
                                            </li>
                                        @endforeach

                                    </ul><!-- End List Checkboxes and radios -->

                                    <button type="submit" style="margin-left: 75%; margin-top:30px" type="button"
                                        class="btn btn-outline-primary">Update Permission</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
@endsection
