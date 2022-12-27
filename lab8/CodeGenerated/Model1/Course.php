<?php

declare(strict_types=1);


class Course
{

    /** @var int */
    public int $id;

    /** @var [object Object] */
    public Teacher $teacher;

    /** @var [object Object] */
    public Subscription $subscription;

    /** @var bool */
    public bool $isPublished;

    /** @var string */
    public string $note;

    /** @var string */
    public string $description;

    /** @var string */
    public string $name;

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
    public function createCourse()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function startCourse()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function publishCourse()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function declineCourse()
    {
        // TODO implement here
    }

}
