<?php
/**
 * User: Monique 'Monzo' Benjamin
 * Date: 29/04/15
 */

class AppController extends CController
{
    public function actionIndex()
    {
        $this->_process(new ServiceActionInfo());
    }

    private function _process($info)
    {
        if ($info->isValid())
            ServiceFactory::get($info);
        else
            Http::error(Response::HTTP_403, "Invalid Service Parameters");
    }
}