<?php

declare(strict_types=1);


class Paragraph
{

    public  $id;

    /** @var [object Object] */
    public Lesson $lesson;

    /** @var string */
    public string $title;

    /** @var string */
    public string $description;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @return [object Object]
     */
    public function createMediaObject(): [object Object]
    {
        // TODO implement here
        return null;
    }

    /**
     * 
     */
    public function createParagraph()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getMediaObjects()
    {
        // TODO implement here
    }

}
