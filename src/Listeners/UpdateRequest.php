<?php

namespace Matthv\LaravelDingoTransform\Listeners;


use Dingo\Api\Event\RequestWasMatched;
use Matthv\LaravelDingoTransform\Transformations;

class UpdateRequest
{
	/**
	 * @param RequestWasMatched $event
	 */
    public function handle(RequestWasMatched $event) {
        $all = $event->request->all();
		$event->request->query->replace(Transformations::transform($event->request->query()));
        $event->request->replace(Transformations::transform($all));
		$event->request->request->replace(Transformations::transform($all));

    }

}
