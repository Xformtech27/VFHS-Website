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
                            <img src="assets/images/footer-logo.png" alt="Company Logo" />
                        </div>
                        <p>
                            Since 1960, Clinkers Inc. has built a reputation for
                            producing high quality precision fabricated products for use
                            in a variety of industries.
                        </p>
                    </div>
                </div>

                <!-- Quick Links Section -->
                <div class="col col-md-3 col-sm-6">
                    <div class="widget services-widget">
                        <h3>quick link</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>About</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>services</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Social Links Section (Icons in a Single Row) -->
                <div class="col col-md-3 col-sm-6">
                    <div class="widget about-widget social links-feed-widget">
                        <h3>social links</h3>
                        <!-- Social icons arranged in a single row -->
                        <ul class="social-icons-row">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Address Section with proper gaps -->
                <div class="col col-md-3 col-sm-6">
                    <div class="widget address-widget">
                        <h3>address</h3>
                        <div class="contact-info">
                            <ul class="address-list">
                                <li><i class="fa fa-phone"></i>+123 (569) 254 78</li>
                                <li><i class="fa fa-envelope"></i>info-desk@clinkers.com</li>
                                <li><i class="fa fa-home"></i>#59, East Madison Ave, Melbourne, Australia</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end upper-footer -->

    <div class="copyright-info">
        <div class="container">
            <p>
                2018 &copy; All Rights Reserved by
                <a href="http://templatespoint.net">TemplatesPoint</a>
            </p>
        </div>
    </div>
</footer>

<!-- Add this CSS to your main stylesheet or within <style> tags -->
<style>
    /* =====================================================
       Social Icons - Single Row Layout
    ===================================================== */
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
        /*color: #e74c3c;     Optional: icon color - adjust as needed */
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