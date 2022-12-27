<?php

declare(strict_types=1);


class Lesson
{

    /** @var int */
    public int $id;

    /** @var string */
    public string $title;

    /** @var string */
    public string $description;

    /** @var [object Object] */
    public Course $course;

    /** @var int */
    public int $duration;

    /** @var int */
    public int $createdAt;

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
    public function createLesson()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function updateLesson()
    {
        // TODO implement here
    }

}
