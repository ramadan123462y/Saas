<?php

namespace App\Jobs;

use App\Notifications\Verificationcode;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendVertificationCode implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    public $event;
    public function __construct($event)
    {

        $this->event = $event;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->event->admin->notify(new Verificationcode($this->event->code));
    }
}
