<?php

namespace Psy\PluginRegistry;

interface Plugin
{
    static function register();

    /**
     * @return string
     */
    static function getName();
}
