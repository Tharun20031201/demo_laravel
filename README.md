# Laravel Demo Project

A simple Laravel project with complete file structure for learning and development.

## Project Structure

```
Demo/
├── app/                          # Application code
│   ├── Http/
│   │   └── Controllers/          # Application controllers
│   └── Models/                   # Database models
├── bootstrap/                    # Framework bootstrapping
├── config/                       # Configuration files
│   ├── app.php                  # Application settings
│   └── database.php             # Database configuration
├── database/
│   ├── migrations/              # Database migrations
│   └── seeders/                 # Database seeders
├── public/                       # Web root directory
├── resources/
│   ├── views/                   # Blade templates
│   ├── css/                     # Stylesheets
│   └── js/                      # JavaScript files
├── routes/
│   ├── web.php                  # Web routes
│   └── api.php                  # API routes
├── storage/
│   ├── app/                     # Application storage
│   └── logs/                    # Application logs
├── tests/
│   ├── Unit/                    # Unit tests
│   └── Feature/                 # Feature tests
├── .env.example                 # Environment example
├── artisan                       # Command line interface
├── composer.json                # PHP dependencies
└── README.md                    # This file
```

## Installation

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL or SQLite (optional)

### Setup Steps

1. **Install dependencies:**
   ```bash
   composer install
   ```

2. **Create environment file:**
   ```bash
   cp .env.example .env
   ```

3. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

4. **Run migrations (if database is configured):**
   ```bash
   php artisan migrate
   ```

5. **Start development server:**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

## Key Files

### Routes
- **web.php** - Defines web routes with controllers
- **api.php** - Defines API routes

### Controllers
- **HomeController.php** - Handles home, about, and contact pages

### Models
- **User.php** - Example user model

### Views
- **index.blade.php** - Home page
- **about.blade.php** - About page
- **contact.blade.php** - Contact form page

### Configuration
- **app.php** - Application configuration
- **database.php** - Database connection settings

## Available Routes

- `GET /` - Home page
- `GET /about` - About page
- `GET /contact` - Contact page
- `GET /api/health` - API health check

## Features

- Complete Laravel project structure
- Example controllers and routes
- Blade templating with styled pages
- Database configuration setup
- Environment variable configuration
- Ready for expansion and customization

## Development

To make changes to the project:

1. **Modify routes** in `routes/web.php`
2. **Create controllers** in `app/Http/Controllers/`
3. **Create models** in `app/Models/`
4. **Edit views** in `resources/views/`
5. **Update database schema** in `database/migrations/`

## Common Commands

```bash
# Generate a new controller
php artisan make:controller YourControllerName

# Generate a new model
php artisan make:model YourModelName

# Generate a migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Clear cache
php artisan cache:clear

# Run tinker (interactive shell)
php artisan tinker
```

## Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Eloquent ORM](https://laravel.com/docs/eloquent)
- [Blade Templating](https://laravel.com/docs/blade)
- [Routing](https://laravel.com/docs/routing)

## License

MIT License - feel free to use this project for learning and development.
