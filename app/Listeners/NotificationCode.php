<?php

namespace App\Listeners;

use App\Events\Vertification;
use App\Jobs\SendVertificationCode;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\Verificationcode;

class NotificationCode
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Vertification $event): void
    {

        // $event->admin->notify(new Verificationcode($event->code));
        SendVertificationCode::dispatch($event);
    }
}
