

@if ($store->templete->num_templete == 1)
    @include('Frontend.Templetes.Templete1.wishlist')
@else
    @include('Frontend.Templetes.Templete2.wishlist')
@endif
