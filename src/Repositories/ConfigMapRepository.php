<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ConfigMapCollection;

class ConfigMapRepository extends Repository
{
	protected $uri = 'configmaps';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new ConfigMapCollection($models);
	}
}
