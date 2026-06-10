# Laravel Project Setup Instructions

This is a simple Laravel project with complete file structure.

## Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js and npm (optional, for frontend assets)

## Setup Instructions
1. Install composer dependencies: `composer install`
2. Copy .env.example to .env: `cp .env.example .env`
3. Generate application key: `php artisan key:generate`
4. Run migrations: `php artisan migrate`
5. Start development server: `php artisan serve`

## Project Structure
- `app/` - Application code (Controllers, Models, etc.)
- `config/` - Configuration files
- `database/` - Migrations and seeders
- `public/` - Public assets and entry point
- `resources/` - Views, CSS, and JavaScript
- `routes/` - Web and API routes
- `storage/` - Application storage and logs
- `tests/` - Test files
- `bootstrap/` - Framework bootstrap files
