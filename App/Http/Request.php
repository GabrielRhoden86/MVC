<?php

namespace App\http;

class Request
{

    private $httpMethod;

    private $uri;

    private $queryParams = [];

    private $postVars;

    private $headers = [];

    public function __construct()
    {

        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders() ?? '';
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    public function getHttpMethod(){
        return $this->httpMethod;
    }

    public function getUri(){
        return $this->httpMethod;
    }
    
    public function getHeaders(){
        return $this->httpMethod;
    }
    
    
}
