<?php

namespace App\Config;

class App
{
    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $this->prepareUrl();
        if (file_exists($this->controller . '.php')) {
            $this->controller = new $this->controller;
            pr($this->controller);
            if (method_exists($this->controller, $this->action)) {
                call_user_func_array([$this->controller, $this->action], $this->params);
            }
        }
    }

    public function prepareUrl()
    {
        $request = trim($_SERVER['REQUEST_URI'], '/');

        if (!empty($request)) {
            $url = explode('/', $request);

            $this->controller = isset($url[0]) ? CONTROLLER . $url[0] . 'Controller' : 'HomeController';
            $this->action = isset($url[1]) ? $url[1] : 'index';

            unset($url[0], $url[1]);
            $this->params = (!isset($url)) ? array_values($url) : [];

        }
    }
}