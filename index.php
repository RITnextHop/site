<?php
	include "configVars.php"; 
?>
<!doctype HTML>
<!--RIT Next Hop Club Site -->
<head>
<link rel="stylesheet" type="text/css" href="style/base.css">
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<title>Next Hop</title>
</head>
<body>
	<div class="section" id="topBar">
		<div class="sectionInner">
			<img style="margin:0 auto;" src="http://placehold.it/600x300&text=Next Hop" />
			<span id="nextHop">Next Hop</span>
		</div>
	</div>
	<div class="section" id="about">
		<div class="sectionInner text">
			<h1 class="sectionHeader"><i class="fa fa-question-circle"></i> What is Next Hop?</h1>
			<div class="padLeft">
				<p>Next Hop is an organization at the Rochester Institute of Technology geared towards students interested in the fields of networking and systems administration. The name Next Hop comes from a networking term that describes the next router along a path to a given destination. The club serves two core functions: community building and knowledge development.
				<p>The community building aspect of Next Hop is geared towards bringing students together from multiple disciplines who share a core common interest set. Knowledge development is focused on building core and advanced level skills through a variety of workshops and presentations with topics ranging from basic skills to emerging technologies. Knowledge development spans both academic and professional knowledge spheres. </p>
			</div>
		</div>
	</div>
	<div class="section" id="events">
		<div class="sectionInner text">
			<h1 class="sectionHeader"><i class="fa fa-calendar"></i> Events</h1>
			<div class="padLeft">
				<p>Lorem ipsum dolor sit amet, ei dolores voluptua per, eum an commodo rationibus intellegam. Sed ei solum mediocrem, nec an minim persius eligendi. Et has legendos perpetua vituperata, et autem intellegam assueverit mel. At qui simul iisque. Cibo sadipscing est in, ne vidit novum lobortis est, has erant numquam eu. Stet apeirian cu est.</p>

				<p>Mei fabulas mediocritatem ad. Ullum propriae accusata ius ei, mei ne maiorum placerat, has graece utamur utroque ne. Sea id porro etiam, sea ut everti iracundia, vim cu illud dolor inimicus. Agam liber ex quo, ex mel probo ipsum putant.</p>
			</div>
		</div>
	</div>
	<div class="section" id="governance_contact">
		<div class="sectionInner text gov_contactText">
			<div class="fiftyFloat">
				<h1 class="sectionHeader"><i class="fa fa-users"></i> Governance</h1>
				<div class="padLeft">
					<h2>Executive Board</h2>
					<ul>
						<li>President: <a href="mailto:<?php echo $president_email; ?>"><?php echo $president_fullName; ?></a> - <?php echo $president_majorYear; ?></li>
						<li>Vice President: <a href="mailto:<?php echo $vicePresident_email; ?>"><?php echo $vicePresident_fullName; ?></a> - <?php echo $vicePresident_majorYear; ?></li>
						<li>Treasurer: <a href="mailto:<? echo $treasurer_email; ?>"><? echo $treasurer_fullName; ?></a> - <?php echo $treasurer_majorYear; ?></li>
					</ul>
					<h2>Advisor</h2>
					<ul>
						<li><a href="mailto:<?php echo $advisor_email; ?>"><?php echo $advisor_fullName; ?></a> - <?php echo $advisor_Position; ?></li>
					</ul>
				</div>
				</div>

			<div class="fiftyFloat">
				<h1 class="sectionHeader"><i class="fa fa-bullhorn"></i> Contact</h1>
				<div class="padLeft">
					<form class="contact" action="sendMail.php" method="post">
						<input type="text" name="email" placeholder="Your Email Address"/><br>
						<input type="text" name="senderName" placeholder="Your Name"/><br>
						<textarea name="message" rows="4" cols="50" placeholder="What's up?"></textarea><br>
						<input type="submit" value="Send"/>
					</form>
				</div>
			</div>		
		</div>
	</div>
	<div class="section" id="footer">
		<div class="sectionInner">
			&copy; 2014 Next Hop
		</div>
	</div>
</body>
</html>
