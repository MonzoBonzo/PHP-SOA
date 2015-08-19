<?php
/**
 * User: Monique 'Monzo' Benjamin
 * Date: 29/04/15
 */

class ServiceFactory
{
    public static function get($info)
    {
        switch ($info->service)
        {
            case Service::TEST:
                new TestService($info->action);
                break;
            default:
                Http::error(Response::HTTP_404, "Service Not Currently Setup.");
                break;
        }
    }
}