<?php

namespace Matthv\LaravelDingoTransform;

use Dingo\Api\Event\RequestWasMatched;
use Dingo\Api\Event\ResponseWasMorphed;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Matthv\LaravelDingoTransform\Listeners\UpdateRequest;
use Matthv\LaravelDingoTransform\Listeners\UpdateResponse;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        RequestWasMatched::class => [
			UpdateRequest::class
        ],
        ResponseWasMorphed::class => [
            UpdateResponse::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
