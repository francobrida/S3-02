<?php

class Mentor implements Observer {

    public function __construct(protected string $name){}

    public function getName(): string {
        return $this->name;
    }

    public function notifySubmission(Submission $newSub) : string
    {
        return 'Hello ' . $this->name . '! New Submission posted: '. $newSub->getTaskId() . ". By: " . $newSub->getStudentName();
    }

}

?>