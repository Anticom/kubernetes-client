<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\EndpointCollection;

class EndpointRepository extends Repository
{
	protected $uri = 'endpoints';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new EndpointCollection($models);
	}
}
