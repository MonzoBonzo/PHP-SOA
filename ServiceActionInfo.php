<?php
/**
 * Created by PhpStorm.
 * User: Monique
 * Date: 29/04/15
 * Time: 13:38
 */

class ServiceActionInfo
{
    public $service = null;
    public $action = null;

    public function __construct()
    {
        if(isset($_REQUEST['service']) && isset($_REQUEST['action']))
        {
            $this->service = (int) $_REQUEST['service'];
            $this->action  = (int) $_REQUEST['action'];
        }
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return ($this->service !== null && $this->action !== null);
    }
}