<?php
require_once 'Submission.php';
require_once 'Observer.php';
require_once 'Observable.php';
require_once 'Moodle.php';
require_once 'Mentor.php';

$moodle = new Moodle();

$moodle->addMentor(new Mentor("Rafa Arcaute"));
$moodle->addMentor(new Mentor("Sara Laundry"));
$moodle->addMentor(new Mentor("Dani Devito"));

$entrega1 = new Submission("SPRINT1-04", "Luke Vader", new DateTime(),"Correcciones: Lalala Codigo php");
$moodle->notifyAll($entrega1);

?>