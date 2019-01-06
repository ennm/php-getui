<?php
namespace GeTui;

/**
 * Class SimpleAlertMsg
 * @package GeTui
 */
class SimpleAlertMsg implements ApnMsg
{
    /**
     * @var string
     */
    public $alertMsg;

    /**
     * @return string
     */
    public function getAlertMsg()
    {
        return $this->alertMsg;
    }
}
