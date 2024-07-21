<div>



    <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">

                @isset($unreadNotifications->unread_notifications_count)
                    {{ $unreadNotifications->unread_notifications_count }}
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

            @isset($unreadNotifications->unreadNotifications)


                @foreach ($unreadNotifications->unreadNotifications()->limit(5)->get() as $notifie)
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @if ($notifie->type == 'App\Notifications\CreateStoreNotification')
                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Store Created By #Saller Name{{ $notifie->data['saller'] }}</h4>

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


    <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ URL::asset('Backend/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>Need Help?</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="{{ url('admin/logout') }}">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
            </li>

        </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

</div>
