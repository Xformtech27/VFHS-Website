<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Vintage Flow Hydro System">
    <meta name="description" content="Image Gallery - ASME Certified Pressure Vessels and Industrial Equipment">
    <meta name="keywords" content="gallery, pressure vessels, ASME, industrial equipment">

    <!-- Page Title -->
    <title>Image Gallery | Vintage Flow Hydro System</title>

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
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

    <style>
        /* Gallery Page Custom Styles */
        .gallery-hero {
            background: linear-gradient(135deg, #002c57 0%, #004a8f 100%);
            padding: 80px 0;
            color: white;
            text-align: center;
        }

        .gallery-hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .gallery-hero p {
            font-size: 18px;
            opacity: 0.9;
        }

        .gallery-stats {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 40px;
            margin-top: 20px;
            font-size: 14px;
        }

        .gallery-filter {
            padding: 40px 0 20px;
            text-align: center;
        }

        .filter-btn {
            display: inline-block;
            padding: 8px 20px;
            margin: 5px;
            background: #f0f4f8;
            border: none;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #5aa1cd;
            color: white;
        }

        .gallery-grid {
            padding: 20px 0 60px;
        }

        .gallery-item {
            margin-bottom: 30px;
            cursor: pointer;
        }

        .gallery-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .gallery-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .image-wrapper {
            position: relative;
            width: 100%;
            padding-top: 75%;
            overflow: hidden;
            background: #f5f5f5;
        }

        .gallery-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gallery-card:hover .gallery-img {
            transform: scale(1.05);
        }

        .image-info {
            padding: 15px;
            background: white;
        }

        .image-title {
            font-weight: 600;
            font-size: 14px;
            color: #333;
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Lightbox Modal */
        .lightbox-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .lightbox-modal.active {
            display: flex;
        }

        .lightbox-image {
            max-width: 90%;
            max-height: 85%;
            object-fit: contain;
            border-radius: 8px;
        }

        .close-lightbox {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            cursor: pointer;
            transition: 0.3s;
        }

        .close-lightbox:hover {
            color: #5aa1cd;
        }

        .lightbox-caption {
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            text-align: center;
            color: white;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            font-size: 16px;
        }

        /* Pagination */
        .pagination-wrap {
            text-align: center;
            padding: 30px 0 60px;
        }

        .pagination {
            display: inline-flex;
            gap: 8px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .page-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 40px;
            height: 40px;
            padding: 0 12px;
            background: #f0f4f8;
            border-radius: 8px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            cursor: pointer;
        }

        .page-btn:hover:not(.disabled) {
            background: #5aa1cd;
            color: white;
        }

        .page-btn.disabled {
            opacity: 0.5;
            pointer-events: none;
        }

        /* Badge for All-Only images */
        .all-only-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff6b35;
            color: white;
            font-size: 10px;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 20px;
            letter-spacing: 0.5px;
            z-index: 2;
            text-transform: uppercase;
        }

        @media (max-width: 768px) {
            .gallery-hero h1 {
                font-size: 32px;
            }
            .gallery-hero {
                padding: 50px 0;
            }
        }
    </style>
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->


        <!-- Start header -->
        <?php $page = 'gallery'; ?>
        <?php include 'header.php'; ?>
        <!-- end of header -->


        <!-- Gallery Hero Section -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="title-breadcrumb">
                            <h2>Gallery</h2>
                            <ol class="breadcrumb">
                                <li><a href="..index.php">Home</a></li>
                                <li class="active">Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>

        <!-- Gallery Filter Section -->
        <div class="gallery-filter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button class="filter-btn active" data-filter="all">All Images</button>
                        <button class="filter-btn" data-filter="manufacturing">Manufacturing</button>
                        <button class="filter-btn" data-filter="water treatment plant">Water Treatment Plant</button>
                        <button class="filter-btn" data-filter="west water treatment">Waste Water Treatment</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Grid Section -->
        <div class="gallery-grid">
            <div class="container">
                <div class="row" id="galleryContainer">

                    <!-- ============================================================ -->
                    <!-- ★★★ FIVE "ALL-ONLY" IMAGES (NOW AT THE TOP) ★★★             -->
                    <!-- These appear FIRST on Page 1, and ONLY when "All" is active. -->
                    <!-- ============================================================ -->

                    <!-- ALL-ONLY Image 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="all-only">
                        <div class="gallery-card" data-full="./assets/images/product/gallary-img.jpg" data-name="Exclusive Feature 1">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/gallary-img.jpg" alt="Exclusive Feature 1" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title"></h4>
                            </div>
                        </div>
                    </div>

                    <!-- ALL-ONLY Image 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="all-only">
                        <div class="gallery-card" data-full="./assets/images/product/group-photo.jpg" data-name="Exclusive Feature 2">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/group-photo.jpg" alt="Exclusive Feature 2" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title"></h4>
                            </div>
                        </div>
                    </div>

                    <!-- ALL-ONLY Image 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="all-only">
                        <div class="gallery-card" data-full="./assets/images/product/gallary-social.jpg" data-name="Exclusive Feature 3">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/gallary-social.jpg" alt="Exclusive Feature 3" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title"></h4>
                            </div>
                        </div>
                    </div>

                    <!-- ★ NEW ALL-ONLY Image 4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="all-only">
                        <div class="gallery-card" data-full="./assets/images/product/ro-system.jpg" data-name="Exclusive Feature 4">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/ro-system.jpg" alt="Exclusive Feature 4" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Industrial Reverse Osmosis</h4>
                            </div>
                        </div>
                    </div>

                    <!-- ★ NEW ALL-ONLY Image 5 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="all-only">
                        <div class="gallery-card" data-full="./assets/images/product/aeration-tank.jpg" data-name="Exclusive Feature 5">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/aeration-tank.jpg" alt="Exclusive Feature 5" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title"> Aeration Tank</h4>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- EXISTING GALLERY IMAGES (reordered)                           -->
                    <!-- ============================================================ -->

                    <!-- Existing Image 4 (now 1st on page 1 after exclusives) -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="manufacturing">
                        <div class="gallery-card" data-full="./assets/images/product/pressure-vessel.jpg" data-name="Pressure Vessel">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/pressure-vessel.jpg" alt="Pressure Vessel" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Pressure Vessel</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Existing Image 5 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="water treatment plant">
                        <div class="gallery-card" data-full="./assets/images/product/sewage-treatment-plant.jpg" data-name="Sewage Treatment Plant">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/sewage-treatment-plant.jpg" alt="Sewage Treatment Plant" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Sewage Treatment Plant</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Existing Image 6 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="water treatment plant">
                        <div class="gallery-card" data-full="./assets/images/product/clarifier.jpg" data-name="Clarifier System">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/clarifier.jpg" alt="Clarifier System" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Clarifier System</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Existing Image 7 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="water treatment plant">
                        <div class="gallery-card" data-full="./assets/images/product/water-filtration-plant.jpg" data-name="Water Filtration Plant">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/water-filtration-plant.jpg" alt="Water Filtration Plant" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Water Filtration Plant</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Existing Image 8 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="water treatment plant">
                        <div class="gallery-card" data-full="./assets/images/product/water-softener-plant.jpg" data-name="Water Softener Plant">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/water-softener-plant.jpg" alt="Water Softener Plant" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Water Softener Plant</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Existing Image 9 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="water treatment plant">
                        <div class="gallery-card" data-full="./assets/images/product/ultra-filtration-plant.jpg" data-name="Ultra Filtration Plant">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/ultra-filtration-plant.jpg" alt="Ultra Filtration Plant" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Ultra Filtration Plant</h4>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- THE ORIGINAL FIRST 3 IMAGES (ASME, Surge, Electrical)        -->
                    <!-- MOVED TO THE BOTTOM → THEY NOW APPEAR ON PAGE 2              -->
                    <!-- ============================================================ -->

                    <!-- Original Image 1 (ASME Vessel) -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="manufacturing">
                        <div class="gallery-card" data-full="./assets/images/product/asme-vessels.jpg" data-name="ASME Vessel">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/asme-vessels.jpg" alt="ASME Pressure Vessel" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">ASME Vessel</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Original Image 2 (Surge Vessel) -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="manufacturing">
                        <div class="gallery-card" data-full="./assets/images/product/surge-vessel.jpg" data-name="Surge Vessel">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/surge-vessel.jpg" alt="Surge Vessel" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Surge Vessel</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Original Image 3 (Electrical Control Panel) -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="manufacturing">
                        <div class="gallery-card" data-full="./assets/images/product/electrical-control-panels.jpg" data-name="Electrical Control Panel">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/electrical-control-panels.jpg" alt="Electrical Control Panel" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Electrical Control Panel</h4>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- REMAINING EXISTING IMAGES (continue in original order)       -->
                    <!-- ============================================================ -->

                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="water treatment plant">
                        <div class="gallery-card" data-full="./assets/images/product/effluent-treatment-plant.jpg" data-name="Effluent Treatment Plant">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/effluent-treatment-plant.jpg" alt="Effluent Treatment Plant" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Effluent Treatment Plant</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="water treatment plant">
                        <div class="gallery-card" data-full="./assets/images/product/reverse.jpg" data-name="Reverse Osmosis Plant">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/reverse.jpg" alt="Reverse Osmosis Plant" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Reverse Osmosis Plant</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="water treatment plant">
                        <div class="gallery-card" data-full="./assets/images/product/sea-water-desalination-plant.jpg" data-name="Sea Water Desalination Plant">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/sea-water-desalination-plant.jpg" alt="Sea Water Desalination Plant" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Sea Water Desalination Plant</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="water treatment plant">
                        <div class="gallery-card" data-full="./assets/images/product/demineralization-plant.jpg" data-name="Demineralization Plant">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/demineralization-plant.jpg" alt="Demineralization Plant" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Demineralization Plant</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="west water treatment">
                        <div class="gallery-card" data-full="./assets/images/product/condensate-polishing-unit.jpg" data-name="Condensate Polishing Unit">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/condensate-polishing-unit.jpg" alt="Condensate Polishing Unit" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Condensate Polishing Unit</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="west water treatment">
                        <div class="gallery-card" data-full="./assets/images/product/sewage-treatment-plant.jpg" data-name="Sewage Treatment Plant">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/sewage-treatment-plant.jpg" alt="Sewage Treatment Plant" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Sewage Treatment Plant</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-category="west water treatment">
                        <div class="gallery-card" data-full="./assets/images/product/zero-liquid-discharge-system.jpg" data-name="Zero Liquid Discharge System">
                            <div class="image-wrapper">
                                <img class="gallery-img" src="./assets/images/product/zero-liquid-discharge-system.jpg" alt="Zero Liquid Discharge System" loading="lazy">
                            </div>
                            <div class="image-info">
                                <h4 class="image-title">Zero Liquid Discharge System</h4>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- END OF GALLERY ITEMS                                         -->
                    <!-- ============================================================ -->

                </div>

                <!-- Pagination (simplified: only Prev and Next) -->
                <div class="pagination-wrap">
                    <div class="pagination">
                        <span class="page-btn disabled" id="prevBtn">&laquo; Prev</span>
                        <span class="page-btn disabled" id="nextBtn">Next &raquo;</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div id="lightbox" class="lightbox-modal">
            <span class="close-lightbox">&times;</span>
            <img class="lightbox-image" id="lightboxImage" src="" alt="Enlarged view">
            <div class="lightbox-caption" id="lightboxCaption"></div>
        </div>

        <!-- start site-footer -->
        <?php include 'footer.php'; ?>
        <!-- end site-footer -->

    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>

    <script>
        // Pagination variables
        let currentPage = 1;
        const itemsPerPage = 9;
        const allItems = Array.from(document.querySelectorAll('.gallery-item'));
        let currentFilter = 'all';
        let filteredItems = [...allItems];

        // ================================================================
        // FILTER FUNCTION – items with category "all-only" are hidden
        // when ANY category filter (not "all") is active.
        // ================================================================
        function filterItems() {
            if (currentFilter === 'all') {
                filteredItems = [...allItems];
            } else {
                filteredItems = allItems.filter(item => {
                    const category = item.getAttribute('data-category');
                    return category === currentFilter && category !== 'all-only';
                });
            }
            currentPage = 1;
            renderPage();
            updatePagination();
        }

        function renderPage() {
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            // Hide all items first
            allItems.forEach(item => item.style.display = 'none');

            // Show filtered items for current page
            filteredItems.slice(start, end).forEach(item => item.style.display = 'block');
        }

        function updatePagination() {
            const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            // Update Prev button
            if (currentPage <= 1) {
                prevBtn.classList.add('disabled');
            } else {
                prevBtn.classList.remove('disabled');
            }

            // Update Next button
            if (currentPage >= totalPages) {
                nextBtn.classList.add('disabled');
            } else {
                nextBtn.classList.remove('disabled');
            }

            // Attach click events (remove old ones to avoid duplicates)
            prevBtn.onclick = function() {
                if (currentPage > 1) {
                    changePage(currentPage - 1);
                }
            };
            nextBtn.onclick = function() {
                if (currentPage < totalPages) {
                    changePage(currentPage + 1);
                }
            };
        }

        function changePage(page) {
            currentPage = page;
            renderPage();
            updatePagination();
            window.scrollTo({ top: 400, behavior: 'smooth' });
        }

        $(document).ready(function() {

            // ---- Filter button logic ----
            $('.filter-btn').click(function() {
                var filterValue = $(this).attr('data-filter');
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                currentFilter = filterValue;
                filterItems();
            });

            // ---- Lightbox ----
            $('.gallery-card').on('click', function(e) {
                e.stopPropagation();
                var imgSrc = $(this).data('full');
                var imgName = $(this).data('name');

                if (imgSrc && imgSrc !== '') {
                    $('#lightboxImage').attr('src', imgSrc);
                    $('#lightboxCaption').text(imgName);
                    $('#lightbox').addClass('active');
                    $('body').css('overflow', 'hidden');
                }
            });

            $('.close-lightbox').click(function() {
                $('#lightbox').removeClass('active');
                $('body').css('overflow', '');
            });

            $('#lightbox').click(function(e) {
                if (e.target === this) {
                    $('#lightbox').removeClass('active');
                    $('body').css('overflow', '');
                }
            });

            $(document).keyup(function(e) {
                if (e.key === "Escape") {
                    $('#lightbox').removeClass('active');
                    $('body').css('overflow', '');
                }
            });

            // ---- Initial render ----
            filterItems();

        });
    </script>

</body>

</html>