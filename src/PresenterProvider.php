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
 * Presenter Provider interface for Plugins.
 */
interface PresenterProvider
{
    /**
     * Get an array of Presenters provided by this Plugin.
     *
     * @return Psy\Presenter\Presenter[]
     */
    static function getPresenters();
}
