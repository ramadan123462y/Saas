<div>

    @if ($errors->any())

            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show"  role="alert">
                        <strong>OOps guacamole!</strong>{{ $error }}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </ul>

    @endif
</div>
