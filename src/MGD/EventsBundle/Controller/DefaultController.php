<?php

namespace MGD\EventsBundle\Controller;

use MGD\EventsBundle\Event\EasyObject;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\EventDispatcher\EventDispatcher;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        echo "<br><b>Starting index Action</b> <br>";
        $easyObject = new EasyObject();

        /*  get Event Dispatcher */
        $eventDispatcher = $this->get('event_dispatcher');

        /*
         *  Launch event mgd.register_event_id and all listeners that
         *  are listening mgd.register_event_id was lunched
         */
        echo "<br><b>Calling Event mgd.register_event_id</b> <br><br>";
        $event = $eventDispatcher->dispatch('mgd.register_event_id',$easyObject);

        if ($event->isPropagationStopped())
        {
            echo "Stopped propagation \n<br>";
        }

        /*
         *  Calling to subscriber
         */
        echo "<br><b>Calling Event subscriber_test</b> <br><br>";
        $eventDispatcher->dispatch('subscriber_test');

        echo "<br><b>End index Action</b> <br><br>";


        return array();
    }
}
