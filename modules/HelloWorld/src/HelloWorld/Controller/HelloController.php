<?php
namespace HelloWorld\Controller;
use Zf2Mvc\Controller\ActionController;
class HelloController extends ActionController
{
    public function indexAction()
    {
        $this->response->setContent('Hello Controller, Index Action');
    }
}