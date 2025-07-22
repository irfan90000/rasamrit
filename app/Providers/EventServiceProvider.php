protected $listen = [
    \App\Events\OrderPlaced::class => [
        \App\Listeners\SendOrderNotification::class,
    ],
]; 