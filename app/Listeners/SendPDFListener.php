<?php

namespace App\Listeners;

use App\Events\SendPDF;
use PDF;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendPDFListener
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
    public function handle(SendPDF $event)
    {
        // $pdf = PDF::loadView('BC', $event);
        Mail::send('BC', $event, function ($message) use ($event) {
            $message->to($event['email'], $event['name'])
                ->subject('Welcome')
                ->from('info@troy.com', 'Troy');
        });
    }
}
