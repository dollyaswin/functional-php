<?php
namespace FunctionalExample;

class Observer
{
    static private $total = 0;

    private $id;

    public function __construct(Observable $observable)
    {
        $this->id = ++self::$total;
        $observable->addObserver($this);
    }

    public function notify(Observable $observable, $args)
    {
        printf("Observer #%d got \"%s\" from %s" . PHP_EOL, $this->id, implode(', ', $args), $observable);
    }
}
