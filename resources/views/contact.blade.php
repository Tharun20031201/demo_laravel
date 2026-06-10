@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">Get In Touch</h1>
        <p class="page-subtitle">We'd love to hear from you. Send us a message!</p>
    </div>

    <div class="contact-wrapper">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <div class="info-item">
                <div class="info-icon">📍</div>
                <div>
                    <h3>Address</h3>
                    <p>123 Street Name<br>City, State 12345</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon">📧</div>
                <div>
                    <h3>Email</h3>
                    <p>hello@example.com</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon">📱</div>
                <div>
                    <h3>Phone</h3>
                    <p>+1 (555) 123-4567</p>
                </div>
            </div>
        </div>

        <form class="contact-form" id="contactForm">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for your message! We will get back to you soon.');
        this.reset();
    });
</script>
@endsection
