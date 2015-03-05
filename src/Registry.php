<?php

namespace Psy\PluginRegistry;

class Registry
{
    /** @var Plugin[] */
    protected static $plugins = array();

    /**
     * @param Plugin $plugin
     */
    public static function register(Plugin $plugin)
    {
        self::$plugins[$plugin::getName()] = $plugin;
    }

    /**
     * @return array
     */
    public static function getConfiguration($configuration = array())
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
