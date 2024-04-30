# Use the official PHP image as the base image
FROM php:8.2-cli

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the application code (index.php) to the working directory
COPY index.php .

# Expose port 8000 for the PHP server
EXPOSE 8000

# Command to start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:8000"]
