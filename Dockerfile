# =============================================================================
# Dockerfile — GreenRide
#
# Builds a self-contained PHP 8.2 + Apache image ready to deploy on any
# Docker host or PaaS (e.g. Render, Railway, Fly.io).
#
# Build:   docker build -t greenride .
# Run:     docker run -p 8080:80 greenride
# Open:    http://localhost:8080
# =============================================================================

# ── Base image ────────────────────────────────────────────────────────────────
# php:8.2-apache bundles Apache 2.4 + mod_php for zero-config PHP serving.
FROM php:8.2-apache

# ── ServerName (suppresses the FQDN warning) ──────────────────────────────────
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# ── Apache modules ────────────────────────────────────────────────────────────
# mod_rewrite is required for the clean-URL rules in src/.htaccess.
RUN a2enmod rewrite

# ── PHP extensions ────────────────────────────────────────────────────────────
# mysqli / pdo / pdo_mysql — ready for a MySQL/MariaDB backend when needed.
# Remove or swap these for other drivers (e.g. pdo_pgsql) as the project grows.
RUN docker-php-ext-install mysqli pdo pdo_mysql

# ── Application source ────────────────────────────────────────────────────────
# Copy everything inside src/ to Apache's document root.
COPY src/ /var/www/html/

# ── Working directory ─────────────────────────────────────────────────────────
WORKDIR /var/www/html/

# ── Port ─────────────────────────────────────────────────────────────────────
# Render (and most PaaS providers) route external traffic to port 80.
EXPOSE 80

# ── .htaccess support ─────────────────────────────────────────────────────────
# Apache's default config ships with AllowOverride None, which silently ignores
# .htaccess files. This sed command flips it to AllowOverride All so that the
# clean-URL rewrite rules in src/.htaccess are honoured.
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# ── Start Apache (explicit — prevents signal mishandling on PaaS) ─────────────
CMD ["apache2-foreground"]