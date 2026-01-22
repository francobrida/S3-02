<?php

    class Moodle implements Observable{

        public function __construct(private array $mentorsList = [], private array $submissions = []) {}

        public function notifyAll(Submission $newSub) : void {
            $this->submissions[] = $newSub;
            foreach ($this->mentorsList as $mentor) {
                echo $mentor->notifySubmission($newSub) . PHP_EOL;
            }
        }

        public function addMentor(Mentor $newMentor): void{
            $this->mentorsList[] = $newMentor;
        }
        
        public function removeMentor(string $mentorUnsus): void{
            foreach ($this->mentorsList as $i => $mentor ){
                if ($mentor->getName() === $mentorUnsus){
                    unset($this->mentorsList[$i]);
                    $this->mentorsList = array_values($this->mentorsList);
                    break;
                };
            }
        }
    }
?>
