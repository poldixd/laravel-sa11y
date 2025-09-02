# poldixd/laravel-sa11y

This package integrates [Sa11y](https://sa11y.netlify.app/) into your Laravel 11+ application.

## Installation

To get started, install the package using Composer and publish the configuration file if needed.

You can install the package via composer:

```bash
composer require poldixd/laravel-sa11y
```

You can publish the config-file with:

```bash
php artisan vendor:publish --tag=sa11y
```

## Usage

Include the following Blade component inside the `<head>` section of your layout:

```blade
<x-sa11y />
```

When `SA11Y_ENABLED=true` is set in your environment, the Sa11y CDN script will be automatically injected into your application.

## Configuration

You can control Sa11y integration through the published config file (`config/sa11y.php`) or by setting environment variables.  
Example in `.env`:
```env
SA11Y_ENABLED=true
```