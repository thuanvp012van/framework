<?php

namespace Penguin\Composer;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;

class CommandProvider implements CommandProviderCapability
{
    public function __construct(protected Composer $composer) {}

    public function getCommands(): array
    {
        return [new StartCommand];
    }
}