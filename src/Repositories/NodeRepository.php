<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\NodeCollection;

class NodeRepository extends Repository
{
	protected $uri = 'nodes';
	protected $namespace = false;

	protected function createCollection($response)
	{
		$models = $this->mapResponseToModels($response);
		return new NodeCollection($models);
	}

	public function proxy($node, $method, $proxy_uri, array $options = [])
	{
		$response = $this->client->sendRequest($method, '/' . $this->uri . '/' . $node->getMetadata('name') . '/proxy/' . $proxy_uri, $options, [], $this->namespace);

		return $response;
	}
}
