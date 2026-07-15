<?php
declare(strict_types=1);

/**
 * Cấu hình site & helpers dùng chung.
 */

const SAHA_SITE_NAME = 'SAHA';
const SAHA_HOTLINE_HN = '0976 21 21 71';
const SAHA_HOTLINE_HCM = '0976 79 36 69';
const SAHA_EMAIL = 'info@saha.com';
const SAHA_YEAR = 2026;

/**
 * Trả về class "active" nếu nav key trùng trang hiện tại.
 */
function saha_nav_active(string $key): string
{
    global $activeNav;
    return (($activeNav ?? '') === $key) ? ' active' : '';
}

function saha_e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function saha_asset(string $path): string
{
    return 'assets/' . ltrim($path, '/');
}
