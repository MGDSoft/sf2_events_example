<?php
/**
 * Created by events.
 * User: PC
 * Date: 28/11/13
 * Time: 3:23
 */

namespace MGD\EventsBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class EasyObject extends Event
{
    public function getHello()
    {
        $msg="Hello! in EasyObject";

        return $msg;
    }
} 