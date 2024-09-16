<?php
$cacheDir = __DIR__ . '/var/cache/prod';

if (is_dir($cacheDir)) {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($cacheDir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($files as $fileInfo) {
        $todo = ($fileInfo->isDir() ? 'rmdir' : 'unlink');
        $todo($fileInfo->getRealPath());
    }

    rmdir($cacheDir);
    echo "Cache cleared successfully!";
} else {
    echo "Cache directory does not exist or has already been cleared.";
}
