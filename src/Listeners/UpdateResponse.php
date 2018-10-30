<?php

namespace Matthv\LaravelDingoTransform\Listeners;


use Dingo\Api\Event\ResponseWasMorphed;
use Matthv\LaravelDingoTransform\Transformations;

class UpdateResponse
{
	/**
	 * @param ResponseWasMorphed $event
	 */
    public function handle(ResponseWasMorphed $event) {
        $event->response->setContent(Transformations::transform($event->response->content(), request()->server->get('HTTP_X_KEY_INFLECTION') ?: 'snake'));
    }

}
