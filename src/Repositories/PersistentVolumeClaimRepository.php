<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\PersistentVolumeClaimCollection;

class PersistentVolumeClaimRepository extends Repository
{
	protected $uri = 'persistentvolumeclaims';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new PersistentVolumeClaimCollection($models);
	}
}
