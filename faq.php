<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Clinkers - Industry, Factory and Engineering Template </title>

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

        <!-- Start header -->        
       <?php $page = 'pages'; ?>
        <?php include 'header.php'; ?>
        <!-- end of header -->


 
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="themexriver" />
 
    <title>Water Treatment & Engineering Solutions - FAQs</title>
 
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <link href="assets/css/owl.transitions.css" rel="stylesheet" />
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
 
    <style>
        /* ================= PREMIUM FAQ SECTION ================= */
        .faq-section {
            background: linear-gradient(135deg, #f4f9fc 0%, #eef5f9 100%);
            padding: 60px 0 90px; /* Tightened top padding to eliminate dull gaps */
            font-family: 'Poppins', sans-serif;
        }
 
        .faq-container {
            max-width: 950px;
            margin: auto;
            padding: 0 20px;
        }
 
        .faq-title {
            text-align: center;
            margin-bottom: 35px;
        }
 
        .faq-title h2 {
            font-size: 3rem;
            font-weight: 800;
            color: #0f2a4a;
            letter-spacing: -0.5px;
            margin-bottom: 15px;
        }
 
        .faq-title p {
            color: #617d98;
            max-width: 650px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.6;
        }
 
        /* Search Bar Wrapper */
        .faq-search-box {
            position: relative;
            max-width: 550px;
            margin: 0 auto 45px;
            box-shadow: 0 15px 35px rgba(15, 42, 74, 0.08);
            border-radius: 50px;
            overflow: hidden;
        }
 
        .faq-search-box input {
            width: 100%;
            padding: 16px 25px 16px 55px;
            border: 2px solid transparent;
            background: #ffffff;
            font-size: 1rem;
            border-radius: 50px;
            outline: none;
            transition: all 0.3s ease;
            color: #1c3d5a;
        }
 
        .faq-search-box input:focus {
            border-color: #00bcd4;
            box-shadow: 0 0 15px rgba(0, 188, 212, 0.15);
        }
 
        .faq-search-box i {
            position: absolute;
            left: 22px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }
 
        .faq-search-box input:focus + i {
            color: #00bcd4;
        }
 
        /* Accordion Structure */
        .faq-item {
            background: #ffffff;
            margin-bottom: 20px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(0, 0, 0, 0.01);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
 
        /* Hidden Questions State by Default */
        .faq-item.hidden-qa {
            display: none;
        }
 
        .faq-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(15, 42, 74, 0.08);
        }
 
        .faq-question {
            padding: 22px 28px;
            cursor: pointer;
            font-weight: 600;
            color: #1c3d5a;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.1rem;
            position: relative;
            user-select: none;
        }
 
        /* Category Labels */
        .faq-badge {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            padding: 4px 10px;
            border-radius: 20px;
            font-weight: 700;
            margin-right: 15px;
            background: #e1f5fe;
            color: #0288d1;
            display: inline-block;
            vertical-align: middle;
        }
 
        /* Badge color variation for hidden/advanced questions */
        .faq-item.hidden-qa .faq-badge {
            background: #e8f5e9;
            color: #2e7d32;
        }
 
        .faq-q-text {
            flex-grow: 1;
            display: inline-block;
            vertical-align: middle;
        }
 
        .faq-icon-box {
            width: 36px;
            height: 36px;
            background: #f0f7fc;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ff6b2b;
            font-size: 1.2rem;
            font-weight: bold;
            transition: all 0.3s ease;
            flex-shrink: 0;
            margin-left: 15px;
        }
 
        /* Active Accordion State */
        .faq-item.active {
            border-left: 5px solid #ff6b2b;
            box-shadow: 0 12px 30px rgba(15, 42, 74, 0.08);
        }
 
        .faq-item.active .faq-question {
            color: #ff6b2b;
        }
 
        .faq-item.active .faq-icon-box {
            background: #ff6b2b;
            color: #ffffff;
            transform: rotate(45deg);
        }
 
        /* Smooth Answer Transitions */
        .faq-answer-wrapper {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
 
        .faq-answer {
            padding: 0 28px 24px;
            color: #52667d;
            line-height: 1.8;
            font-size: 1rem;
            border-top: 1px solid transparent;
        }
 
        .faq-item.active .faq-answer-wrapper {
            max-height: 500px;
        }
    </style>
</head>
 
<body>
<div class="page-wrapper">
 
    <?php $page = 'home'; ?>
    <?php include 'header.php'; ?>
 
    <section class="faq-section">
        <div class="faq-container">
 
            <div class="faq-title">
                <h2>Frequently Asked Questions</h2>
                <p>Everything you need to know about our water treatment, cleaning, and engineering services. We focus on transparency, quality, and long-term reliability.</p>
            </div>
 
            <div class="faq-search-box">
                <input type="text" id="faqSearch" placeholder="Type to search or unlock hidden questions..." autocomplete="off">
                <i class="fa fa-search"></i>
            </div>
 
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Services</span>What services does your company provide?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            We provide complete water treatment solutions including RO plants, STP, ETP, DM plants, softening systems, filtration units, and industrial cleaning services for all types of industries.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Engineering</span>Do you provide customized system design?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            Yes, every system is custom-designed based on water analysis, industry type, flow capacity, space, and budget requirements.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Execution</span>Do you offer installation and commissioning?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            We provide complete turnkey execution including design, installation, testing, commissioning, and performance optimization.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Sectors</span>Which industries do you serve?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            We serve hospitals, pharmaceuticals, chemicals, manufacturing plants, food industries, power plants, and commercial buildings.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Support</span>Do you provide AMC and maintenance services?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            Yes, we offer complete AMC services including preventive maintenance, breakdown support, filter replacement, and system upgrades.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Compliance</span>Are your systems compliant with pollution control standards?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            Yes, all our systems meet CPCB and SPCB guidelines and support industries in achieving environmental compliance and sustainability goals.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Efficiency</span>How efficient are your water treatment systems?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            Our systems achieve high recovery rates (up to 95%) with low energy consumption and optimized operational cost.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Contact</span>How can I get a quotation?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            You can contact us through our website or call our support team. We provide site inspection, analysis, and detailed project proposals.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item hidden-qa">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Membranes</span>What is the average lifespan of an industrial RO membrane?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            Typically, industrial RO membranes last between 3 to 5 years. This depends highly on feed water quality, proper pre-treatment filtration, and regular anti-scalant dosing maintenance.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item hidden-qa">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">ZLD Systems</span>What is Zero Liquid Discharge (ZLD) engineering?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            ZLD is an advanced water treatment process engineered to limit liquid waste emissions. It purifies and recycles virtually all wastewater generated, leaving only solid residues behind.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item hidden-qa">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Chemicals</span>How often should a chemical cleaning (CIP) be conducted?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            Clean-In-Place (CIP) processes are usually performed when system normalized flow drops by 10%, or salt passage increases by 5-10% to prevent hard scaling conditions.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item hidden-qa">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Tech Diff</span>What is the difference between RO and DM plants?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            Reverse Osmosis (RO) uses a physical membrane barrier to filter out major impurities, while Demineralization (DM) plants use chemical ion-exchange resins to remove specific mineral salts for ultra-pure water output.
                        </div>
                    </div>
                </div>
 
                <div class="faq-item hidden-qa">
                    <div class="faq-question">
                        <span class="faq-q-text"><span class="faq-badge">Prevention</span>Why is raw water testing crucial before plant design?</span>
                        <div class="faq-icon-box">+</div>
                    </div>
                    <div class="faq-answer-wrapper">
                        <div class="faq-answer">
                            Testing tells us the exact parameter levels of TDS, pH, hardness, and microbial count. Without this blueprint data, plants cannot be accurately engineered to prevent early system breakdowns.
                        </div>
                    </div>
                </div>
 
            </div>
        </div>
    </section>
 

 
</div>
 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
 
<script>
    // Accordion Control
    document.querySelectorAll(".faq-question").forEach(item => {
        item.addEventListener("click", () => {
            const currentItem = item.parentElement;
            const isActive = currentItem.classList.contains("active");
           
            document.querySelectorAll(".faq-item").forEach(el => el.classList.remove("active"));
           
            if(!isActive) {
                currentItem.classList.add("active");
            }
        });
    });
 
    // Smart Filter System: Controls both Visible and Hidden Questions dynamically
    document.getElementById("faqSearch").addEventListener("input", function() {
        const searchQuery = this.value.toLowerCase().trim();
        const faqItems = document.querySelectorAll(".faq-item");
 
        faqItems.forEach(item => {
            const questionText = item.querySelector(".faq-question").textContent.toLowerCase();
            const answerText = item.querySelector(".faq-answer").textContent.toLowerCase();
            const matchesQuery = questionText.includes(searchQuery) || answerText.includes(searchQuery);
 
            if (searchQuery === "") {
                // If search input is blank, hide advanced questions and show only basic ones
                if (item.classList.contains("hidden-qa")) {
                    item.style.display = "none";
                } else {
                    item.style.display = "block";
                }
            } else {
                // If user is searching, display any matching item across both collections
                if (matchesQuery) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            }
        });
    });
</script>
</body>
</html>

        <!-- start site-footer -->
        <?php include 'footer.php'; ?>
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>
