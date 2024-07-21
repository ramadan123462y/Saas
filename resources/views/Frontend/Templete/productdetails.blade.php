
@if ($store->templete->num_templete== 1)
    @include('Frontend.Templetes.Templete1.productdetails')
@else
    @include('Frontend.Templetes.Templete2.productdetails')
@endif
