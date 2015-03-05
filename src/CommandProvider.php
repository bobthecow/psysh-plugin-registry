<?php

namespace Psy\PluginRegistry;

interface CommandProvider
{
    /**
     * @return Symfony\Component\Console\Command\Command[]
     */
    static function getCommands();
}
