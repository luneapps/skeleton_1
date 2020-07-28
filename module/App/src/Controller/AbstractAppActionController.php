<?php

namespace App\Controller;

use Fw\Lib\FwIR;
use Fw\ViewHelper\FwLayout;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Stdlib\RequestInterface as Request;
use Laminas\Stdlib\ResponseInterface as Response;

abstract class AbstractAppActionController extends AbstractActionController
{

    public function dispatch(Request $request, Response $response = null)
    {

        $_ENV['APP_WITH_AUTH'] = false;

        return parent::dispatch($request, $response);

    }

    /**
     * @return FwIR
     */
    protected function getIR(): FwIR
    {
        return FwIR::getInstance();
    }

    /**
     * @return \Fw\ViewHelper\FwLayout
     */
    protected function getLayout(): FwLayout
    {
        return FwLayout::getInstance();
    }

}