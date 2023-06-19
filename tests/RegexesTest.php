<?php

declare(strict_types=1);

namespace Setono\PostalCodeRegularExpressions;

use PHPUnit\Framework\TestCase;

final class RegexesTest extends TestCase
{
    /**
     * @test
     */
    public function it_matches_danish_postal_codes(): void
    {
        $postalCodes = require 'postal_code_regular_expressions.php';

        self::assertMatchesRegularExpression($postalCodes['DK'], '9000');
    }

    /**
     * @test
     */
    public function it_does_not_allow_other_characters_before_or_after(): void
    {
        $postalCodes = require 'postal_code_regular_expressions.php';

        self::assertDoesNotMatchRegularExpression($postalCodes['DK'], ' 9000');
        self::assertDoesNotMatchRegularExpression($postalCodes['DK'], '9000 ');
        self::assertDoesNotMatchRegularExpression($postalCodes['DK'], 'a9000');
        self::assertDoesNotMatchRegularExpression($postalCodes['DK'], '9000b');
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
