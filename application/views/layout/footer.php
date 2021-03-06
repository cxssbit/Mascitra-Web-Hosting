    <!-- Contact Info Area Start -->
    <div id="contactInfo">
        <div class="container">
            <div class="row reset-gutter">
                <!-- Contact Info Item Start -->
                <div class="contact-info--item col-md-3 col-xs-6">
                    <a href="#"><i class="fa fa-headphones"></i>24/7 Customer Support</a>
                </div>
                <!-- Contact Info Item End -->
                
                <!-- Contact Info Item Start -->
                <div class="contact-info--item col-md-3 col-xs-6">
                    <a href="mailto:<?=$this->ContactModel->get('email')?>"><i class="fa fa-envelope-o"></i><?=$this->ContactModel->get('email')?></a>
                </div>
                <!-- Contact Info Item End -->
                
                <!-- Contact Info Item Start -->
                <div class="contact-info--item col-md-3 col-xs-6">
                    <a href="#"><i class="fa fa-comments-o"></i>Click Here To Live Chat</a>
                </div>
                <!-- Contact Info Item End -->
                
                <!-- Contact Info Item Start -->
                <div class="contact-info--item col-md-3 col-xs-6">
                    <a href="<?=base_url('contact')?>"><i class="fa fa-phone" target="_top"></i><?=$this->ContactModel->get('phone')?></a>
                </div>
                <!-- Contact Info Item End -->
            </div>
        </div>
    </div>
    <!-- Contact Info Area End -->
    
    <!-- Footer Area Start -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Start -->
                <div class="col-md-3 col-sm-6 footer-widget">
                    <!-- Footer Title Start -->
                    <h4>Pages</h4>
                    <!-- Footer Title End -->
                    
                    <ul>
                        <li><a href="<?=base_url('');?>">Home</a></li>
                        <li><a href="<?=base_url('hosting/shared');?>">Shared</a></li>
                        <li><a href="<?=base_url('hosting/vps');?>">VPS</a></li>
                        <li><a href="<?=base_url('hosting/dedicated');?>">Dedicated</a></li>
                        <li><a href="<?=base_url('domain/');?>">Domain</a></li>
                    </ul>
                </div>
                <!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-md-3 col-sm-6 footer-widget">
                    <!-- Footer Title Start -->
                    <h4>Company</h4>
                    <!-- Footer Title End -->
                    
                    <ul>
                        <li><a href="<?=base_url('pages/about');?>">About Us</a></li>
                        <li><a href="<?=base_url('pages/service');?>">Privacy Policy</a></li>
                        <li><a href="<?=base_url('pages/gallery');?>">Acceptable Usage Policy</a></li>
                        <li><a href="<?=base_url('pages/faq');?>">Terms &amp; Conditions</a></li>
                        <li><a href="<?=base_url('domain/');?>">DMCA Policy</a></li>
                    </ul>
                </div>
                <!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-md-3 col-sm-6 footer-widget">
                    <!-- Footer Title Start -->
                    <h4>Add-on Services</h4>
                    <!-- Footer Title End -->
                    
                    <ul>
                        <li><a href="<?=base_url('domain/');?>">SSL Certificates</a></li>
                        <li><a href="<?=base_url('domain/');?>">Dedicated IPs</a></li>
                        <li><a href="<?=base_url('domain/');?>">Control Panel Licenses</a></li>
                        <li><a href="<?=base_url('domain/');?>">WHMCS License</a></li>
                        <li><a href="<?=base_url('domain/');?>">Migrations / Transfers</a></li>
                    </ul>
                </div>
                <!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-md-3 col-sm-6 footer-widget">
                    <!-- Footer Title Start -->
                    <h4>Subscribe</h4>
                    <!-- Footer Title End -->
                    
                    <!-- Footer Subscribe Widget Start -->
                    <div class="footer--subscribe-widget" data-form-validation="true">
                        <form action="http://themelooks.us12.list-manage.com/subscribe/post?u=50e1e21235cbd751ab4c1ebaa&amp;id=ac81d988e4" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="novalidate">
                            <input type="email" value="" name="EMAIL" placeholder="Enter your email address" class="form-control" required>
                            <input type="submit" value="SUBSCRIBE" class="btn btn-custom-reverse">
                        </form>
                    </div>
                    <!-- Footer Subscribe Widget End -->
                    
                    <!-- Footer Social Widget Start -->
                    <div class="footer--social-widget">
                        <p>FOLLOW US ON:</p>
                        <?php $this->load->view('layout/social')?>
                    </div>
                    <!-- Footer Social Widget End -->
                </div>
                <!-- Footer Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Area End -->
    
    <!-- Copyright Area Start -->
    <div id="copyright">
        <div class="container">
            <!-- Copyright Text Start -->
            <p class="left">Copyright 2018 &copy; <a href="#">mascitraHosting</a>. All Rights Reserved.</p>
            <!-- Copyright Text End -->
            <p class="right">We Accept: <img src="<?=base_url()?>assets/img/payment-methods.png" alt=""></p>
        </div>
    </div>
    <!-- Copyright Area End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="body" data-animate-scroll="true"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== jQuery Library ==== -->
    <script src="<?=base_url()?>assets/js/jquery-3.1.0.min.js"></script>

    <!-- ==== jQuery UI ==== -->
    <script src="<?=base_url()?>assets/js/jquery-ui.min.js"></script>
    
    <!-- ==== jQuery UI Touch Punch Plugin ==== -->
    <script src="<?=base_url()?>assets/js/jquery.ui.touch-punch.min.js"></script>

    <!-- ==== Bootstrap ==== -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- ==== FakeLoader Plugin ==== -->
    <script src="<?=base_url()?>assets/js/fakeLoader.min.js"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="<?=base_url()?>assets/js/jquery.sticky.js"></script>

    <!-- ==== Owl Carousel Plugin ==== -->
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    
    <!-- ==== jQuery Tubuler Plugin ==== -->
    <script src="<?=base_url()?>assets/js/jquery.tubular.1.0.js"></script>
    
    <!-- ==== Magnific Popup Plugin ==== -->
    <script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>

    <!-- ==== jQuery Validation Plugin ==== -->
    <script src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>

    <!-- ==== Animate Scroll Plugin ==== -->
    <script src="<?=base_url()?>assets/js/animatescroll.min.js"></script>

    <!-- ==== jQuery Waypoints Plugin ==== -->
    <script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>

    <!-- ==== jQuery CounterUp Plugin ==== -->
    <script src="<?=base_url()?>assets/js/jquery.counterup.min.js"></script>
    
    <!-- ==== jQuery CountDown Plugin ==== -->
    <script src="<?=base_url()?>assets/js/jquery.countdown.min.js"></script>
    
    <!-- ==== RetinaJS ==== -->
    <script src="<?=base_url()?>assets/js/retina.min.js"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="<?=base_url()?>assets/js/main.js"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6Z7C-3TtrFRMXfBu6R8F8XoxQDQn-fRM&callback=initMap">
    </script>

  <?php if (!empty($this->session->flashdata('info'))) {
    echo "<script>notify('".$this->session->flashdata('info')."')</script>";
  }?>
  <?=validation_errors()?>
</body>
</html>