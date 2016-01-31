<?php
	class Event {
		public $title,$location,$date,$time,$description;
	}
	$No_Events = new Event();
	$No_Events->title = 'There are currently no scheduled events';
	$No_Events->location = '';
	$No_Events->date = '';
	$No_Events->time = '';
	$No_Events->description = 'Check back soon for our next event!';

	$Feb_3_2016 = new Event();
	$Feb_3_2016->title = 'Securing Your Network';
	$Feb_3_2016->location = 'Golisano, 70-2160';
	$Feb_3_2016->date = 'Wednesday, February 3, 2016';
	$Feb_3_2016->time = '7:00 P.M. - 9:00 P.M.';
	$Feb_3_2016->description = 'Want to know some simple steps to secure your network? We will be covering a range of topics including port security, DHCP snooping, dynamic ARP inspection, and IP source guard.';


	$Nov_12_2015 = new Event();
	$Nov_12_2015->title = 'Tech Talk: Wireshark';
	$Nov_12_2015->location = 'Golisano, 70-1435';
	$Nov_12_2015->date = 'Thursday, November 12, 2015';
	$Nov_12_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Nov_12_2015->description = 'Learn about Wireshark\'s features and how to use it.';
	
	$Oct_15_2015 = new Event();
	$Oct_15_2015->title = 'Build-It-Night: ACLs and NAT';
	$Oct_15_2015->location = 'Golisano, 70-2160 (Netlab)';
	$Oct_15_2015->date = 'Thursday, October 15, 2015';
	$Oct_15_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Oct_15_2015->description = 'Learn about and configure access control lists and how to implement NAT.';

	$Oct_08_2015 = new Event();
	$Oct_08_2015->title = 'Build-It-Night: BGP';
	$Oct_08_2015->location = 'Golisano, 70-2160 (Netlab)';
	$Oct_08_2015->date = 'Thursday, October 8, 2015';
	$Oct_08_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Oct_08_2015->description = 'Learn about and configure BGP, the routing protocol of the internet. View the document <a href="http://nexthop.network/docs/bgp.pdf" target="_blank">here</a>';

	$Sep_03_2015 = new Event();
	$Sep_03_2015->title = 'General Meeting/Info Session';
	$Sep_03_2015->location = 'Golisano, 70-1435';
	$Sep_03_2015->date = 'Thursday, September 3, 2015';
	$Sep_03_2015->time = '7:00 P.M. - 8:00 P.M.';
	$Sep_03_2015->description = 'Info session and idea collaboration with an awesome demo! View the slides <a href="https://docs.google.com/presentation/d/19z-Qy__WXwp6VgkyMrIj_o8_HM7pBe6JagzLvCKKab8/edit?usp=sharing" target="_blank">here</a> and the live stream <a href="live.php">here</a>.';

	$May_14_2015 = new Event();
	$May_14_2015->title = 'Yahoo! Data Center Road Trip';
	$May_14_2015->location = 'Meetup TBA';
	$May_14_2015->date = 'Thursday, May 14, 2015 (Reading Day)';
	$May_14_2015->time = 'TBA';
	$May_14_2015->description = 'Hit the road with NextHop as we head out and tour the Yahoo! Data Center. More information to come!';

	$Apr_30_2015 = new Event();
	$Apr_30_2015->title = 'Build-It-Night: PXE';
	$Apr_30_2015->location = 'Golisano, 70-2320';
	$Apr_30_2015->date = 'Thursday, April 30, 2015';
	$Apr_30_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Apr_30_2015->description = 'Learn about PXE (Pre-Execution Environment) which involves booting an operating system on a computer over the network. You\'ll get to learn about it and build your own PXE server! This is a critical piece of technology used in many infrastructures to image machines and is not taught in any classes. View the document <a href="http://nexthop.network/docs/bin4.pdf" target="_blank">here</a>.';

	$Apr_16_2015 = new Event();
	$Apr_16_2015->title = 'Tech Talks';
	$Apr_16_2015->location = 'Golisano, 70-1455';
	$Apr_16_2015->date = 'Thursday, April 16, 2015';
	$Apr_16_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Apr_16_2015->description = 'Come learn about cool things like SLAAC and Google Authenticator! View the live stream <a href="https://www.youtube.com/watch?v=fkJI55jmMcg" target="_blank">here</a>.';

	$Apr_2_2015 = new Event();
	$Apr_2_2015->title = 'Build-It-Night: The Lamp Stack';
	$Apr_2_2015->location = 'Golisano, 70-2320';
	$Apr_2_2015->date = 'Thursday, April 2, 2015';
	$Apr_2_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Apr_2_2015->description = 'Join us to get down and dirty with the LAMP (Linux, Apache, MySQL, PHP) stack. Learn how to setup the infrastructure needed to support a dynamic website or web application. Learners of all skill levels are welcome. View the document <a href="http://nexthop.network/docs/bin3.pdf" target="_blank">here</a>.';

	$Mar_12_2015 = new Event();
	$Mar_12_2015->title = 'DHCP/DNS Build-It-Night';
	$Mar_12_2015->location = 'Golisano, 70-2320';
	$Mar_12_2015->date = 'Thursday, March 12, 2015';
	$Mar_12_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Mar_12_2015->description = 'Learn about DHCP or DNS or refresh your knowledge! View the document <a href="http://nexthop.network/docs/bin2.pdf" target="_blank">here</a>.';

	$Feb_26_2015 = new Event();
	$Feb_26_2015->title = 'Tech Talks';
	$Feb_26_2015->location = 'Golisano, 70-1455';
	$Feb_26_2015->date = 'Thursday, February 26, 2015';
	$Feb_26_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Feb_26_2015->description = 'Come learn about cool things like SDN, Ansible, Scapy, and Linux FACLs! View the live stream <a href="https://www.youtube.com/watch?v=nz7dZxDHuUk" target="_blank">here</a>.';

	$Nov_20_2014 = new Event();
	$Nov_20_2014->title = "Build-It-Night #1";
	$Nov_20_2014->location = 'Golisano, 70-2130 - Projects Lab';
	$Nov_20_2014->date = 'Thursday, November 20, 2014';
	$Nov_20_2014->time = '7:00 P.M. - 9:00 P.M.';
	$Nov_20_2014->description = 'First NextHop Build-It-Night: Multi-Vendor Networking! View the document <a href="http://nexthop.network/docs/bin1.pdf" target="_blank">here</a>.';


	$Nov_06_2014 = new Event();
	$Nov_06_2014->title = 'First Meeting';
	$Nov_06_2014->location = 'Golisano, 70-2400';
	$Nov_06_2014->date = 'Thursday, November 6, 2014';
	$Nov_06_2014->time = '6:30 P.M. - 7:30 P.M.';
	$Nov_06_2014->description = 'Initial NextHop Meeting!';

	$events = array($Feb_3_2016);
	$pastevents = array($Nov_12_2015, $Oct_08_2015, $Sep_03_2015, $Apr_30_2015, $Apr_16_2015, $Apr_2_2015,$Mar_12_2015,$Feb_26_2015,$Nov_20_2014,$Nov_06_2014)

?>
