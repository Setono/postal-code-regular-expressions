# Postal code / zip code library with regular expressions to match them

[![Latest Version][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]
[![Code Coverage][ico-code-coverage]][link-code-coverage]

## Installation

The easiest way to install this library is by installing the library along with its HTTP client dependencies:

```bash
composer require setono/postal-code-regular-expressions
```

## Usage

```php
<?php
$postalCodes = require 'postal_code_regular_expressions.php';

if (preg_match($postalCodes['DK'], '9000') === 1) {
    // the postal code is valid
}
```

[ico-version]: https://poser.pugx.org/setono/postal-code-regular-expressions/v/stable
[ico-license]: https://poser.pugx.org/setono/postal-code-regular-expressions/license
[ico-github-actions]: https://github.com/Setono/postal-code-regular-expressions/workflows/build/badge.svg
[ico-code-coverage]: https://codecov.io/gh/Setono/postal-code-regular-expressions/branch/master/graph/badge.svg

[link-packagist]: https://packagist.org/packages/setono/postal-code-regular-expressions
[link-github-actions]: https://github.com/Setono/postal-code-regular-expressions/actions
[link-code-coverage]: https://codecov.io/gh/Setono/postal-code-regular-expressions
