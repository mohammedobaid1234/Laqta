<?php

namespace App\Listeners;

use App\Events\ContactCreated;
use App\Models\User;
use App\Notifications\ContactNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendContactNotification
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
     * @param  ContactCreated  $event
     * @return void
     */
    public function handle(ContactCreated $event)
    {
        $contact = $event->contact;

        $users = User::whereIn('type', ['super-admin', 'admin'])->get();
        /*foreach ($users as $user) {
            $user->notify( new OrderCreatedNotification($order) );
        }*/
        Notification::send($users, new ContactNotification($contact));
    }
}