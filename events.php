<?php
	class Event {
		public $location,$date,$time,$description;
	}

	$MemberPush = new Event();
	$MemberPush->location = '<a href="https://docs.google.com/a/g.rit.edu/forms/d/1ac207amRzanhQDW_I7fPPj8PI9RbS5oQIZRoqy71q_I/viewform">Click Here</a>';
	$MemberPush->date = 'Sign Up';
	$MemberPush->time = 'Now';
	$MemberPush->description = "Sign up to be a charter member of Next Hop!";

	$Nov6 = new Event();
	$Nov6->location = "70-2400";
	$Nov6->date = 'Thursday, November 6 2014';
	$Nov6->time = '6:30 p.m.';
	$Nov6->description = "Next Hop's first ever event! Please RSVP at <a href='http://goo.gl/forms/KRd4Ekq93r'>this link</a>";

	$events = array($Nov6,$MemberPush);


?>
