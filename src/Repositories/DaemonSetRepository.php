<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\DaemonSetCollection;

class DaemonSetRepository extends Repository
{
	protected $uri = 'daemonsets';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new DaemonSetCollection($models);
	}
}
