<?php

namespace App\Listeners;

use App\Events\CatridgeUpdatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Catridge;
class CatridgeActionsListener
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
     * @param  CatridgeUpdatedEvent  $event
     * @return void
     */
    public function handle(CatridgeUpdatedEvent $event)
    {
        //
    }
}
