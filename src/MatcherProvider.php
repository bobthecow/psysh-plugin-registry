<?php

namespace Psy\PluginRegistry;

interface MatcherProvider
{
    /**
     * @return Psy\TabCompletion\Matcher\AbstractMatcher[]
     */
    static function getMatchers();
}
