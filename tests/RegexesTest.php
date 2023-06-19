<?php

declare(strict_types=1);

namespace Setono\PostalCodeRegularExpressions;

use PHPUnit\Framework\TestCase;

final class RegexesTest extends TestCase
{
    /**
     * @test
     */
    public function it_works(): void
    {
        $postalCodes = require 'postal_code_regular_expressions.php';

        self::assertMatchesRegularExpression($postalCodes['DK'], '9000');
    }

    /**
     * @test
     */
    public function it_matches_empty_strings(): void
    {
        $postalCodes = require 'postal_code_regular_expressions.php';

        self::assertMatchesRegularExpression($postalCodes['AE'], '');
    }
}
