<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ServiceCollection;

class ServiceRepository extends Repository
{
	protected $uri = 'services';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new ServiceCollection($models);
	}
}
