<?php
	class Event {
		public $location,$date,$time,$description;
	}

	$testEvent = new Event();
	$testEvent->location = '<a href="https://docs.google.com/a/g.rit.edu/forms/d/1ac207amRzanhQDW_I7fPPj8PI9RbS5oQIZRoqy71q_I/viewform">Click Here</a>';
	$testEvent->date = 'Sign Up';
	$testEvent->time = 'Now';
	//You can use either single or double quotes in PHP. It can make life easier when you need to use contracted words. =)
	//Just like Perl variables inside single quotes won't be interpreted, while those in double quotes will
	$testEvent->description = "We don't have any events yet, but click above to sign up!";

	/*$testEvent2 = new Event();
	$testEvent2->location = 'Sys Lab';
	$testEvent2->date = 'January 2 1970';
	$testEvent2->time = '6:30 PM';
	$testEvent2->description = 'This event is also just a test';

	$testEvent3 = new Event();
	$testEvent3->location = 'Projects Lab';
	$testEvent3->date = 'January 3 1970';
	$testEvent3->time = '7:30 PM';
	$testEvent3->description = 'This event is a test';

	$testEvent4 = new Event();
	$testEvent4->location = 'Open Lab';
	$testEvent4->date = 'January 4 1970';
	$testEvent4->time = '8:30 PM';
	$testEvent4->description = 'This event is a test like the others';*/

	$events = array($testEvent);


?>
