@extends('layouts.app')

@section('title', 'Jaina Attorneys | Trusted Legal Advisors in Tanzania')

@section('content')

<!-- HERO -->
<section class="hero-section" id="hero">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="hero-title">Trusted Legal Advisors for <span>Businesses</span> and <span>Individuals</span> in Tanzania</h1>
            <p class="hero-desc">Professional legal solutions tailored to protect your interests, navigate complex regulations, and achieve outstanding results.</p>
            <div class="hero-btns">
                <a href="#contact" class="btn btn-gold btn-lg" data-click-animate="pulse"><i class="fas fa-calendar-check me-2"></i>Book Consultation</a>
                <a href="#contact" class="btn btn-outline-light btn-lg"><i class="fas fa-phone me-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
            <div class="stat-item"><div class="stat-number" data-count="500">0</div><div class="stat-label">Cases Handled</div></div>
            <div class="stat-item"><div class="stat-number" data-count="100">0</div><div class="stat-label">Corporate Clients</div></div>
            <div class="stat-item"><div class="stat-number" data-count="10">0</div><div class="stat-label">Years Experience</div></div>
            <div class="stat-item"><div class="stat-number" data-count="95">0</div><div class="stat-label">% Satisfaction</div></div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="about-section" id="about">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?auto=format&fit=crop&w=800&q=80" alt="Jaina Attorneys Office" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="section-label">About Jaina Attorneys</span>
                <h2 class="section-title">A Legacy of Legal Excellence in Tanzania</h2>
                <p>Jaina Attorneys is a premier law firm based in Dar es Salaam, Tanzania, providing comprehensive legal services to corporations, investors, NGOs, and individuals. Our team combines deep local knowledge with international best practices.</p>
                <p>We are committed to delivering strategic, results-driven legal counsel that protects our clients interests and helps them achieve their objectives.</p>
                <ul class="about-features">
                    <li><i class="fas fa-check-circle"></i>Registered with the Tanganyika Law Society</li>
                    <li><i class="fas fa-check-circle"></i>Multi-jurisdictional expertise across East Africa</li>
                    <li><i class="fas fa-check-circle"></i>Client-centered approach with transparent communication</li>
                    <li><i class="fas fa-check-circle"></i>Proven track record in complex corporate transactions</li>
                </ul>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#team" class="btn btn-gold">Learn More</a>
                    <a href="#team" class="btn btn-outline-dark rounded-pill px-4"><i class="fas fa-users me-2"></i>Meet Our Team</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRACTICE AREAS -->
<section class="practice-section" id="practice-areas">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">What We Do</span>
            <h2 class="section-title">Our Practice Areas</h2>
            <p class="section-subtitle">Comprehensive legal expertise spanning corporate, commercial, and individual legal needs.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="0"><div class="practice-card"><div class="practice-icon"><i class="fas fa-building"></i></div><h5>Corporate Law</h5><p>Company formation, M&A, compliance, and corporate governance advisory.</p></div></div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="50"><div class="practice-card"><div class="practice-icon"><i class="fas fa-handshake"></i></div><h5>Commercial Law</h5><p>Contract drafting, negotiation, and commercial dispute resolution.</p></div></div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="100"><div class="practice-card"><div class="practice-icon"><i class="fas fa-gavel"></i></div><h5>Litigation</h5><p>Expert court representation in civil, criminal, and commercial disputes.</p></div></div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="150"><div class="practice-card"><div class="practice-icon"><i class="fas fa-users"></i></div><h5>Arbitration</h5><p>Alternative dispute resolution including mediation and arbitration.</p></div></div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="0"><div class="practice-card"><div class="practice-icon"><i class="fas fa-calculator"></i></div><h5>Tax Law</h5><p>Tax planning, compliance, and dispute resolution with TRA.</p></div></div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="50"><div class="practice-card"><div class="practice-icon"><i class="fas fa-heart"></i></div><h5>Family Law</h5><p>Divorce, child custody, estate planning, and succession matters.</p></div></div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="100"><div class="practice-card"><div class="practice-icon"><i class="fas fa-passport"></i></div><h5>Immigration Law</h5><p>Work permits, residence permits, citizenship applications.</p></div></div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="150"><div class="practice-card"><div class="practice-icon"><i class="fas fa-user-tie"></i></div><h5>Employment Law</h5><p>HR policies, labor disputes, and workplace compliance.</p></div></div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="0"><div class="practice-card"><div class="practice-icon"><i class="fas fa-university"></i></div><h5>Banking & Finance</h5><p>Loan agreements, securities, and financial restructuring.</p></div></div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="50"><div class="practice-card"><div class="practice-icon"><i class="fas fa-home"></i></div><h5>Real Estate Law</h5><p>Property transactions, land acquisition, lease agreements.</p></div></div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up"><a href="#contact" class="btn btn-gold px-4"><i class="fas fa-list me-2"></i>View All Services</a></div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="why-section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Our Advantages</span>
            <h2 class="section-title text-white">Why Choose Jaina Attorneys</h2>
            <p class="section-subtitle text-white-50">We combine expertise, integrity, and innovation to deliver exceptional legal outcomes.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="why-card"><div class="why-icon"><i class="fas fa-user-graduate"></i></div><h5>Expert Lawyers</h5><p>Our team comprises seasoned attorneys with decades of combined experience across multiple practice areas.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100"><div class="why-card"><div class="why-icon"><i class="fas fa-chess"></i></div><h5>Strategic Solutions</h5><p>We develop tailored legal strategies aligned with your business goals and risk tolerance.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200"><div class="why-card"><div class="why-icon"><i class="fas fa-lock"></i></div><h5>Confidential Service</h5><p>Your matters are handled with the highest level of discretion and attorney-client privilege.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0"><div class="why-card"><div class="why-icon"><i class="fas fa-bolt"></i></div><h5>Quick Response</h5><p>We prioritize urgent matters with rapid response times and dedicated client support.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100"><div class="why-card"><div class="why-icon"><i class="fas fa-file-invoice-dollar"></i></div><h5>Transparent Fees</h5><p>Clear, upfront pricing with no hidden costs. Flexible billing options to suit your budget.</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200"><div class="why-card"><div class="why-icon"><i class="fas fa-trophy"></i></div><h5>Proven Results</h5><p>A track record of successful outcomes in complex negotiations, transactions, and litigation.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 6: OUR IMPACT -->
<section class="impact-section">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="0"><div class="impact-item"><div class="impact-number" data-count="500">0</div><div class="impact-label">Cases Resolved</div></div></div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100"><div class="impact-item"><div class="impact-number" data-count="100">0</div><div class="impact-label">Corporate Clients</div></div></div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200"><div class="impact-item"><div class="impact-number" data-count="15">0</div><div class="impact-label">Legal Experts</div></div></div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300"><div class="impact-item"><div class="impact-number" data-count="10">0</div><div class="impact-label">Years of Excellence</div></div></div>
        </div>
    </div>
</section>

<!-- SECTION 7: SUCCESS STORIES -->
<section class="success-section" id="success-stories">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Track Record</span>
            <h2 class="section-title">Success Stories</h2>
            <p class="section-subtitle">Real outcomes that demonstrate our commitment to excellence.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0"><div class="success-card"><span class="success-tag">Commercial Dispute</span><h5>Multimillion-Shilling Dispute Resolution</h5><p>Successfully represented a major Tanzanian manufacturing company in a complex commercial dispute valued at over TZS 2 billion. Achieved a favorable settlement through strategic negotiation.</p></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="success-card"><span class="success-tag">Corporate Advisory</span><h5>Regional Enterprise Expansion</h5><p>Provided comprehensive legal advisory for a rapidly growing East African enterprise expanding into Tanzania. Handled company registration, regulatory compliance, and employment structuring.</p></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0"><div class="success-card"><span class="success-tag">Real Estate</span><h5>Land Acquisition for Development</h5><p>Facilitated the acquisition of prime commercial land in Dar es Salaam for a real estate developer. Managed due diligence, title verification, and transfer processes valued at TZS 5 billion.</p></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="success-card"><span class="success-tag">Immigration</span><h5>Investor Visa Processing</h5><p>Assisted a foreign investor in obtaining a Class A residence permit and work permits, enabling the establishment of a manufacturing facility in Tanzania within record time.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 8: MEET OUR TEAM -->
<section class="team-section" id="team">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Our People</span>
            <h2 class="section-title">Meet Our Team</h2>
            <p class="section-subtitle">Dedicated professionals committed to delivering exceptional legal services.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="team-card"><div class="team-img"><img src="https://images.unsplash.com/photo-1560250097-0d553872125f?auto=format&fit=crop&w=400&q=80" alt="Advocate" loading="lazy"></div><div class="team-info"><h5>James Mwakalinga</h5><div class="team-role">Managing Partner</div><a href="#" class="btn btn-view">View Profile</a></div></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="team-card"><div class="team-img"><img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80" alt="Advocate" loading="lazy"></div><div class="team-info"><h5>Dr. Sarah Nkya</h5><div class="team-role">Senior Partner, Corporate</div><a href="#" class="btn btn-view">View Profile</a></div></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200"><div class="team-card"><div class="team-img"><img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=400&q=80" alt="Advocate" loading="lazy"></div><div class="team-info"><h5>Michael Juma</h5><div class="team-role">Partner, Litigation</div><a href="#" class="btn btn-view">View Profile</a></div></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300"><div class="team-card"><div class="team-img"><img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=400&q=80" alt="Advocate" loading="lazy"></div><div class="team-info"><h5>Grace Mbilinyi</h5><div class="team-role">Associate, Tax</div><a href="#" class="btn btn-view">View Profile</a></div></div></div>
        </div>
    </div>
</section>

<!-- SECTION 9: TESTIMONIALS -->
<section class="testimonials-section" id="testimonials">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Testimonials</span>
            <h2 class="section-title">What Our Clients Say</h2>
        </div>
        <div class="testimonial-slider mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-card active" data-index="0"><div class="quote-icon"><i class="fas fa-quote-left"></i></div><div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p>"Jaina Attorneys provided exceptional guidance during our company acquisition. Their attention to detail and strategic thinking saved us from several potential pitfalls."</p><div class="testimonial-author">Robert Kimaro</div><div class="testimonial-company">CEO, Kimaro Holdings Ltd</div></div>
            <div class="testimonial-card" data-index="1" style="display:none"><div class="quote-icon"><i class="fas fa-quote-left"></i></div><div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p>"Professional, responsive and highly knowledgeable. The team handled our immigration case with remarkable efficiency. We received our work permits ahead of schedule."</p><div class="testimonial-author">Amanda Peters</div><div class="testimonial-company">Director, Greenfield Investments</div></div>
            <div class="testimonial-card" data-index="2" style="display:none"><div class="quote-icon"><i class="fas fa-quote-left"></i></div><div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div><p>"Their litigation team is outstanding. They represented us in a complex commercial dispute and secured a favorable judgment. Their courtroom preparation was exceptional."</p><div class="testimonial-author">David Mrema</div><div class="testimonial-company">Managing Director, Mrema Logistics</div></div>
        </div>
        <div class="testimonial-dots"><span class="dot active" data-index="0"></span><span class="dot" data-index="1"></span><span class="dot" data-index="2"></span></div>
    </div>
</section>

<!-- SECTION 10: LEGAL PROCESS -->
<section class="process-section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">How We Work</span>
            <h2 class="section-title">Our Legal Process</h2>
            <p class="section-subtitle">A streamlined approach designed to deliver results efficiently.</p>
        </div>
        <div class="row g-4 justify-content-center mt-2">
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="0"><div class="process-step"><div class="step-number">1</div><h5>Consultation</h5><p>Free initial consultation to understand your legal needs.</p></div></div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="100"><div class="process-step"><div class="step-number">2</div><h5>Assessment</h5><p>Thorough case evaluation, risk analysis, and strategy.</p></div></div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="200"><div class="process-step"><div class="step-number">3</div><h5>Strategy</h5><p>Custom legal strategy aligned with your goals and budget.</p></div></div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="300"><div class="process-step"><div class="step-number">4</div><h5>Representation</h5><p>Dedicated advocacy and representation at every stage.</p></div></div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="400"><div class="process-step"><div class="step-number">5</div><h5>Resolution</h5><p>Successful outcome with post-matter support and follow-up.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 11: INDUSTRIES -->
<section class="industries-section" id="industries">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Who We Serve</span>
            <h2 class="section-title">Industries We Serve</h2>
            <p class="section-subtitle">Specialized legal expertise tailored to key sectors of the Tanzanian economy.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="industry-card"><div class="industry-icon"><i class="fas fa-university"></i></div><h5>Banking</h5><p>Regulatory compliance, lending, and fintech advisory.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="industry-card"><div class="industry-icon"><i class="fas fa-hard-hat"></i></div><h5>Construction</h5><p>Contracts, disputes, and project financing support.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="industry-card"><div class="industry-icon"><i class="fas fa-building"></i></div><h5>Real Estate</h5><p>Transactions, development, and property management.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="industry-card"><div class="industry-icon"><i class="fas fa-laptop-code"></i></div><h5>Technology</h5><p>IP protection, data privacy, and startup advisory.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0"><div class="industry-card"><div class="industry-icon"><i class="fas fa-bolt"></i></div><h5>Energy & Mining</h5><p>Licensing, compliance, and extractive industry law.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="50"><div class="industry-card"><div class="industry-icon"><i class="fas fa-industry"></i></div><h5>Manufacturing</h5><p>Regulatory compliance, trade, and supply chain law.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="industry-card"><div class="industry-icon"><i class="fas fa-hands-helping"></i></div><h5>NGOs</h5><p>Registration, compliance, donor agreements, and governance.</p></div></div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="150"><div class="industry-card"><div class="industry-icon"><i class="fas fa-heartbeat"></i></div><h5>Healthcare</h5><p>Medical licensing, regulatory, and malpractice defense.</p></div></div>
        </div>
    </div>
</section>

<!-- SECTION 12: RESOURCES -->
<section class="resources-section" id="resources">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Knowledge Hub</span>
            <h2 class="section-title">Legal Resources</h2>
            <p class="section-subtitle">Access practical tools and guides to navigate legal matters.</p>
        </div>
        <div class="row g-3 mt-2">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0"><div class="resource-card"><div class="resource-icon"><i class="fas fa-file-alt"></i></div><div class="resource-info"><h6>Legal Fee Calculator</h6><span>Estimate costs for common legal services</span></div><div class="resource-arrow"><i class="fas fa-chevron-right"></i></div></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="50"><div class="resource-card"><div class="resource-icon"><i class="fas fa-book"></i></div><div class="resource-info"><h6>Company Profile</h6><span>Download our company profile PDF</span></div><div class="resource-arrow"><i class="fas fa-chevron-right"></i></div></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="resource-card"><div class="resource-icon"><i class="fas fa-gavel"></i></div><div class="resource-info"><h6>Court Forms</h6><span>Common legal forms and templates</span></div><div class="resource-arrow"><i class="fas fa-chevron-right"></i></div></div></div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="150"><div class="resource-card"><div class="resource-icon"><i class="fas fa-video"></i></div><div class="resource-info"><h6>Video Guides</h6><span>Legal explained in simple videos</span></div><div class="resource-arrow"><i class="fas fa-chevron-right"></i></div></div></div>
        </div>
    </div>
</section>

<!-- SECTION 13: INSIGHTS -->
<section class="insights-section" id="insights">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Latest Updates</span>
            <h2 class="section-title">Legal Insights</h2>
            <p class="section-subtitle">Stay informed with the latest legal developments and analysis.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="insight-card">
                    <div class="insight-img"><img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80" alt="Blog" loading="lazy"></div>
                    <div class="insight-body"><span class="insight-tag">Corporate Law</span><h5>New Company Regulations in Tanzania: What Businesses Need to Know</h5><div class="insight-meta"><span><i class="far fa-calendar"></i>June 15, 2026</span><span><i class="far fa-clock"></i>5 min read</span></div></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="insight-card">
                    <div class="insight-img"><img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=600&q=80" alt="Blog" loading="lazy"></div>
                    <div class="insight-body"><span class="insight-tag">Tax Law</span><h5>Understanding TRA Compliance Requirements for SMEs</h5><div class="insight-meta"><span><i class="far fa-calendar"></i>June 10, 2026</span><span><i class="far fa-clock"></i>4 min read</span></div></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="insight-card">
                    <div class="insight-img"><img src="https://images.unsplash.com/photo-1507679799987-c73715b8dc81?auto=format&fit=crop&w=600&q=80" alt="Blog" loading="lazy"></div>
                    <div class="insight-body"><span class="insight-tag">Real Estate</span><h5>Land Acquisition Process for Foreign Investors in Tanzania</h5><div class="insight-meta"><span><i class="far fa-calendar"></i>June 5, 2026</span><span><i class="far fa-clock"></i>6 min read</span></div></div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up"><a href="#" class="btn btn-gold px-4"><i class="fas fa-newspaper me-2"></i>View All Insights</a></div>
    </div>
</section>

<!-- SECTION 14: FAQ -->
<section class="faq-section" id="faq">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Common Questions</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Quick answers to common legal inquiries. Reach out for personalized advice.</p>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">How do I register a company in Tanzania?</button></h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion"><div class="accordion-body">Company registration in Tanzania involves name reservation, preparation of incorporation documents, filing with BRELA, and obtaining a TIN certificate. Our corporate team handles the entire process end-to-end, typically completing within 7-14 working days.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">What documents are needed for a work permit?</button></h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">Key documents include a valid passport, employment contract, academic certificates, medical clearance, and police clearance. The requirements vary based on permit class (A, B, or C). We assist with document preparation and submission to the Immigration Department.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">How long does litigation typically take?</button></h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">The timeline varies based on case complexity and court availability. Simple commercial cases may conclude within 6-12 months, while complex matters can extend to 2-3 years. We always explore faster resolution through mediation or arbitration where appropriate.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false">Do you offer retainer services for businesses?</button></h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">Yes, we offer flexible retainer arrangements for corporate clients, providing priority access to legal advice, contract review, compliance updates, and dispute resolution support at predictable monthly or annual rates.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false">What is your fee structure?</button></h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">We offer transparent fee structures including fixed fees for defined services, hourly billing for complex matters, and success-based fees for certain litigation cases. We provide detailed cost estimates before commencing any work.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 15: CONTACT -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Get in Touch</span>
            <h2 class="section-title">Contact Us</h2>
            <p class="section-subtitle">Ready to discuss your legal needs? Reach out to our team today.</p>
        </div>
        <div class="row g-4 mt-3 align-items-stretch">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-info-card">
                    <div class="contact-item"><div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div><div class="contact-detail"><h6>Office Address</h6><p>Jaina Tower, 3rd Floor, Samora Avenue<br>Dar es Salaam, Tanzania</p></div></div>
                    <div class="contact-item"><div class="contact-icon"><i class="fas fa-phone"></i></div><div class="contact-detail"><h6>Phone</h6><a href="tel:+255712345678">+255 712 345 678</a><br><a href="tel:+255712345679">+255 712 345 679</a></div></div>
                    <div class="contact-item"><div class="contact-icon"><i class="fas fa-envelope"></i></div><div class="contact-detail"><h6>Email</h6><a href="mailto:info@jainaattorneys.co.tz">info@jainaattorneys.co.tz</a></div></div>
                    <div class="contact-item"><div class="contact-icon"><i class="fas fa-clock"></i></div><div class="contact-detail"><h6>Office Hours</h6><p>Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 9:00 AM - 1:00 PM</p></div></div>
                    <div class="mt-4 rounded-3 overflow-hidden" style="height:200px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.021!2d39.2833!3d-6.8129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDgnNDYuNCJTIDM5wrAxNic1OS45IkU!5e0!3m2!1sen!2stz!4v1625000000000!5m2!1sen!2stz" width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                <div class="contact-form-card">
                    <h5 class="mb-3" style="color:#1A237E;font-weight:700;">Book a Consultation</h5>
                    <form id="contactForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label">Full Name</label><input type="text" class="form-control" name="name" placeholder="John Doe" required></div>
                            <div class="col-md-6"><label class="form-label">Email Address</label><input type="email" class="form-control" name="email" placeholder="john@example.com" required></div>
                            <div class="col-md-6"><label class="form-label">Phone Number</label><input type="tel" class="form-control" name="phone" placeholder="+255..." required></div>
                            <div class="col-md-6"><label class="form-label">Service Needed</label><select class="form-control" name="service"><option>Corporate Law</option><option>Commercial Law</option><option>Litigation</option><option>Tax Law</option><option>Immigration</option><option>Real Estate</option><option>Employment Law</option><option>Other</option></select></div>
                            <div class="col-12"><label class="form-label">Preferred Date</label><input type="date" class="form-control" name="date" required></div>
                            <div class="col-12"><label class="form-label">Message</label><textarea class="form-control" name="message" rows="4" placeholder="Briefly describe your legal matter..."></textarea></div>
                            <div class="col-12"><button type="submit" class="btn btn-submit"><i class="fas fa-paper-plane me-2"></i>Request Consultation</button></div>
                        </div>
                    </form>
                    <div id="formStatus" class="mt-3" style="display:none;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 16: CTA -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="zoom-in">
            <h2>Ready to Protect Your Interests?</h2>
            <p>Schedule a confidential consultation with our experienced legal team today.</p>
            <a href="#contact" class="btn btn-gold btn-lg" data-click-animate="pulse"><i class="fas fa-calendar-check me-2"></i>Book Your Consultation</a>
        </div>
    </div>
</section>

@endsection
