<?php
require_once('/inc/subject.class.php');
require_once('/inc/observer.class.php');

$subject = new Subject(); // Create a Subject

// Let's try to change state. It should not output anything as it doesn't have any observers registered
$subject->notify('This shall not be read!');

// Let's create an Observer, register it and send another notification
$observer = new Observer(); // Create an Observer
$subject->attach($observer); // Register Observer to the Subject
$subject->notify(true); // Send notification to the Observer

echo $observer->state;

echo "Master";