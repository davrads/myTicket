<?php

namespace App\Observers;

use App\Mail\EventApprovalNotification;
use App\Models\Organizer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class OrganizerObserver
{
    /**
     * Handle the Organizer "created" event.
     */
    public function created(Organizer $organizer): void
    {
        //
    }

    /**
     * Handle the Organizer "updated" event.
     */
    public function updated(Organizer $organizer): void
    {
        if ($organizer->isDirty('status') && $organizer->status == 'approved') {
            $password = rand(10000000, 99999999);
            $organizer->password = Hash::make($password);
            $organizer->saveQuietly();

Mail::to($organizer->email)->send(new EventApprovalNotification($organizer, $password));
        }
    }

    /**
     * Handle the Organizer "deleted" event.
     */
    public function deleted(Organizer $organizer): void
    {
        //
    }

    /**
     * Handle the Organizer "restored" event.
     */
    public function restored(Organizer $organizer): void
    {
        //
    }

    /**
     * Handle the Organizer "force deleted" event.
     */
    public function forceDeleted(Organizer $organizer): void
    {
        //
    }
}
