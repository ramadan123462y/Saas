<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use function App\Http\Helpers\store_saller;

class NotificationSaller extends Component
{
    public  $unreadNotifications;
    public  $unreadNotificationsCount;
    public function __construct()
    {
        $saller = store_saller()
            ->saller()
            ->with('unreadNotifications')
            ->withCount('unreadNotifications')
            ->first();
        $unreadNotifications = $saller->unreadNotifications()->limit(5)->get();
        $unreadNotificationsCount = $saller->unread_notifications_count;
        $this->unreadNotifications = $unreadNotifications;
        $this->unreadNotificationsCount = $unreadNotificationsCount;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.notification-saller');
    }
}
