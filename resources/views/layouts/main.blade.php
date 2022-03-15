<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <title>Let's Talk</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        
        <!-- Favicons -->
        <link href="{{ asset('img/favicon.png') }}" rel="icon">
        <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
        
        <!-- Google Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet"> --}}
        
        <!-- Vendor CSS Files -->
        <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <!-- open sans font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        
        <!-- palanquin dark font -->
        <link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- styles -->
        <link rel="stylesheet/less" href="{{ asset('css/style.less') }}">
        
        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
            <div class="container d-flex justify-content-between align-items-center">
                <div id="logo">
                    <a href="{{ route('index') }}">
                        <div class="img"></div>
                    </a>
                </div>
                
                <nav id="navbar" class="navbar">
                    <ul>
                        <li>
                            <a class="nav-link scrollto active" href="#hero">
                                Home
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link scrollto" href="#about">
                                About
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link scrollto" href="#services">
                                Services
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link scrollto " href="#portfolio">
                                Portfolio
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link scrollto" href="#team">
                                Team
                            </a>
                        </li>
                        
                        <li class="dropdown" hidden>
                            <a href="#">
                                <span>
                                    Drop Down
                                </span>
                                
                                &nbsp;
                                
                                <i class="bi bi-chevron-down"></i>
                            </a>
                            
                            <ul>
                                <li>
                                    <a href="#">
                                        Drop Down 1
                                    </a>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="#">
                                        <span>
                                            Deep Drop Down
                                        </span>
                                        
                                        &nbsp;
                                        
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                    
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Deep Drop Down 1
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">
                                                Deep Drop Down 2
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">
                                                Deep Drop Down 3
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        Drop Down 2
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        Drop Down 3
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li>
                            <a class="nav-link scrollto" href="#contact">
                                Contact
                            </a>
                        </li>
                        
                        <li class="nav-indicator"></li>
                    </ul>
                    
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </header><!-- End Header -->
        
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                <h1>
                    SOLUS<span>IDE</span>SAIN
                </h1>
                
                {{-- <h2>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, dolorum.
                </h2> --}}
                
                {{-- <a href="#about" class="btn-get-started scrollto">
                    Get Started
                </a> --}}
            </div>
        </section><!-- End Hero Section -->
        
        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about">
                <div class="container" data-aos="fade-up">
                    <div class="row about-container">
                        <div class="offset-lg-2 col-lg-8 content order-lg-1 order-2">
                            <h2 class="title">
                                Tentang Kami
                            </h2>
                            
                            <br>
                            
                            <p>
                                Perusahaan kami bergerak di bidang <b>IT</b> dan <b>Creative Design</b>. Kami bekerja keras untuk membantu memecahkan masalah klien secara efektif dan kreatif.
                                
                                <br>
                                <br>
                                
                                Dengan tim yang profesional, kreatif dan berkomitmen, kami siap membantu mewujudkan ide dan impian Anda untuk masa depan bisnis Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </section><!-- End About Section -->
            
            <!-- ======= Facts Section ======= -->
            <section id="facts" hidden>
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h3 class="section-title">
                            Facts
                        </h3>
                        
                        <p class="section-description">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        </p>
                    </div>
                    
                    <div class="row counters">
                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>
                                Clients
                            </p>
                        </div>
                        
                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="534" data-purecounter-duration="1" class="purecounter"></span>
                            <p>
                                Projects
                            </p>
                        </div>
                        
                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>
                                Hours Of Support
                            </p>
                        </div>
                        
                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
                            <p>
                                Hard Workers
                            </p>
                        </div>
                    </div>
                </div>
            </section><!-- End Facts Section -->
            
            <!-- ======= Services Section ======= -->
            <section id="services">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h3 class="section-title">
                            Layanan Kami
                        </h3>
                        
                        <br>
                        
                        <p class="section-description" hidden>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        </p>
                    </div>
                    
                    <div class="row justify-content-center">
                        @php
                        // IT Aplikasi
                        // Desain Grafis
                        // Desain Periklanan
                        // Desain Media Sosial
                        // Desain Web
                        // Ilustrasi
                        // Desain Produk, Kemasan, Logo, Brand Identity
                        // Video Editing
                        // Branding
                        $services = [
                            [
                                "name" => "CREATIVE DEVELOPMENT",
                                "desc" => 'CREATIVE CONCEPTS<br>UX DESIGN &amp; REVIEW<br>UI DESIGN<br>OUTDOOR MEDIA',
                            ],
                            [
                                "name" => "TECH DEVELOPMENT",
                                "desc" => 'FRONT-END/BACK-END<br>INTERACTIVE<br>LARAVEL/PHP<br>SITECORE<br>NATIVE MOBILE APPS',
                            ],
                            [
                                "name" => "DIGITAL MARKETING",
                                "desc" => 'SEM/SEO<br></span>SOCIAL MEDIA MANAGEMENT<br>SOCIAL MEDIA MARKETING<br>BRANDING COMPANY',
                            ],
                        ];
                        foreach($services as $items) {
                            echo '<div class="col-lg-4 col-md-6" data-aos="zoom-in">
                                    <div class="box">
                                        <h4 class="title">
                                            ' . $items["name"] . '
                                        </h4>
                                        
                                        <p class="description">
                                            ' . $items["desc"] . '
                                        </p>
                                    </div>
                                </div>';
                        }
                        @endphp
                        
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" hidden>
                            <div class="box">
                                <div class="icon">
                                    <a href="">
                                        <i class="bi bi-briefcase"></i>
                                    </a>
                                </div>
                                
                                <h4 class="title">
                                    <a href="">
                                        Lorem Ipsum
                                    </a>
                                </h4>
                                
                                <p class="description">
                                    Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Services Section -->
            
            <!-- ======= Call To Action Section ======= -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row" data-aos="zoom-in">
                        <div class="col-lg-9 text-center text-lg-start">
                            <h3 class="cta-title">
                                Call To Action
                            </h3>
                            
                            <p class="cta-text">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        
                        <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="#">
                                Call To Action
                            </a>
                        </div>
                    </div>
                </div>
            </section><!-- End Call To Action Section -->
            
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h3 class="section-title">
                            Portfolio
                        </h3>
                        
                        <p class="section-description">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        </p>
                    </div>
                    
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">
                                    All
                                </li>
                                
                                <li data-filter=".filter-app">
                                    App
                                </li>
                                
                                <li data-filter=".filter-card">
                                    Card
                                </li>
                                
                                <li data-filter=".filter-web">
                                    Web
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                            
                            <div class="portfolio-info">
                                <h4>
                                    App 1
                                </h4>
                                
                                <p>
                                    App
                                </p>
                                
                                <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1">
                                    <i class="bx bx-plus"></i>
                                </a>
                                
                                <a href="portfolio-details.html" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                            
                            <div class="portfolio-info">
                                <h4>
                                    Web 3
                                </h4>
                                
                                <p>
                                    Web
                                </p>
                                
                                <a href="{{ asset('img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                
                                <a href="portfolio-details.html" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                            
                            <div class="portfolio-info">
                                <h4>
                                    App 2
                                </h4>
                                
                                <p>
                                    App
                                </p>
                                
                                <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2">
                                    <i class="bx bx-plus"></i>
                                </a>
                                
                                <a href="portfolio-details.html" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                            
                            <div class="portfolio-info">
                                <h4>
                                    Card 2
                                </h4>
                                
                                <p>
                                    Card
                                </p>
                                
                                <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2">
                                    <i class="bx bx-plus"></i>
                                </a>
                                
                                <a href="portfolio-details.html" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                            
                            <div class="portfolio-info">
                                <h4>
                                    Web 2
                                </h4>
                                
                                <p>
                                    Web
                                </p>
                                
                                <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2">
                                    <i class="bx bx-plus"></i>
                                </a>
                                
                                <a href="portfolio-details.html" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                            
                            <div class="portfolio-info">
                                <h4>
                                    App 3
                                </h4>
                                
                                <p>
                                    App
                                </p>
                                
                                <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                
                                <a href="portfolio-details.html" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                            
                            <div class="portfolio-info">
                                <h4>
                                    Card 1
                                </h4>
                                
                                <p>
                                    Card
                                </p>
                                
                                <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1">
                                    <i class="bx bx-plus"></i>
                                </a>
                                
                                <a href="portfolio-details.html" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                            
                            <div class="portfolio-info">
                                <h4>
                                    Card 3
                                </h4>
                                
                                <p>
                                    Card
                                </p>
                                
                                <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                
                                <a href="portfolio-details.html" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                            
                            <div class="portfolio-info">
                                <h4>
                                    Web 3
                                </h4>
                                
                                <p>
                                    Web
                                </p>
                                
                                <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
                                    <i class="bx bx-plus"></i>
                                </a>
                                
                                <a href="portfolio-details.html" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
            
            <!-- ======= Team Section ======= -->
            <section id="team">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h3 class="section-title">
                            Team
                        </h3>
                        
                        <p class="section-description">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        </p>
                    </div>
                    
                    @php
                    $teams = [
                        [
                            "img" => "img/team-1.jpg",
                            "name" => "Erwin Farera",
                            "pos" => "Padir",
                            "email" => "erwin.farera@letstalk.my.id",
                            "phone" => "(+62) 809 8 9999",
                            "social" => [
                                "instagram" => "",
                                "twitter" => "",
                                "facebook" => "",
                                "linkedin" => "",
                            ],
                        ],
                        [
                            "img" => "img/team-2.jpg",
                            "name" => "Ahmad Syafiq",
                            "pos" => "Kang Desain",
                            "email" => "ahmad.syafiq@letstalk.my.id",
                            "phone" => "(+62) 809 8 9999",
                            "social" => [
                                "instagram" => "",
                                "twitter" => "",
                                "facebook" => "",
                                "linkedin" => "",
                            ],
                        ],
                        [
                            "img" => "img/team-3.jpg",
                            "name" => "Tom McField",
                            "pos" => "Kang Itung BOK",
                            "email" => "tom@letstalk.my.id",
                            "phone" => "(+62) 809 8 9999",
                            "social" => [
                                "instagram" => "",
                                "twitter" => "",
                                "facebook" => "",
                                "linkedin" => "",
                            ],
                        ],
                        [
                            "img" => "img/team-4.jpg",
                            "name" => "Yudhistiro Arie",
                            "pos" => "Kang Ketik",
                            "email" => "yudhistiro.arie@letstalk.my.id",
                            "phone" => "(+62) 809 8 9999",
                            "social" => [
                                "instagram" => "",
                                "twitter" => "",
                                "facebook" => "",
                                "linkedin" => "",
                            ],
                        ],
                        [
                            "img" => "img/team-1.jpg",
                            "name" => "Ivan Ramadani Eka",
                            "pos" => "Kang Mejik",
                            "email" => "ivan.ramadani@letstalk.my.id",
                            "phone" => "(+62) 809 8 9999",
                            "social" => [
                                "instagram" => "",
                                "twitter" => "",
                                "facebook" => "",
                                "linkedin" => "",
                            ],
                        ],
                    ];
                    @endphp
                    
                    <div class="row justify-content-center">
                        @foreach($teams as $team)
                            @php
                            $one = round(mt_rand() / mt_getrandmax(), 2) * 100;
                            $two = round(mt_rand() / mt_getrandmax(), 2) * 100;
                            $three = $one - 1;
                            $four = $two - 1
                            @endphp
                        <div class="col-lg-3 col-md-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="100" style="--img: url('{{ asset($team['img']) }}'); --one: {{ $one }}%; --two: {{ $two }}%; --three: {{ $three }}%; --four: {{ $four }}%;">
                                
                                <div>
                                    <h4>
                                        {{ $team["name"] }}
                                    </h4>
                                    
                                    <span>
                                        {{ $team["pos"] }}
                                    </span>
                                    
                                    <p>
                                        {{ $team["phone"] }}
                                    </p>
                                    
                                    <p>
                                        {{ $team["email"] }}
                                    </p>
                                    
                                    <div class="social">
                                        @foreach($team["social"] as $social => $link)
                                        <a href="{{ $link }}">
                                            <i class="bi bi-{{ $social }}"></i>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        <div hidden class="col-lg-3 col-md-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="200">
                                <div class="pic">
                                    <img src="{{ asset('img/team-2.jpg') }}" alt="">
                                </div>
                                
                                <h4>
                                    Sarah Jhinson
                                </h4>
                                
                                <span>
                                    Product Manager
                                </span>
                                
                                <div class="social">
                                    <a href="">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    
                                    <a href="">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    
                                    <a href="">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    
                                    <a href="">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div hidden class="col-lg-3 col-md-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="300">
                                <div class="pic">
                                    <img src="{{ asset('img/team-3.jpg') }}" alt="">
                                </div>
                                
                                <h4>
                                    William Anderson
                                </h4>
                                
                                <span>
                                    CTO
                                </span>
                                
                                <div class="social">
                                    <a href="">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    
                                    <a href="">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    
                                    <a href="">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    
                                    <a href="">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div hidden class="col-lg-3 col-md-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="400">
                                <div class="pic">
                                    <img src="{{ asset('img/team-4.jpg') }}" alt="">
                                </div>
                                
                                <h4>
                                    Amanda Jepson
                                </h4>
                                
                                <span>
                                    Accountant
                                </span>
                                
                                <div class="social">
                                    <a href="">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    
                                    <a href="">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    
                                    <a href="">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    
                                    <a href="">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Team Section -->
            
            <!-- ======= Contact Section ======= -->
            <section id="contact">
                <div class="container">
                    <div class="section-header">
                        <h3 class="section-title">
                            Contact
                        </h3>
                        
                        <p class="section-description">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        </p>
                    </div>
                </div>
                
                <!-- Uncomment below if you wan to use dynamic maps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-4">
                            <div class="info">
                                <div>
                                    <i class="bi bi-geo-alt"></i>
                                    <p>A108 Adam Street<br>New York, NY 535022</p>
                                </div>
                                
                                <div>
                                    <i class="bi bi-envelope"></i>
                                    <p>info@example.com</p>
                                </div>
                                
                                <div>
                                    <i class="bi bi-phone"></i>
                                    <p>+1 5589 55488 55s</p>
                                </div>
                            </div>
                            
                            <div class="social-links">
                                <!-- twitter -->
                                <a href="#" class="twitter">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                
                                <!-- facebook -->
                                <a href="#" class="facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                
                                <!-- instagram -->
                                <a href="#" class="instagram">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                
                                <!-- linkedin -->
                                <a href="#" class="linkedin">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-5 col-md-8">
                            <div class="form">
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    
                                    <div class="form-group mt-3">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                    
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                    </div>
                                    
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    
                                    <div class="my-3">
                                        <div class="loading">
                                            Loading
                                        </div>
                                        
                                        <div class="error-message"></div>
                                        
                                        <div class="sent-message">
                                            Your message has been sent. Thank you!
                                        </div>
                                    </div>
                                    
                                    <div class="text-center">
                                        <button type="submit">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Contact Section -->
        </main><!-- End #main -->
        
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <img src="{{ asset('img/logo/logo_kuning.png') }}" width="4%">. All Rights Reserved
                </div>
                
                {{-- <div class="credits">
                    <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div> --}}
            </div>
        </footer><!-- End Footer -->
        
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>
        
        <!-- background particles -->
        <script src="{{ asset('js/jparticle.jquery.min.js') }}"></script>
        
        <!-- less -->
        <script src="{{ asset('js/less_v2.7.2.js') }}" data-log-level="1"></script>
        
        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
        <script src="{{ asset('vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
        
        <!-- Template Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>
        
        <!-- glassyworm -->
        <script src="{{ asset('js/sketch.js') }}"></script>
        <script src="{{ asset('js/glassyWorms.js') }}"></script>
        
        <!-- particles -->
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        
        <!-- simplex noise -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.js"></script>
        <script src="{{ asset('js/simplex-noise.js') }}"></script>
    </body>
</html>