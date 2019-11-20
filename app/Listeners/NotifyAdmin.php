<?php

namespace App\Listeners;

use App\Events\Posted;
use Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdmin
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
        Mail::send('emails.posted', [], function ($m) {
            $m->from('hello@app.com', 'Your Application');
            $m->to('nedfenstermacher@gmail.com')
                ->subject('Thing Posted');
        });
    }
}
