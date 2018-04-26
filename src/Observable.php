<?php
namespace FunctionalExample;

class Observable
{
    /** @var Observer[] */
    private $observers = [];

    private $id;

    static private $total = 0;

    public function __construct()
    {
        $this->id = ++self::$total;
    }

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function broadcast()
    {
        foreach ($this->observers as $observer) {
            $observer->notify($this, func_get_args());
        }
    }

    public function __toString()
    {
        return sprintf('Observable #%d', $this->id);
    }
}
