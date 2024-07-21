
@if ($store->templete->num_templete == 1)
    @include('Frontend.Templetes.Templete1.filters')
@else
    @include('Frontend.Templetes.Templete2.filters')
@endif
