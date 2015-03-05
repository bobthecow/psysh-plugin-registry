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
 * Psy Plugin Registry service.
 */
class Registry
{
    /** @var Plugin[] */
    protected static $plugins = array();

    /**
     * Register a Plugin.
     *
     * @param Plugin $plugin
     */
    public static function register(Plugin $plugin)
    {
        self::$plugins[$plugin::getName()] = $plugin;
    }

    /**
     * Get Plugin Registry configuration.
     *
     * Returns an array of Commands, Matchers and Presenters which have been
     * registered.
     *
     * @return array
     */
    public static function getConfiguration()
    {
        $commands   = array();
        $matchers   = array();
        $presenters = array();

        foreach (self::$plugins as $plugin) {
            if ($plugin instanceof CommandProvider) {
                $commands = array_merge($commands, $plugin::getCommands());
            }

            if ($plugin instanceof MatcherProvider) {
                $matchers = array_merge($matchers, $plugin::getMatchers());
            }

            if ($plugin instanceof PresenterProvider) {
                $presenters = array_merge($presenters, $plugin::getPresenters());
            }
        }

        return compact('commands', 'matchers', 'presenters');
    }
}
