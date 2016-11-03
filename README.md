peel
==============

An exception library that can be used to bubble up specific http errors through middleware.

[![Build Status](https://travis-ci.org/avalanche-development/peel.svg?branch=master)](https://travis-ci.org/avalanche-development/peel)
[![Code Climate](https://codeclimate.com/github/avalanche-development/peel/badges/gpa.svg)](https://codeclimate.com/github/avalanche-development/peel)
[![Test Coverage](https://codeclimate.com/github/avalanche-development/peel/badges/coverage.svg)](https://codeclimate.com/github/avalanche-development/peel/coverage)

## Installation

It's recommended that you use [Composer](https://getcomposer.org/) to install peel.

```bash
$ composer require avalanche-development/peel
```

peel requires PHP 5.6 or newer.

## Usage

```php
function someMiddleware($request, $response, $next) {
    $body = (string) $request->getBody();
    $body = json_decode($value);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new AvalancheDevelopment\Peel\HttpError\BadRequest('Invalid JSON');
    }
    // etc
}
```

Each exception implements `AvalancheDevelopment\Peel\HttpErrorInterface`, which enforces two methods, `getStatusCode` and `getStatusMessage`. These give you the expected HTTP code and message for any sort of error handler.

### Exceptions

- [BadRequest 400](src/HttpError/BadRequest.php)
- [NotFound 404](src/HttpError/NotFound.php)
- [MethodNotAllowed 405](src/HttpError/MethodNotAllowed.php)

Note: see [avalanche-development/crash-pad](https://github.com/avalanche-development/crash-pad) for an error handler that takes advantage of these standardized exceptions.

## Development

This library is in active development - more exceptions will be added and some additional options may be added for different status as needed.

### Tests

To execute the test suite, you'll need phpunit (and to install package with dev dependencies).

```bash
$ phpunit
```

## License

peel is licensed under the MIT license. See [License File](LICENSE.md) for more information.
