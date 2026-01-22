<?php

Interface Observable {

    public function notifyAll(Submission $newSub) : void;
    public function addMentor(Mentor $newMentor): void;
    public function removeMentor(string $mentorUnsus): void;
}

?>