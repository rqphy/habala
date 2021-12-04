<?php

namespace App\Controller;

abstract class BaseController
{
	protected $params;
	protected $template = __DIR__ . './../view/template.php';
	protected $viewsDir = __DIR__ . './../view/';

	public function __construct(string $action, array $params = [])
	{
		$this->params = $params;

		$method = 'execute' . ucfirst($action);
		if (!is_callable([$this, $method]))
		{
			throw new \RuntimeException('L\'action "' . $method . ': n\'est pas definie sur ce module');
		}
		$this->$method();
	}
}