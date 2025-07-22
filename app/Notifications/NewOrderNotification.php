<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrderNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = route('admin.orders.show', $this->order);

        return (new MailMessage)
            ->subject('New Order Received - #' . $this->order->id)
            ->greeting('Hello Admin!')
            ->line('A new order has been placed.')
            ->line('Order Details:')
            ->line('- Order #: ' . $this->order->id)
            ->line('- Customer: ' . $this->order->user->name)
            ->line('- Total Amount: $' . number_format($this->order->total_amount, 2))
            ->line('- Items: ' . $this->order->items->sum('quantity'))
            ->action('View Order', $url)
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'order_id' => $this->order->id,
            'amount' => $this->order->total_amount,
            'customer' => $this->order->user->name,
        ];
    }
} 