<?php
declare(strict_types=1);

namespace Saha;

/** Trạng thái nav active — một trách nhiệm. */
final class NavState
{
    public function __construct(private readonly string $activeKey)
    {
    }

    public function activeClass(string $key): string
    {
        return $this->activeKey === $key ? ' active' : '';
    }

    public function is(string $key): bool
    {
        return $this->activeKey === $key;
    }
}
