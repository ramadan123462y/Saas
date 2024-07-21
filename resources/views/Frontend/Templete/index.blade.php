
@if ($store->templete->num_templete == 1)
    @include('Frontend.Templetes.Templete1.index')
@else
    @include('Frontend.Templetes.Templete2.index')
@endif
