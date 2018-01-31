<?php
/**
 * The main template file.
 * Tenplate Name: Main
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="background">
		<div class="wrapper">
<!-- Title Page -->
				<div class="page1">
					<div class="header">
						<div class="logo"><img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/sean-logo.png"></div>
						<div class="menu"></div>
					</div>
					<div class="title">
						<p> Nice to meet you, I'm </p>
						<h1> Sean Stobo</h1>
						<p> A web and app developer based out of Vancouver, Canada. </br>
						This site is under construction, and not yet optimized for your mobile experience, but please make yourself at home!
						</p>
						<a href="mailto:seanstobo@gmail.com?Subject=Hello" target="_blank"><button class="title-button"> Lets Talk</button></a>
						<a href="Https://www.linkedin.com/in/sean-stobo-a125558a/" target="_blank"><button class="title-button"> Linked In </button></a>
						<a href="https://github.com/sstobo" target="_blank"><button class="title-button"> My GitHub</button></a>
						
					</div>	

					<a class="scroll-icon" href="#page2"><img class="image-scroll" src="<?php echo get_template_directory_uri(); ?>/images/sean-mouse-scroll.png"></a>		
					<p> Scroll Down </p>
				</div>
<!-- Profile Page -->
				<div class="page2">
					<div class="white-box" id="page2">
						<div class="pic">
						<div class="profile-image" id="scroll"></div>
							<div class="profile-image-box"></div>
						</div>
						<div class="about-me">
							<div class="about-me-intro">
								<h2> About Me </h2>
								<p> I'm a dynamic and driven front and back end developer. I'm a motivated and personable individual, who geniunly enjoys bringing projects to life with clean efficient code.
								
							</div>
							<div class="about-left" >
								<p> Proficiencys </p>
								<ul> 
									<li> React </li>
									<li> HTML </li>
									<li> CSS </li>
									<li> Javascript </li>
									<li> Jquery </li>									
									<li> PHP </li>
									<li> Sass/Gulp </li>
								</ul>
								<a href="mailto:seanstobo@gmail.com?Subject=Hello" target="_top"><button> Lets Talk</button></a>
								
							</div>
							<div class="about-right">
								<p> What I do </p>
								<ul> 
									<li> I create immersive web experiences. </li>
									<li> I develop applications for Android and iOS.</li>
									<li> I am experienced in Wordpress web development. </li>
									<li> I love to work collaborativly in a team environment. </li>
									<li> I provide a positive and energetic culture fit. </li>
									<li>Earls Restaurant corporate trainer and recruiter </li>
									<li>Mentorship and personal/ professional development. </li>

								</ul>
							</div>
						</div>
					</div>
					
				</div>
				
<!-- Portfolio page -->
				<div class="page3">
				<a class="scroll-icon" href="#page3"><img class="image-scroll" src="<?php echo get_template_directory_uri(); ?>/images/sean-mouse-scroll.png"></a>		
					<div class="my-work" id="page3">
					<h2> My Work </h2>
					<div class="nexus-text">
					<h4> Nexus Intercambio</h4>
					<p>Nexus is a Worpress site built for Brazillian students looking for a place to study in Canada.</p>
	</div>
					<a href="http://nexus.van.cp.academy.red/"><button class="view-site-button"> View Site </button></a></br>
					<button class="prev-button"><- Prev</button></br>
					<button class="next-button">Next  -></button>
					</div>
					<div class="my-work-pics">
						<div class="work-box"></div>
						<div class="nexus"></div>
						<div class="work-pic">			
						</div>
					</div>
				</div>

<!-- what im about -->
				<div class="page4">
				<a class="scroll-icon" href="#page4"><img class="image-scroll" src="<?php echo get_template_directory_uri(); ?>/images/sean-mouse-scroll.png"></a>		
					<div class="what-im-about">
					
						<div class="what-title">
						<h2 id="page4"> What Im About </h2>
						</div>
						<div class="what-left">
							<p>I come from a background in the culinary arts. My experience is in leading large teams and building business and turning flagging restaurants around in sales, profit, and staff engagement.
							</p>
						</div>
						<div class="what-right">
							<p>I am hoping to apply my learnings to the tech sector. I love my life and try to pack every waking hour of the day with learning, activities and challenges. I have a good mind for systems, and a very positive disposition.
							
							</p>
						</div>
					</div>
					<div class="what-cards">
						<div class="card1">
						

							<div class="card1-image">
								<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/mountain-white.svg">
								<img class="image-black" src="<?php echo get_template_directory_uri(); ?>/images/mountain.svg">
							</div>
							<h4> Adventure </h4>
							<p> 
							I am an avid skier (put 40 days on the hill last year) and I love to mountain bike in the summer. I feel strongly that a connection to nature is critical to my overall well-being. I feel my absolute best when im out in the woods breathing that delicious mountain air.
							</p>
						</div>
						<div class="card2">
							
							<div class="card2-image">
								<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/yoga-white.svg">
								<img class="image-black" src="<?php echo get_template_directory_uri(); ?>/images/yoga.svg">
							</div>
							<h4> Learning and Enlightenment</h4>
							<p> 
								I believe that physical well being is closely tied to my mental and spiritual capability, so in addition to maintaining a learning mentallity, I try very hard to stay in shape.
							</p>
						</div>
						<div class="card3">
							<div class="card3-image">
							<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/gi-white.svg">
							<img class="image-black" src="<?php echo get_template_directory_uri(); ?>/images/gi.svg">
							</div>
							<h4> Brazillian Jiu Jitsu </h4>
							<p> 
								I have been training and coaching BJJ  for several years. The phyical and mental demands of training and competition have been a huge driving factor in my level of confidence, clarity, and well being. 
								I also coach part time, in hopes that I can share my love for this beautiful art with others.
							</p>
						</div>
					</div>
				</div>
<!-- Education -->
				<div class="page5">
				<a class="scroll-icon" href="#page5"><img class="image-scroll" src="<?php echo get_template_directory_uri(); ?>/images/sean-mouse-scroll.png"></a>		
					<div class="education-wrapper" id="page5">
					<div class="education-left">
					<h2> My Education</h2>
					<p> Two years ago I was working as an Executive Chef. Now, I am working as a Web and App Developer. Quite a dramatic change, but one of the most rewarding things I have done in my life!
					</p>
					<p>
					At the moment I am focusing on developing my skills with React.js. I have a strong understanding of Javascript, and PHP, and I have a high level of skill in CSS and HTML as well, with a focus on CSS Grid.  I work extremely well with teams, and generate a supportive, fun, and accountable culture around me.</p>
					<div class="education-icons">
						<div class="icon-card">CSS 3<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/css3.png"></div>
						<div class="icon-card">Javascript<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/javascript.png"></div>
						<div class="icon-card">HTML5<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/html5.png"></div>
						<div class="icon-card">PHP<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/php.png"></div>
						<div class="icon-card">WordPress<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/wordpress.png"></div>
						<div class="icon-card">React.js<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/react.png"></div>
						<div class="icon-card">Node.js<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/nodejs.png"></div>
						<div class="icon-card">Jquery<img class="image-white" src="<?php echo get_template_directory_uri(); ?>/images/jquery.png"></div>
					</div>

					</div>
					<div class="education-right">
						<h3> Programs Completed and Achievements </h3>
						<ul> 
									<li><em>Full Stack Developer Professional </em>from Red Academy</li>
									<li><em>Being a Leader</em> from Werner Erhardt </li>
									<li><em>Leader Gifts</em> and <em>Leading Teams</em> from Earls Restaurants</li>
									<li>Gracie Barra <em>Brazillian Jiu-Jitsu Instructors Certification</em> </li>
									
									<li><em>San Pelegrino Top Restaurant in Canada</em>, #60 Worldwide at Rouge Restaurant in Calgary </li>
								</ul>
								<h3> Volunteering </h3>
						<ul> 
									<li>Pemberton Brazillian Jiu-Jitsu <em>Kids Coach</em>  </li>
									<li>Mt Curry Brazillian Jiu-Jitsu <em>Adult and Kids Coach</em> </li>
									<li><em>Tutoring other Students</em> at Red Academy</li>
									<li><em>Hiring Fair Co-ordinator</em> at Red Academy</li>
								</ul>
					</div>
					</div>
				</div>
<!-- Contact  -->

				<div class="page6">
				
					<div class="contact-wrap">
						<div class="contact-me">
						<h2> Lets get in touch! </h2>
						<p> My email address is <a href="mailto:seanstobo@gmail.com?Subject=Hello" target="_top">seanstobo@gmail.com</a>
						<p> If you would like to see more, find me on <a href="https://www.linkedin.com/in/sean-stobo-a125558a/" target="_top">Linkedin.com</a>
					</div>
					<div class="contact-form">
						<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
						</div>
					</div>
				</div>

		</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


	<?php get_footer(); ?>
