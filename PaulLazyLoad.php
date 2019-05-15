<?php

namespace PaulLazyLoad;

use Shopware\Components\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Shopware-Plugin PaulLazyLoad.
 */
class PaulLazyLoad extends Plugin
{

    /**
    * @param ContainerBuilder $container
    */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter('paul_lazy_load.plugin_dir', $this->getPath());
        parent::build($container);
    }

}
