<?php
declare(strict_types=1);

namespace Saha;

/**
 * Render partial component — một trách nhiệm: nạp file + truyền data.
 */
final class View
{
    public function __construct(private readonly string $webRoot)
    {
    }

    /**
     * @param array<string, mixed> $data
     */
    public function render(string $component, array $data = []): void
    {
        $file = $this->webRoot
            . DIRECTORY_SEPARATOR . 'includes'
            . DIRECTORY_SEPARATOR . 'components'
            . DIRECTORY_SEPARATOR . $component . '.php';

        if (!is_file($file)) {
            throw new \InvalidArgumentException('Component not found: ' . $component);
        }

        (static function (string $__componentFile, array $__data): void {
            extract($__data, EXTR_SKIP);
            require $__componentFile;
        })($file, $data);
    }
}
