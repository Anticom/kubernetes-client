<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\HorizontalPodAutoscalerCollection;

class HorizontalPodAutoscalerRepository extends Repository
{
	protected $uri = 'horizontalpodautoscalers';

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new HorizontalPodAutoscalerCollection($models);
	}
}
