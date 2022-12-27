<?php

declare(strict_types=1);


class Transaction
{

    /** @var int */
    public int $id;

    /** @var string */
    public string $status;

    /** @var [object Object] */
    public Balance $balance;

    /** @var [object Object] */
    public PaymentMethod $paymentMethod;

    /** @var double */
    public double $amount;

    /** @var double */
    public double $processedAmount;

    /** @var string */
    public string $referenceId;

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
    public function createTransaction()
    {
        // TODO implement here
    }

}
