<?php

namespace Bundle\960gsBundle\Listener;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;

class StylesheetInjector
{

  protected $dispatcher = null;

  public function __construct(EventDispatcher $dispatcher)
  {
    $dispatcher->connect('core.view', array($this, 'inject'));
  }

  public function inject(Event $event)
  {
    // Add the view to the layout or something?
  }

}