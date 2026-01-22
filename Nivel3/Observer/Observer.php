<?php

Interface Observer {

    public function notifySubmission(Submission $newSub) : string;
    
}

?>