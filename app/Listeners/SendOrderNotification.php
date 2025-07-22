<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use App\Models\Admin;
use App\Notifications\NewOrderNotification;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrderNotification implements ShouldQueue
{
    public function handle(OrderPlaced $event)
    {
        // Notify all admins about the new order
        $admins = Admin::all();
        foreach ($admins as $admin) {
            $admin->notify(new NewOrderNotification($event->order));
        }
    }
} 