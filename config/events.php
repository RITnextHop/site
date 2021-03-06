<?php
	class Event {
		public $title,$location,$date,$time,$description;
	}
	$No_Events = new Event();
	$No_Events->title = 'There are currently no scheduled events.';
	$No_Events->location = '';
	$No_Events->date = '';
	$No_Events->time = '';
	$No_Events->description = 'We thank everyone for an awesome semester! Look for updates from the 2016-2017 executive board in the fall!';
	
	$May_12_2016 = new Event();
	$May_12_2016->title = 'Tech Talk: DNSSec, TSIG, NAC, and Linux Hooks for Packets';
	$May_12_2016->location = 'Golisano, 70-2590';
	$May_12_2016->date = 'Thursday, May 12, 2016';
	$May_12_2016->time = '7:00 P.M. - 9:00 P.M.';
	$May_12_2016->description = 'Enjoy presentations by Professor Jonathan Weissman on DNSSec and TSIG, Anthony Critelli on Network Access Controls, and Brandt Woolf on Linux and its hooks for packets. View the live stream <a href="http://nexthop.network/live">here</a>.';
	
	$Apr_27_2016 = new Event();
	$Apr_27_2016->title = 'Build-It-Night: Tunneling';
	$Apr_27_2016->location = 'Golisano, 70-2160 (Netlab)';
	$Apr_27_2016->date = 'Wednesday, April 27, 2016';
	$Apr_27_2016->time = '7:00 P.M. - 9:00 P.M.';
	$Apr_27_2016->description = 'Come learn about 6 to 4 tunnels and layer 2 tunneling. View the document <a href="http://nexthop.network/docs/tunneling.pdf" target="_blank">here</a>.';
	
	$Apr_16_2016 = new Event();
	$Apr_16_2016->title = 'NSIC: Networking and Systems Infrastructure Competition';
	$Apr_16_2016->location = 'Student Innovation Hall';
	$Apr_16_2016->date = 'Saturday, April 16, 2016 - Sunday, April 17, 2016';
	$Apr_16_2016->time = '8:45 AM - 7 PM (Sat), 9 AM - 3:30 PM (Sun)';
	$Apr_16_2016->description = 'Our first Networking and Systems Infrastructure build competition. More information is available <a href="http://nsic.nexthop.network" target="_blank">here</a>.';

	$Mar_16_2016 = new Event();
	$Mar_16_2016->title = 'Tech Talk: Docker and IST Labs Infrastructure';
	$Mar_16_2016->location = 'Golisano, 70-1435';
	$Mar_16_2016->date = 'Wednesday, March 16, 2016';
	$Mar_16_2016->time = '7:00 P.M. - 9:00 P.M.';
	$Mar_16_2016->description = 'Come learn about Docker and the IST Labs infrastructure! View the document on Docker & CoreOS<a href="docs/docker.pdf" target="_blank"> here</a> and the IST Labs Infrastructure document<a href="docs/istlabs.pdf" target="_blank"> here</a>.';

	$Mar_2_2016 = new Event();
	$Mar_2_2016->title = 'Build-It-Night: VoIP';
	$Mar_2_2016->location = 'Golisano, 70-2130 (Projects Lab)';
	$Mar_2_2016->date = 'Wednesday, March 2, 2016';
	$Mar_2_2016->time = '7:00 P.M. - 9:00 P.M.';
	$Mar_2_2016->description = 'Voice over IP is the modern phone technology that many companies have already switched to or are currently switching to. We will go over some basics of VoIP and how they differ from traditional phone systems. After that, you\'ll get to set up your own mini VoIP system and make some calls!';

	$Feb_17_2016 = new Event();
	$Feb_17_2016->title = 'Build-It-Night: VPNs';
	$Feb_17_2016->location = 'Golisano, 70-2160 (Netlab)';
	$Feb_17_2016->date = 'Wednesday, February 17, 2016';
	$Feb_17_2016->time = '7:00 P.M. - 9:00 P.M.';
	$Feb_17_2016->description = 'We will be discussing how VPNs work and why they\'re used. Then you\'ll get the chance to make your own VPN using a Cisco ASA! View the document <a href="http://nexthop.network/docs/vpn.pdf" target="_blank">here</a>.';

	$Feb_3_2016 = new Event();
	$Feb_3_2016->title = 'Build-It-Night: Securing Your Network';
	$Feb_3_2016->location = 'Golisano, 70-2160 (Netlab)';
	$Feb_3_2016->date = 'Wednesday, February 3, 2016';
	$Feb_3_2016->time = '7:00 P.M. - 9:00 P.M.';
	$Feb_3_2016->description = 'Want to know some simple steps to secure your network? We will be covering a range of topics including port security, DHCP snooping, dynamic ARP inspection, and IP source guard. View the document <a href="http://nexthop.network/docs/netsec.pdf" target="_blank">here</a>.';

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
	$Oct_15_2015->description = 'Learn about and configure access control lists and how to implement NAT. View the document <a href="http://nexthop.network/docs/natacl.pdf" target="_blank">here</a>.';

	$Oct_08_2015 = new Event();
	$Oct_08_2015->title = 'Build-It-Night: BGP';
	$Oct_08_2015->location = 'Golisano, 70-2160 (Netlab)';
	$Oct_08_2015->date = 'Thursday, October 8, 2015';
	$Oct_08_2015->time = '7:00 P.M. - 9:00 P.M.';
	$Oct_08_2015->description = 'Learn about and configure BGP, the routing protocol of the internet. View the document <a href="http://nexthop.network/docs/bgp.pdf" target="_blank">here</a>.';

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
	$Mar_12_2015->title = 'Build-It-Night: DHCP/DNS';
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
	$Nov_20_2014->title = "Build-It-Night: Multi-Vendor Networking";
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

	$events = array($No_Events);
	$pastevents = array($May_12_2016, $Apr_27_2016, $Apr_16_2016, $Mar_16_2016, $Mar_2_2016, $Feb_17_2016, $Feb_3_2016, $Nov_12_2015, $Oct_08_2015, $Sep_03_2015, $Apr_30_2015, $Apr_16_2015, $Apr_2_2015,$Mar_12_2015,$Feb_26_2015,$Nov_20_2014,$Nov_06_2014)

?>
