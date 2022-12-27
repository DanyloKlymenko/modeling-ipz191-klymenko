<?php

declare(strict_types=1);


class Subscription
{

    /** @var int */
    public int $id;

    /** @var string */
    public string $name;

    /** @var string */
    public string $period;

    /** @var string */
    public string $type;

    /** @var string */
    public string $description;

    /** @var double */
    public double $price;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * 
     */
    public function createSubscription()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function updateSuvscription()
    {
        // TODO implement here
    }

}
