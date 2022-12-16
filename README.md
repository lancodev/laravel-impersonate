# This is my package laravel-impersonate

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lancodev/laravel-impersonate.svg?style=flat-square)](https://packagist.org/packages/lancodev/laravel-impersonate)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lancodev/laravel-impersonate/run-tests?label=tests)](https://github.com/lancodev/laravel-impersonate/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lancodev/laravel-impersonate/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/lancodev/laravel-impersonate/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lancodev/laravel-impersonate.svg?style=flat-square)](https://packagist.org/packages/lancodev/laravel-impersonate)

This package provides a simple way to implement user impersonation within your existing Laravel application.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-impersonate.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-impersonate)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require lancodev/laravel-impersonate
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-impersonate-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-impersonate-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-impersonate-views"
```

## Usage

```php
$laravelImpersonate = new Lancodev\LaravelImpersonate();
echo $laravelImpersonate->echoPhrase('Hello, Lancodev!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kyle Anderson](https://github.com/lancodev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
