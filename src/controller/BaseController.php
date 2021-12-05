<?php

namespace App\controller;

abstract class BaseController
{
	protected $params;
	protected $template = __DIR__ . './../view/template.php';
	protected $viewsDir = __DIR__ . './../view/';

	public function __construct(string $action, array $params = [])
	{
		$this->params = $params;

		$method = $action;
		if (!is_callable([$this, $method]))
		{
			throw new \RuntimeException('L\'action "' . $method . ': n\'est pas definie sur ce module');
		}
		$this->$method();
	}

	public function render(string $title, string $view, array $data)
	{
		$view = $this->viewsDir . $view . '/index.php';

		ob_start();
		require $view;
		$content = ob_get_clean();
		return require $this->template;
	}
}