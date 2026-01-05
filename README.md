# 🎯 Laravel Livewire Counter

Interactive counter application built with Laravel, Livewire, and Tailwind CSS.

![Laravel](https://img.shields.io/badge/Laravel-12.44-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-3.7-FB70A9?style=for-the-badge&logo=livewire&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind-4.1-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

## ✨ Features

- ⚡ **Real-time Updates** - Counter updates instantly without page reload
- 🎨 **Beautiful Design** - Modern gradient UI with smooth animations
- 📱 **Responsive** - Works perfectly on all devices
- 🚀 **Fast** - Built with Vite for lightning-fast development

## 🛠️ Technologies

- **Laravel 12.44.0** - PHP framework
- **Livewire 3.7.3** - Full-stack framework for Laravel
- **Tailwind CSS 4.1.18** - Utility-first CSS framework
- **Vite 7.0.7** - Frontend build tool
- **PHP 8.2** - Programming language

## 🚀 Quick Start

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & npm

### Installation

```bash
# Clone the repository
git clone https://github.com/Jivesely1/laravel-livewire-counter.git
cd laravel-livewire-counter

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Build assets
npm run build

# Start development server
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 🔧 Development

```bash
# Start Laravel server
php artisan serve

# Start Vite dev server (in another terminal)
npm run dev
```

## 📦 Deployment

### Fly.io

```bash
# Install Fly CLI
# https://fly.io/docs/hands-on/install-flyctl/

# Login to Fly
fly auth login

# Deploy
fly launch --no-deploy
fly secrets set APP_KEY="base64:YOUR_KEY_HERE"
fly deploy
```

## 🎯 How It Works

The counter uses Livewire to handle real-time updates:

1. User clicks a button (increment/decrement/reset)
2. Livewire sends AJAX request to server
3. PHP updates the counter value
4. Livewire updates only the changed part of the page
5. **No page reload needed!**

## 📝 Code Structure

```
app/Livewire/Counter.php                    # Counter component logic
resources/views/livewire/counter.blade.php  # Counter UI
routes/web.php                              # Route definition
```

## 📄 License

This project is open-source and available under the [MIT license](https://opensource.org/licenses/MIT).

---

**Made with ❤️ using Laravel, Livewire & Tailwind CSS**

🤖 Generated with [Claude Code](https://claude.com/claude-code)
