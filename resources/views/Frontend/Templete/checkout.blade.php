
@if ($store->templete->num_templete == 1)
    @include('Frontend.Templetes.Templete1.checkout')
@else
    @include('Frontend.Templetes.Templete2.checkout')
@endif
