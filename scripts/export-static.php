<?php

declare(strict_types=1);

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$root = dirname(__DIR__);

require $root . '/vendor/autoload.php';

$app = require $root . '/bootstrap/app.php';

$distDir = $root . '/dist';
$publicDir = $root . '/public';
$host = 'https://static-export.local';

if (is_dir($distDir)) {
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($distDir, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($iterator as $item) {
        $path = $item->getPathname();

        if ($item->isDir()) {
            @rmdir($path);
        } else {
            @unlink($path);
        }
    }
} else {
    mkdir($distDir, 0777, true);
}

$kernel = $app->make(Kernel::class);
$request = Request::create($host . '/', 'GET');
$response = $kernel->handle($request);
$html = $response->getContent();

if (! is_string($html) || $html === '') {
    throw new RuntimeException('Failed to render landing page for static export.');
}

$html = str_replace($host, '', $html);
$html = preg_replace('#https?://localhost(?::\d+)?#', '', $html) ?? $html;

$publicIterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($publicDir, FilesystemIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($publicIterator as $item) {
    $sourcePath = $item->getPathname();
    $relativePath = str_replace($publicDir . DIRECTORY_SEPARATOR, '', $sourcePath);

    if (in_array($relativePath, ['index.php', '.htaccess'], true)) {
        continue;
    }

    $targetPath = $distDir . DIRECTORY_SEPARATOR . $relativePath;

    if ($item->isDir()) {
        if (! is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }

        continue;
    }

    $targetDirectory = dirname($targetPath);

    if (! is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    copy($sourcePath, $targetPath);
}

file_put_contents($distDir . '/index.html', $html);

$kernel->terminate($request, $response);

echo "Static export generated in dist/\n";
