<?php
	class Event {
		public $location,$date,$time,$description;
	}

	$Feb26 = new Event();
	$Feb26->location = 'Golisano, 70-1455';
	$Feb26->date = 'Thursday, February 26 2015';
	$Feb26->time = '7:00 P.M. - 9:00 P.M.';
	$Feb26->description = "Come learn about cool things like SDN, Ansible, Scapy, and Linux FACLs! Please RSVP at <a href='http://goo.gl/forms/BT2s5pkPMa'>this link</a>";

	$events = array($Feb26);


?>
