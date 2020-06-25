<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginLoginCredentials;

class SendLoginCredentials
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
        //
        MAil::to($event->user)->queue(
            new LoginLoginCredentials( $event->user, $event->password)
        );
    }
}
