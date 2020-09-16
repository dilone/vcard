<?php

declare(strict_types=1);

namespace Dilone\VCard\Exception;

final class PropertyParameterException extends VCardException
{
    public static function forWrongValue(string $value, array $possibleValues): self
    {
        return new self(
            'The given value "' . $value . '" is not allowed.
             Possible values are: "' . implode('", "', $possibleValues) . '"'
        );
    }
}
