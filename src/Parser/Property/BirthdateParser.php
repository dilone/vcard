<?php

declare(strict_types=1);

namespace Dilone\VCard\Parser\Property;

use Dilone\VCard\Property\Birthdate;
use Dilone\VCard\Property\NodeInterface;

final class BirthdateParser implements NodeParserInterface
{
    public function parseVcfString(string $value, array $parameters = []): NodeInterface
    {
        return new Birthdate(new \DateTime($value));
    }
}
