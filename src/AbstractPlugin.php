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
 * A base Plugin class.
 */
abstract class AbstractPlugin implements Plugin, CommandProvider, MatcherProvider, PresenterProvider
{
    /**
     * {@inheritDocs}
     */
    public static function register()
    {
        Registry::register(new static());
    }

    /**
     * {@inheritDocs}
     *
     * @return string
     */
    abstract public static function getName();

    /**
     * {@inheritDocs}
     *
     * @return Symfony\Component\Console\Command\Command[]
     */
    public static function getCommands()
    {
        // add your own commands
        return array();
    }

    /**
     * {@inheritDocs}
     *
     * @return Psy\TabCompletion\Matcher\AbstractMatcher[]
     */
    public static function getMatchers()
    {
        // add your own presenters
        return array();
    }

    /**
     * {@inheritDocs}
     *
     * @return Psy\Presenter\Presenter[]
     */
    public static function getPresenters()
    {
        // add your own presenters
        return array();
    }
}
