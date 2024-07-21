
@if (\App\Http\Helpers\store()->templete->num_templete == 1)
    @include('Frontend.Templetes.Templete1.Login')
@else
    @include('Frontend.Templetes.Templete2.Login')
@endif
