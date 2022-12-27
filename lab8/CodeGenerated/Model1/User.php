<?php

declare(strict_types=1);


class User
{

    /** @var int */
    public int $id;

    /** @var string */
    public string $firstname;

    /** @var string */
    public string $lastname;

    /** @var string */
    public string $email;

    /** @var string */
    private string $password;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @param [object Object] $user
     */
    public function createUser([object Object] $user)
    {
        // TODO implement here
    }

    /**
     * @param string $email 
     * @param string $password
     */
    public function login(string $email, string $password)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function logout()
    {
        // TODO implement here
    }

    /**
     * @param [object Object] $data
     */
    public function updateUser([object Object] $data)
    {
        // TODO implement here
    }

}
