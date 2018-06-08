<?php 
if (isset($_POST['name'], $_POST['email'], $_POST['message']))
    { 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $emailSent = FALSE;
    $from = "form-submission@cpmckee.info";
    $to = "connermckee01@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $messages = $_POST["message"];
    $message = "Email: $email, Message: $messages";
    $subject = "Contact Form From: $name";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);

    if ($emailSent = mail($to,$subject,$message,$headers)) 
        $msg="I have received your email and will contact you shortly, thank you!";

    if(!empty($_POST['website'])) die();
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Conner McKee</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="styles/main.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" crossorigin="anonymous">
        
        <script>

        function validateForm() {
            var x = document.contact.name["form"]["name"].value;
            if (x == "") {
            alert("Name must be filled out.");
            return false;
        }

            var y = document.contact.email["form"]["email"].value;
            if (y == "") {
            alert("Email must be filled out.");
            return false; 
        }
    }
        </script>	
    </head>
	<body>
			<div class="page-wrap">
				<!-- Main -->
					<section id="main">
	
						<!-- Banner -->
							<section id="banner">
								<div class="inner">
									<h1 class="shadow" style="text-transform: uppercase;">welcome</h1>
									<p>This is my regularly updated portfolio page.</p>
									<ul class="actions">
										<li><a href="#explore" class="button alt scrolly big">Explore</a></li>
										<li><a href="#form_link" class="button alt scrolly big">Contact</a></li>
										<li><a href="assets/Conner McKee Resume 2018.pdf" target="_blank" class="button alt scrolly big">Resume</a></li>
									</ul>
								</div>
							</section>
	
						<!-- Gallery -->
							<section id="galleries">
	
								<!-- Photo Galleries -->
									<div class="gallery" id="explore">
										<header class="special">
											<h2 class="letterpress">My Projects</h2>
										</header>
										<div class="content">
											<div class="media">					
												<a href="images/intrinzic.png"><img src="images/intrinzic.png" alt="" title="Intrinzic Brands" /></a>
												<p class="project_title"><a href="http://intrinzicbrands.com" target="_blank">Intrinzic Brands</a></p>
											</div>
											<div class="media">
												<a href="images/pgsecurity.png"><img src="images/pgsecurity.png" alt="" title="" /></a>
												<p class="project_title"><a href="https://github.com/mckeec1/P-G-Email-Template" target="_blank">P&G Email and Internal Site</a></p>
											</div>
											<div class="media">
												<a href="images/nkyStorm.png"><img src="images/nkyStorm.png" alt="" title="" /></a>
												<p class="project_title"><a href="https://nkystorm.com/" target="_blank">NKY Storm</a></p>
											</div>
											<div class="media">
												<a href="images/kicks4cancer.png"><img src="images/kicks4cancer.png" alt="" title="" /></a>
												<p class="project_title"><a href="https://web.archive.org/web/20180206183147/https://kicks4cancer.live/" target="_blank">Kids Kick For Cancer</a></p>
											</div>
											<div class="media">
												<a href="images/patientBond.png"><img src="images/patientBond.png" alt="" title="" /></a>
												<p class="project_title"><a href="https://www.patientbond.com/#changing-behaviors" target="_blank">Patient Bond</a></p>
											</div>
											<div class="media">
												<a href="images/dermGroup.png"><img src="images/dermGroup.png" alt="" title="" /></a>
												<p class="project_title"><a href="https://thedermatologygroupcincy.com/" target="_blanke">The Dermatology Group</a></p>
											</div>
											<div class="media">
												<a href="images/yard-partyOne.png"><img src="images/yard-partyOne.png" alt="" title="" /></a>
												<p class="project_title"><a href="https://github.com/mckeec1/Yard-Party" target="_blank">Yard Party</a></p>
											</div>
											<div class="media">
												<a href="images/stough-group.png"><img src="images/stough-group.png" alt="" title="" /></a>
												<p class="project_title"><a href="https://stoughgroup.com/" target="_blank">Stough Group</a></p>
											</div>
										</div>
										<footer>
											<div class="container_center">
											<div class="box_description">
												<h3>Some Info...</h3>
												<p>These are my most relevant projects to this point. On my resume you will find detailed descriptions of each project and what was required of me. By no means are these my only projects, I have more listed on my resume, and if you have any questions or would like to inquire about employing me please send me a message below or view my LinkedIn profile.</p>
												</div>
												</div>
											<div class="box_logo">	
											<!--<a href="gallery.html" class="button big submit">Full Gallery</a>-->
											<img class="rotate" src="images/Conner_logo_b_w.png"/>
											</div>
										</footer>
									</div>
							</section>
	
						<!-- Contact -->
							<section id="contact">
								<!-- Social -->
									<div class="social column">
										<h3>About Me</h3>
										<p>Thanks for checking out my portfolio page! As you can see I have several different projects I have built/worked on or created some aspect of the build. My experience so far has taught me a host of different languages as well as softwares and new ways to push the envelope in web development. I have been a developer professionally for a year and work at <a href="https://lamproslabs.com" target="_blank">Lampros Labs.</a> I also have done some freelance side work as well to constantly learn new and exciting develoment techniques and technologies.</p>
										<p>I am an extremely dedicated and hard working developer who is always looking for the next great opportunity and chance to prove myself and improve the place I work. By that I mean to help the company achieve its goals and the development team achieve its goals as well. I work very well with other developers and hava great background in client/developer relationships. I consider this to be an important assets as well as the skills and knowledge I have gained, both about how the business works and the development side a well.</p>
										<h3>Follow Me</h3>
										<ul class="icons">
											<li><a href="www.linkedin.com/in/conner-mckee-web-developer" target="_blank" class="icon"><i class="fab fa-linkedin"></i><span class="label">LinkedIn</span></a></li>
											<li><a href="https://github.com/mckeec1" target="_blank" class="icon"><i class="fab fa-github"></i><span class="label">GitHub</span></a></li>
											<li><a href="https://www.instagram.com/irishcarbum/" target="_blank" class="icon"><i class="fab fa-instagram"></i><span class="label">Instagram</span></a></li>
										</ul>
									</div>
	
								<!-- Form -->
									<div class="column message" id="form_link">
                                        <h3>Get in Touch</h3>
                                       <?php if ($emailSent == FALSE) : ?>
										<form class="form_control" name="contact" action="#form_link" method="post" onsubmit="return validateForm();">
											<div class="field half first">
												<label for="name">Name</label>
												<input class="outline_color" name="name" id="name" type="text" placeholder="Name">
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input class="outline_color" name="email" id="email" type="email" placeholder="Email">
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea class="outline_color" name="message" id="message" rows="6" placeholder="Message"></textarea>
											</div>
											<div style="display:none;">
													<label>Keep this field blank</label>
													<input type="text" name="website" id="honeypot" />
												 </div>
											<ul class="actions">
												<li><input value="Send Message" class="button submit" type="submit"></li>
											</ul>
                                        </form>
                                        <?php endif; ?>
									</div>
	
							</section>
	
						<!-- Footer -->
							<footer id="footer">
								<div class="copyright">
									&copy; Conner McKee 2018.
								</div>
							</footer>
					</section>
			</div>

			<div>
					<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
			</div>

			<!-- Scripts -->
				<script src="scripts/jquery.min.js"></script>
				<script src="scripts/jquery.poptrox.min.js"></script>
				<script src="scripts/jquery.scrolly.min.js"></script>
				<script src="scripts/skel.min.js"></script>
				<script src="scripts/util.js"></script>
				<script src="scripts/main.js"></script>
				<script src="scripts/btn.js"></script>	
				<script src=”//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js”></script>
	</body>
</html>
