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
 * Matcher Provider interface for Plugins.
 */
interface MatcherProvider
{
    /**
     * Get an array of Tab Completion Matchers provided by this Plugin.
     *
     * @return Psy\TabCompletion\Matcher\AbstractMatcher[]
     */
    static function getMatchers();
}
