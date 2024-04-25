<?php

namespace App\Listeners;

use App\Events\EtudiantCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EtudiantCreatedListener
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
    public function handle(EtudiantCreatedEvent $event): void
    {
        // dd($event->etudiant->nom . " Viens de créer !! ");
    }
}
