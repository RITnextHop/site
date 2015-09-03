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
<title>NextHop Live Stream</title>
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
<body id="live">
	<?php include("config/header.php"); ?>
	<div id="sectionFrame">
			<div class="fiftyFloat">
			<div class="section" id="videoSection">
				<div class="sectionInner text">
					<h1 class="sectionHeader"><i class="fa fa-video-camera"></i> Live Stream - Fall General Meeting 9/3/15</h1>
					<div class="video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/4s7hoGZLQOE" frameborder="0" allowfullscreen></iframe><br />
						View the slides <a href="https://docs.google.com/presentation/d/19z-Qy__WXwp6VgkyMrIj_o8_HM7pBe6JagzLvCKKab8/edit?usp=sharing">here</a>.<br />
						For older live streams, please see the <a href="events.php">events</a> page.
					</div>
				</div>
			</div>
		</div>
		<div class="fiftyFloat">
			<div class="section" id="agenda">
				<div class="sectionInner text">
					<h1 class="sectionHeader"><i class="fa fa-calendar"></i> Agenda</h1>
					<!-- <div class="padLeft">
						Slides will be availble at the time of presentation.
						<ul>
							<li>
								8:00-8:30: IPv6 and Stateless Address Auto Configuration (SLAAC), Prof. Garret Arcoraci <br />
								&nbsp;View slide sets <a href="http://nexthop.network/slides/041615/Arcoraci-IPv6.pdf" target="_blank">here</a>.
							</li>
							<li>
								8:30-9:00: Securing Your CentOS Box Using Google Authenticator, Nathan Lichtenstein <br />
								&nbsp;View slide sets <a href="http://lctnstn.com/fathom/centos-gauth.html" target="_blank">here</a>.
							</li>
						</ul>
					</div>-->
				</div>
			</div>
		</div>
	</div>
	<?php include("config/footer.php"); ?>
</body>
</html>
