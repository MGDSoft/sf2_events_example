<?php

namespace MGD\EventsBundle\Tests\Controller;

use MGD\EventsBundle\Event\EasyObject;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    protected static $class;

    public function testIndex()
    {
        $kernel = self::createKernel();
        $kernel->boot();

        $easy = new EasyObject();

        $event = $kernel->getContainer()->get('event_dispatcher');
        $event->dispatch('mgd.register_event_id',$easy);
        $event->dispatch('subscriber_test');
    }
}
