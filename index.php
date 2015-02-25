<?php
	include "configVars.php";
	include "events.php";
?>
<!doctype HTML>
<!--RIT NextHop Club Site -->
<head>
<link rel="stylesheet" id="base" type="text/css" href="style/base.css">
<link rel="stylesheet" id="medium" type="text/css" href="style/desktop.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="style/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="viewport" content="initial-scale=1">
<title>NextHop</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59935578-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
window.mobilecheck = function() {
  var check = false;
  (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
}
if(window.mobilecheck()) {
	document.getElementById("medium").href = "style/mobile.css";
}
</script>
</head>
<body>
	<div class="section" id="topBar">
		<div class="sectionInner">
			<!--<img style="margin:0 auto;" src="http://placehold.it/600x300&text=NextHop" />-->
			<div style="background-color:white;border-radius:9999px;margin: 20px 0;">
				<a href="/"><img style="margin: 0 auto;overflow:auto;width:600px;" src="/images/NextHopLogo.png"></a>
			</div>
			<span id="nextHop">NextHop</span>
		</div>
	</div>
	<div class="section" id="about">
		<div class="sectionInner text">
			<h1 class="sectionHeader"><i class="fa fa-question-circle"></i> What is NextHop?</h1>
			<div class="padLeft">
				<p>NextHop is an organization at the Rochester Institute of Technology geared towards students interested in the fields of networking and systems administration. The name NextHop comes from a networking term that describes the next router along a path to a given destination. The club serves two core functions: community building and knowledge development.
				<p>The community building aspect of NextHop is geared towards bringing students together from multiple disciplines who share a core common interest set. Knowledge development is focused on building core and advanced level skills through a variety of workshops and presentations with topics ranging from basic skills to emerging technologies. Knowledge development spans both academic and professional knowledge spheres. </p>
			</div>
		</div>
	</div>
	<div class="section" id="events">
		<div class="sectionInner text">
			<h1 class="sectionHeader"><i class="fa fa-calendar"></i> Events</h1>
			<div class="padLeft">
			<?php foreach ($events as $event) {?>
				<div class="event" >
				<h3 class="event"><?php echo $event->date; ?></h3>
				<h4 class="event"><?php echo $event->time; ?></h4>
				<?php echo $event->location; ?>
				<p><?php echo $event->description; ?></p>
				</div>
			<?php } ?>
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
						<li>President: <a href="mailto:<?php echo $president_email; ?>"><?php echo $president_fullName; ?></a><br /><span class="major"><?php echo $president_majorYear; ?></span></li>
						<li>Vice President: <a href="mailto:<?php echo $vicePresident_email; ?>"><?php echo $vicePresident_fullName; ?></a><br /><span class="major"><?php echo $vicePresident_majorYear; ?></span></li>
						<li>Treasurer: <a href="mailto:<? echo $treasurer_email; ?>"><? echo $treasurer_fullName; ?></a><br /><span class="major"><?php echo $treasurer_majorYear; ?></span></li>
					</ul>
					<h2>Advisor</h2>
					<ul>
						<li><a href="mailto:<?php echo $advisor_email; ?>"><?php echo $advisor_fullName; ?></a> - <?php echo $advisor_Position; ?></li>
					</ul>
				</div>
				</div>

			<div class="fiftyFloat">
				<h1 class="sectionHeader"><i class="fa fa-bullhorn"></i> Mailing List Signup</h1>
				<div class="padLeft">
											<!-- Begin MailChimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
						<style type="text/css">
							#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
							/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
								We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
						</style>
						<div class="contact">
						<form action="//brucedewald.us9.list-manage.com/subscribe/post?u=664305636969dd43eedd99cf7&amp;id=8d33440d0b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mc_embed_signup_scroll">

						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address </label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div class="mc-field-group">
							<label for="mce-FNAME">First Name </label>
							<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
						</div>
						<div class="mc-field-group">
							<label for="mce-LNAME">Last Name </label>
							<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
						</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>
								<div style="position: absolute; left: -5000px;"><input type="text" name="b_664305636969dd43eedd99cf7_8d33440d0b" tabindex="-1" value=""></div>
								<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="subscribeButton" class="button"></div>
								</div>
						</form>
						</div>

							<!--End mc_embed_signup-->
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="footer">
		<div class="sectionInner">
			&copy; 2015 NextHop
		</div>
	</div>
</body>
</html>
