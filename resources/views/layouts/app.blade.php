<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laravel Demo - A modern web application">
    <title>@yield('title', 'Home') - Laravel Demo</title>
    <style>
:root {
    --primary-color: #667eea;
    --secondary-color: #764ba2;
    --accent-color: #f093fb;
    --text-color: #1f2937;
    --text-light: #6b7280;
    --bg-light: #f9fafb;
    --border-color: #e5e7eb;
    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    color: var(--text-color);
    line-height: 1.6;
    background-color: #ffffff;
}

/* Navigation */
header {
    background: white;
    box-shadow: var(--shadow-sm);
    position: sticky;
    top: 0;
    z-index: 100;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

nav .logo {
    font-size: 1.5rem;
    font-weight: 700;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

nav ul {
    display: flex;
    list-style: none;
    gap: 2rem;
}

nav a {
    color: var(--text-color);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
    position: relative;
}

nav a::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    transition: width 0.3s ease;
}

nav a:hover::after {
    width: 100%;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Hero Section */
.hero {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
    padding: 6rem 0;
    min-height: calc(100vh - 80px);
}

.hero-content {
    animation: fadeInLeft 0.8s ease;
}

.hero-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: var(--text-light);
    margin-bottom: 2rem;
    line-height: 1.8;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 3rem;
}

.hero-image {
    display: flex;
    justify-content: center;
    align-items: center;
    animation: fadeInRight 0.8s ease;
}

.hero-image svg {
    width: 100%;
    max-width: 400px;
    filter: drop-shadow(0 20px 30px rgba(102, 126, 234, 0.2));
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 0.875rem 2rem;
    border-radius: 0.5rem;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
}

.btn-primary {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    box-shadow: var(--shadow-md);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-xl);
}

.btn-secondary {
    background: white;
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.btn-secondary:hover {
    background: var(--bg-light);
    transform: translateY(-2px);
}

/* Features Section */
.features {
    padding: 4rem 0;
    background: linear-gradient(180deg, var(--bg-light) 0%, white 100%);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 800;
    text-align: center;
    margin-bottom: 3rem;
    color: var(--text-color);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.feature-card {
    background: white;
    padding: 2rem;
    border-radius: 0.75rem;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: var(--shadow-sm);
    border-top: 3px solid transparent;
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
    border-top-color: var(--primary-color);
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.feature-card h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: var(--text-color);
}

.feature-card p {
    color: var(--text-light);
}

/* Page Headers */
.page-header {
    text-align: center;
    padding: 3rem 0;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    border-radius: 0.75rem;
    margin-bottom: 3rem;
}

.page-title {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
}

.page-subtitle {
    font-size: 1.1rem;
    opacity: 0.9;
}

/* Content Grid */
.content-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.content-section,
.features-list {
    background: white;
    padding: 2rem;
    border-radius: 0.75rem;
    box-shadow: var(--shadow-md);
}

.content-section h2,
.features-list h2 {
    font-size: 1.75rem;
    margin-bottom: 1.5rem;
    color: var(--text-color);
}

.content-section p {
    color: var(--text-light);
    line-height: 1.8;
}

/* Checklist */
.checklist {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.check-item {
    padding: 0.75rem 0;
    color: var(--text-color);
    font-weight: 500;
    display: flex;
    align-items: center;
}

/* Tech Stack */
.tech-stack {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    padding: 3rem;
    border-radius: 0.75rem;
    margin-top: 3rem;
}

.tech-stack h2 {
    color: white;
    margin-bottom: 2rem;
}

.tech-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
}

.tech-item {
    background: rgba(255, 255, 255, 0.1);
    padding: 1.5rem;
    border-radius: 0.5rem;
    text-align: center;
}

.tech-item h3 {
    margin-bottom: 0.5rem;
}

/* Contact Form */
.contact-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    margin-bottom: 3rem;
}

.contact-info {
    background: white;
    padding: 2rem;
    border-radius: 0.75rem;
    box-shadow: var(--shadow-md);
}

.contact-info h2 {
    margin-bottom: 2rem;
    color: var(--text-color);
}

.info-item {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid var(--border-color);
}

.info-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.info-icon {
    font-size: 2rem;
    min-width: 3rem;
    text-align: center;
}

.info-item h3 {
    margin-bottom: 0.5rem;
    color: var(--text-color);
}

.info-item p {
    color: var(--text-light);
}

.contact-form {
    background: white;
    padding: 2rem;
    border-radius: 0.75rem;
    box-shadow: var(--shadow-md);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--text-color);
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid var(--border-color);
    border-radius: 0.5rem;
    font-family: inherit;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.contact-form .btn {
    width: 100%;
    margin-top: 1rem;
}

/* Footer */
footer {
    background: var(--text-color);
    color: white;
    padding: 3rem 0 1rem;
    margin-top: 4rem;
}

footer .container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

footer h3 {
    margin-bottom: 1rem;
}

footer p {
    color: #d1d5db;
    font-size: 0.9rem;
}

footer a {
    color: #d1d5db;
    text-decoration: none;
    transition: color 0.3s ease;
}

footer a:hover {
    color: white;
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 2rem;
    text-align: center;
    color: #9ca3af;
}

/* Animations */
@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .hero {
        grid-template-columns: 1fr;
        padding: 3rem 0;
        min-height: auto;
    }

    .hero-title {
        font-size: 2rem;
    }

    .hero-buttons {
        flex-direction: column;
    }

    nav ul {
        gap: 1rem;
    }

    .contact-wrapper {
        grid-template-columns: 1fr;
    }

    .features-grid {
        grid-template-columns: 1fr;
    }

    .tech-grid {
        grid-template-columns: 1fr;
    }
}
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">Laravel Demo</div>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div>
                <h3>About</h3>
                <p>A modern Laravel project built with best practices and beautiful design patterns.</p>
            </div>
            <div>
                <h3>Quick Links</h3>
                <ul style="list-style: none;">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3>Resources</h3>
                <ul style="list-style: none;">
                    <li><a href="https://laravel.com" target="_blank">Laravel Docs</a></li>
                    <li><a href="https://laravel.com/docs/blade" target="_blank">Blade Guide</a></li>
                    <li><a href="https://laravel.com/docs/eloquent" target="_blank">Eloquent ORM</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Laravel Demo. All rights reserved.</p>
        </div>
    </footer>

    <script src="/js/app.js"></script>
</body>
</html>
