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
- [Unauthorized 401](src/HttpError/Unauthorized.php)
- [PaymentRequired 402](src/HttpError/PaymentRequired.php)
- [Forbidden 403](src/HttpError/Forbidden.php)
- [NotFound 404](src/HttpError/NotFound.php)
- [MethodNotAllowed 405](src/HttpError/MethodNotAllowed.php)
- [NotAcceptable 406](src/HttpError/NotAcceptable.php)
- [ProxyAuthenticationRequired 407](src/HttpError/ProxyAuthenticationRequired.php)
- [RequestTimeout 408](src/HttpError/RequestTimeout.php)
- [Conflict 409](src/HttpError/Conflict.php)
- [Gone 410](src/HttpError/Gone.php)
- [LengthRequired 411](src/HttpError/LengthRequired.php)
- [PreconditionFailed 412](src/HttpError/PreconditionFailed.php)
- [RequestEntityTooLarge 413](src/HttpError/RequestEntityTooLarge.php)
- [RequestUriTooLong 414](src/HttpError/RequestUriTooLong.php)
- [UnsupportedMediaType 415](src/HttpError/UnsupportedMediaType.php)
- [RequestedRangeNotSatisfiable 416](src/HttpError/RequestedRangeNotSatisfiable.php)
- [ExpectationFailed 417](src/HttpError/ExpectationFailed.php)
- [UnprocessableEntity 422](src/HttpError/UnprocessableEntity.php)
- [Locked 423](src/HttpError/Locked.php)
- [PreconditionRequired 428](src/HttpError/PreconditionRequired.php)
- [TooManyRequests 429](src/HttpError/TooManyRequests.php)
- [RequestHeaderFieldsTooLarge 431](src/HttpError/RequestHeaderFieldsTooLarge.php)
- [UnavailableForLegalReasons 451](src/HttpError/UnavailableForLegalReasons.php)
- [InternalServerError 500](src/HttpError/InternalServerError.php)
- [NotImplemented 501](src/HttpError/NotImplemented.php)
- [BadGateway 502](src/HttpError/BadGateway.php)
- [ServiceUnavailable 503](src/HttpError/ServiceUnavailable.php)
- [GatewayTimeout 504](src/HttpError/GatewayTimeout.php)

Note: see [avalanche-development/crash-pad](https://github.com/avalanche-development/crash-pad) for an error handler that takes advantage of these standardized exceptions.

## Development

This library is a work in progress - there may be additional options (like, error metadata) added for different statuses as needed.

### Tests

To execute the test suite, you'll need phpunit (and to install package with dev dependencies).

```bash
$ phpunit
```

## License

peel is licensed under the MIT license. See [License File](LICENSE.md) for more information.
