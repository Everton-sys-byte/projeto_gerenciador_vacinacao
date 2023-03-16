<?php

namespace App\Listeners;

use App\Events\UserVaccinated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DecreaseBatchQuantity
{
    
    /**
     * Handle the event.
     *
     * @param  \App\Events\UserVaccinated  $event
     * @return void
     */
    public function handle(UserVaccinated $event)
    {
        $event->lote->update([
            'quantidade' => $event->lote->quantidade - 1
        ]);
    }
}
