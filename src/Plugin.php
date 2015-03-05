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
 * Psy Plugin interface.
 */
interface Plugin
{
    /**
     * Register this Plugin with the Plugin Registry.
     */
    static function register();

    /**
     * Get the Plugin name.
     *
     * The Plugin name must be unique. It should really be the Composer package
     * name for this plugin, just to keep everything sane.
     *
     * @return string
     */
    static function getName();
}
