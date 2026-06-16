@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="hero dark-hero">
    <div class="hero-content">
        <h1 class="hero-title">Welcome to Laravel Project</h1>
        <p class="hero-subtitle">
            Create modern, fast, and scalable web applications with ease
        </p>

        <div class="hero-buttons">
            <a href="{{ route('about') }}" class="btn btn-primary">Explore More</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">Contact Us</a>
        </div>
    </div>

    <div class="hero-image">
        <svg viewBox="0 0 200 200">
            <circle cx="100" cy="100" r="80" fill="#4f46e5"/>
            <circle cx="100" cy="100" r="50" fill="#9333ea" opacity="0.6"/>
        </svg>
    </div>
</div>

<!-- 📊 STATS SECTION -->
<section class="stats-section dark-section">
    <div class="container stats-grid">

        <div class="stat-card">
            <h2>10K+</h2>
            <p>Users</p>
        </div>

        <div class="stat-card">
            <h2>250+</h2>
            <p>Projects</p>
        </div>

        <div class="stat-card">
            <h2>99.9%</h2>
            <p>Uptime</p>
        </div>

        <div class="stat-card">
            <h2>24/7</h2>
            <p>Support</p>
        </div>

    </div>
</section>

<!-- 🧩 FEATURES -->
<section class="features dark-section">
    <div class="container">
        <h2 class="section-title">What You Get</h2>

        <div class="features-grid">

            <div class="feature-card dark-card">
                <div class="feature-icon">⚡</div>
                <h3>Fast Performance</h3>
                <p>Optimized architecture for speed and efficiency</p>
            </div>

            <div class="feature-card dark-card">
                <div class="feature-icon">🔒</div>
                <h3>Secure System</h3>
                <p>Built with strong security practices to protect your data</p>
            </div>

            <div class="feature-card dark-card">
                <div class="feature-icon">📱</div>
                <h3>Mobile Friendly</h3>
                <p>Fully responsive design for all devices</p>
            </div>

            <div class="feature-card dark-card">
                <div class="feature-icon">🎨</div>
                <h3>Modern UI</h3>
                <p>Clean and elegant interface with smooth interactions</p>
            </div>

            <!-- NEW FEATURES -->
            <div class="feature-card dark-card">
                <div class="feature-icon">☁️</div>
                <h3>Cloud Ready</h3>
                <p>Deploy easily on any modern cloud platform</p>
            </div>

            <div class="feature-card dark-card">
                <div class="feature-icon">⚙️</div>
                <h3>Highly Customizable</h3>
                <p>Flexible architecture for any business need</p>
            </div>

        </div>
    </div>
</section>

<!-- ⭐ TESTIMONIALS -->
<section class="testimonials dark-section">
    <div class="container">
        <h2 class="section-title">What People Say</h2>

        <div class="testimonial-grid">

            <div class="testimonial-card">
                <p>"Amazing Laravel structure, very clean and scalable!"</p>
                <h4>- Developer A</h4>
            </div>

            <div class="testimonial-card">
                <p>"Easy to deploy and very fast performance."</p>
                <h4>- Developer B</h4>
            </div>

            <div class="testimonial-card">
                <p>"Perfect starter template for SaaS projects."</p>
                <h4>- Developer C</h4>
            </div>

        </div>
    </div>
</section>

<!-- 🚀 CALL TO ACTION -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to build something amazing?</h2>
        <p>Start your Laravel journey today with a scalable foundation.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary">Get Started</a>
    </div>
</section>

<!-- ❓ FAQ -->
<section class="faq-section dark-section">
    <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>

        <div class="faq">

            <div class="faq-item">
                <h3>Is this Laravel project production ready?</h3>
                <p>Yes, it is structured for scalable production use.</p>
            </div>

            <div class="faq-item">
                <h3>Can I deploy this on cPanel?</h3>
                <p>Yes, with proper public_html configuration.</p>
            </div>

            <div class="faq-item">
                <h3>Does it support CI/CD?</h3>
                <p>Yes, GitHub Actions + SSH or Git deployment is supported.</p>
            </div>

        </div>
    </div>
</section>

@endsection