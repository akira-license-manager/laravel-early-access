<?php

declare(strict_types=1);

namespace Akira\EarlyAccess;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class EarlyAccessServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('early-access')
            ->hasConfigFile()
            ->hasMigrations([
                'create_early_access_table',
            ]);
    }
}
