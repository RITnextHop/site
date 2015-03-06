<?php
	class Event {
		public $title,$location,$date,$time,$description;
	}

	$Mar_12_2015 = new Event();
	$Mar_12_2015->title = 'DHCP/DNS Build-It-Night';
	$Mar_12_2015->location = 'Golisano, 70-2320';
	$Mar_12_2015->date = 'Thursday, March 12, 2015';
	$Mar_12_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Mar_12_2015->description = 'Learn about DHCP or DNS or refresh your knowledge! Please RSVP at <a href=\'https://docs.google.com/forms/d/182wgtyvxIcB2u_atbOBR4Plot-uvNTE40lWGNjH9eBk/viewform?c=0&w=1\'>this link</a>';

	$Feb_26_2015 = new Event();
	$Feb_26_2015->title = 'Tech Talks';
	$Feb_26_2015->location = 'Golisano, 70-1455';
	$Feb_26_2015->date = 'Thursday, February 26, 2015';
	$Feb_26_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Feb_26_2015->description = 'Come learn about cool things like SDN, Ansible, Scapy, and Linux FACLs! Please RSVP at <a href=\'http://goo.gl/forms/BT2s5pkPMa\'>this link</a>';

	$Nov_20_2014 = new Event();
	$Nov_20_2014->title = "Build-It-Night #1";
	$Nov_20_2014->location = 'Golisano, 70-2130 - Projects Lab';
	$Nov_20_2014->date = 'Thursday, November 20, 2014';
	$Nov_20_2014->time = '7:00 P.M. - 9:00 P.M.';
	$Nov_20_2014->description = 'First NextHop Build-It-Night: Multi-Vendor Networking!';


	$Nov_06_2014 = new Event();
	$Nov_06_2014->title = 'First Meeting';
	$Nov_06_2014->location = 'Golisano, 70-2400';
	$Nov_06_2014->date = 'Thursday, November 6, 2014';
	$Nov_06_2014->time = '6:30 P.M. - 7:30 P.M.';
	$Nov_06_2014->description = 'Initial NextHop Meeting!';

	$events = array($Mar_12_2015);
	$pastevents = array($Feb_26_2015,$Nov_20_2014,$Nov_06_2014)

?>
