<div><div>
    {{-- <div>
        @php
            $saller = App\Http\Helpers\store_saller()
                ->saller()
                ->with('unreadNotifications')
                ->withCount('unreadNotifications')
                ->first();
            $unreadNotifications = $saller->unreadNotifications()->limit(5)->get();
            $unreadNotificationsCount = $saller->unread_notifications_count;
        @endphp
    </div> --}}


    <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">

                @isset($unreadNotificationsCount)
                    {{ $unreadNotificationsCount }}
                @endisset
            </span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
                You have 4 new notifications
                <a href="{{ url('saller/dashboard/viewall_notification') }}"><span
                        class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>

            {{-- ______________________________________ --}}

            @isset($unreadNotifications)

                @foreach ($unreadNotifications as $notifie)
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @if ($notifie->type == 'App\Notifications\CreateCart')
                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Cart Created #Identifie{{ $notifie->data['cart']['id'] }}</h4>

                                <p>{{ Carbon\Carbon::now()->diffForHumans($notifie->created_at) }}</p>
                            </div>
                        </li>
                    @else
                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Order Created #{{ $notifie->data['order']['id'] }}</h4>
                                <p>By
                                    Customer{{ \App\Models\Adress::find($notifie->data['order']['adress_id'])->first_name }}
                                </p>
                                <p>{{ Carbon\Carbon::now()->diffForHumans($notifie->created_at) }}</p>
                            </div>
                        </li>
                    @endif
                @endforeach
            @endisset


            <li>
                <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
            </li>

        </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

</div>
   <!-- An unexamined life is not worth living. - Socrates -->
</div>
