<?php

declare(strict_types=1);


class PaymentMethod
{

    /** @var string */
    public string $id;

    /** @var [object Object] */
    public Currency $currency;

    /** @var [object Object] */
    public PaymentSystem $paymentSystem;

    /** @var string */
    public string $fee;

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
    public function getCurrency()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getPaymentSystem()
    {
        // TODO implement here
    }

}
