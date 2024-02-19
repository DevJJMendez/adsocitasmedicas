<?php

namespace App\Observers;

use App\Models\Thirddata;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the Thirddata "created" event.
     */
    public function created(Thirddata $thirddata): void
    {
        // User::create([
        //     'third_data_id'=>$thirddata->data_id,
        //     'mail'=>$thirddata->mail,
        //     'password'=>$thirddata->password,
        //     'role'=>'patient'
        // ]);
    }

    /**
     * Handle the Thirddata "updated" event.
     */
    public function updated(Thirddata $thirddata): void
    {
        //
    }

    /**
     * Handle the Thirddata "deleted" event.
     */
    public function deleted(Thirddata $thirddata): void
    {
        //
    }

    /**
     * Handle the Thirddata "restored" event.
     */
    public function restored(Thirddata $thirddata): void
    {
        //
    }

    /**
     * Handle the Thirddata "force deleted" event.
     */
    public function forceDeleted(Thirddata $thirddata): void
    {
        //
    }
}
