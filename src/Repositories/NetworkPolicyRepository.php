<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\NetworkPolicyCollection;

class NetworkPolicyRepository extends Repository
{
	protected $uri = 'networkpolicies';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new NetworkPolicyCollection($models);
	}
}
