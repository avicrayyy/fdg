<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Fuse Design Group</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/my.css">
        <link rel="stylesheet" href="css/justifiedGallery.css" />
        <link rel="stylesheet" href="css/font.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        
        <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    </head>
    <body>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header nav-logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a href="index.php"><img src="imgs/fdg_logo_02.png" class="logo"></a>
                    <a href="index.php"><img src="imgs/fdg_logo_01.png" class="logo-c"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll fancy-link" href="#home">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll fancy-link" href="#gallery">Work</a>
                        </li>
                        <li>
                            <a class="page-scroll fancy-link contact-button" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <header id="#home"><!-- video bg -->
          <div class="homepage-hero-module">
            <div class="video-container">
                <div class="title-container">
                    <div class="headline">
                          <h1>LET YOUR DESIGN <b class="contact-button shadow">EVOLVE</b></h1>

                    </div>
                    <div class="description">
                        <div class="inner"><em>Visualize and understand your ideas with us!</em></div>
                         <div class="description-buttons">
                            <div class="button-1"><a href="#contact" class="page-scroll btn btn-orange">Get in touch!</a></div>
                          </div>
                    </div>
                </div>
                <div class="filter">
                  <div class="scroll-me">
                    <span class="scroll-btn">
                      <a class="scrolly-mouse">
                        <div class="btn-down">
                          <a href="#gallery" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                      </a><br>
                    </span>
                    </div>
                  </div>
                <video autoplay loop no-controls muted class="fillWidth">
                    <source src="video/bg.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.</video>
                <div class="poster hidden">
                    <img src="#" alt="intro">
                </div>
            </div>
        </div>
        </header>
        


        <section class="gallery" id="gallery">
          <!-- put the grid here -->
          <?php include("includes/gallery.html");?>
          <?php include("includes/modals.html");?>
        </section>
        <section class="contact" id="contact">
            <form action="send-form.php" method="post">
                <div class="contact-section">
                  <h1 class="orange centered">Contact Us</h1>
                </div>
                <div class="input-group text-box placeholder-contact">
                  <!-- <label>Name<a>*</a></label><br> -->
                  <input name="name" type="text" class="form-control input-sm orange-border"  placeholder="Name*" required="required" />
                </div>
                <div class="input-group text-box placeholder-contact m-sm-t">
                  <!-- <label>Email<a>*</a></label> -->
                  <input name="email" type="text" class="form-control input-sm orange-border"  placeholder="Email Address*" required="required" />
                </div>
                <div class="placeholder-contact message-placeholder-margin ">
                      <!-- <label>Message<a>*</a></label> -->
                      <textarea name="message" type="text" class="message-box form-control m-sm-t message-box orange-border" placeholder="Message*" required="required"></textarea>
                </div>
            <!-- <div class="g-recaptcha" data-sitekey="6LfR_TsUAAAAABFq2EunOXM1YaUh9sp0ywdjDe2-"></div> -->
                <input type="submit" class="form-btn btn btn-secondary send-btn">
            </form>
        </section>

        <footer>
            <hr>
            <ul>
                <li>45 Lansing Street</li>
                <li>Suite 604</li>
                <li>San Francisco, CA 94105</li>
                <li>Tel: 213.804.0675</li>
                <li>Fax: 866.576.7289</li>
                <li id="no-bullet">
                  <a class="opacity" href="mailto:info@fusedesigngroup.com">info@fusedesigngroup.com</a>
                </li>
            </ul>
            <ul>
              <li>&copy; 2017 Fuse Design Group. All Rights Reserved.</li>
              <li id="no-bullet">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary no-box" data-toggle="modal" data-target="#exampleModal">
                  Privacy Notice &amp; Terms of Use
                </button>
                </li>
              </ul>
        </footer>
        <!-- SCROLL ICON -->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!-- </section> / projects -->

        <!--Modals-->

         <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-body black">
                    <p><strong>Ownership of Site; Agreement to Terms of Use</strong></p>
                    <p>These Terms and Conditions of Use (the “Terms of Use”) apply to fuse design group and rwseven Inc. located at www.fusedesigngroup.com, www.rwseven.com and all associated sites linked to the same sites by fuse design group and rwseven Inc., its subsidiaries and affiliates (collectively, the “Site”). The Site is the property of fuse design group.</p>

                    <p><strong>BY USING THE SITE, YOU AGREE TO THESE TERMS OF USE; IF YOU DO NOT AGREE, DO NOT USE THE SITE.</strong></p>

                    <p>fuse design group and rwseven Inc. reserves the right, at its sole discretion, to change, modify, add or remove portions of these Terms of Use, at any time. It is your responsibility to check these Terms of Use periodically for changes. Your continued use of the Site following the posting of changes will mean that you accept and agree to the changes. As long as you comply with these Terms of Use, fuse design group and rwseven Inc. grants you a personal, non-exclusive, non-transferable, limited privilege to enter and use the Site.</p>

                    <p><strong>Content</strong></p>

                    <p>All text, graphics, user interfaces, visual interfaces, photographs, trademarks, logos, sounds, music, artwork and computer code (collectively, “Content”), including but not limited to the design, structure, selection, coordination, expression, “look and feel” and arrangement of such Content, contained on the Site is owned, controlled or licensed by or to fuse design group and rwseven Inc., and is protected by trade dress, copyright, patent and trademark laws, and various other intellectual property rights and unfair competition laws.</p>

                    <p>Except as expressly provided in these Terms of Use, no part of the Site and no Content may be copied, reproduced, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted or distributed in any way (including “mirroring”) to any other computer, server, Web site or other medium for publication or distribution or for any commercial enterprise, without fuse design group and rwseven Inc.’s express prior written consent.</p>
                    <p><strong>Privacy Notice</strong></p>

                    <p>This privacy notice discloses the privacy practices for fuse design group and rwseven Inc. This privacy notice applies solely to information collected by this web site.</p>

                    <p><strong>Information Collection, Use, and Sharing</strong></p>

                    <p>We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone.</p>

                    <p>We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request.</p>

                    <p>If you feel that we are not abiding by this privacy policy, you should contact us immediately.</p>
                  </div>
                  <div class="modal-footer black">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

        <!--End of Modals-->

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://use.fontawesome.com/a0a8872ad0.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.justifiedGallery.js"></script>
</html>


