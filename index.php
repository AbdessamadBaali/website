<!DOCTYPE html> 
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // assign variables
        $user_name = $_POST['user'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $msg = $_POST['msg'];
        
        // CREATING ARRAY EROORS
        $formEroors = array();

        if (strlen($user_name) <= 8){
            $formEroors[] = "Username Must Be Larger Than <strong>8</strong> Cahracters";
        }
        if (strlen($msg) <= 20){
            $formEroors[] = "Message Must Be Larger Than <strong>20</strong> Cahracters";
        }

    }

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="font-end, back-end, web devoloper, baaliDev,full stack,">
        <meta name="auther" content="Abdessamad Baali">
        <meta name="description"
             content="Hi, my name is Abdessamad Baali. I'm a Front-end developer.Specialize 
             in the Html5, css and javaScript stack with decent knowledge in other technologies in the field as well.">
        <title>BaaliDev</title>
        <link rel="icon shortcut" href="images/icon of the pages/reshot-icon-portfolio-SMNPQ4E3UL.svg" >
        <link rel="stylesheet" href="styles/bootstrap-5.1.3-dist/css/bootstrap.css">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/responsive.css">
        <link rel="stylesheet" href="styles/fontawesome-free-6.0.0-beta2-web/css/all.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style>
        .logo a {top : 0px !important }
        </style>
    </head>
    <body> 

        <!-- the header part of my portfolio -->
        <header>
            <!-- logo -->
            <div data-aos="fade-right" data-aos-duration="900" class="logo">
                <a href="index.php" title="home">baaliDev</a>
                <a href="index.php" title="home">baaliDev</a>
            </div>
            <nav >
                <!--menu-btn  -->
                <input class="menu-btn" type="checkbox" id="menu-btn">
                <label class="menu-icon" for="menu-btn">
                    <span class="nav-icon"></span>
                </label>
                <ul  data-aos="fade-left"  data-aos-duration="900"  class="nav">
                    <li class="nav-item"><a class="nav-link" href="#home">home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#about">about me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#big-projects">projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#other">otherCoolStuff</a></li>
                    <li class="nav-item"><a class="nav-link" href="form.php">contact</a></li>
                </ul>
            </nav>
        </header>

        <!-- the home  section  -->
        <main>
            <div id="home">
                <div data-aos="fade-right" data-aos-duration="900" class="content-home">
                   <h2 class=" fs-3">welcome i'm Abdessamad</h2>
                    <h1 class=" display-4 ">Full-Stack developer</h1>
                    <q class="fw-lighter fs-4 text-center">Website without visitors is like a ship lost in the horizon</q>
                </div>
                <div class="social-media">
                    <a  target="_blank"  href="https://github.com/AbdessamadBaali"><i class="fab fa-github" aria-hidden="true"></i></a>
                    <a  target="_blank" href="https://www.linkedin.com/in/abdessamad-baali-9a09b91ab/"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                    <a  target="_blank" href="https://twitter.com/CodeBaali"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a  target="_blank" href="https://www.instagram.com/abdessamad.baali/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </main>

        <!-- the about section -->
        <section id="about" >
            <div data-aos="fade-right" data-aos-duration="1000" class="row">
                <div  class="col-lg-9 col-md-12">
                    <h2 >about me</h2>
                    <p> 
                        Hi, I'm Abdessamad Baali.I'm a Full Stack developer  with over 2 years of experience. who  wants to put my skills to good use by assisting others. i strive to provide 100% customer care to all of my customers.. For an in-depth insight into my skills and qualification I invite you to check out my 
                        <a href="domument/Resume.pdf" target="_blank"> my Resume</a>.
                    </p>

                    <!-- this part is for read more -->
                    <div  id="readMore">
                        <div class="card card-body ">
                            <p>
                                As I said before, my name is Abdessamad. I'm a 20 years old young man from Morocco. I first found out about this programming field in 2020 and liked it so much, so I decided that is what I'm gonna do. After doing a ton of research on the internet, I did find that it's a large domain, and it's possible to get into this industry without a degree by being self-taught. After that, I picked web development because it's kind of holding the stick from the middle, and you can transact to related fields later.
                                So I departed on this journey.
                                I used a wide collection of resources in my learning,
                                from freeCodeCamp and MDN to YouTube
                                (I watched so many videos from these channels :<a target="_blank" href="https://developer.mozilla.org/">MDN</a>
                                <a target="_blank" href="https://www.freecodecamp.org/">freeCodeCamp</a>,
                                codewithmosh, elzero web school, and so many others). solved so many algorithmic challenges over HackerRank, and build so many projects. I devoted all of my time and effort to this. It was a rough journey, full of hard times and bugs. But I didn't give up and I won't do.
                                And here I'm, after several months of constant battle. That was a quick glimpse into my journey, hope you like it.
                            </p>          
                        </div>
                    </div> 
                    
                </div>
                <!-- this is the  box of the imag -->
                <div class="box-img-about col-3">
                    <img class="" src="images/avataaars.svg" alt="image of avatar">
                </div>

                <!-- btn onclick display span of read more -->
                <p>  
                    <a id="read-more-btn" class="btn btn-warning">Read More</a>
                </p>
            </div> 
        </section>

        <!--  skills -->
        <section id='skills' class="container-fluid ">
            <h2 class="text-white">skills</h2>
            <h3 class="h4 p-4 text-white">programming languages & tools</h3>   
            <p class="desc">
                I have just started my journey, now I am next level programmer,
                I am ready to learn new things and I am ready to make my own projects,
                with high experience and knowled. <br>
                I started programming in high school and I have been programming since then,
                with the love of creating websites, applications and smart programs. <br>
                I have been programming for about 2 years now.
            </p>
            <div class="row  justify-content-around">
                <!-- html5 -->
                <div  data-aos="fade-right" data-aos-duration="1000">
                    <i class="fab fa-html5 fs-4 "></i> <span class="fs-5">HTML5 & Css3 (Grid Layout & FlexBox)</span>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: 95%">95%</div>
                    </div>
                    <p class="desc">
                        To create an amazing website, you reallly need to work with positon,
                        get the right modern and beautiful look, hence i loved to get the 
                        ultimate guid in grid and flexbox.
                    </p>
                </div>

                <!-- javaScripit -->
                <div  data-aos="fade-right" data-aos-duration="1000">
                    <i class="fab fa-js fs-4 "></i>  <span class="fs-5">JavaScripit</span>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: 80%">80%</div>
                    </div>
                    <p class="desc">
                        I love JavaScripit and i love to create new projects
                        and programs and wesites using this powerful language
                    </p>
                </div>
                <!-- python -->
                <div  data-aos="fade-right" data-aos-duration="1000">
                    <i class="fab fa-python fs-4 "></i><span class="fs-5">Object Oriented Programming (python)</span>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: 80%">80%</div>
                    </div>
                    <p class="desc">
                        Object Orented Programming is a programming paradigm that uses objects and thei
                        interactions to solve problems and it was very improtant for me to learn it using python.
                        comming days i'll learn more about it in other languages.
                    </p>
                </div>

                <!-- sql -->
                <div  data-aos="fade-right" data-aos-duration="1000">
                    <i class="fa fa-database fs-4 "></i><span class="fs-5"> Database SQL & MySQL</span>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: 60%">60%</div>
                    </div>
                    <p class="desc">
                        My level getting higher day agter day, i've learned more about databases and
                        it's role.
                        I can now crete databases and tables, and i can also create queries and executes them.
                    </p>
                </div>

                <!-- php -->
                <div  data-aos="fade-right" data-aos-duration="1000">
                    <i class="fab fa-php fs-4"> </i>  <span class="fs-5">PHP</span>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: 40%">40%</div>
                    </div>
                    <p class="desc">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, iusto. Nihil quaerat ex pariatur in amet magni sit modi libero eius perferendis.
                        Sapiente excepturi accusantium quia laboriosam cumque error iure!
                    </p>
                </div>

                <!-- jquery -->
                <div  data-aos="fade-right" data-aos-duration="1000">
                    <i class="fa fa-data fs-4"> </i>  <span class="fs-5">JQuery</span>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: 80%">80%</div>
                    </div>
                    <p class="desc">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, iusto. Nihil quaerat ex pariatur in amet magni sit modi libero eius perferendis.
                        Sapiente excepturi accusantium quia laboriosam cumque error iure!
                    </p>
                </div>

                <!-- bootstrap -->
                <div  data-aos="fade-right" data-aos-duration="1000">
                    <i class="fab fa-bootstrap fs-4"></i> <span class="fs-5">bootstrap</span>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: 90%">90%</div>
                    </div>
                    <p class="desc">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, iusto. Nihil quaerat ex pariatur in amet magni sit modi libero eius perferendis.
                        Sapiente excepturi accusantium quia laboriosam cumque error iure!
                    </p>
                </div>

                <!-- wordpress -->
                <div  data-aos="fade-right" data-aos-duration="1000">
                    <i class="fab fa-wordpress fs-4 "></i><span class="fs-5">wordpress</span>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: 75%">75%</div>
                    </div>
                    <p class="desc">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, iusto. Nihil quaerat ex pariatur in amet magni sit modi libero eius perferendis.
                        Sapiente excepturi accusantium quia laboriosam cumque error iure!
                    </p>
                </div>
            </div>
            
        </section>

        <!-- projects section --> 
        <section id="big-projects" class="container-fuild  p-3 text-center" >

            <h2 >my projects</h2>
            <h3 class="mb-3">a selection of my  projects.</h3>

            <div class="all-project">

                <!-- python project login systeme -->
                <div   class="project ">       
                    <img class="project-one " src="images/projects/contact.png" alt="">
                    <div class="into-project">
                        <a  class="btn">vieu </a>  
                        <a  class="btn" target="_blank"
                            href="https://github.com/AbdessamadBaali/login-system"><i class="fab fa-github"></i>github
                        </a>
                    </div>
                </div>

                <!-- the first project -->
                <div  class="project ">      
                    <img class="project-one" src="images/projects/projectOmar-min.png" alt="image of the project">
                    <div class="into-project">
                        <a  class="btn " target="_blank"
                             href="https://omarkabiri.netlify.app">vieu
                        </a>
                        <a  class="btn " target="_blank"
                            href="https://github.com/AbdessamadBaali/portfolioPoject"><i class="fab fa-github"></i>github
                        </a>
                    </div>
                </div>

                <!-- the second project -->
                <div   class="project ">       
                    <img class="project-one " src="images/projects/weather app.png" alt="">
                    <div class="into-project">
                        <a  class="btn " target="_blank"
                            href="https://weatherbaalidev.netlify.app/">vieu
                        </a>  
                        <a  class="btn " target="_blank"
                            href="https://github.com/AbdessamadBaali/weather-app"><i class="fab fa-github"></i>github
                        </a>
                    </div>
                </div>

                <!-- portfolio project -->
                <div   class="project ">       
                    <img class="project-one " src="images/projects/project2.png" alt="">
                    <div class="into-project">
                        <a  class="btn" target="_blank"
                            href="https://01portfolio.netlify.app/">vieu
                        </a>
                        <a  class="btn" target="_blank"
                            href="https://github.com/AbdessamadBaali/portfolio-01"><i class="fab fa-github"></i>github
                        </a>
                    </div>
                </div>
                <!-- wordpress project -->
                <!-- <div   class="project ">       
                    <img class="project-one " src="images/projects/wordpress.png" alt="">
                    <div class="into-project">
                        <a  class="btn " target="_blank"
                            href="http://baali.ga">vieu
                        </a>  
                        <a  class="btn" target="_blank"
                            href="https://github.com/AbdessamadBaali/portfolio-01"><i class="fab fa-github"></i>github
                        </a>
                    </div>
                </div> -->
            </div>
        </section>

        <!-- need a disgner sectin  -->
        <section id="work-together" class="d-flex flex-column align-items-center bg-muted">
            <p class="text-uppercase ">need a disgner?</p>
            <h2 class="fs-2">let's works together <a class="text-decoration-none" ck href="#contact">&rarr;</a></h2>
        </section>

        <!-- other cool stuff section -->
        <section id="other">  
            <h2 class=" m-5">other cool stuff</h2>

            <div class="container-fluid">
                <p class="other-paragraph">
                    you can find all my works in github check it know
                    <a target="_blanck" href="https://www.github.com/AbdessamadBaali">AbdessamadGithub</a> 
                </p>
                <div class="row container-other justify-content-center
                row-cols-sm-2 row-cols-md-2 row-cols-xl-3"> 

                    <!-- js doc -->
                    <div  class="card  ">
                        <div class="container-img">
                            <img src="images/otherCoolStuff/jsDocumentation.png" alt="photo of the projoct javaScripit">
                        </div>
                        <div class="body-card">
                          <h5 >js documentation</h5>
                          <p >documentation for basic javascript.</p>
                          <a href="https://github.com/AbdessamadBaali/js-documentation" target="_blank"> <i class="fab fa-github fa"></i>github</a>
                        </div>
                    </div>

                    <!--bill gates doc -->
                    <div  class="card  ">
                        <div class="container-img">
                            <img src="images/otherCoolStuff/billGates.png" alt="project photo bill gates docs">
                        </div>                        <div class="body-card">
                          <h5 >bill Gates documentation</h5>
                          <p >Documentation on the life of Bill Gates.</p>
                          <a   href="https://github.com/AbdessamadBaali/Bills-Gates-doc"  target="_blank"> <i class="fab fa-github fa"></i>github</a>
                        </div>
                    </div>

                    <!-- form  -->
                    <div  class="card  ">
                        <div class="container-img">
                            <img src="images/otherCoolStuff/form.png"  alt="photo form project ">
                        </div>
                        <div class="body-card">
                          <h5 >Inprove The Platform</h5>
                          <p >This is a platform to improve the a website.</p>
                          <a   href="https://github.com/AbdessamadBaali/form" target="_blank"> <i class="fab fa-github fa"></i>github</a>
                        </div>
                    </div>

                    <!-- calutaltore -->
                    <div  class="card  " >
                        <div class="container-img">
                            <img src="/images/otherCoolStuff/calc.png" alt="photo of the projoct to do list">
                        </div>
                        <div class="body-card">
                            <h5 >simple calculator</h5>
                            <p >this is a simple calculator create with html5,css3,jquery</p>
                            <a href="https://calcbaalidev.netlify.app/" target="_blanck" >vieus</a>
                            <a  target="_blanck" href="https://github.com/AbdessamadBaali/calulator" 
                                target="_blank"> <i class="fab fa-github fa"></i>github</a>
                        </div>
                    </div>  

                    <!-- take a random color  -->
                    <div  class="card  " >
                        <div class="container-img">
                            <img src="/images/otherCoolStuff/memeberapp.png"  alt="photo of the projoct Member management app">
                        </div>
                        <div class="body-card">
                          <h5 >Member Management</h5>
                          <p >Member management app, Languages used: Python sqlite3.</p>
                          <a  href="https://github.com/AbdessamadBaali/management-member"
                             target="_blank"> <i class="fab fa-github fa"></i>github</a>
                        </div>
                    </div>

                    <!-- to do list -->
                    <div  class="card  " >
                        <div class="container-img">
                            <img src="/images/otherCoolStuff/toDoList-min.png" class="card-img-top" alt="photo of the projoct to do list">
                        </div>
                        <div class="body-card">
                          <h5 >stuff Management </h5>
                          <p >
                              app for stuff that you need to do in the day 
                              for be more organised.
                          </p>
                          <a href="https://stufftodobaalidev.netlify.app/" target="_blanck" >vieus</a>
                          <a  target="_blanck" href="https://github.com/AbdessamadBaali/to-do-list" 
                              target="_blank"> <i class="fab fa-github fa"></i>github</a>
                        </div>
                    </div>  

                </div>  
            </div>
        </section>

        <!-- services  -->
        <section id="services" class="p-5">
            <h2 class="mb-5 text-center text-white ">what we offer</h2>
            <div class="row justify-content-around">
                <div data-aos="flip-left" data-aos-duration="900" class="container col-md-4 col-sm-5 p-2 ">
                    <i class="fa fa-mobile-alt"></i>
                    <h4>Designe </h4>
                    <p>Looks great on any screen size!</p>
                </div>
                <div data-aos="flip-up"  data-aos-duration="900"class="container col-md-4 col-sm-5 p-2 ">
                    <i class="fa fa-pen"></i>
                    <h4>Redisigned</h4>
                    <p>Freshlt redesined for you!</p>
                </div>
                <div data-aos="flip-right" data-aos-duration="900" class="container col-md-4 col-sm-5 p-2 ">
                    <i class="fa fa-code"></i>
                    <h4>create your web site</h4>
                    <p>Create A Personnelle Web For Your Busnisse!</p>
                </div> 
            </div>
        </section>

        <!-- footer section  -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffd700" fill-opacity="1" d="M0,256L120,250.7C240,245,480,235,720,218.7C960,203,1200,181,1320,170.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>

        <footer class="footer text-center ">
            <div class="container">
                <ul class="list-inline mb-3">
                    <li class="list-inline-item">
                        <a
                            class="social-link rounded-circle text-white mr-3 bg-black"  target="_blank"
                            href="https://github.com/AbdessamadBaali">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white bg-primary" target="_blank"
                         href="https://twitter.com/CodeBaali"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a 
                            class="social-link rounded-circle text-white bg-danger"
                            target="_blank" href="https://www.instagram.com/abdessamad.baali/">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a 
                            class="social-link rounded-circle text-white  bg-primary" target="_blank"
                            href="https://www.linkedin.com/in/abdessamad-baali-9a09b91ab/">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>

                </ul>
                <span class="text-dark" >Copyright © baaliDev 2022 </span>
                <span class="text-dark" >Baali Abdessamad Full-Stack Developer, UI Designer</span>
            </div>
        </footer>
        
        <!-- java scripr link  -->
        <script src="javaScripit/jquery-3.6.0..js"></script>
        <script src="/javaScripit/script.js"></script>
        <script src="styles/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>