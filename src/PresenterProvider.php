<?php

namespace Psy\PluginRegistry;

interface PresenterProvider
{
    /**
     * @return Psy\Presenter\Presenter[]
     */
    static function getPresenters();
}
