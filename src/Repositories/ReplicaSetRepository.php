<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ReplicaSetCollection;

class ReplicaSetRepository extends Repository
{
	protected $uri = 'replicasets';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new ReplicaSetCollection($models);
	}
}
