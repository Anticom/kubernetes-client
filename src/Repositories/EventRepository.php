<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\EventCollection;

class EventRepository extends Repository
{
	protected $uri = 'events';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new EventCollection($models);
	}
}
