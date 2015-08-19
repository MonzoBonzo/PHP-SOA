<?php

class Service implements ServiceInterface
{
    const TEST = 0;

    protected $action = null;
    protected $info = null;

    public function __construct($action)
    {
        $this->action = $action;
        $this->_validate();
    }

    function _validate() {}

    function _invoke() {}
}