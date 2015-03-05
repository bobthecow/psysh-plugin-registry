<?php

/*
 * This file is part of Psy Plugin Registry
 *
 * (c) 2015 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\PluginRegistry;

/**
 * Command Provider interface for Plugins.
 */
interface CommandProvider
{
    /**
     * Get an array of Commands provided by this Plugin.
     *
     * @return Symfony\Component\Console\Command\Command[]
     */
    static function getCommands();
}
