<?php

declare(strict_types=1);


class Balance
{

    /** @var int */
    public int $id;

    /** @var [object Object] */
    public User $user;

    /** @var double */
    public double $amount;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @param double $value
     */
    public function changeBalance(double $value)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function createBalance()
    {
        // TODO implement here
    }

}
