@extends('layouts.app')

@section('title', 'Jaina HR Solutions | Smart HR Technology')

@section('content')

<!-- SECTION 1: HERO -->
<section class="hr-hero-section" id="hero">
    <div class="hr-hero-bg"></div>
    <div class="container">
        <div class="hr-hero-content" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="hr-hero-title">Transform Your <span>Workforce Management</span> with Smart HR Technology</h1>
            <p class="hr-hero-desc">Manage employees, payroll, attendance, leave requests, recruitment, and performance from one centralized platform.</p>
            <div class="hr-hero-btns">
                <a href="#contact" class="btn hr-btn-main btn-lg" data-click-animate="pulse"><i class="fas fa-play-circle me-2"></i>Request Demo</a>
                <a href="#contact" class="btn hr-btn-outline btn-lg"><i class="fas fa-rocket me-2"></i>Start Free Trial</a>
            </div>
        </div>
        <div class="hr-hero-stats" data-aos="fade-up" data-aos-delay="300">
            <div class="hr-stat-item"><div class="hr-stat-number" data-count="500">0</div><div class="hr-stat-label">Organizations</div></div>
            <div class="hr-stat-item"><div class="hr-stat-number" data-count="50000">0</div><div class="hr-stat-label">Employees Managed</div></div>
            <div class="hr-stat-item"><div class="hr-stat-number" data-count="99.9" data-suffix="%">0</div><div class="hr-stat-label">System Uptime</div></div>
            <div class="hr-stat-item"><div class="hr-stat-number">24/7</div><div class="hr-stat-label">Support</div></div>
        </div>
    </div>
</section>

<!-- SECTION 2: TRUSTED BY -->
<section class="hr-trust-section">
    <div class="container">
        <div class="hr-trust-title" data-aos="fade-up">Trusted by Leading Organizations Across Tanzania</div>
        <div class="hr-trust-logos" data-aos="fade-up" data-aos-delay="100">
            <span class="hr-trust-logo">MICHEZO AFRICA</span>
            <span class="hr-trust-logo">TANZANIA CEMENTS</span>
            <span class="hr-trust-logo">AGRI SOLUTIONS</span>
            <span class="hr-trust-logo">SAFARI LODGES</span>
            <span class="hr-trust-logo">METRO RETAIL</span>
            <span class="hr-trust-logo">BLUESTAR LOGISTICS</span>
        </div>
    </div>
</section>

<!-- SECTION 3: ABOUT -->
<section class="hr-about-section" id="about">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="hr-about-img">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=800&q=80" alt="HR Platform" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="hr-section-label">About the Platform</span>
                <h2 class="hr-section-title">Modern HR Solutions for Growing Organizations</h2>
                <p>Our HR platform simplifies workforce management through automation, analytics, and employee self-service tools. Designed for Tanzanian businesses, it ensures compliance with local labor laws while streamlining everyday HR tasks.</p>
                <ul class="hr-about-features">
                    <li><i class="fas fa-check-circle"></i>Easy to Use</li>
                    <li><i class="fas fa-check-circle"></i>Cloud Based</li>
                    <li><i class="fas fa-check-circle"></i>Secure Data Storage</li>
                    <li><i class="fas fa-check-circle"></i>Mobile Friendly</li>
                    <li><i class="fas fa-check-circle"></i>Automated Workflows</li>
                </ul>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#contact" class="btn hr-btn-main">Learn More</a>
                    <a href="#contact" class="btn btn-outline-success rounded-pill px-4"><i class="fas fa-play-circle me-2"></i>Watch Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: CORE HR MODULES -->
<section class="hr-modules-section" id="services">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">What We Offer</span>
            <h2 class="hr-section-title">Core HR Modules</h2>
            <p class="hr-section-subtitle">Everything you need to manage your people in one integrated platform.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-module-card"><div class="hr-module-icon"><i class="fas fa-users"></i></div><h5>Employee Management</h5><p>Manage employee records and documents securely.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="hr-module-card"><div class="hr-module-icon"><i class="fas fa-money-check-alt"></i></div><h5>Payroll Management</h5><p>Automate salary calculations and payslips.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="hr-module-card"><div class="hr-module-icon"><i class="fas fa-clock"></i></div><h5>Attendance Tracking</h5><p>Monitor attendance in real-time.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="hr-module-card"><div class="hr-module-icon"><i class="fas fa-calendar-alt"></i></div><h5>Leave Management</h5><p>Handle leave requests and approvals.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-module-card"><div class="hr-module-icon"><i class="fas fa-bullhorn"></i></div><h5>Recruitment</h5><p>Post jobs and manage applicants.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="hr-module-card"><div class="hr-module-icon"><i class="fas fa-chart-bar"></i></div><h5>Performance Management</h5><p>Track employee performance.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="hr-module-card"><div class="hr-module-icon"><i class="fas fa-graduation-cap"></i></div><h5>Training Management</h5><p>Manage staff training programs.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="hr-module-card"><div class="hr-module-icon"><i class="fas fa-user-shield"></i></div><h5>Employee Self Service</h5><p>Allow staff to access their own info.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 5: WHY CHOOSE -->
<section class="hr-why-section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Why Us</span>
            <h2 class="hr-section-title text-white">Why Choose Our HR Platform</h2>
            <p class="hr-section-subtitle text-white-50">Built to simplify HR operations while keeping your data secure.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="hr-why-card"><div class="hr-why-icon"><i class="fas fa-robot"></i></div><h5>Smart Automation</h5><p>Reduce manual work with intelligent workflows and reminders.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100"><div class="hr-why-card"><div class="hr-why-icon"><i class="fas fa-chart-line"></i></div><h5>Real-Time Analytics</h5><p>Make informed decisions with live dashboards and reports.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200"><div class="hr-why-card"><div class="hr-why-icon"><i class="fas fa-shield-alt"></i></div><h5>Secure & Reliable</h5><p>Enterprise-grade security and automated backups.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="hr-why-card"><div class="hr-why-icon"><i class="fas fa-expand-arrows-alt"></i></div><h5>Scalable Solution</h5><p>Suitable for organizations of any size from 5 to 5,000+.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100"><div class="hr-why-card"><div class="hr-why-icon"><i class="fas fa-headset"></i></div><h5>Dedicated Support</h5><p>Professional support team available around the clock.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200"><div class="hr-why-card"><div class="hr-why-icon"><i class="fas fa-mobile-alt"></i></div><h5>Mobile Access</h5><p>Access from anywhere using web or mobile app.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 6: HR PROCESS FLOW -->
<section class="hr-process-section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">How It Works</span>
            <h2 class="hr-section-title">HR Process Flow</h2>
            <p class="hr-section-subtitle">From hiring to growth — everything is connected.</p>
        </div>
        <div class="hr-process-flow mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="hr-flow-step"><div class="hr-flow-number">1</div><h6>Recruitment</h6></div>
            <div class="hr-flow-arrow"><i class="fas fa-arrow-right"></i></div>
            <div class="hr-flow-step"><div class="hr-flow-number">2</div><h6>Hiring</h6></div>
            <div class="hr-flow-arrow"><i class="fas fa-arrow-right"></i></div>
            <div class="hr-flow-step"><div class="hr-flow-number">3</div><h6>Onboarding</h6></div>
            <div class="hr-flow-arrow"><i class="fas fa-arrow-right"></i></div>
            <div class="hr-flow-step"><div class="hr-flow-number">4</div><h6>Employee Mgmt</h6></div>
            <div class="hr-flow-arrow"><i class="fas fa-arrow-right"></i></div>
            <div class="hr-flow-step"><div class="hr-flow-number">5</div><h6>Payroll</h6></div>
            <div class="hr-flow-arrow"><i class="fas fa-arrow-right"></i></div>
            <div class="hr-flow-step"><div class="hr-flow-number">6</div><h6>Performance</h6></div>
            <div class="hr-flow-arrow"><i class="fas fa-arrow-right"></i></div>
            <div class="hr-flow-step"><div class="hr-flow-number">7</div><h6>Growth</h6></div>
        </div>
    </div>
</section>

<!-- SECTION 7: PLATFORM FEATURES -->
<section class="hr-features-section" id="features">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Feature Highlights</span>
            <h2 class="hr-section-title">Platform Features</h2>
            <p class="hr-section-subtitle">Powerful tools designed for modern HR teams.</p>
        </div>
        <div class="row g-3 mt-2">
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-feature-item"><i class="fas fa-folder-open"></i><span>Digital Employee Files</span></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="hr-feature-item"><i class="fas fa-cogs"></i><span>Automated Payroll</span></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="hr-feature-item"><i class="fas fa-calculator"></i><span>Tax Calculations</span></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="hr-feature-item"><i class="fas fa-calendar-check"></i><span>Leave Automation</span></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-feature-item"><i class="fas fa-file-alt"></i><span>Attendance Reports</span></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="hr-feature-item"><i class="fas fa-clock"></i><span>Shift Scheduling</span></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="hr-feature-item"><i class="fas fa-file-signature"></i><span>Contract Management</span></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="hr-feature-item"><i class="fas fa-bell"></i><span>Notifications & Alerts</span></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-feature-item"><i class="fas fa-user-circle"></i><span>Employee Portal</span></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="hr-feature-item"><i class="fas fa-tachometer-alt"></i><span>Manager Dashboard</span></div></div>
        </div>
    </div>
</section>

<!-- SECTION 8: DASHBOARD PREVIEW -->
<section class="hr-dashboard-section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Inside the Platform</span>
            <h2 class="hr-section-title">Dashboard Preview</h2>
            <p class="hr-section-subtitle">See your workforce data at a glance with beautiful dashboards.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0"><div class="hr-dash-card"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="HR Dashboard" loading="lazy"><h5>HR Dashboard</h5></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="hr-dash-card"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Payroll Dashboard" loading="lazy"><h5>Payroll Dashboard</h5></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0"><div class="hr-dash-card"><img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?auto=format&fit=crop&w=800&q=80" alt="Analytics" loading="lazy"><h5>Analytics Dashboard</h5></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="hr-dash-card"><img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=800&q=80" alt="Mobile App" loading="lazy"><h5>Mobile App Screens</h5></div></div>
        </div>
    </div>
</section>

<!-- SECTION 9: INDUSTRIES -->
<section class="hr-industries-section" id="industries">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Who We Serve</span>
            <h2 class="hr-section-title">Industries We Serve</h2>
            <p class="hr-section-subtitle">Flexible HR solutions for every sector.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-industry-card"><div class="hr-industry-icon"><i class="fas fa-hospital"></i></div><h5>Healthcare</h5></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="hr-industry-card"><div class="hr-industry-icon"><i class="fas fa-graduation-cap"></i></div><h5>Education</h5></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="hr-industry-card"><div class="hr-industry-icon"><i class="fas fa-building"></i></div><h5>Corporate</h5></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="hr-industry-card"><div class="hr-industry-icon"><i class="fas fa-industry"></i></div><h5>Manufacturing</h5></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-industry-card"><div class="hr-industry-icon"><i class="fas fa-hotel"></i></div><h5>Hospitality</h5></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="hr-industry-card"><div class="hr-industry-icon"><i class="fas fa-shopping-cart"></i></div><h5>Retail</h5></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="hr-industry-card"><div class="hr-industry-icon"><i class="fas fa-hard-hat"></i></div><h5>Construction</h5></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="hr-industry-card"><div class="hr-industry-icon"><i class="fas fa-truck"></i></div><h5>Logistics</h5></div></div>
        </div>
    </div>
</section>

<!-- SECTION 10: KEY BENEFITS -->
<section class="hr-benefits-section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Results</span>
            <h2 class="hr-section-title">Key Benefits</h2>
            <p class="hr-section-subtitle">Real impact for your organization.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="hr-benefit-card"><div class="hr-benefit-icon"><i class="fas fa-hourglass-half"></i></div><h5>Save Time</h5><p>Automate repetitive tasks and free up your HR team.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100"><div class="hr-benefit-card"><div class="hr-benefit-icon"><i class="fas fa-piggy-bank"></i></div><h5>Reduce Costs</h5><p>Lower operational expenses with streamlined processes.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200"><div class="hr-benefit-card"><div class="hr-benefit-icon"><i class="fas fa-bullseye"></i></div><h5>Improve Accuracy</h5><p>Minimize payroll and data entry errors.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="hr-benefit-card"><div class="hr-benefit-icon"><i class="fas fa-chart-line"></i></div><h5>Increase Productivity</h5><p>Empower HR teams to focus on strategic initiatives.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100"><div class="hr-benefit-card"><div class="hr-benefit-icon"><i class="fas fa-balance-scale"></i></div><h5>Better Compliance</h5><p>Stay compliant with Tanzania labor laws.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 11: SUCCESS STORIES -->
<section class="hr-success-section" id="success-stories">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Case Studies</span>
            <h2 class="hr-section-title">Client Success Stories</h2>
            <p class="hr-section-subtitle">Organizations that transformed their HR operations with our platform.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0"><div class="hr-success-card"><span class="hr-success-tag">Manufacturing</span><h5>Streamlined Payroll for 800+ Workers</h5><p>A leading cement manufacturer reduced payroll processing time from 5 days to 1 day and eliminated duplicate payments using our automated payroll module.</p></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="hr-success-card"><span class="hr-success-tag">Healthcare</span><h5>Shift Management for 24/7 Hospital</h5><p>A regional hospital automated nurse scheduling and reduced overtime costs by 30% while improving staff satisfaction scores.</p></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0"><div class="hr-success-card"><span class="hr-success-tag">Retail</span><h5>Multi-Branch Employee Tracking</h5><p>A retail chain with 12 branches across Tanzania consolidated HR data into one system, improving visibility and compliance reporting.</p></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="hr-success-card"><span class="hr-success-tag">Education</span><h5>Paperless Leave Management</h5><p>A private school network digitized leave requests and approval workflows, cutting admin time by 70% and improving record accuracy.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 12: TESTIMONIALS -->
<section class="hr-testimonials-section" id="testimonials">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Testimonials</span>
            <h2 class="hr-section-title">What Our Clients Say</h2>
        </div>
        <div class="hr-testimonial-slider mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="hr-testimonial-card active" data-index="0"><div class="hr-quote-icon"><i class="fas fa-quote-left"></i></div><div class="hr-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p>"This platform transformed our HR operations. Payroll is now done in hours, not days. Our staff love the self-service portal."</p><div class="hr-testimonial-author">Grace Mwamba</div><div class="hr-testimonial-company">HR Director, Metro Retail</div></div>
            <div class="hr-testimonial-card" data-index="1" style="display:none"><div class="hr-quote-icon"><i class="fas fa-quote-left"></i></div><div class="hr-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p>"Payroll processing became faster and more accurate. The attendance integration with biometric devices works seamlessly."</p><div class="hr-testimonial-author">Joseph Mrema</div><div class="hr-testimonial-company">CFO, Tanzania Cements Ltd</div></div>
            <div class="hr-testimonial-card" data-index="2" style="display:none"><div class="hr-quote-icon"><i class="fas fa-quote-left"></i></div><div class="hr-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div><p>"We went from spreadsheets to a full HR system in 2 weeks. The support team was incredibly helpful during onboarding."</p><div class="hr-testimonial-author">Dr. Amina Hassan</div><div class="hr-testimonial-company">Director, Safari Lodges Group</div></div>
        </div>
        <div class="hr-testimonial-dots"><span class="hr-dot active" data-index="0"></span><span class="hr-dot" data-index="1"></span><span class="hr-dot" data-index="2"></span></div>
    </div>
</section>

<!-- SECTION 13: HR ANALYTICS -->
<section class="hr-analytics-section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Data Driven</span>
            <h2 class="hr-section-title">HR Analytics</h2>
            <p class="hr-section-subtitle">Visualize your workforce data with powerful analytics.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-analytics-card"><div class="hr-analytics-icon"><i class="fas fa-user-plus"></i></div><h5>Employee Growth</h5><p>Track hiring trends and headcount over time.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="hr-analytics-card"><div class="hr-analytics-icon"><i class="fas fa-calendar-check"></i></div><h5>Attendance Trends</h5><p>Monitor punctuality and absenteeism patterns.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="hr-analytics-card"><div class="hr-analytics-icon"><i class="fas fa-umbrella-beach"></i></div><h5>Leave Statistics</h5><p>Understand leave utilization across departments.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="hr-analytics-card"><div class="hr-analytics-icon"><i class="fas fa-money-bill-wave"></i></div><h5>Payroll Summary</h5><p>Review payroll costs and budget allocation.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 14: INTEGRATIONS -->
<section class="hr-integrations-section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Connected</span>
            <h2 class="hr-section-title">Integrations</h2>
            <p class="hr-section-subtitle">Connect with the tools you already use.</p>
        </div>
        <div class="row g-3 mt-2">
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="0"><div class="hr-integration-item"><i class="fas fa-money-check-alt"></i><span>Payroll Systems</span></div></div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="50"><div class="hr-integration-item"><i class="fas fa-fingerprint"></i><span>Biometric Devices</span></div></div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="100"><div class="hr-integration-item"><i class="fas fa-calculator"></i><span>Accounting Software</span></div></div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="150"><div class="hr-integration-item"><i class="fas fa-mobile-alt"></i><span>Mobile Apps</span></div></div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="0"><div class="hr-integration-item"><i class="fas fa-comment-dots"></i><span>SMS Gateway</span></div></div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="50"><div class="hr-integration-item"><i class="fas fa-envelope"></i><span>Email Systems</span></div></div>
        </div>
    </div>
</section>

<!-- SECTION 15: SECURITY -->
<section class="hr-security-section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Your Data is Safe</span>
            <h2 class="hr-section-title">Security & Compliance</h2>
            <p class="hr-section-subtitle">Enterprise-grade protection for your sensitive HR data.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-security-card"><div class="hr-security-icon"><i class="fas fa-lock"></i></div><h5>Data Encryption</h5><p>End-to-end encryption for all stored and transmitted data.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="hr-security-card"><div class="hr-security-icon"><i class="fas fa-user-shield"></i></div><h5>Role-Based Access</h5><p>Granular permissions ensure users only see what they need.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="hr-security-card"><div class="hr-security-icon"><i class="fas fa-cloud-upload-alt"></i></div><h5>Backup & Recovery</h5><p>Automated daily backups with quick restore options.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="hr-security-card"><div class="hr-security-icon"><i class="fas fa-clipboard-list"></i></div><h5>Audit Logs</h5><p>Track every action for compliance and accountability.</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="hr-security-card"><div class="hr-security-icon"><i class="fas fa-check-circle"></i></div><h5>Compliance Standards</h5><p>Aligned with Tanzania labor law and data protection requirements.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 16: MOBILE APP -->
<section class="hr-mobile-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="hr-mobile-img">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=800&q=80" alt="Mobile App" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="hr-section-label">On the Go</span>
                <h2 class="hr-section-title">Manage HR Anywhere</h2>
                <p>Our mobile app puts HR management in your pocket. Employees and managers can handle everyday tasks without being tied to a desk.</p>
                <ul class="hr-about-features">
                    <li><i class="fas fa-check-circle"></i>Clock in/out with GPS</li>
                    <li><i class="fas fa-check-circle"></i>Apply for leave</li>
                    <li><i class="fas fa-check-circle"></i>View payslips</li>
                    <li><i class="fas fa-check-circle"></i>Receive notifications</li>
                    <li><i class="fas fa-check-circle"></i>Employee directory</li>
                </ul>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#" class="btn btn-dark rounded-pill px-4"><i class="fab fa-google-play me-2"></i>Google Play</a>
                    <a href="#" class="btn btn-dark rounded-pill px-4"><i class="fab fa-apple me-2"></i>App Store</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 17: PRICING -->
<section class="hr-pricing-section" id="pricing">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Pricing</span>
            <h2 class="hr-section-title">Choose Your Plan</h2>
            <p class="hr-section-subtitle">Flexible pricing for organizations of all sizes.</p>
        </div>
        <div class="row g-4 mt-2 justify-content-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="hr-pricing-card">
                    <h5>Starter</h5>
                    <div class="hr-price">TZS 150,000<span>/month</span></div>
                    <ul>
                        <li><i class="fas fa-check"></i>Up to 25 employees</li>
                        <li><i class="fas fa-check"></i>Employee records</li>
                        <li><i class="fas fa-check"></i>Leave management</li>
                        <li><i class="fas fa-check"></i>Basic reports</li>
                        <li><i class="fas fa-check"></i>Email support</li>
                    </ul>
                    <a href="#contact" class="btn btn-outline-success rounded-pill w-100">Get Started</a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="hr-pricing-card featured">
                    <div class="hr-pricing-badge">Popular</div>
                    <h5>Professional</h5>
                    <div class="hr-price">TZS 450,000<span>/month</span></div>
                    <ul>
                        <li><i class="fas fa-check"></i>Up to 100 employees</li>
                        <li><i class="fas fa-check"></i>Payroll automation</li>
                        <li><i class="fas fa-check"></i>Attendance tracking</li>
                        <li><i class="fas fa-check"></i>Recruitment module</li>
                        <li><i class="fas fa-check"></i>Priority support</li>
                    </ul>
                    <a href="#contact" class="btn hr-btn-main rounded-pill w-100">Get Started</a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="hr-pricing-card">
                    <h5>Enterprise</h5>
                    <div class="hr-price">Custom</div>
                    <ul>
                        <li><i class="fas fa-check"></i>Unlimited employees</li>
                        <li><i class="fas fa-check"></i>All modules included</li>
                        <li><i class="fas fa-check"></i>Multi-branch support</li>
                        <li><i class="fas fa-check"></i>Custom integrations</li>
                        <li><i class="fas fa-check"></i>Dedicated account manager</li>
                    </ul>
                    <a href="#contact" class="btn btn-outline-success rounded-pill w-100">Contact Sales</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: FAQ -->
<section class="hr-faq-section" id="faq">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Common Questions</span>
            <h2 class="hr-section-title">Frequently Asked Questions</h2>
            <p class="hr-section-subtitle">Quick answers to common HR platform inquiries.</p>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="accordion" id="hrFaqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#hrFaq1" aria-expanded="true">How does payroll work?</button></h2>
                        <div id="hrFaq1" class="accordion-collapse collapse show" data-bs-parent="#hrFaqAccordion"><div class="accordion-body">Our payroll module automates salary calculations based on attendance, leave, overtime, and statutory deductions. You can generate payslips with one click and disburse via bank integration.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hrFaq2" aria-expanded="false">Can employees access payslips?</button></h2>
                        <div id="hrFaq2" class="accordion-collapse collapse" data-bs-parent="#hrFaqAccordion"><div class="accordion-body">Yes. Employees can log in to the self-service portal or mobile app to view and download their payslips, leave balances, and personal records.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hrFaq3" aria-expanded="false">Is the system cloud-based?</button></h2>
                        <div id="hrFaq3" class="accordion-collapse collapse" data-bs-parent="#hrFaqAccordion"><div class="accordion-body">Yes. Jaina HR is fully cloud-based, accessible from any device with an internet connection. No local servers or installations required.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hrFaq4" aria-expanded="false">Does it support multiple branches?</button></h2>
                        <div id="hrFaq4" class="accordion-collapse collapse" data-bs-parent="#hrFaqAccordion"><div class="accordion-body">Absolutely. You can manage employees across multiple locations, departments, and cost centers from a single dashboard with role-based access.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hrFaq5" aria-expanded="false">Can it integrate with biometric devices?</button></h2>
                        <div id="hrFaq5" class="accordion-collapse collapse" data-bs-parent="#hrFaqAccordion"><div class="accordion-body">Yes. We support integration with most popular biometric attendance devices and offer API access for custom integrations.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 19: BLOG -->
<section class="hr-blog-section" id="insights">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="hr-section-label">Latest Updates</span>
            <h2 class="hr-section-title">Blog & Resources</h2>
            <p class="hr-section-subtitle">Stay informed with HR best practices and industry news.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="hr-blog-card">
                    <div class="hr-blog-img"><img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=600&q=80" alt="Blog" loading="lazy"></div>
                    <div class="hr-blog-body"><span class="hr-blog-tag">HR Tips</span><h5>5 Ways to Improve Employee Engagement</h5><div class="hr-blog-meta"><span><i class="far fa-calendar"></i>June 18, 2026</span></div></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="hr-blog-card">
                    <div class="hr-blog-img"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=600&q=80" alt="Blog" loading="lazy"></div>
                    <div class="hr-blog-body"><span class="hr-blog-tag">Payroll Guides</span><h5>Understanding PAYE in Tanzania</h5><div class="hr-blog-meta"><span><i class="far fa-calendar"></i>June 12, 2026</span></div></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="hr-blog-card">
                    <div class="hr-blog-img"><img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=600&q=80" alt="Blog" loading="lazy"></div>
                    <div class="hr-blog-body"><span class="hr-blog-tag">Compliance</span><h5>New Labor Law Updates for 2026</h5><div class="hr-blog-meta"><span><i class="far fa-calendar"></i>June 5, 2026</span></div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 20: CTA -->
<section class="hr-cta-section">
    <div class="container">
        <div class="hr-cta-content" data-aos="zoom-in">
            <h2>Ready to Modernize Your HR Operations?</h2>
            <p>Request a free demonstration today and see how our platform can transform your workforce management.</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="#contact" class="btn hr-btn-main btn-lg" data-click-animate="pulse"><i class="fas fa-play-circle me-2"></i>Request Demo</a>
                <a href="#contact" class="btn hr-btn-outline btn-lg"><i class="fas fa-phone me-2"></i>Contact Sales</a>
            </div>
        </div>
    </div>
</section>

@endsection
