<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="main.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Portfolio</title>
</head>

<body data-spy="scroll" data-target="#navbar-example" data-offset="100">
    
    <!-- Loader page -->
    <div class="loader_container">
      <div class="loading_cont">
        <div class="loader">
          <span></span>
        </div>
        <div class="loading_bar">
          <span></span>
        </div>
      </div>
    </div>
    
  <nav id="navbar-example" class="navbar navbar-expand-md navbar-light nav">
    <a class="navbar-brand logo" href="#home">Hosni Abbes</a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="menu collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav navLinks nav-pills">
        <a class="trigger home_link nav-item nav-link text-white" href="#home">Home <span class="sr-only">(current)</span></a>
        <a class="trigger about_link nav-item nav-link text-white" href="#about">About</a>
        <a class="trigger portfolio_link nav-item nav-link text-white" href="#portfolio">Portfolio</a>
        <a class="trigger services_link nav-item nav-link text-white" href="#services">Services</a>
        <a class="trigger projects_link nav-item nav-link text-white" href="#projects">Projects</a>
        <!-- <a class="trigger articles_link nav-item nav-link" href="#articles">Articles</a> -->
        <a class="trigger contact_link nav-item nav-link text-white" href="#contact">Contact</a>
        <a class="trigger hire-me text-center" href="#contact">Hire me</a>
      </div>
    </div>
  </nav>

  <!-- first partie -->
  <div id="home" class="lay">
    <div id="carouselExampleIndicators" class="carousel slide slider-part" data-ride="carousel">
      <ol class="indic carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/slider.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/hero.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/design.jpg" alt="Third slide">
        </div>
      </div>
    </div>
    <div class="hello">
      <div class="text-center hello-cont">
        <h1 class="">Hi, I'm Hosni Abbes</h1>
        <span>I'm, </span>
        <span class="title"></span>
        <div class="btns-cont">
          <a class="trigger btn-contact-me" href="#contact">Contact Me</a>
          <a class="trigger btn-portfolio" href="#portfolio">My Portfolio</a>
        </div>
      </div>
    </div>
  </div>

  <!-- continer -->
  <div class="cont container">
    <!-- about -->
    <div id="about" class="about">
      <h1 class="text-center font-weight-bold">About Me</h1>
      <div class="row">
        <div class="col-md-6 avatar-div">
          <img src="images/profile.png" alt="avatar">
        </div>
        <div class="col-md-6 about-info">
          <p class="descrip"><span>Tunisian Full Stack Web Developer.</span>
            I am a Tunisian full stack web developer, i have good skills in web development and design with more than
            3 years working in freelance.</p>
          <p class="descrip">Also, I am video editor and creator, Youtube content creator.</p>
          <p class="descrip">I offer some social media business (sponsoring, sell pages, accounts, grow facebook pages and instagram likes and followers).</p>
          <a class="download-cv" href="images/cv.pdf" download>Download CV</a>
        </div>
      </div>
    </div>
    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
      <h1 class="text-center font-weight-bold">Portfolio</h1>
      <div class="row">
        <div class="col-lg-6 skills-progress">
          <h3 class="text-center">My Skills</h3>
          <label>HTML</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
          </div>
          <label>CSS</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
          </div>
          <label>JavaScript</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
          </div>
          <label>PHP</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
          </div>
          <label>MySQL</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
          </div>
          <label>Python</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
          </div>
          <label>React+Redux</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
          </div>
          <label>Bootstrap</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
          </div>
          <label>Vue</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
          </div>
          <label>jQuery</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
          </div>
          <label>Ajax+Json</label>
          <div class="progress heig">
            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
          </div>
          <div class="show-more-skill d-none">
            <label>Sass</label>
            <div class="progress heig">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
            </div>
            <label>CMS (Wordpress)</label>
            <div class="progress heig">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
            <label>Jest</label>
            <div class="progress heig">
              <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
            </div>
            <label>Pug.js</label>
            <div class="progress heig">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
            </div>
            <label>Gulp.js</label>
            <div class="progress heig">
              <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
            </div>
            <label>Git/Github</label>
            <div class="progress heig">
              <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>
          </div>
          <span class="skills-more">Show More...</span>
        </div>
        <!-- certific -->
        <div class="col-lg-6 certifications">
          <h3 class="text-center">Certifications</h3>
          <div class="row cerrtif">
            <div class="col-lg-6 cer"><img src="images/fullstack.png" alt="fullstack certificate"></div>
            <div class="col-lg-6 cer"><img src="images/5.png" alt="javascript certificate"></div>
            <div class="col-lg-6 cer"><img src="images/4.png" alt="javascript certificate"></div>
            <div class="col-lg-6 cer"><img src="images/1.jpg" alt="css certificate"></div>
            <div class="row show-more-cert d-none" style="margin:0px;">
              <div class="col-lg-6 cer"><img src="images/6.jpg" alt="html certificate"></div>
              <div class="col-lg-6 cer"><img src="images/7.png" alt="sql certificate"></div>
              <div class="col-lg-6 cer"><img src="images/8.jpg" alt="jquery certificate"></div>
              <div class="col-lg-6 cer"><img src="images/9.jpg" alt="php certificate"></div>
              <div class="col-lg-6 cer"><img src="images/10.jpg" alt="react js certificate"></div>
              <div class="col-lg-6 cer"><img src="images/3.jpg" alt="digital marketing certificate"></div>
            </div>
          </div>
          <span class="cert-more">Show More...</span>

        </div>


      </div>
    </div>

    <!-- Services -->
    <div id="services" class="services-cont text-center">
      <h1 class="font-weight-bold">Servises</h1>
      <div class="card-deck services">
        <div class="card card-cont">
          <div class="card-body crd-cnt">
            <h5 class="card-title text-center">Web Design</h5>
            <p class="card-text">Design, build and improve websites</p>
          </div>
        </div>
        <div class="card card-cont">
          <div class="card-body crd-cnt">
            <h5 class="card-title text-center">Web Development</h5>
            <p class="card-text">Create and maintain websites.</p>
            <p class="card-text">Handle the technical aspects of a website, including its performance and capacity.</p>
          </div>
        </div>
        <div class="card card-cont">
          <div class="card-body crd-cnt">
            <h5 class="card-title text-center">Dynamic, Secure websites</h5>
            <p class="card-text">Create dynamic, responsive and secure websites</p>
            <p class="card-text">Testing and fixing issues.</p>
          </div>
        </div>
      </div>
    </div>


    <!-- projects -->
    <div id="projects" class="projects">
      <h1 class="text-center font-weight-bold">Projects</h1>
      <div class="the_proj row">
        <div class="col-lg-4 card project">
          <div class="card-body">
            <h2>Chat app</h2>
            <p>Chat application, chat with  friends worldwide.</p>
            <h5>Technologies used:</h5>
            <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>JavaScript</li>
              <li>PHP</li>
              <li>MySQL</li>
            </ul>
            <a href="http://jbnx.000webhostapp.com/chatapp" class="btn btn-primary mt-3 btn-set" target="_blank">Check Website</a>
          </div>
        </div>
        <div class="col-lg-4 card project">
          <div class="card-body">
            <h2>Online Market</h2>
            <p>Online Market, You can sell and buy products online.</p>
            <h5>Technologies used:</h5>
            <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>Bootstrap</li>
              <li>JavaScript</li>
              <li>jQuery</li>
              <li>PHP</li>
              <li>MySQL</li>
            </ul>
            <a href="http://frippshop.000webhostapp.com/sellandbuy" class="btn btn-primary mt-3 btn-set" target="_blank">Check Website</a>
          </div>
        </div>
        
        <div class="col-lg-4 card project">
          <div class="card-body">
            <h2>Small projects</h2>
            <a href="https://template-wetransfer.netlify.app" class="btn btn-primary mt-3 btn-set" target="_blank">Responsive Template (Bootstrap 5 + jQuery) </a>
            <a href="https://yoga-template.netlify.app/" class="btn btn-primary mt-3 btn-set" target="_blank">Responsive Template With Bootstrap 5</a>
             <a href="https://mazraati.netlify.app/" class="btn btn-primary mt-3 btn-set" target="_blank">Arabic Website (HTML5, CSS3, Bootstrap 5)</a>
            <a href="http://frippshop.000webhostapp.com/hosBoot/" class="btn btn-primary mt-3 btn-set" target="_blank">Responsive Template With Bootstrap 4</a>
            <a href="http://frippshop.000webhostapp.com/hosResp/" class="btn btn-primary mt-3 btn-set" target="_blank">Responsive Template Without Frameworks</a>
            <a href="http://frippshop.000webhostapp.com/hosContact/contact.php" class="btn btn-primary mt-3 btn-set" target="_blank">Contact Form with PHP and JS</a>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Articles -->
    <!-- <h1 class="text-center font-weight-bold">Articles</h1>
    <div class="row articles">
      <div class="col-md-4 article">
        <h3 class="text-center">article one</h3>
        <img src="" alt="image art1">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta inventore quo corrupti necessitatibus incidunt maiores ipsa vel alias architecto sit. Sit dolor laboriosam, totam sed vitae ratione distinctio porro hic.</p>
      </div>
      <div class="col-md-4 article">
        <h3 class="text-center">article two</h3>
        <img src="" alt="image art2">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta inventore quo corrupti necessitatibus incidunt maiores ipsa vel alias architecto sit. Sit dolor laboriosam, totam sed vitae ratione distinctio porro hic.</p>
      </div>
      <div class="col-md-4 article">
        <h3 class="text-center">article three</h3>
        <img src="" alt="image art3">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta inventore quo corrupti necessitatibus incidunt maiores ipsa vel alias architecto sit. Sit dolor laboriosam, totam sed vitae ratione distinctio porro hic.</p>
      </div>
      <div class="col-md-4 article">
        <h3 class="text-center">article four</h3>
        <img src="" alt="image art4">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta inventore quo corrupti necessitatibus incidunt maiores ipsa vel alias architecto sit. Sit dolor laboriosam, totam sed vitae ratione distinctio porro hic.</p>
      </div>
    </div> -->


    <!-- Contact -->
    <div id="contact" class="contact">
      <h1 class="text-center font-weight-bold">Contact</h1>
      <div class="row">
        <div class="col-md-6 contact-info">
          <div class="info-pin"><i class="fa fa-phone"></i><a href="tel:+21621217279"> +21621217279</a></div>
          <div class="info-pin"><i class="fa fa-envelope"></i><a href="mailto:hosny.abbes@gmail.com"> hosny.abbes@gmail.com</a></div>
          <div class="info-pin"><i class="fa fa-map-marker-alt"></i><span> Tunisia</span></div>
          <div class="info-links">
            <a href="https://github.com/Hosni-Abbes" target="_blank"><i class="fab fa-github"></i><span>Github</span></a>
            <a href="https://www.linkedin.com/in/hosni-abbes" target="_blank"><i class="fab fa-linkedin"></i><span>LinkedIn</span></a>
            <a href="https://www.hackerrank.com/hosny_abbes" target="_blank"><i class="fab fa-hackerrank"></i><span>Hackerrank</span></a>
            <a href="https://www.youtube.com/channel/UCOrZHfCwhbg6-a_6FwHErYg" target="_blank"><i class="fab fa-youtube"></i><span>Youtube</span></a>
            <a href="https://www.facebook.com/hosni.abbes" target="_blank"><i class="fab fa-facebook"></i><span>Facebook</span></a>
            <a href="https://www.instagram.com/hosni.abbes" target="_blank"><i class="fab fa-instagram"></i><span>Instagram</span></a>
          </div>
        </div>
        <form action="#" class="col-md-6 contact-form">
          <span class="d-block mb-3">Send Message</span>
          <!-- msg seccess -->
          <div class="text-center d-none alert alert-success alert-dismissible fade show" role="alert">
          <span class="msgSuccess position-relative"></span>
            <span class="clos closSucc">x</span>
          </div>
          <!-- msg failed -->
          <div class="text-center d-none alert alert-danger alert-dismissible fade show" role="alert">
            <span class="msgFailed position-relative"></span>
            <span class="clos closErrs">x</span>
          </div>
          <div class='row'>
            <input class="name col-12" type="text" name="name" placeholder="Name">
            <input class="email col-12" type="email" name="email" placeholder="Email">
            <input class="subj col-12" type="text" name="subj" placeholder="Subject">
            <textarea class="msg col-12" name="msg" placeholder="Your message"></textarea>
            <button class="sendBtn btn btn-primary col-12" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>

  </div>   <!--container -->

  <!-- scroll top btn -->
  <a href="#home" class="totop-btn">
    <i class="fa fa-arrow-circle-up"></i>
  </a>

  <footer class="text-center text-white">
    <p>hosniabbes &copy; <?php echo date('Y');?> all rights reserved.</p>
  </footer>

  <script src="main.js"></script>
  <script src="formsend.js"></script>
  </body>
</html>