<?php

namespace App\Listeners;

use App\Events\UserVaccinated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ChangeBatchStatus
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
     * @param  \App\Events\UserVaccinated  $event
     * @return void
     */
    public function handle(UserVaccinated $event)
    {
        if($event->lote->quantidade == 0) 
            $event->lote->update(['status' => 'esgotado']);
    }
}
