<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/Gm.css">

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Portfolio website complete</title>
</head>
<body>
 <!--===== HEADER =====-->
 <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Mayuri Narkhede</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Web designer,<br>Front end developer,<span class="home__title-color">Back end
                        developer,</span><br> and freelancer.</h1>

                <a href="https://www.linkedin.com/in/mayuri-n-1771341a9" class="button">Contact me</a>
            </div>

            <div class="home__social">
                <a href="https://www.linkedin.com/in/mayuri-n-1771341a9" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="https://instagram.com/mayuri_2111?igshid=fhijrlorc1h7" class="home__social-icon"><i class='bx bxl-instagram'></i></a>
                <a href="https://github.com/mayu2154/myportfolio.github.io" class="home__social-icon"><i class='bx bxl-github'></i></a>
                <a href="https://facebook.com/vanita.narkhede.3" class="home__social-icon"><i class='bx bxl-facebook'></i></a>
            </div>

            <div class="home__img">
                <img src="./img/w1.jpg" alt="">
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="./img/mayuri.jpg" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">I'am Mayuri.<br> nice to meet you</h2>
                    <p class="about__text">I am mayuri engineering student from pune and pursuing in 3rd year <br> i am
                        interested in the entire frontend spectrum and i can design and code beautifully and simply and
                        i love what i do.</p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">
                    <p>Html,css,JAVASCRIPT building small and medium wesite using angular js with custom plug in
                        features, animations and coding interactive layouts<br>
                        i have also full-stack developer experience with open source CMS like
                        WordPress,keystone.js,python django and others.
                    </p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage">95%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>
                        <div class="skills__bar skills__css">

                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js">

                        </div>
                        <div>
                            <span class="skills__percentage">65%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">UX/UI</span>
                        </div>
                        <div class="skills__bar skills__ux">

                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="./img/w6.jpg" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>

            <div class="work__container bd-grid">
                <div class="work__img">
                    <img src="./img/m1.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="./img/m2.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="./img/m6.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="./img/m4.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="./img/m5.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="./img/m3.jpg" alt="">
                </div>
            </div>
        </section>
    </main>


	
    <section class="contact section" id="contact">
            <h2 class="section-title">Contact </h2> 
            <div class="Contact__container bd-grid">

		<form id="myForm" class="contact__form">
        
            Name: <input id="name" type="text" placeholder="Enter Name" class="contact__input">
			<br><br>

			Email id: <input id="email" type="text" placeholder="Enter Email" class="contact__input">
			<br><br>

			Mob No: <input id="subject" type="text" placeholder=" Enter Mobile no." class="contact__input"> 
			<br><br>

			Message: <textarea id="body" rows="5" placeholder="Type Message..." class="contact__input"></textarea>
			<br><br>

			<button type="button" onclick="sendEmail()" value="Send An Email" class="contact__button button">Submit</button> 
		</form>
	</section>
    
    <!--===== FOOTER =====-->
    <footer class="footer" id="myForm">
        <p class="footer__title">follow us </p>
        <div class="footer__social">
            <a href="https://facebook.com/vanita.narkhede.3" class="footer__icon"><i class='bx bxl-facebook'></i></a>
            <a href="https://instagram.com/mayuri_2111?igshid=fhijrlorc1h7" class="footer__icon"><i
                    class='bx bxl-instagram'></i></a>
            <a href="https://www.linkedin.com/in/mayuri-n-1771341a9" class="footer__icon"><i
                    class='bx bxl-linkedin'></i></a>

            <a href="https://www.youtube.com" class="footer__icon"><i class='bx bxl-youtube'></i></a>
        </div>
        <p>&#169; 2020 copyright all right reserved</p>
    </footer>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="./js/mn.js"></script>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>