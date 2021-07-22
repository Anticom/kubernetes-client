<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ReplicationControllerCollection;

class ReplicationControllerRepository extends Repository
{
	protected $uri = 'replicationcontrollers';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new ReplicationControllerCollection($models);
	}
}
