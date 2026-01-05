# Použijeme oficiální PHP 8.2 FPM image
FROM php:8.2-fpm

# Nastavíme pracovní adresář
WORKDIR /var/www/html

# Nainstalujeme systémové závislosti
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    supervisor \
    ca-certificates \
    gnupg

# Nainstalujeme Node.js 20
RUN mkdir -p /etc/apt/keyrings && \
    curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg && \
    echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_20.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list && \
    apt-get update && \
    apt-get install -y nodejs

# Vyčistíme cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Nainstalujeme PHP rozšíření
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Získáme Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Zkopírujeme soubory aplikace
COPY . /var/www/html

# Nastavíme správná oprávnění
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Nainstalujeme PHP závislosti
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Nainstalujeme Node.js závislosti a zbuildujeme assets
RUN npm ci && \
    npm run build && \
    rm -rf node_modules

# Vytvoříme symbolický odkaz pro storage
RUN php artisan storage:link || true

# Zkopírujeme nginx konfiguraci
COPY deploy/nginx.conf /etc/nginx/sites-available/default

# Zkopírujeme supervisor konfiguraci
COPY deploy/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose port
EXPOSE 8080

# Spustíme supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
