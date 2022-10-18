<?php

namespace App\Http;

class Response

{
    private $httpCode = 200;

    private $headers = [];

    private $contentType = 'text-html';

    private $content;

    public function __construct($httpCode, $content, $contentType = 'text-html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addheader('Content-Type',  $contentType);
    }

    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    #responsavél por enviar os header ao navegador
    public function sendHeaders(){
         http_response_code($this->httpCode);
         
         foreach($this->headers  as $key=>$value){
             header($key.':'.$value);
         }
    }
    
    #imprime o conteúdo
    public function sendResponse()
    {
        $this->sendHeaders();

        switch ($this->contentType) {
            case 'text-html':
                echo $this->content;
                exit;
        }
    }


}
