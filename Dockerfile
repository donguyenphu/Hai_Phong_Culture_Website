# Use official PHP with Apache image
FROM php:8.2-apache

# Copy all files into the Apache web root
COPY . /var/www/html/

# Expose port 80 (optional, Render handles this)
EXPOSE 80