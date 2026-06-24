<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Jaina Attorneys | Trusted Legal Advisors in Tanzania')</title>
    <meta name="description" content="@yield('meta_description', 'Jaina Attorneys provides professional legal solutions for businesses and individuals in Tanzania. Corporate law, litigation, tax, immigration, and more.')">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:300,400,500,600,700,800|Instrument+Sans:400,500,600,700" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Premium Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top {{ request()->routeIs('hr') ? 'hr-theme' : 'legal-theme' }}" id="mainNav">
            <div class="container">
                @if(request()->routeIs('hr'))
                <a class="navbar-brand fw-bold" href="{{ route('hr') }}">
                    <i class="fas fa-users me-2"></i>JAINA<span class="brand-accent">HR</span>SOLUTIONS
                </a>
                @else
                <a class="navbar-brand fw-bold" href="{{ route('legal') }}">
                    <i class="fas fa-scale-balanced me-2"></i>JAINA<span class="brand-accent">ATTORNEYS</span>
                </a>
                @endif
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><h6 class="dropdown-header">{{ request()->routeIs('hr') ? 'HR Services' : 'Practice Areas' }}</h6></li>
                                @if(request()->routeIs('hr'))
                                <li><a class="dropdown-item" href="#services"><i class="fas fa-users me-2"></i>HR Consulting</a></li>
                                <li><a class="dropdown-item" href="#services"><i class="fas fa-file-contract me-2"></i>Policy Drafting</a></li>
                                <li><a class="dropdown-item" href="#services"><i class="fas fa-search me-2"></i>Talent Acquisition</a></li>
                                <li><a class="dropdown-item" href="#services"><i class="fas fa-chalkboard-teacher me-2"></i>Training & Development</a></li>
                                <li><a class="dropdown-item" href="#services"><i class="fas fa-chart-line me-2"></i>HR Audit</a></li>
                                @else
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-building me-2"></i>Corporate Law</a></li>
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-handshake me-2"></i>Commercial Law</a></li>
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-gavel me-2"></i>Litigation</a></li>
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-users me-2"></i>Arbitration</a></li>
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-calculator me-2"></i>Tax Law</a></li>
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-heart me-2"></i>Family Law</a></li>
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-passport me-2"></i>Immigration Law</a></li>
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-user-tie me-2"></i>Employment Law</a></li>
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-university me-2"></i>Banking & Finance</a></li>
                                <li><a class="dropdown-item" href="#practice-areas"><i class="fas fa-home me-2"></i>Real Estate</a></li>
                                @endif
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Industries</h6></li>
                                <li><a class="dropdown-item" href="#industries"><i class="fas fa-university me-2"></i>Banking</a></li>
                                <li><a class="dropdown-item" href="#industries"><i class="fas fa-hard-hat me-2"></i>Construction</a></li>
                                <li><a class="dropdown-item" href="#industries"><i class="fas fa-building me-2"></i>Real Estate</a></li>
                                <li><a class="dropdown-item" href="#industries"><i class="fas fa-laptop-code me-2"></i>Technology</a></li>
                                <li><a class="dropdown-item" href="#industries"><i class="fas fa-bolt me-2"></i>Energy & Mining</a></li>
                                <li><a class="dropdown-item" href="#industries"><i class="fas fa-industry me-2"></i>Manufacturing</a></li>
                                <li><a class="dropdown-item" href="#industries"><i class="fas fa-hands-helping me-2"></i>NGOs</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#team">Our Team</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Insights</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#insights"><i class="fas fa-newspaper me-2"></i>Articles</a></li>
                                <li><a class="dropdown-item" href="#insights"><i class="fas fa-file-alt me-2"></i>Legal Updates</a></li>
                                <li><a class="dropdown-item" href="#insights"><i class="fas fa-calendar me-2"></i>News & Events</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#faq"><i class="fas fa-question-circle me-2"></i>FAQs</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        @if(request()->routeIs('hr'))
                        <a href="{{ route('legal') }}" class="btn btn-outline-light btn-sm rounded-pill px-3">
                            <i class="fas fa-scale-balanced me-1"></i>Legal Services
                        </a>
                        @else
                        <a href="{{ route('hr') }}" class="btn btn-outline-light btn-sm rounded-pill px-3">
                            <i class="fas fa-users me-1"></i>HR Solutions
                        </a>
                        @endif
                        <a href="#contact" class="btn btn-consultation" data-click-animate="pulse">
                            <i class="fas fa-calendar-check me-2"></i>Book Consultation
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <!-- Premium Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="footer-title"><i class="fas fa-scale-balanced me-2"></i>Jaina Attorneys</h5>
                        <p class="footer-desc">Trusted legal advisors delivering excellence in corporate, commercial, and dispute resolution services across Tanzania and East Africa.</p>
                        <div class="footer-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h6 class="footer-subtitle">Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="#hero">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#practice-areas">Services</a></li>
                            <li><a href="#team">Our Team</a></li>
                            <li><a href="#insights">Insights</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h6 class="footer-subtitle">Practice Areas</h6>
                        <ul class="footer-links">
                            <li><a href="#practice-areas">Corporate Law</a></li>
                            <li><a href="#practice-areas">Commercial Law</a></li>
                            <li><a href="#practice-areas">Arbitration</a></li>
                            <li><a href="#practice-areas">Tax Law</a></li>
                            <li><a href="#practice-areas">Family Law</a></li>
                            <li><a href="#practice-areas">Immigration</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h6 class="footer-subtitle">Resources</h6>
                        <ul class="footer-links">
                            <li><a href="#insights">Articles</a></li>
                            <li><a href="#insights">Legal Updates</a></li>
                            <li><a href="#faq">FAQs</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h6 class="footer-subtitle">Contact</h6>
                        <ul class="footer-contact">
                            <li><i class="fas fa-phone me-2"></i>+255 712 345 678</li>
                            <li><i class="fas fa-envelope me-2"></i>info@jainaattorneys.co.tz</li>
                            <li><i class="fas fa-map-marker-alt me-2"></i>Dar es Salaam, Tanzania</li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p class="mb-0">&copy; {{ date('Y') }} Jaina Attorneys. All rights reserved. <span class="d-none d-md-inline">|</span> <a href="#">Terms of Service</a> <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </footer>

        <!-- Floating WhatsApp -->
        <a href="https://wa.me/255712345678" target="_blank" class="whatsapp-float" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</body>
</html>
