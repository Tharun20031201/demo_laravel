@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">About Our Project</h1>
        <p class="page-subtitle">Discover what makes this Laravel project special</p>
    </div>

    <div class="content-grid">
        <div class="content-section">
            <h2>Project Overview</h2>
            <p>This is a modern Laravel project built with a complete, professional file structure. It demonstrates best practices for Laravel development and serves as an excellent starting point for building scalable web applications.</p>
        </div>

        <div class="features-list">
            <h2>What's Included</h2>
            <div class="checklist">
                <div class="check-item">✓ Complete directory structure</div>
                <div class="check-item">✓ Professional controllers and routes</div>
                <div class="check-item">✓ Blade templating engine</div>
                <div class="check-item">✓ Database migrations and models</div>
                <div class="check-item">✓ Environment configuration</div>
                <div class="check-item">✓ Beautiful, responsive UI</div>
                <div class="check-item">✓ Modern design patterns</div>
                <div class="check-item">✓ Test-ready structure</div>
            </div>
        </div>
    </div>

    <div class="tech-stack">
        <h2>Technology Stack</h2>
        <div class="tech-grid">
            <div class="tech-item">
                <h3>Laravel 11</h3>
                <p>Modern PHP framework</p>
            </div>
            <div class="tech-item">
                <h3>MySQL/SQLite</h3>
                <p>Database management</p>
            </div>
            <div class="tech-item">
                <h3>Blade</h3>
                <p>Templating engine</p>
            </div>
            <div class="tech-item">
                <h3>Eloquent ORM</h3>
                <p>Database abstraction</p>
            </div>
        </div>
    </div>
</div>
@endsection
