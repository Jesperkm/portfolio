<?php include "header.php"; ?>

<header>
	<nav>
		<ul class="clearfix">
			<li><a href="#my-work">Work</a></li>
			<li><a href="#skills">Skills</a></li>
		</ul>
		<a href="#home-banner"><img src="img/jm-logo.png" alt="logo" id="logo" /></a>
		<ul>	
			<li><a href="#about">About</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<a href="#" id="pull" class="clearfix"><p>Menu</p></a> 
	</nav>
</header>


<div id="bgvid">
</div>

<section id="home-banner">
	<h1>Jesper Martinussen</h1>

	<div id ="front-page-text">
		<div class="a-line"><h2>F R O N T E N D E R</h2></div>
		<div class="b-line"><h2>F O O T B A L L &nbsp; E N T H U S I A S T</h2></div>
		<div class="c-line"><h2>F I T N E S S &nbsp; F R E A K</h2></div>
	</div>

	<div class="scroll"><a data-scroll href="#my-work"><img src="img/scroll.png" alt="scroll" /></a></div>
</section>

<section id="my-work" class="clearfix">
	<h1>My Work</h1>
	<hr />
	<p>I’m Jesper, an experienced front-end developer based in Odense, Denmark. I enjoy helping company's brand themselves on the web. Here is some of the work i've done</p>
		
		<a href="scs.php">
			<div class="work" id="sun-creature">
				<span class="work-desc">Sun Creature Studio<br />
					<em>Responsive website for an animation company</em><br />
					<div class="plus"><p>+</p></div>
				</span>
			</div>
		</a>

		<a href="brammingtand.php">
			<div class="work" id="bramming-tand">
				<span class="work-desc">Bramming Dentist<br />
					<em>Responsive website for a dentist located in Bramming</em><br />
					<div class="plus"><p>+</p></div></span></span>
			</div>
		</a>

		<a href="winum.php">
			<div class="work" id="winum">
				<span class="work-desc">Mathias Winum<br />
					<em>Website for a music composer</em><br />
					<div class="plus"><p>+</p></div></span>
			</div>
		</a>

		<a href="toa.php">
			<div class="work" id="alethrion">
				<span class="work-desc">Tales of Alethrion<br />
					<em>Website for the Sun Creature Studios popular animation series</em><br />
					<div class="plus"><p>+</p></div></span></span>
			</div>
		</a>
</section>

<section id="skills">
	<h1>My Skills</h1>
	<hr />
	<p>During my 3 years of experience with front-end developing, I have gathered certian skills in the world of webdevelopment. Below you can see a quick overview of some of the skills i acquired, and they will be updated when I learn new stuff</p>
	
	<div id="skills-wrap">
		<div class="skills-graphs">
			
			<div class="graph">
				<div id="css">
					<p>CSS</p>
				</div>
			</div>

			<div class="graph">
				<div id="sass">
					<p>Sass</p>
				</div>
			</div>

			<div class="graph">
				<div id="javascript">
					<p>Javascript</p>
				</div>
			</div>

			<div class="graph mobile-hidden">
				<div id="php">
					<p>PHP</p>
				</div>
			</div>

		</div>
		<div class="skills-graphs">
			
			<div class="graph">
				<div id="html-graph">
					<p>HTML</p>
				</div>
			</div>

			<div class="graph">
				<div id="wordpress">
					<p>Wordpress</p>
				</div>
			</div>

			<div class="graph">
				<div id="responsive-w">
					<p>Responsive Design</p>
				</div>
			</div>

			<div class="graph mobile-hidden">
				<div id="jquery">
					<p>JQuery</p>
				</div>
			</div>

		</div>
	</div>
</section>

<section id="quote">
	<h1>"Whatever the mind of man can conceive and believe, it can achieve."</h1>
	<h2>- Napoleon Hill</h2>
</section>

<section id="about" class="clearfix">
	<h1>About Me</h1>
	<hr />
	<div class="twelve-wrap">
		<div id="my-image"><img src="img/jesper500.jpg" alt="me" /></div>
		<div id="about-me">
			<h2>Front-end developer and Football enthusiast</h2>
			<p>I'm Jesper, a 24 year old front-end developer, currently living in Odense, Denmark. I have an education in multimedia design, and there I found my passion for webdevelopment and communication. That has led me to get a bachelor degree in webdevelopment, which i'm done with summer 2015. <br /> <br />
			When i'm not coding, doing wireframes or testing UX, i'm spending time on my hobbies. I'm a big football enthusiast, and I spend a lot of time watching football, or playing FIFA with my friends. Since my work is infront of my computer, and that gives limited physical exercise, I use time going to the gym. <br />
			If you want to find out more about me, you can check me up on the links below.
			</p>
			<div class="socials">
				<div id="facebook"><a href="https://www.facebook.com/jesper.martinussen" target="_blank"><img src="img/facebook.png" alt="facebook" /></a></div>
				<div id="twitter"><a href="https://twitter.com/jesperkm" target="_blank"><img src="img/twitter.png" alt="twitter"></a></div>
				<div id="linkedin"><a href="https://www.linkedin.com/pub/jesper-martinussen/5b/902/88a" target="_blank"><img src="img/linkedin.png" alt="linkedin"></a></div>
				<div id="github"><a href="https://github.com/jesperkm" target="_blank"><img src="img/github.png" alt="github"></a></div>
			</div>
		</div>
	</div>
</section>

<section id="contact">
	<h1>Contact Me</h1>
		
		<form action="#popup" class="form clearfix" id="contact-form" method="post" autocomplete="off" novalidate>

			<fieldset>
			<label for="name"><img src="img/user.png" alt="user" /></label>
			<input type="text" name="name" id="name" placeholder="Name" />
			</fieldset>
			
			<fieldset>
			<label for="email"><img src="img/mail.png" alt="user" /></label>
			<input type="text" name="email" id="email" placeholder="Email@example.com" />
			</fieldset>
			
			<fieldset>
			<label for="subject"><img src="img/subject.png" alt="user" /></label>
			<input type="text" name="subject" id="subject" placeholder="Subject" />
			</fieldset>

			<textarea name="message" id="detail" placeholder="Insert the message here"></textarea>
			<input type="submit" value="Submit" id="submit"/>
		</form>

	<div class="space"></div>
</section>

<div id="popup">
	<div class="jm-logo"><img src="img/jm-logo.png" alt="logo" /></div>
	<p></p>
</div>

<?php include "footer.php"; ?>

