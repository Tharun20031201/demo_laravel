@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Welcome to Laravel Demo</h1>
        <p class="hero-subtitle">Build modern web applications with elegance and simplicity</p>
        <div class="hero-buttons">
            <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">Get In Touch</a>
        </div>
    </div>
    <div class="hero-image">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 10C55 10 20 45 20 90s35 80 80 80 80-35 80-80S145 10 100 10" fill="#667eea"/>
            <circle cx="100" cy="90" r="50" fill="#764ba2" opacity="0.5"/>
        </svg>
    </div>
</div>

<section class="features">
    <div class="container">
        <h2 class="section-title">Why Choose Us</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Lightning Fast</h3>
                <p>Built with performance in mind for optimal user experience</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Secure</h3>
                <p>Enterprise-grade security to protect your data</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Responsive</h3>
                <p>Perfect experience on all devices and screen sizes</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Beautiful Design</h3>
                <p>Modern UI with smooth animations and transitions</p>
            </div>
        </div>
    </div>
</section>
@endsection
