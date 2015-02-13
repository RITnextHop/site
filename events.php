<?php
	class Event {
		public $location,$date,$time,$description;
	}

	$MemberPush = new Event();
	$MemberPush->location = '<a href="http://brucedewald.us9.list-manage.com/track/click?u=664305636969dd43eedd99cf7&id=2c65445391&e=0474acbfe8">Click Here</a>';
	$MemberPush->date = 'Join our mailing list!';
	$MemberPush->time = 'Now';
	$MemberPush->description = "Sign up to be a charter member of NextHop!";

	$Feb26 = new Event();
	$Feb26->location = 'Golisano, 70-2400';
	$Feb26->date = 'Thursday, February 26 2015';
	$Feb26->time = '7:00 P.M. - 9:00 P.M.';
	$Feb26->description = "Come learn about cool things like SDN, Ansible, and Scapy! Please RSVP at <a href='http://goo.gl/forms/BT2s5pkPMa'>this link</a>";

	$events = array($Feb26,$MemberPush);


?>
