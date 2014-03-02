<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contact Charlie Volpe for work or fun.">
	<title>C V - Contact</title>
  <link rel="icon" type="image/png" href="favicon.png" />
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">

	<!--[if lte IE 8]>
      <link rel="stylesheet" href="../css/main-grid-old-ie.css">
  <![endif]-->
  <!--[if gt IE 8]><!-->
      <link rel="stylesheet" href="../css/main-grid.css">
  <!--<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../js/retina-1.1.0.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/cv.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<div id="site-wrapper">

		<div id="site-header">
			<div class="main-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
				<a class="pure-menu-heading" href="">Charlie Volpe</a>

				<ul>
					<li><a href="../">Home</a></li>
					<!-- <li><a href="#">About</a></li> -->
          <li><a href="../work">Work</a></li>
					<li class="pure-menu-selected"><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>

		<div class="header-buffer"></div>

		<div class="work-content-wrapper">
			<div class="cv-boxes bread-crumbs">
				<a href="../">Home</a> / <a href="../" class="selected">Contact</a>
			</div>
			<h1>Contact</h1>
			<div class="pure-g">
				<div class="cv-boxes pure-u-1 clearfix">
					<h2>Drop Me a Line</h2>
					<p>Feel free to contact me with job opportunities or if you just want to chat... Cheers!</p>
					<hr style="border:1px solid #ccc;">
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						<div class="cv-fl-lft pure-u-1 pure-u-med-1-2">
							<label for="name">Name</label>
							<input style="width:100%" id="name" name="name" type="text" placeholder="Name" required/>
						</div>
						<div class="cv-fl-lft pure-u-1 pure-u-med-1-2">
							<label for="mail">Email</label>
							<input style="width:100%; border: 1px solid #ccc; border-radius: 3px; padding: 10px;" id="mail" name="mail" type="email" placeholder="Email" required/>
						</div>
						<label for="subject">Subject</label>
						<input style="width:100%" id="subject" name="subject" type="text" placeholder="Subject"/>
						<label for="message">Message</label>
						<textarea style="width:100%" id="message" name="message" type="text" rows="8" placeholder="Write your message here..." required></textarea>
						<input class="pure-button pure-button-primary" name="submit" type="submit" value="Send Email">
					</form>
					<?php if (isset($_POST["submit"])){
						$to = "volpegames@gmail.com";
						$from = $_POST["name"];
						$subject = $_POST["subject"];
						$mail = $_POST["mail"];
						$message = $_POST["message"];
						mail("volpegames@gmail.com", "Test", "Solid test...");
						if(mail($to, $subject, $message, "From: $from\r\n Content-type: text/html; charset=UTF-8\r\n")){
							echo '<div style="margin-top:10px;">Email Sent!</div>';
						}
						else {
							echo '<div style="margin-top:10px;">Email Failed!</div>';
						}
					}?>
				</div>
			</div>
		</div>

	</div>
  
</body>
</html>