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
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 10C55 10 20 45 20 90s35 80 80 80 80-35 80-80S145 10 100 10" fill="#4f46e5"/>
            <circle cx="100" cy="90" r="50" fill="#9333ea" opacity="0.6"/>
        </svg>
    </div>
</div>

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
        </div>
    </div>
</section>
@endsection