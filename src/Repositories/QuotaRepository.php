<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\QuotaCollection;

class QuotaRepository extends Repository
{
	protected $uri = 'resourcequotas';
	protected $namespace = false;

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new QuotaCollection($models);
	}
}
