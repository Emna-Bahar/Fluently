<?php

namespace App\Message;

class GenererCoursMessage
{
    private GenererCoursData $data;
    private int $coursId;
    private int $userId;

    public function __construct(GenererCoursData $data, int $coursId, int $userId)
    {
        $this->data = $data;
        $this->coursId = $coursId;
        $this->userId = $userId;
    }

    public function getData(): GenererCoursData
    {
        return $this->data;
    }

    public function getCoursId(): int
    {
        return $this->coursId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}