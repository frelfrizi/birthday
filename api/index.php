<?php

declare(strict_types=1);

$temporaryRoot = sys_get_temp_dir().'/birthday-app';
$storagePath = $temporaryRoot.'/storage';
$compiledViewsPath = $temporaryRoot.'/views';

if (! is_dir($compiledViewsPath) && ! mkdir($compiledViewsPath, 0755, true) && ! is_dir($compiledViewsPath)) {
    throw new RuntimeException('Unable to create the compiled view directory.');
}

$_ENV['LARAVEL_STORAGE_PATH'] = $storagePath;
$_SERVER['LARAVEL_STORAGE_PATH'] = $storagePath;
$_ENV['VIEW_COMPILED_PATH'] = $compiledViewsPath;
$_SERVER['VIEW_COMPILED_PATH'] = $compiledViewsPath;

putenv('LARAVEL_STORAGE_PATH='.$storagePath);
putenv('VIEW_COMPILED_PATH='.$compiledViewsPath);

require __DIR__.'/../public/index.php';
