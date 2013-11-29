<?php
/**
 * Created by events.
 * User: PC
 * Date: 28/11/13
 * Time: 3:23
 */

namespace MGD\EventsBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/*
 * You can create listeners without configurations the method getSubscribedEvents
 * listen events kernel.response and suscriber_test and its asociated to callable methods
 */

class SubscriberFromEasyObject implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'kernel.request'  => array('onKernelRequest', 0),
            'kernel.response' => array(
                array('onKernelResponsePre', 10),
                array('onKernelResponseMid', 5),
                array('onKernelResponsePost', 0),
            ),
            'subscriber_test' => array('onSubscriberTest', 0),
        );
    }

    public function onKernelResponsePre(FilterResponseEvent $event)
    {
        echo "I am in SubscriberFromEasyObject method onKernelResponsePre, from event id <b>".$event->getName()."</b>\n<br>";
    }

    public function onKernelResponseMid(FilterResponseEvent $event)
    {
        echo "I am in SubscriberFromEasyObject method onKernelResponseMid, from event id <b>".$event->getName()."</b>\n<br>";
    }

    public function onKernelResponsePost(FilterResponseEvent $event)
    {
        echo "I am in SubscriberFromEasyObject method onKernelResponsePost, from event id <b>".$event->getName()."</b>\n<br>";
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        echo "I am in SubscriberFromEasyObject method onKernelRequest, from event id <b>".$event->getName()."</b>\n<br>";
    }

    public function onSubscriberTest()
    {
        echo "I am in SubscriberFromEasyObject method onSubscriberTest, from event id <b>subscriber_test</b>\n<br>";
    }

}