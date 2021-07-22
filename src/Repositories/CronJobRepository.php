<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\CronJobCollection;

class CronJobRepository extends Repository
{
	protected $uri = 'cronjobs';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new CronJobCollection($models);
	}
}
