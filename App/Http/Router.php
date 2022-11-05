<?php

namespace App\http;

use Closure;

class Router
{

    private  $url = '';

    private  $prefix = '';

    private  $Routes = [];

    private $request = '';

    public function __construct($url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    public function setPrefix()
    {
        $parseUrl = parse_url($this->url);

        $this->prefix = $parseUrl['path'] ?? '';
    }

    public function addRoute($method, $route, $params)
    {

        foreach ($params as $key => $value) {
            if ($value instanceof Closure) {
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }

        #padrão validação URL
        $patternRoute  = '/^' . str_replace('/', '\/', $route) . '$/';

        $this->routes[$patternRoute][$method] = $params;
    }


    public function get($route, $params = [])
    {
        return $this->addRoute('GET', $route, $params);
    }
}
