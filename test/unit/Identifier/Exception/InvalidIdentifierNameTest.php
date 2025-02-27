<?php

declare(strict_types=1);

namespace Roave\BetterReflectionTest\Identifier\Exception;

use PHPUnit\Framework\TestCase;
use Roave\BetterReflection\Identifier\Exception\InvalidIdentifierName;

/** @covers \Roave\BetterReflection\Identifier\Exception\InvalidIdentifierName */
class InvalidIdentifierNameTest extends TestCase
{
    public function testFromInvalidName(): void
    {
        $exception = InvalidIdentifierName::fromInvalidName('!@#$%^&*()');

        self::assertInstanceOf(InvalidIdentifierName::class, $exception);
        self::assertSame('Invalid identifier name "!@#$%^&*()"', $exception->getMessage());
    }
}
