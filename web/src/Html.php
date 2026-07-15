<?php
declare(strict_types=1);

namespace Saha;

/** Escape HTML — thuần, dễ test. */
final class Html
{
    public static function e(?string $value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}
