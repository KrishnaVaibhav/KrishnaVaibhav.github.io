<?php require 'PHPMailer/PHPMailerAutoload.php';?>
<?php
function Redirect_to($New_Location)
{header("Location:" . $New_Location);
    exit;
}

if (isset($_POST['send'])) {
    contact();
}

function contact()
{
    if (isset($_POST["send"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $msg = $_POST["msg"];
        date_default_timezone_set('Ist/UTC');

        $mail = new PHPMailer();

        $mail->setFrom($_POST['email']);
        $mail->addAddress('krishvaibav@gmail.com');

        // The subject of the msg.
        $mail->Subject = 'Contact Form [' . $name .'] - '.$subject;

        $msg = '<html><body>';

        $msg .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $msg .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";

        $msg .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";

        $msg .= "<tr><td><strong>subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";

        $msg .= "<tr><td><strong>msg</strong> </td><td>" . strip_tags($_POST['msg']) . "</td></tr>";

        $msg .= "</table>";
        $msg .= "</body></html>";

        $mail->Body = $msg;

        $mail->isHTML(true);

        if ($mail->send()) {
            Redirect_to("thanks.html");
        } else {
            Redirect_to("index.php");
        }

    } 

}

?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>KRISHNA VAIBHAV</title>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
      rel="stylesheet"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet" />
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet" />
    <link href="css/main.css?ver=1.1.0" rel="stylesheet" />
    <noscript>
      <style type="text/css">
        [data-aos] {
          opacity: 1 !important;
          transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <script src="/scripts/load.js"></script>
    <header>
      <div class="profile-page sidebar-collapse">
        <nav
          class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary"
          color-on-scroll="400"
        >
          <div class="container">
            <div class="navbar-translate">
              <img src="/favicon_io/favicon-32x32.png" class="navbar-brand" href="#" rel="tooltip"></img>
              <button
                class="navbar-toggler navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navigation"
                aria-controls="navigation"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-bar bar1"></span
                ><span class="navbar-toggler-bar bar2"></span
                ><span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navigation"
            >
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link smooth-scroll" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link smooth-scroll" href="#skill">Skills</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link smooth-scroll" href="#portfolio"
                    >Portfolio</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link smooth-scroll" href="#experience"
                    >Experience</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link smooth-scroll" href="#contact">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
        <div class="profile-page">
          <div class="wrapper">
            <div class="page-header page-header-small" filter-color="green">
              <div
                class="page-header-image"
                data-parallax="true"
                style="background-image: url('images/cc-bg-1.jpg')"
              ></div>
              <div class="container">
                <div class="content-center">
                  <div class="cc-profile-image">
                    <a href="#"><img src="images/anthony.jpg" alt="Image" /></a>
                  </div>
                  <div class="h2 title">KRISHNA VAIBHAV</div>
                  <p class="category text-white">
                    Web Developer, Penetration Tester, Programmer
                  </p>
                  <a
                    class="btn btn-primary smooth-scroll mr-2"
                    href="#contact"
                    data-aos="zoom-in"
                    data-aos-anchor="data-aos-anchor"
                    >Hire Me</a
                  >
                  <a
                    type="submit"
                    class="btn btn-primary"
                    href="README.txt"
                    data-aos="zoom-in"
                    data-aos-anchor="data-aos-anchor"
                    download
                    >Download CV</a
                  >
                </div>
              </div>
              <div class="section">
                <div class="container">
                  <div class="button-container">
                    <a
                      class="btn btn-default btn-round btn-lg btn-icon b-f"
                      href="mailto:krishnavaibhav.y@gmail.com"
                      target="_blank"
                      rel="tooltip"
                      title="Follow me on Facebook"
                      ><i class="bi bi-envelope-fill"></i></a
                    >
                    <a
                      class="btn btn-default btn-round btn-lg btn-icon b-li"
                      href="https://www.linkedin.com/in/krishna-vaibhav-94b740169/"
                      target="_blank"
                      rel="tooltip"
                      title="Follow me on LinkedIn"
                      ><img src="/images/linkedin.png"  id="penico1"  alt="LinkedIn" ></a
                    >
                    <a
                      class="btn btn-default btn-round btn-lg btn-icon b-t"
                      href="https://pentesterlab.com/profile/Vaibhav"
                      rel="tooltip"
                      title="Check out my PentesterLab Profile"
                      target="_blank"
                      ><img src="/images/logo-icon.png"  id="penico"  alt="pentesterlab" >
                      </a>
                    <a
                      class="btn btn-default btn-round btn-lg btn-icon b-th"
                      href="https://tryhackme.com/p/KrishnaVaibhav"
                      rel="tooltip"
                      title="Check out my TryHackME Profile"
                      target="_blank"
                      ><img src="/images/tryhackme.png"  id="penico"  alt="TryHackME" >
                      </a>
                    <!-- <a
                      class="btn btn-default btn-round btn-lg btn-icon b-g"
                      href="#"
                      rel="tooltip"
                      title="Follow me on Google+"
                      ><i class="fa fa-google-plus"></i></a
                    > -->
                    <a
                      class="btn btn-default btn-round btn-lg btn-icon b-i"
                      href="https://www.instagram.com/krishnavaibhv/"
                      target="_blank"
                      rel="tooltip"
                      title="Follow me on Instagram"
                      ><i class="fa fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section" id="about" onload="fnCalculateAge()">
          <div class="container">
            <div class="card" data-aos="fade-up" data-aos-offset="10">
              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="card-body">
                    <div class="h4 mt-0 title">About</div>
                    <p>
                      Hello! I am Krishna Vaibhav. Programmer, Web Developer, Penetration Tester.
                    </p>
                    <p>
                      A curious security enthusiast who is 
                      always looking for ways to find 
                      vulnerabilities. Strong in design and 
                      integration with intuitive problem solving skills. Passionate about finding 
                      Vulnerabilities and resolving them

                    </p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="card-body">
                    <div class="h4 mt-0 title">Basic Information</div>
                    <div class="row">
                      <div class="col-sm-4">
                        <strong class="text-uppercase">Age:</strong>
                      </div>
                      <div class="col-sm-8" id="result">24</div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4">
                        <strong class="text-uppercase">Email:</strong>
                      </div>
                      <div class="col-sm-8">**********@gmail.com</div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4">
                        <strong class="text-uppercase">Phone:</strong>
                      </div>
                      <div class="col-sm-8">+91********</div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4">
                        <strong class="text-uppercase">Address:</strong>
                      </div>
                      <div class="col-sm-8">
                        Hyderabad, AndhraPradesh, India
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-4">
                        <strong class="text-uppercase">Language:</strong>
                      </div>
                      <div class="col-sm-8">English, Hindi, Telugu</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section" id="skill">
          <div class="container">
            <div class="h4 text-center mb-4 title">Professional Skills</div>
            <div
              class="card"
              data-aos="fade-up"
              data-aos-anchor-placement="top-bottom"
            >
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="progress-container progress-primary">
                      <span class="progress-badge">HTML,css</span>
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-primary"
                          data-aos="progress-full"
                          data-aos-offset="10"
                          data-aos-duration="2000"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 75%"
                        ></div>
                        <span class="progress-value">75%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="progress-container progress-primary">
                      <span class="progress-badge">Python</span>
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-primary"
                          data-aos="progress-full"
                          data-aos-offset="10"
                          data-aos-duration="2000"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 75%"
                        ></div>
                        <span class="progress-value">75%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="progress-container progress-primary">
                      <span class="progress-badge">JavaScript</span>
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-primary"
                          data-aos="progress-full"
                          data-aos-offset="10"
                          data-aos-duration="2000"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 50%"
                        ></div>
                        <span class="progress-value">50%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="progress-container progress-primary">
                      <span class="progress-badge">c/c++ and Java</span>
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-primary"
                          data-aos="progress-full"
                          data-aos-offset="10"
                          data-aos-duration="2000"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 60%"
                        ></div>
                        <span class="progress-value">60%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="progress-container progress-primary">
                      <span class="progress-badge">Penetration Testing</span>
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-primary"
                          data-aos="progress-full"
                          data-aos-offset="10"
                          data-aos-duration="2000"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 75%"
                        ></div>
                        <span class="progress-value">75%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="progress-container progress-primary">
                      <span class="progress-badge">Networking</span>
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-primary"
                          data-aos="progress-full"
                          data-aos-offset="10"
                          data-aos-duration="2000"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 60%"
                        ></div>
                        <span class="progress-value">60%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="progress-container progress-primary">
                      <span class="progress-badge">Linux</span>
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-primary"
                          data-aos="progress-full"
                          data-aos-offset="10"
                          data-aos-duration="2000"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 60%"
                        ></div>
                        <span class="progress-value">60%</span>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="progress-container progress-primary">
                      <span class="progress-badge">Networking</span>
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-primary"
                          data-aos="progress-full"
                          data-aos-offset="10"
                          data-aos-duration="2000"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 60%"
                        ></div>
                        <span class="progress-value">60%</span>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section" id="experience">
          <div class="container cc-experience">
            <div class="h4 text-center mb-4 title">Work Experience</div>
            <div class="card">
              <div class="row">
                <div
                  class="col-md-3 bg-primary"
                  data-aos="fade-right"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body cc-experience-header">
                    <p>March 2016 - Present</p>
                    <div class="h5">CreativeM</div>
                  </div>
                </div>
                <div
                  class="col-md-9"
                  data-aos="fade-left"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body">
                    <div class="h5">Front End Developer</div>
                    <p>
                      Euismod massa scelerisque suspendisse fermentum habitant
                      vitae ullamcorper magna quam iaculis, tristique sapien
                      taciti mollis interdum sagittis libero nunc inceptos
                      tellus, hendrerit vel eleifend primis lectus quisque
                      cubilia sed mauris. Lacinia porta vestibulum diam integer
                      quisque eros pulvinar curae, curabitur feugiat arcu
                      vivamus parturient aliquet laoreet at, eu etiam pretium
                      molestie ultricies sollicitudin dui.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="row">
                <div
                  class="col-md-3 bg-primary"
                  data-aos="fade-right"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body cc-experience-header">
                    <p>April 2014 - March 2016</p>
                    <div class="h5">WebNote</div>
                  </div>
                </div>
                <div
                  class="col-md-9"
                  data-aos="fade-left"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body">
                    <div class="h5">Web Developer</div>
                    <p>
                      Euismod massa scelerisque suspendisse fermentum habitant
                      vitae ullamcorper magna quam iaculis, tristique sapien
                      taciti mollis interdum sagittis libero nunc inceptos
                      tellus, hendrerit vel eleifend primis lectus quisque
                      cubilia sed mauris. Lacinia porta vestibulum diam integer
                      quisque eros pulvinar curae, curabitur feugiat arcu
                      vivamus parturient aliquet laoreet at, eu etiam pretium
                      molestie ultricies sollicitudin dui.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="row">
                <div
                  class="col-md-3 bg-primary"
                  data-aos="fade-right"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body cc-experience-header">
                    <p>April 2013 - February 2014</p>
                    <div class="h5">WEBM</div>
                  </div>
                </div>
                <div
                  class="col-md-9"
                  data-aos="fade-left"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body">
                    <div class="h5">Intern</div>
                    <p>
                      Euismod massa scelerisque suspendisse fermentum habitant
                      vitae ullamcorper magna quam iaculis, tristique sapien
                      taciti mollis interdum sagittis libero nunc inceptos
                      tellus, hendrerit vel eleifend primis lectus quisque
                      cubilia sed mauris. Lacinia porta vestibulum diam integer
                      quisque eros pulvinar curae, curabitur feugiat arcu
                      vivamus parturient aliquet laoreet at, eu etiam pretium
                      molestie ultricies sollicitudin dui.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="container cc-education">
            <div class="h4 text-center mb-4 title">Education</div>
            <div class="card">
              <div class="row">
                <div
                  class="col-md-3 bg-primary"
                  data-aos="fade-right"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body cc-education-header">
                    <p>2018 - 2022</p>
                    <div class="h5">Bachelor's Degree</div>
                  </div>
                </div>
                <div
                  class="col-md-9"
                  data-aos="fade-left"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body">
                    <div class="h5">Bachelor of Computer Science and Engnieering</div>
                    <p class="category">Candigarh University</p>
                    <p>
                      Euismod massa scelerisque suspendisse fermentum habitant
                      vitae ullamcorper magna quam iaculis, tristique sapien
                      taciti mollis interdum sagittis libero nunc inceptos
                      tellus, hendrerit vel eleifend primis lectus quisque
                      cubilia sed mauris. Lacinia porta vestibulum diam integer
                      quisque eros pulvinar curae, curabitur feugiat arcu
                      vivamus parturient aliquet laoreet at, eu etiam pretium
                      molestie ultricies sollicitudin dui.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="card">
              <div class="row">
                <div
                  class="col-md-3 bg-primary"
                  data-aos="fade-right"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body cc-education-header">
                    <p>2009 - 2013</p>
                    <div class="h5">Bachelor's Degree</div>
                  </div>
                </div>
                <div
                  class="col-md-9"
                  data-aos="fade-left"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body">
                    <div class="h5">Bachelor of Computer Science</div>
                    <p class="category">University of Computer Science</p>
                    <p>
                      Euismod massa scelerisque suspendisse fermentum habitant
                      vitae ullamcorper magna quam iaculis, tristique sapien
                      taciti mollis interdum sagittis libero nunc inceptos
                      tellus, hendrerit vel eleifend primis lectus quisque
                      cubilia sed mauris. Lacinia porta vestibulum diam integer
                      quisque eros pulvinar curae, curabitur feugiat arcu
                      vivamus parturient aliquet laoreet at, eu etiam pretium
                      molestie ultricies sollicitudin dui.
                    </p>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="card">
              <div class="row">
                <div
                  class="col-md-3 bg-primary"
                  data-aos="fade-right"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body cc-education-header">
                    <p>2016 - 2018</p>
                    <div class="h5">High School</div>
                  </div>
                </div>
                <div
                  class="col-md-9"
                  data-aos="fade-left"
                  data-aos-offset="50"
                  data-aos-duration="500"
                >
                  <div class="card-body">
                    <div class="h5">Science and Mathematics</div>
                    <p class="category">School of Secondary board</p>
                    <p>
                      Euismod massa scelerisque suspendisse fermentum habitant
                      vitae ullamcorper magna quam iaculis, tristique sapien
                      taciti mollis interdum sagittis libero nunc inceptos
                      tellus, hendrerit vel eleifend primis lectus quisque
                      cubilia sed mauris. Lacinia porta vestibulum diam integer
                      quisque eros pulvinar curae, curabitur feugiat arcu
                      vivamus parturient aliquet laoreet at, eu etiam pretium
                      molestie ultricies sollicitudin dui.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section" id="portfolio">
          <div class="container">
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto">
                <div class="h4 text-center mb-4 title">Portfolio</div>
                <div class="nav-align-center">
                  <ul class="nav nav-pills nav-pills-primary" role="tablist">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        data-toggle="tab"
                        href="#web-development"
                        role="tablist"
                        ><i class="fa fa-laptop" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#graphic-design"
                        role="tablist"
                        ><i class="fa fa-picture-o" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#Photography"
                        role="tablist"
                        ><i class="fa fa-camera" aria-hidden="true"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-content gallery mt-5">
              <div class="tab-pane active" id="web-development">
                <div class="ml-auto mr-auto">
                  <div class="row">
                    <div class="col-md-6">
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#web-development">
                          <figure class="cc-effect">
                            <img src="images/project-1.jpg" alt="Image" />
                            <figcaption>
                              <div class="h4">Recent Project</div>
                              <p>Web Development</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#web-development">
                          <figure class="cc-effect">
                            <img src="images/project-2.jpg" alt="Image" />
                            <figcaption>
                              <div class="h4">Startup Project</div>
                              <p>Web Development</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#web-development">
                          <figure class="cc-effect">
                            <img src="images/project-3.jpg" alt="Image" />
                            <figcaption>
                              <div class="h4">Food Order Project</div>
                              <p>Web Development</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#web-development">
                          <figure class="cc-effect">
                            <img src="images/project-4.jpg" alt="Image" />
                            <figcaption>
                              <div class="h4">Web Advertising Project</div>
                              <p>Web Development</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="graphic-design" role="tabpanel">
                <div class="ml-auto mr-auto">
                  <div class="row">
                    <div class="col-md-6">
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#graphic-design">
                          <figure class="cc-effect">
                            <img
                              src="images/graphic-design-1.jpg"
                              alt="Image"
                            />
                            <figcaption>
                              <div class="h4">Triangle Pattern</div>
                              <p>Graphic Design</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#graphic-design">
                          <figure class="cc-effect">
                            <img
                              src="images/graphic-design-2.jpg"
                              alt="Image"
                            />
                            <figcaption>
                              <div class="h4">Abstract Umbrella</div>
                              <p>Graphic Design</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#graphic-design">
                          <figure class="cc-effect">
                            <img
                              src="images/graphic-design-3.jpg"
                              alt="Image"
                            />
                            <figcaption>
                              <div class="h4">Cube Surface Texture</div>
                              <p>Graphic Design</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#graphic-design">
                          <figure class="cc-effect">
                            <img
                              src="images/graphic-design-4.jpg"
                              alt="Image"
                            />
                            <figcaption>
                              <div class="h4">Abstract Line</div>
                              <p>Graphic Design</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="Photography" role="tabpanel">
                <div class="ml-auto mr-auto">
                  <div class="row">
                    <div class="col-md-6">
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#Photography">
                          <figure class="cc-effect">
                            <img src="images/photography-1.jpg" alt="Image" />
                            <figcaption>
                              <div class="h4">Photoshoot</div>
                              <p>Photography</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#Photography">
                          <figure class="cc-effect">
                            <img src="images/photography-3.jpg" alt="Image" />
                            <figcaption>
                              <div class="h4">Wedding Photoshoot</div>
                              <p>Photography</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#Photography">
                          <figure class="cc-effect">
                            <img src="images/photography-2.jpg" alt="Image" />
                            <figcaption>
                              <div class="h4">Beach Photoshoot</div>
                              <p>Photography</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                      <div
                        class="cc-porfolio-image img-raised"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                      >
                        <a href="#Photography">
                          <figure class="cc-effect">
                            <img src="images/photography-4.jpg" alt="Image" />
                            <figcaption>
                              <div class="h4">Nature Photoshoot</div>
                              <p>Photography</p>
                            </figcaption>
                          </figure></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="section" id="reference">
          <div class="container cc-reference">
            <div class="h4 mb-4 text-center title">References</div>
            <div class="card" data-aos="zoom-in">
              <div
                class="carousel slide"
                id="cc-Indicators"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    class="active"
                    data-target="#cc-Indicators"
                    data-slide-to="0"
                  ></li>
                  <li data-target="#cc-Indicators" data-slide-to="1"></li>
                  <li data-target="#cc-Indicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-lg-2 col-md-3 cc-reference-header">
                        <img src="images/reference-image-1.jpg" alt="Image" />
                        <div class="h5 pt-2">Aiyana</div>
                        <p class="category">CEO / WEBM</p>
                      </div>
                      <div class="col-lg-10 col-md-9">
                        <p>
                          Habitasse venenatis commodo tempor eleifend arcu
                          sociis sollicitudin ante pulvinar ad, est porta cras
                          erat ullamcorper volutpat metus duis platea convallis,
                          tortor primis ac quisque etiam luctus nisl nullam
                          fames. Ligula purus suscipit tempus nascetur curabitur
                          donec nam ullamcorper, laoreet nullam mauris dui
                          aptent facilisis neque elementum ac, risus semper
                          felis parturient fringilla rhoncus eleifend.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-2 col-md-3 cc-reference-header">
                        <img src="images/reference-image-2.jpg" alt="Image" />
                        <div class="h5 pt-2">Braiden</div>
                        <p class="category">CEO / Creativem</p>
                      </div>
                      <div class="col-lg-10 col-md-9">
                        <p>
                          Habitasse venenatis commodo tempor eleifend arcu
                          sociis sollicitudin ante pulvinar ad, est porta cras
                          erat ullamcorper volutpat metus duis platea convallis,
                          tortor primis ac quisque etiam luctus nisl nullam
                          fames. Ligula purus suscipit tempus nascetur curabitur
                          donec nam ullamcorper, laoreet nullam mauris dui
                          aptent facilisis neque elementum ac, risus semper
                          felis parturient fringilla rhoncus eleifend.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-lg-2 col-md-3 cc-reference-header">
                        <img src="images/reference-image-3.jpg" alt="Image" />
                        <div class="h5 pt-2">Alexander</div>
                        <p class="category">CEO / Webnote</p>
                      </div>
                      <div class="col-lg-10 col-md-9">
                        <p>
                          Habitasse venenatis commodo tempor eleifend arcu
                          sociis sollicitudin ante pulvinar ad, est porta cras
                          erat ullamcorper volutpat metus duis platea convallis,
                          tortor primis ac quisque etiam luctus nisl nullam
                          fames. Ligula purus suscipit tempus nascetur curabitur
                          donec nam ullamcorper, laoreet nullam mauris dui
                          aptent facilisis neque elementum ac, risus semper
                          felis parturient fringilla rhoncus eleifend.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="section" id="contact">
          <div
            class="cc-contact-information"
            style="background-image: url('images/staticmap.jpg')"
            
          >
            <div class="container">
              <div class="cc-contact">
                <div class="row">
                  <div class="col-md-9">
                    <div class="card mb-0" data-aos="zoom-in">
                      <div class="h4 text-center title">Contact Me</div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card-body">
                            <form
                            name="contact form"
                              action="index.php"
                              method="POST"
                            >
                              <div class="p pb-3">
                                <strong>Feel free to contact me </strong>
                              </div>
                              <div class="row mb-3">
                                <div class="col">
                                  <div class="input-group">
                                    <span class="input-group-addon"
                                      ><i class="fa fa-user-circle"></i
                                    ></span>
                                    <input
                                      class="form-control"
                                      type="text"
                                      name="name"
                                      placeholder="Name"
                                      required="required"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col">
                                  <div class="input-group">
                                    <span class="input-group-addon"
                                      ><i class="fa fa-file-text"></i
                                    ></span>
                                    <input
                                      class="form-control"
                                      type="text"
                                      name="subject"
                                      placeholder="Subject"
                                      required="required"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col">
                                  <div class="input-group">
                                    <span class="input-group-addon"
                                      ><i class="fa fa-envelope"></i
                                    ></span>
                                    <input
                                      class="form-control"
                                      type="email"
                                      name="email"
                                      placeholder="E-mail"
                                      required="required"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col">
                                  <div class="form-group">
                                    <textarea
                                      class="form-control"
                                      name="msg"
                                      placeholder="Your Message"
                                      required="required"
                                    ></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <button class="btn btn-primary" name="send" type="submit">
                                    Send
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <p class="mb-0"><strong>Address </strong></p>
                            <p class="pb-2">
                              Hyderabad, AndhraPradesh, India
                            </p>
                            <p class="mb-0"><strong>Phone</strong></p>
                            <p class="pb-2">+91**********</p>
                            <p class="mb-0"><strong>Email</strong></p>
                            <p>********@gmail.com</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container text-center">
        <a class="cc-facebook btn btn-link" href="#"
          ><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a
        ><a class="cc-twitter btn btn-link" href="#"
          ><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a
        ><a class="cc-google-plus btn btn-link" href="#"
          ><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a
        ><a class="cc-instagram btn btn-link" href="#"
          ><i class="fa fa-instagram fa-2x" aria-hidden="true"></i
        ></a>
      </div>
      <div class="h4 title text-center">Krishna Vaibhav</div>

    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>
