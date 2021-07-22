<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\IngressCollection;

class IngressRepository extends Repository
{
	protected $uri = 'ingresses';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new IngressCollection($models);
	}
}
