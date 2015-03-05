<?php

namespace Psy\PluginRegistry;

abstract class AbstractPlugin implements Plugin, CommandProvider, MatcherProvider, PresenterProvider
{
    public static function register()
    {
        Registry::register(new static());
    }

    /**
     * @return string
     */
    abstract public static function getName();

    /**
     * @return Symfony\Component\Console\Command\Command[]
     */
    public static function getCommands()
    {
        // add your own commands
        return array();
    }

    /**
     * @return Psy\TabCompletion\Matcher\AbstractMatcher[]
     */
    public static function getMatchers()
    {
        // add your own presenters
        return array();
    }

    /**
     * @return Psy\Presenter\Presenter[]
     */
    public static function getPresenters()
    {
        // add your own presenters
        return array();
    }
}
