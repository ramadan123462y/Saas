@if ($store->templete->num_templete== 1)
    @include('Frontend.Templetes.Templete1.cart')
@else
    @include('Frontend.Templetes.Templete2.cart')
@endif
