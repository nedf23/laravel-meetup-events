<?php

namespace App\Listeners;

use App\Events\Posted;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AuditPosted
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
     * @param  Posted  $event
     * @return void
     */
    public function handle(Posted $event)
    {
        Log::info('A things has been posted.');
    }
}
