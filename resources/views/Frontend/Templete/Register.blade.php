
@if ($store->templete->num_templete == 1)
    @include('Frontend.Templetes.Templete1.Register')
@else
    @include('Frontend.Templetes.Templete2.Register')
@endif
