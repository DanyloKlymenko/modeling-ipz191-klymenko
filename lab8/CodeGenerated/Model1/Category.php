<?php

declare(strict_types=1);


class Category
{

    /** @var int */
    public int $id;

    /** @var string */
    public string $name;

    /** @var string */
    public string $description;

    /** @var [object Object] */
    public Topic $topic;

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
    public function createCategory()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getCategory()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getCourses()
    {
        // TODO implement here
    }

}
