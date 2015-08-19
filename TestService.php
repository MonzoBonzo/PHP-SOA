<?php
/**
 * User: Monique 'Monzo' Benjamin
 * Date: 29/04/15
 */

class TestService extends Service
{
    const CALLBACK = 0;

    function _validate()
    {
        $this->info = new TestInfo();

        if($this->info->isValid())
            $this->_invoke();
        else
           Http::error(Response::HTTP_403, "Invalid Parameters For This Service");
    }

    function _invoke()
    {
        switch ($this->action)
        {
            case self::CALLBACK:
                $this->_callback();
                break;
            default:
                Http::error(Response::HTTP_501, "Action Not Implemented Yet");
                break;
        }
    }

    private function _callback()
    {

    }
}