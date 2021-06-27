<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/app.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

    <div class="main-header">
        <div id="menu" class="navscroll">
            <div class="row">
                <nav id="nav" class="d-none ms-5 d-md-block navbar navbar-expand w-100 col-sm-12">
                    <div class="container">
                        <ul class="navbar-nav mr-auto nav__list">

                            <li class="items">
                                <a href="#hello" onclick="animation('.hello .title')">HELLO <span class="underscore">_</span></a>

                            </li>

                            <li>
                                <a href="#resume" onclick="animation('.resume-header')">RESUME</a>

                            </li>
                            <li>
                                <a href="#portfolio" onclick="animation('.portfolio-header')">PORTFOLIO</a>

                            </li>
                            <li>
                                <a href="#testemonials" onclick="animation()">TESTIMONIALS</a>

                            </li>
                            <li>
                                <a href="#blog" onclick="animation('.section__title')">BLOG</a>

                            </li>
                            <li>
                                <a href="#contact" onclick="animation('.section .section__title')">CONTACT</a>

                            </li>


                        </ul>

                    </div>
                </nav>

            </div>
        </div>

        <div class="container">



            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#hello" onclick="closeNav()">HELLO</a>
                <a href="#resume" onclick="closeNav()">RESUME</a>
                <a href="#portfolio" onclick="closeNav()">PORTFOLIO</a>
                <a href="#testemonials" onclick="closeNav()">TESTIMONIAL</a>
                <a href="#blog" onclick="closeNav()">BLOGS</a>
                <a href="#contact" onclick="closeNav()">CONTACT</a>

            </div>
            <span class="openspan" style="font-size:30px;cursor:pointer; color:white" onclick="openNav()">&#9776; </span>






            <div class="wrapper col-lg-12">


                <div class="profile-pic">



                </div>


                <div class="about">
                    <div class="credentials">
                        <h1>Umair Tanoli_</h1>
                        <p>Fullstack developer</p>
                    </div>

                    <div class="details">

                        <table style="width:100%">
                            <tr>
                                <dt>AGE:</dt>
                                <dd>23</dd>

                            </tr>
                            <tr>
                                <dt>PHONE:</dt>
                                <dd>+92 331 5681772</dd>
                            </tr>
                            <tr>
                                <dt>EMAIL:</dt>
                                <dd>ukhalil07@gmail.com</dd>
                            </tr>

                            <tr>
                                <dt>ADDRESS:</dt>
                                <dd>Masnoor town, Abbottabad.</dd>
                            </tr>
                        </table>
                    </div>

                    <p class="social-media">
                        <a href="https://github.com/techmaker68">

                            <i class="fab fa-github"></i>
                        </a>

                        <a href="https://www.linkedin.com/in/umairkhalil12/">

                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.facebook.com/">

                            <i class="fab fa-facebook-square"></i>
                        </a>


                    </p>




                </div>
            </div>



        </div>

    </div>

    <div class="outer-body">


        <!-- hello section of page -->
        <section id="hello">


            <div class="hello">


                <div class="row">


                    <div class="col-md-10 section">
                        <h1 class="title">Hi_</h1>
                        <p class="description">
                            I am Junior Web developer able to build a Web presence from the ground up - from concept, navigation, layout and programming to UX and SEO. Skilled at writing well-designed, testable and efficient code using current best practices in Web development. Fast learner, hard worker and team player who is proficient in an array of scripting languages and multimedia Web tools.
                        </p>

                        <a class="section_btn site-btn">

                            <i class="fas fa-download" onclick="downloadURI('/assets/images/Umair-CV.docx','cv')"> Download CV </i>


                        </a>

                    </div>

                </div>


            </div>

        </section>

        <section id="resume">
            <div class="row">

                <div class="col-md-10">


                    <h1 class="resume-header">

                        Resume_
                    </h1>
                    <p class="description">
                        Lorem ipsum dolor sit amet, communication adipisicing elit, helpful eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud sence of humour ullamco laboris nisi ut honest ea commodo consequat. Duis aute irure dolor in upper-intermediate english level velit dolore eu ivivdtevoluptatem ontend developer.
                    </p>
                </div>

            </div>

            <div class="row">

                <div class="col-md-8 section_resume resume-list ">
                    <h3 class="resume-list_title"> Education</h3>
                </div>

                <div class="resume-list_block">
                    <ul class="bar">


                        <p class="resume-list_block-title"> Comsats university of science and technology</p>
                        <p class="resume-list__block-date"> 2016-2020 </p>
                        <p class="resume-list__block-description"> Bachelor software engineering </p>


                        <p class="resume-list_block-title"> The Peace group of colleges</p>
                        <p class="resume-list__block-date"> 2012-2014 </p>
                        <p class="resume-list__block-description"> Pre Engineering</p>

                    </ul>


                </div>
                <div class="col-md-8 section_resume resume-list ">
                    <h3 class="resume-list_title"> Employment</h3>
                </div>

                <div class="resume-list_block">
                    <ul class="bar">


                        <p class="resume-list_block-title"> IR solutions ltd</p>
                        <p class="resume-list__block-date"> 2020-2021 </p>
                        <p class="resume-list__block-description"> PHP-laravel Backend developer </p>


                        <p class="resume-list_block-title"> JMM-AI group of companies</p>
                        <p class="resume-list__block-date"> 2021-Till date </p>
                        <p class="resume-list__block-description"> Full stack developer </p>

                    </ul>


                </div>


                <!-- general skills section -->

                <div class="col-md-8 section_resume resume-list ">
                    <h3 class="progress-list_title"> General skils</h3>
                </div>




                <div class="col-md-5 mr-auto">


                    <div class="progress-list_skill">

                        <p>


                            <span class="progress-list_skill-title">Laravel</span>
                            <span class="progress-list_skill-value">90%</span>

                        </p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>

                    </div>
                    <div class="progress-list_skill">

                        <p>
                            <span class="progress-list_skill-title">React</span>
                            <span class="progress-list_skill-value">60%</span>

                        </p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>

                    </div>
                    <div class="progress-list_skill">

                        <p>
                            <span class="progress-list_skill-title">Inertia.js</span>
                            <span class="progress-list_skill-value">60%</span>

                        </p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>

                    </div>
                    <div class="progress-list_skill">

                        <p>
                            <span class="progress-list_skill-title">My SQL</span>
                            <span class="progress-list_skill-value">90%</span>

                        </p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-5 mr-auto">


                    <div class="progress-list_skill">

                        <p>


                            <span class="progress-list_skill-title">Java Script</span>
                            <span class="progress-list_skill-value">80%</span>

                        </p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>

                    </div>
                    <div class="progress-list_skill">

                        <p>
                            <span class="progress-list_skill-title">React</span>
                            <span class="progress-list_skill-value">60%</span>

                        </p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>

                    </div>
                    <div class="progress-list_skill">

                        <p>
                            <span class="progress-list_skill-title">Inertia.js</span>
                            <span class="progress-list_skill-value">60%</span>

                        </p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>

                    </div>
                    <div class="progress-list_skill">

                        <p>
                            <span class="progress-list_skill-title">My SQL</span>
                            <span class="progress-list_skill-value">90%</span>

                        </p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>

                    </div>

                </div>
        </section>

        <!-- end general skills section -->



        <section id="portfolio">

                        <div class="row">

                        <div class="col-md-12">


                            <h2 class="portfolio-header">

                                My Projects_
                            </h2>
                        </div>
                    </div>
                     <div class="row portfolio-nav">

                            <div class="col-md-12">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="">ALL</a>
                                        </li>
                                         <li> <a href=""> Mobile apps</a></li>
                                        <li> <a href=""> WEbsites </a> </li>
                                         <li> <a href=""> Landing pages </a></li>
                                    </ul>
                                </nav>
                            </div>
                     </div>

                    <div class="portfolio-cards">

                        <div class="row project-card">

                            <div class="col-md-6 col-lg-5 project-card__img">

                                <img src="assets/images/img_project_1_mono.png" alt="">


                            </div>


                            <div class="col-md-6 col-lg-7 project-card__info">

                                <h3 class="project-card__title"> Mobile and desktop app for Adva beauty</h3>
                                <p class="project-card__description">
                                    Adva beauty is an ecommerce webisite. it deals with beauty products. user can purchase different products,
                                    can adds as many products as they want to into the card. the system also supports a payment gateway <a href="https://www.hyperpay.com/"> <b>
                                            hyperpay.com
                                        </b></a>. <br>
                                    with options of home delivery system and many other features. <br>Visit site.


                                    <a href="https://www.advabeauty.com/#/"> Advabeauty.com</a>

                                </p>
                                <p class="project-card__stack">Used stack:</p>

                                <ul class="tags">

                                    <li>React.js</li>
                                    <li>php</li>
                                    <li>javascript</li>
                                    <li>laravel</li>

                                </ul>
                                <a href="" class="project-card__link">advabeauty.com</a>
                            </div>



                        </div>

                        <div>


                        </div>


                    </div>




                <div class="col-md-10">



                    {{-- <div class="portfolio-cards">

                        <div class="project-card">

                            <div class="col-md-6 col-lg-5 project-card__img">

                                <img src="assets/images/img_project_2_mono.png" alt="">


                            </div>


                            <div class="col-md-6 col-lg-7 project-card__info">

                                <h3 class="project-card__title"> (website, SIS, LMS, Admission portal) for KIU international university </h3>
                                <p class="project-card__description">
                                    KIU is and international university based in Saudia Arabia. Developed a complete student information system (SIS), learning management system (LMS)
                                    and admisison portal with a website.
                                </p>
                                <p class="project-card__stack">Used stack:</p>

                                <ul class="tags">

                                    <li>React.js</li>
                                    <li>Inertia.js</li>
                                    <li>javascript</li>
                                    <li>php</li>
                                    <li>laravel</li>
                                    <li>My Sql</li>

                                </ul>

                            </div>



                        </div>

                        <div>


                        </div>


                    </div> --}}


                </div>

        </section>






    </div>


    <section id="testemonials">



        <div class="background slider-carousel">

            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">

                            <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">

                                <p class="slider-carousel__tile"> this is heading</p>
                                <p class="slider-carousel__caption">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur nulla voluptate minus inventore optio eum cumque velit et vitae. Sed voluptatibus doloremque dolor incidunt soluta velit laboriosam aliquid nobis nulla.</p>

                            </div>


                            <!-- <img src="/assets/images/img_bg_main.jpg" alt="Los Angeles" style="width:100%;"> -->
                        </div>

                        <div class="item">
                            <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">

                                <p class="slider-carousel__tile"> this is heading</p>
                                <p class="slider-carousel__caption"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos quibusdam, illum veniam voluptate reiciendis exercitationem atque, magnam eius, hic iure provident cupiditate culpa obcaecati voluptatibus totam aperiam quisquam officiis itaque.</p>

                            </div>

                            <!-- <img src="/assets/images/img_bg_main.jpg" alt="Chicago" style="width:100%;"> -->
                        </div>


                        <div class="item">
                            <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">

                                <p class="slider-carousel__tile"> this is heading</p>
                                <p class="slider-carousel__caption"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis voluptatum sint facere accusantium quae. Dolorum reiciendis, facere cupiditate fuga temporibus magni. Voluptas provident quos dolorem iste id magni voluptates inventore.</p>

                            </div>
                            <!-- <img src="/assets/images/img_bg_main.jpg" alt="New york" style="width:100%;"> -->
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>

    </section>


    <div class="outer-body">

        <section id="blog" class="container section">
            <div class="row">
                <div class="col-md-12">

                    <h2 id="blog_header" class="section__title"> Latest Posts_</h2>

                </div>



            </div>

            <div class="row post-cards">

                <div class="col-md-4">
                    <a href="">

                        <div class="post-cards__cards">
                            <div class="post-cards__img">

                                <img src="../assets/images/img_avatar.png" alt="">
                            </div>

                            <div class="post-cards__info">

                                <p class="post-cards__date"> Oct 22, 2020 </p>
                                <h3 class="post-cards__title"> how to use css preprocessor</h3>
                                <p class="post-cards_description"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, fugit beatae delectus autem nihil itaque magni assumenda expedita incidunt natus corrupti consectetur a debitis, quod ipsam vel architecto. Ab, doloribus.</p>
                            </div>


                        </div>


                    </a>


                </div>
                <div class="col-md-4">
                    <a href="">

                        <div class="post-cards__cards">
                            <div class="post-cards__img">

                                <img src="../assets/images/img_blog_2.png" alt="">
                            </div>

                            <div class="post-cards__info">

                                <p class="post-cards__date"> Oct 22, 2020 </p>
                                <h3 class="post-cards__title"> how to use css preprocessor</h3>
                                <p class="post-cards_description"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, fugit beatae delectus autem nihil itaque magni assumenda expedita incidunt natus corrupti consectetur a debitis, quod ipsam vel architecto. Ab, doloribus.</p>
                            </div>
                        </div>
                    </a>


                </div>
                <div class="col-md-4">
                    <a href="">

                        <div class="post-cards__cards">
                            <div class="post-cards__img">

                                <img src="../assets/images/img_blog_1.png" alt="">
                            </div>

                            <div class="post-cards__info">

                                <p class="post-cards__date"> Oct 22, 2020 </p>
                                <h3 class="post-cards__title"> how to use css preprocessor</h3>
                                <p class="post-cards_description"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, fugit beatae delectus autem nihil itaque magni assumenda expedita incidunt natus corrupti consectetur a debitis, quod ipsam vel architecto. Ab, doloribus.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>




    </div>

    <section id="contact">

        <div class="footer">

            <div id="contact" class="container section">

                <div class="row">
                    <div class="col-md-12">

                        <p id="contacts_header" class="section__title"> Get in touch_</p>
                    </div>

                    <div class="row contacts">
                        <div class="col-md-5 col-lg-4">

                            <div class="contacts__list">
                                <dl class="contact-list">


                                    <dt>PHONE:</dt>
                                    <dd>+92-3315681772</dd>
                                    <dt>skype:</dt>
                                    <dd>+92-3315681772</dd>
                                    <dt>email:</dt>
                                    <dd>ukhalil07@gmail.com</dd>

                                </dl>


                                <div class="contacts__social">

                                    <ul>

                                        <li>

                                            <a href=""> Facebook </a>
                                        </li>

                                        <li>

                                            <a href=""> linkedin </a>
                                        </li>
                                        <li>

                                            <a href=""> github </a>
                                        </li>

                                    </ul>



                                </div>



                            </div>

                        </div>

                        <!-- <div class="row"> -->

                        <div class="col-md-7 col-lg-5">

                            <div class="contacts__form">

                                <p class="contacts__form-title"> Or just write me a letter here..!</p>
                                <form action="">
                                    <div class="form-group">

                                        <input class="form-field js-field-name" type="text" placeholder="your Name">
                                    </div>
                                    <div class="form-group">

                                        <input type="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">

                                        <textarea rows="8" cols="50" placeholder="Your Message"> </textarea>
                                    </div>
                                    <input type="button" class="site__button site-btn--form" type="submit" value="Send"> </input>
                                </form>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>

                </div>

            </div>

        </div>
    </section>

</body>

</div>

<script type="">

    $(document).ready(function(){   

        
   var scroll_start = 0;
   var startchange = $('#menu');
   var offset = startchange.offset();



    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {


          $(".navbar").css({'background-color':'white', 'color':'grey' ,'box-shadow':' 0px 3px 6px #0000001a','margin-top':'0px'});
          
          
          $(".navbar ul li a").css({ 'color':'grey'});

          $("#nav").fadeIn(3000);

       }  if(offset.top==0 && scroll_start==0) {

           
           $(".navbar").css({'background-color':'transparent','box-shadow':''});
          $(".navbar ul li a").css({ 'color':'white'});


     
       }
   });
    }
});

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    var textWrapper = document.querySelector('.resume-header');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

            anime.timeline({loop: false})
            .add({
                targets: '.resume-header .letter',
                scale: [4,1],
                opacity: [0,1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 950,
                delay: (el, i) => 70*i
            });
  document.getElementById("mySidenav").style.width = "0";
}


function downloadURI(uri, name) 
{
    var link = document.createElement("a");
    link.download = name;
    link.href = uri;
    link.click();
}



//heading animation

 function animation(c){
    var textWrapper = document.querySelector(c);
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

            anime.timeline({loop: false})
            .add({
                targets: c+' .letter',
                scale: [4,1],
                opacity: [0,1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 2000,
                delay: (el, i) => 100*i
            });


}

</script>

</body>

</html>