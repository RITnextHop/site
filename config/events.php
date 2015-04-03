<?php
	class Event {
		public $title,$location,$date,$time,$description;
	}
	$No_Events = new Event();
	$No_Events->title = 'There are currently no scheduled events';
	$No_Events->location = '';
	$No_Events->date = '';
	$No_Events->time = '';
	$No_Events->description = 'Please check back soon.';

	$Apr_30_2015 = new Event();
	$Apr_30_2015->title = 'Build-It-Night: PXE';
	$Apr_30_2015->location = 'Golisano, 70-2320';
	$Apr_30_2015->date = 'Thursday, April 30, 2015';
	$Apr_30_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Apr_30_2015->description = 'Learn about PXE (Pre-Execution Environment) which involves booting an operating system on a computer over the network. You\'ll get to learn about it and build your own PXE server! This is a critical piece of technology used in many infrastructures to image machines and is not taught in any classes.';

	$Apr_16_2015 = new Event();
	$Apr_16_2015->title = 'Tech Talks';
	$Apr_16_2015->location = 'TBD';
	$Apr_16_2015->date = 'Thursday, April 16, 2015';
	$Apr_16_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Apr_16_2015->description = 'Come learn about cool things! SysAdmins from Wegmans are coming!';

	$Apr_2_2015 = new Event();
	$Apr_2_2015->title = 'Build-It-Night: The Lamp Stack';
	$Apr_2_2015->location = 'Golisano, 70-2320';
	$Apr_2_2015->date = 'Thursday, April 2, 2015';
	$Apr_2_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Apr_2_2015->description = 'Join us to get down and dirty with the LAMP (Linux, Apache, MySQL, PHP) stack. Learn how to setup the infrastructure needed to support a dynamic website or web application. Learners of all skill levels are welcome.';

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

	$events = array($Apr_16_2015, $Apr_30_2015);
	$pastevents = array($Apr_2_2015,$Mar_12_2015,$Feb_26_2015,$Nov_20_2014,$Nov_06_2014)

?>
