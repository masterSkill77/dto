<?php

namespace Masterskill\Dto;

use Masterskill\Dto\Commands\GenerateDtoCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DtoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('masterskill/dto')
            ->hasConfigFile()
            ->hasCommands([
                GenerateDtoCommand::class,
            ])
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->askToStarRepoOnGitHub('');
            });
    }
}
