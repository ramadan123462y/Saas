<?php

namespace App\View\Components;

use App\Models\Admin;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class NotificationAdmin extends Component
{
    public  $unreadNotifications;
    public function __construct()
    {
        $admin = Admin::find(Auth::guard('admin')->user()->id);

        $unreadNotifications = $admin->withcount('unreadNotifications')->with('unreadNotifications')->first();

        $this->unreadNotifications = $unreadNotifications;
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.notification-admin');
    }
}
