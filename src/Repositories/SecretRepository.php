<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\SecretCollection;

class SecretRepository extends Repository
{
	protected $uri = 'secrets';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new SecretCollection($models);
	}
}
