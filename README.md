# PHP Router Template

This project serves as a basic template for a PHP application utilizing `PHP-DI` for dependency injection and `Phroute` for routing. This setup provides a streamlined foundation for further development of web applications.

## Prerequisites

Before proceeding, ensure you have the following installed on your system:
- **PHP** (version 8.0 or higher recommended)
- **Composer** - Dependency management tool
- A local server environment like XAMPP, WAMP, or MAMP

## Installation Instructions

### 1. Setup a Local Server

Download and install one of the following local server environments (only tested with XAMPP):
- [XAMPP](https://www.apachefriends.org/index.html)
- [WAMP](http://www.wampserver.com/en/)
- [MAMP](https://www.mamp.info/en/)

### 2. Clone the Repository

Clone this repository to your local server's web directory:
```bash
git clone https://github.com/Wiltzsu/router.git
cd router
```

### 3. Install Composer Dependencies
composer install

### 4. Autoload your Classes
```bash
{
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  }
}
```

Regenerate the autoload files
```bash
composer dump-autoload
```

### 5. Start the Local Server
Create or update the `.htaccess` file in the root directory with the following content:
```apache
RewriteEngine On
RewriteBase /path-to-your-app/public/
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [QSA,L]
```

Start your local server and navigate to the project URL in your browser.

Project Structure
```bash
/config: Contains configuration files such as database settings.
/src: Contains PHP source files for your application.
/resources: Stores additional resources such as templates and assets.
/public: Publicly accessible directory housing the front controller (index.php).
```