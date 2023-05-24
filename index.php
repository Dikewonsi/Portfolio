<?php
  $msg = '';
  $msgClass = '';

  //check for submit
  if(filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
  
    //Check Required Fields
    if(!empty($email) && !empty($name) && !empty($phone) && !empty($message))
	{
        $toEmail = 'contact@jeffreyisibor.dev';
        $subject = 'Contact Request From '.$name;
        $body = '<h2>Contact Request</h2>
        <h4>Full Name</h4><p>'.$name.'</p>
        <h4>Email</h4><p>'.$email.'</p>
        <h4>Message</h4><p>'.$message.'</p>';

        //Email Headers 
        $headers = "MIME-Version:1.0" ."\r\n";
        $headers .= "Content-Type:text/html; charset=UTF-8" ."\r\n";

        //Additional Headers
        $headers .= "From :" .$name. "<" .$email.">" ."\r\n";


        if(mail($toEmail, $subject, $body, $headers))
        {
            //Email Sent
            $msg = "Your Email has been sent";
            $msgClass = "alert-success";
        } 
        else
        {
            //Email not Sent
            $msg = "Your Email was not sent";
            $msgClass = "alert-danger";
        }
      
    } 
    else
    {
      //Failed
      $msg = "Please fill in all fields";
      $msgClass = "alert-danger";
    }
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Jeffrey Isibor - Personal Portfolio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Jeffrey Isibor, Web Developer, Web Designer, Nigeria, Abuja, Lagos, Technology">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="template-color-1 home-sticky spybody white-version" data-spy="scroll" data-target=".navbar-example2" data-offset="150">
<?php

//check for submit
if(filter_has_var(INPUT_POST, 'submit')) {
  $name = htmlspecialchars($_POST['name']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  //Check Required Fields
  if(!empty($email) && !empty($name) && !empty($phone) && !empty($message))
  {
      $toEmail = 'contact@jeffreyisibor.dev';
      $subject = 'Contact Request From '.$name;
      $body = '<h2>Contact Request</h2>
      <h4>Full Name</h4><p>'.$name.'</p>
      <h4>Email</h4><p>'.$email.'</p>
      <h4>Message</h4><p>'.$message.'</p>';

      //Email Headers 
      $headers = "MIME-Version:1.0" ."\r\n";
      $headers .= "Content-Type:text/html; charset=UTF-8" ."\r\n";

      //Additional Headers
      $headers .= "From :" .$name. "<" .$email.">" ."\r\n";


      if(mail($toEmail, $subject, $body, $headers))
      {
          //Email Sent
        ?>
            <script>
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your email has been seent',
                text: 'I will be in touch soon. Thank You',
                showConfirmButton: false,
                timer: 5000
                })
            </script>
        <?php
      } 
      else
      {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                    })
            </script>
        <?php
      }
    
  } 
  else
  {
  ?>
      <script>
          Swal.fire(
                  'Missing Fields',
                  'Please complete the form before submitting.',
                  'info'
              )
      </script>;

  <?php
  }
}

?>
    <main class="main-page-wrapper">
        <!-- start slider area -->        
        <div class="rn-slider-area">
            <div class="container">
                <div class="row row--30 pt--100 pt_sm--50">
                    <div class="col-lg-6">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky sticky-top rbt-sticky-top-adjust-two">
                                <div class="banner-details-wrapper-sticky slide">
                                    <div class="thumbnail">
                                        <img src="assets/images/favicon.png" alt="Personal Portfolio">
                                    </div>
                                    <div class="banner-title-area pt--30">
                                        <h1 class="title">Hi, I’m 
                                            <span style="color:#0074D9">Jeffrey Isibor</span>
                                            <br>                                             
                                                                          
                                        <!-- type headline start-->
                                        <span class="cd-headline clip is-full-width">
                                            <span style="color:#000">I am a     
                                                <!-- ROTATING TEXT -->
                                                <span class="cd-words-wrapper">
                                                        <b style="color:#0074D9" class="is-visible">PHP Developer.</b>
                                                        <b style="color:#0074D9" class="is-hidden">Web Designer.</b>
                                                        <b style="color:#0074D9" class="is-hidden">Graphics Designer.</b>
                                                </span></h1> 
                                            </span>
                                        </span>
                                        <p class="disc">A seasoned developer with skills that cut across various parts of the WAMP Stack. I have a serious passion for taking ideas, turning them to businesses and moving them into the digital space.</p>
                                    </div>
                                    <div class="button-group text-center text-md-start pt--60 pt_md--40 pt_sm--40">
                                        <a class="rn-btn" href="assets/resume/JeffreyIsiborDikewonsiResume.pdf"><span style="color:#0074D9">Download My CV</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sticky-home-wrapper">

                            <!-- about area -->
                            <div class="rn-about-area section-height">
                                <div class="inner">
                                    <h5 class="title">
                                        About Me
                                    </h5>
                                    <p class="about-disc">
                                    Experienced web developer and software tester looking for advanced programming position, with a specialty in bringing ideas to a fruition through programming. 
                                    <br>
                                    Certified in PHP, worked as a freelancer for various projects with varying features, including a wallet top-up feature for an e-commerce platform built from scratch with PHP.
                                    <br>
                                    Self-motivated, detail-oriented, and creative problem-solver. Proficient in both coding and design, as well as software testing and debugging. Fluent in PHP, JavaScript, and other coding languages.
                                    <br>
                                    Excels in team environments and leadership roles, having managed over 30 web and software development projects.
                                    </p>                                    
                                </div>
                            </div>
                            <!-- about area end -->

                            <!-- Start skiull area -->
                            <div class="rn-skill-area section-height">
                                <div class="inner slide">
                                    <h5 class="title">
                                        About My Skills
                                    </h5>
                                    <div class="skill-share-inner pt--100">
                                        <span class="title">Primary Skills</span>
                                        <ul class="skill-share d-flex liststyle">
                                            <li><img src="assets/images/icons/3php.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/mysql.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/laravel.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/javascript.png" alt="Icons Images"></li>                                            
                                            <li><img src="assets/images/icons/wordpress.png" alt="Icons Images"></li>                                            
                                            <li><img src="assets/images/icons/html.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/css.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/bootstrap.png" alt="Icons Images"></li>                                            
                                            <li><img src="assets/images/icons/ai.jpg" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/photoshop.png" alt="Icons Images"></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="skill-share-inner skill-share-inner-width margin-top-25">
                                        <span class="title">Secondary Skills</span>
                                        <ul class="skill-share d-flex liststyle">
                                            <li><img src="assets/images/icons/xampp.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/github.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/cpanel.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/excel.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/word.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/powerpoint.png" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/chrome.svg" alt="Icons Images"></li>
                                            <li><img src="assets/images/icons/figma.svg" alt="Icons Images"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End skiull area -->

                            <!-- start services area -->
                            <div data-aos="fade-left" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class="rn-skill-area single-card-sticky section-height">
                                <div class="inner">
                                    <h5 class="title">
                                        My Services
                                    </h5>
                                    <ul class="card-list">
                                        <li><a href="javascript:void(0);">Web Development<i data-feather="arrow-right"></i></a></li>
                                        <li><a href="javascript:void(0);">Software Development<i data-feather="arrow-right"></i></a>
                                        <li><a href="javascript:void(0);">Web Design<i data-feather="arrow-right"></i></a></li>
                                        <li><a href="javascript:void(0);">Graphics Design<i data-feather="arrow-right"></i></a></li>
                                        <li><a href="javascript:void(0);">UI/UX<i data-feather="arrow-right"></i></a>
                                        <li><a href="javascript:void(0);">Content Creation<i data-feather="arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End services area -->

                           <!-- Start Portfolio Area -->
                            <div id="portfolio" class="rn-portfolio-area portfolio-style-three rn-section-gap section-separator">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                                                <span class="subtitle" style="color:#0074D9;">A Look at my most recent Projects</span>
                                                <h2 class="title">My Portfolio</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt--25 mt_md--5 mt_sm--5">
                                        <div class="col-lg-12">
                                            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class="portfolio-wrapper portfolio-slick-activation slick-arrow-style-one rn-slick-dot-style">

                                                <!-- Start Single Portfolio  -->
                                                <div class="rn-portfolio-slick">
                                                    <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#irokolifestyle">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="javascript:void(0)">
                                                                    <img src="assets/images/portfolio/iroko.png" alt="Personal Portfolio Images">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <div class="category-info">
                                                                    <div class="category-list">
                                                                        <a href="https://jeffreyisibor.dev/projects/irokolifestyle">IROKO LIFESTYLE</a>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span><a href="javascript:void(0)"><i class="feather-calendar"></i></a>
                                                                            2023</span>
                                                                    </div>
                                                                </div>
                                                                <p class="title"><a href="javascript:void(0)">E-Commerce platform for sale of Luxurious Furniture<i
                                                                            class="feather-arrow-up-right"></i></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Portfolio  -->

                                                <!-- Start Single Portfolio  -->
                                                <div class="rn-portfolio-slick">
                                                    <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#alatbanking">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="javascript:void(0)">
                                                                    <img src="assets/images/portfolio/alat-banner.png" alt="Personal Portfolio Images">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <div class="category-info">
                                                                    <div class="category-list">
                                                                        <a href="javascript:void(0)">ALAT</a>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span><a href="javascript:void(0)"><i class="feather-calendar"></i></a>
                                                                            2023</span>
                                                                    </div>
                                                                </div>
                                                                <p class="title"><a href="javascript:void(0)">Online Banking Software For Fintech Companies<i
                                                                            class="feather-arrow-up-right"></i></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Portfolio  -->

                                                <!-- Start Single Portfolio  -->
                                                <div class="rn-portfolio-slick">
                                                    <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#royalbooking">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="javascript:void(0)">
                                                                    <img src="assets/images/portfolio/royal-banner.png" alt="Personal Portfolio Images">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <div class="category-info">
                                                                    <div class="category-list">
                                                                        <a href="javascript:void(0)">ADMIN EVENT BOOKING</a>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span><a href="javascript:void(0)"><i class="feather-calendar"></i></a>
                                                                            2023</span>
                                                                    </div>
                                                                </div>
                                                                <p class="title"><a href="javascript:void(0)">Server-Side Admin Panel for Event Bookings<i
                                                                            class="feather-arrow-up-right"></i></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Portfolio  -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End portfolio Area -->                        

                            <!-- Start contact area -->
                            <div data-aos="fade-left" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class="rn-contact-area section-height">
                                <div class="inner">
                                    <h5 class="title">
                                        Contact Me
                                    </h5>
                                    <!-- Form area Srart -->
                                    <div class="contact-form-wrapper">
                                        <div class="introduce">
                                            <div class="row">
                                            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">                                        
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name">Your Name</label>
                                                        <input class="form-control form-control-lg" name="name" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="phone">Phone Number</label>
                                                        <input class="form-control" name="phone" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input class="form-control form-control-sm" name="email" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="message">Your Message</label>
                                                        <textarea name="message" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" name="submit" class="rn-btn">
                                                        <span style="color:#0074D9">SEND MESSAGE</span>
                                                        <svg style="color:#0074D9" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                            <line style="color:#0074D9" x1="5" y1="12" x2="19" y2="12"></line>
                                                            <polyline style="color:#0074D9" points="12 5 19 12 12 19"></polyline>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form area End -->
                                </div>
                            </div>
                            <!-- End contact area -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End slider area -->        

        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="irokolifestyle" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/iroko.png" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span style="color:#0074D9;">PHP,MySQL,Javascript,  - eCommerce</span>Irokolifestyle
                                    </h3>
                                    <p class="mb--30">From start to finish, this was one of my most greulling projects. I found myself working with not just only PHP, which I thought would 
                                        <br>
                                        control over 80% of the App, but I found myself working also with JavaScript, to handle things like cart function, wishlists, and user authorizations.
                                        <br>The client asked for a payment gateway to be incorporated with the App, which I was able to achieve with JavaScript using Paystack as a solution. Alongside that
                                        is an online wallet system.
                                    </p>
                                    <div class="button-group mt--20">                        
                                        <a href="https://jeffreyisibor.dev/projects/irokolifestyle/" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="alatbanking" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/alat-banner.png" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span style="color:#0074D9;">PHP,MySQL,Javascript,HTML - Software</span>ALAT Mobile Banking
                                    </h3>
                                    <p class="mb--30">
                                        This project has a special place in my heart, as it was the first project I had to complete after bootcamp, I began to attempt it, but I stopped immediately. 
                                        Fasf-forward 3 years, and I finally did it, when I was fully ready, and equipped with all the tools and methodologies needed to carry out the task of developing an 
                                        online banking system.
                                        It is purely for educational purposes
                                        <br><br>
                                        Demo Details:
                                        <br>
                                        email: ruth@gmail.com
                                        <br>
                                        password: 1234

                                    </p>
                                    <div class="button-group mt--20">                        
                                        <a href="https://jeffreyisibor.dev/projects/alat" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="royalbooking" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/royal-banner.png" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span style="color:#0074D9;">PHP,MySQL,Javascript,HTML - Software</span>Royal Bookings
                                    </h3>
                                    <p class="mb--30">I began this project with an open approach, as it was the first of its kind for me, I had expert advice from my mentor, who showed me a few tricks and skills
                                        that I need to perfect, to be able to deliver the job in ample time. 
                                        <br>
                                        Having taken all the information I needed from the Client, and began the project in earnest, one of the most challenging aspect of the project was the need to incorporate Paystack APIs, as the Client did not have all compliance documents                                    
                                        <br>to accept live payments. However every other feature was able to be incorporated successfully.
                                    </p>
                                    <div class="button-group mt--20">                        
                                        <a href="https://royaleventbookings.com" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->

        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->
    </main>
    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
    
</body>


<!-- Mirrored from rainbowit.net/html/inbio/home-freelancer-white-version.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 08:16:26 GMT -->
</html>