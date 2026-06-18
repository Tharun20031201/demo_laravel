@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- HERO -->
<section class="hero-dark">
    <div class="container hero-wrapper">

        <div class="hero-text">
            <span class="badge">Laravel Starter Kit</span>

            <h1>Build Powerful Laravel Applications</h1>

            <p>
                A modern, fast, and scalable foundation to kickstart your web development journey with production-ready architecture.
            </p>

            <div class="hero-actions">
                <a href="{{ route('about') }}" class="btn-primary">Learn More</a>
                <a href="{{ route('contact') }}" class="btn-outline">Get in Touch</a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="glow-circle"></div>
        </div>

    </div>
</section>

<!-- STATS -->
<section class="stats-dark">
    <div class="container stats-grid">

        <div class="stat">
            <h2>10K+</h2>
            <p>Active Users</p>
        </div>

        <div class="stat">
            <h2>250+</h2>
            <p>Projects Delivered</p>
        </div>

        <div class="stat">
            <h2>99.9%</h2>
            <p>Uptime</p>
        </div>

        <div class="stat">
            <h2>24/7</h2>
            <p>Support</p>
        </div>

    </div>
</section>

<!-- FEATURES -->
<section class="features-dark">
    <div class="container">

        <div class="section-header">
            <h2>Why Choose This Project</h2>
            <p>Everything you need to build scalable Laravel applications.</p>
        </div>

        <div class="grid-3">

            <div class="card-dark">
                <span>⚡</span>
                <h3>High Performance</h3>
                <p>Optimized Laravel structure for speed and scalability.</p>
            </div>

            <div class="card-dark">
                <span>🔒</span>
                <h3>Secure Architecture</h3>
                <p>Best practices for authentication, validation, and protection.</p>
            </div>

            <div class="card-dark">
                <span>📱</span>
                <h3>Fully Responsive</h3>
                <p>Perfect experience across mobile, tablet, and desktop.</p>
            </div>

            <div class="card-dark">
                <span>🎨</span>
                <h3>Modern UI</h3>
                <p>Clean, minimal SaaS-style interface design.</p>
            </div>

            <div class="card-dark">
                <span>☁️</span>
                <h3>Cloud Ready</h3>
                <p>Deploy easily on cPanel, VPS, or cloud platforms.</p>
            </div>

            <div class="card-dark">
                <span>⚙️</span>
                <h3>Scalable</h3>
                <p>Flexible structure for any business or SaaS app.</p>
            </div>

        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-dark">
    <div class="container">

        <div class="section-header">
            <h2>Client Feedback</h2>
        </div>

        <div class="grid-3">

            <div class="testimonial">
                <p>“Very clean architecture and easy to extend for large projects.”</p>
                <h4>Developer A</h4>
            </div>

            <div class="testimonial">
                <p>“Smooth deployment and excellent performance out of the box.”</p>
                <h4>Developer B</h4>
            </div>

            <div class="testimonial">
                <p>“Perfect starter kit for SaaS and enterprise apps.”</p>
                <h4>Developer C</h4>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-dark">
    <div class="container">

        <h2>Start Building Your Next Big Project</h2>
        <p>Accelerate development with a production-ready Laravel foundation.</p>

        <a href="{{ route('contact') }}" class="btn-primary large">
            Get Started
        </a>

    </div>
</section>

<!-- FAQ -->
<section class="faq-dark">
    <div class="container">

        <div class="section-header">
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">

            <div class="faq-item">
                <h3>Is this project production ready?</h3>
                <p>Yes, it follows scalable and secure architecture standards.</p>
            </div>

            <div class="faq-item">
                <h3>Can I deploy on cPanel?</h3>
                <p>Yes, it works with cPanel, VPS, and cloud hosting.</p>
            </div>

             <div class="faq-item">
                <h3>Does it support CI/CD?</h3>
                <p>Yes, it integrates with GitHub Actions and automated deployment.</p>
            </div> 
{{-- Hello Test Git --}}

        </div>

    </div>
</section>

@endsection