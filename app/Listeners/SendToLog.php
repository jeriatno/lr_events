<?php

namespace App\Listeners;

use App\Events\UserNewEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class SendToLog
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserNewEvent $event)
    {
        $user = $event->user;
        Log::info('User was created, username : '.$user->name);
    }
}
