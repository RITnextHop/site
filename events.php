<?php
	class Event {
		public $location,$date,$time,$description;
	}

	$MemberPush = new Event();
	$MemberPush->location = '<a href="https://docs.google.com/a/g.rit.edu/forms/d/1ac207amRzanhQDW_I7fPPj8PI9RbS5oQIZRoqy71q_I/viewform">Click Here</a>';
	$MemberPush->date = 'Sign Up';
	$MemberPush->time = 'Now';
	$MemberPush->description = "Sign up to be a charter member of Next Hop!";

	$Nov13 = new Event();
	$Nov13->location = "Networking Lab, 70-2160";
	$Nov13->date = 'Thursday, November 13 2014';
	$Nov13->time = '7:00 P.M. - 9:00 P.M.';
	$Nov13-->description = "The first ever, Built It Night&8482;! Please RSVP at <a href='http://goo.gl/forms/ftpcFlvXhT'>this link</a>";

	$events = array($Nov13,$MemberPush);


?>
