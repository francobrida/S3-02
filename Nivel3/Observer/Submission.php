<?php

class Submission {

    public function __construct(
        private string $taskId,
        private string $studentName,
        private DateTime $dateTime,
        private string $content) 
    {}

    public function getTaskId(): string {
        return $this->taskId;
    }
    public function getStudentName(): string {
        return $this->studentName;
    }
}

?>