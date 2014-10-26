<?php
	class Event {
		public $location,$date,$time,$description;
	}
	
	$testEvent = new Event();
	$testEvent->location = 'Net Lab';
	$testEvent->date = 'January 1 1970';
	$testEvent->time = '5:30 PM';
	$testEvent->description = 'This event is just a test';
	
	$testEvent2 = new Event();
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
	$testEvent4->description = 'This event is a test like the others';
	
	$events = array($testEvent,$testEvent2,$testEvent3,$testEvent4);
	
	
?>