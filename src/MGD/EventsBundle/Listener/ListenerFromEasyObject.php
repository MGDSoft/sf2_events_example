<?php
/**
 * Created by events.
 * User: PC
 * Date: 28/11/13
 * Time: 3:23
 */

namespace MGD\EventsBundle\Listener;

use MGD\EventsBundle\Event\EasyObject;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ListenerFromEasyObject
{
    public function onRegisterEventId(EasyObject $event)
    {
        echo "I am in ListenerFromEasyObject method onRegisterEventId, from event id <b>".$event->getName()."</b>\n<br>";
        // do something to or with the order
    }

    public function onRegisterEventIdSecond()
    {
        echo "I am in ListenerFromEasyObject method onRegisterEventIdSecond, from event id <b>mgd.register_event_id </b>\n<br>";
        // do something to or with the order
    }

    public function onRegisterEventIdThird(EasyObject $event)
    {
        echo "I am in ListenerFromEasyObject method onRegisterEventIdThird, from event id <b>mgd.register_event_id </b>\n<br>";
        $event->stopPropagation();

        // do something to or with the order
    }

    public function onRegisterEventIdFourth()
    {
        echo "I am in ListenerFromEasyObject method onRegisterEventIdFourth, from event id <b>mgd.register_event_id </b>\n<br>";
        // do something to or with the order
    }

    public function onRequest()
    {
        echo "I am in ListenerFromEasyObject method onRequest, from  event <b>onRequest</b>\n<br>";
        // do something to or with the order
    }

} 