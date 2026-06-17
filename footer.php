<!-- 
=====================================================
    Common Footer Component
    Description: Site-wide footer with logo, quick links,
                 social media icons (single row), and address with proper gaps.
    Author: Clinkers Inc.
    Last Updated: 2026
=====================================================
-->

<footer class="site-footer">
    <div class="upper-footer">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col col-md-3 col-sm-6">
                    <div class="widget about-widget">
                        <div class="footer-logo">
                            <img src="<?php echo ASSETS_URL; ?>/images/logo-new.png" alt="Company Logo" />
                        </div>
                        <p>
                            Trusted water treatment experts. Reliable wastewater solutions.
                            Serving diverse industries. Quality and innovation focused. Since 1999.                           
                        </p>
                    </div>
                </div>

                <!-- Quick Links Section -->
                <div class="col col-md-3 col-sm-6">
                    <div class="widget services-widget">
                        <h3>quick link</h3>
                        <ul>
                            <li><a href="<?php echo BASE_URL; ?>/index.php"><i class="fa fa-angle-right"></i>Home</a></li>
        

                            <li><a href="<?php echo BASE_URL; ?>/about.php"><i class="fa fa-angle-right"></i>About</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/gallery.php"><i class="fa fa-angle-right"></i>Gallery</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/faq.php"><i class="fa fa-angle-right"></i>Faq</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/contact.php"><i class="fa fa-angle-right"></i>Contact</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/client.php"><i class="fa fa-angle-right"></i>Client</a></li>

                        </ul>
                    </div>
                </div>

                <!-- Social Links Section (Icons in a Single Row) -->
                <!-- <div class="col col-md-3 col-sm-6">
                    <div class="widget about-widget social links-feed-widget">
                        <h3>social links</h3>
                        
                        <ul class="social-icons-row">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> -->
                 <div class="col col-md-3 col-sm-6">
                    <div class="widget services-widget">
                        <h3>Our Services</h3>
                        <ul>
                            <li><a href="<?php echo BASE_URL; ?>/operation-and-maintenance.php"><i class="fa fa-angle-right"></i> Operation & Maintenance</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/revamping-and-refurbishing.php"><i class="fa fa-angle-right"></i> Revamping & Refurbishing</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/online-monitoring-system.php"><i class="fa fa-angle-right"></i> Online Monitoring System</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/environmental-consultancy.php"><i class="fa fa-angle-right"></i> Environmental Consultancy</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/annual-maintenance-contract.php"><i class="fa fa-angle-right"></i> Annual Maintenance Contract</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Address Section with proper gaps -->
                <div class="col col-md-3 col-sm-6">
                    <div class="widget address-widget">
                        <h3>address</h3>
                        <div class="contact-info">
                            <ul class="address-list">
                                <li><i class="fa fa-phone"></i>+91 8605060625</li>
                                <li><i class="fa fa-envelope"></i>vintagehydrosystem@gmail.com</li>
                                <li><i class="fa fa-home"></i>
                                <a href="https://maps.app.goo.gl/yxGnWW2NAimAkjH79" target="_blank">
                                Office No. 342, 3rd Floor, Heuu Industrial Spaces Plot No. 19/C, D-1 Block, MIDC, Chinchwad, Pune, Maharashtra 411019
                                </a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php include 'msg.php'; ?>

            </div>
        </div><!-- end container -->
    </div><!-- end upper-footer -->

    <div class="copyright-info">
        <div class="container">
            <p>&copy; 2013-2026. All rights reserved | Design by
                <a href="https://www.xform.in/">XForm Technologies</a>
                
                <!-- 2018 &copy; All Rights Reserved by
                <a href="http://templatespoint.net">TemplatesPoint</a> -->
            </p>
        </div>
    </div>
</footer>

<!-- Add this CSS to your main stylesheet or within <style> tags -->
<style>
    /* =====================================================
       Social Icons - Single Row Layout
    ===================================================== */
   .social-icons-row li a .fa-facebook:hover {
    color: #0064E0;
}

.social-icons-row li a .fa-twitter:hover {
    color: #1DA1F2;
}

.social-icons-row li a .fa-linkedin:hover {
    color: #0a66c2
;
}

.social-icons-row li a .fa-instagram:hover {
    color: #E4405F;
}
    .social-icons-row {
        display: flex;
        flex-direction: row;
        gap: 15px;        /* Space between each social icon */
        padding: 0;
        margin: 0;
        list-style: none;
    }
    
    .social-icons-row li {
        display: inline-block;
    }
    
    .social-icons-row li a {
        display: block;
        font-size: 18px;
        transition: opacity 0.3s ease, transform 0.2s ease;
    }
    
    .social-icons-row li a:hover {
        opacity: 0.7;
        transform: translateY(-2px);
    }
    
    /* =====================================================
       Address Section - Proper Gaps Between List Items
    ===================================================== */
    .address-list {
        padding: 0;
        margin: 0;
        list-style: none;
    }
    
    .address-list li {
        display: flex;
        align-items: center;
        gap: 12px;        /* Gap between icon and text */
        margin-bottom: 15px;  /* Gap between each address row */
        line-height: 1.5;
    }
    
    .address-list li:last-child {
        margin-bottom: 0;  /* Remove margin from last item */
    }
    
    .address-list li i {
        width: 20px;       /* Fixed width for consistent alignment */
        font-size: 16px;
        color: black;    
    }
    
    /* Optional: Responsive adjustments for mobile */
    @media (max-width: 767px) {
        .social-icons-row {
            gap: 12px;
        }
        
        .address-list li {
            gap: 10px;
            margin-bottom: 12px;
        }
    }
</style>