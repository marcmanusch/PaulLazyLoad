<?php

namespace PaulLazyLoad\Tests;

use PaulLazyLoad\PaulLazyLoad as Plugin;
use Shopware\Components\Test\Plugin\TestCase;

class PluginTest extends TestCase
{
    protected static $ensureLoadedPlugins = [
        'PaulLazyLoad' => []
    ];

    public function testCanCreateInstance()
    {
        /** @var Plugin $plugin */
        $plugin = Shopware()->Container()->get('kernel')->getPlugins()['PaulLazyLoad'];

        $this->assertInstanceOf(Plugin::class, $plugin);
    }
}
