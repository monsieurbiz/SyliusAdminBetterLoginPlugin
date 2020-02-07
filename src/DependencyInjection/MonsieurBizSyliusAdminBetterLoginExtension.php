<?php

declare(strict_types=1);

namespace MonsieurBiz\SyliusAdminBetterLoginPlugin\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

final class MonsieurBizSyliusAdminBetterLoginExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $config, ContainerBuilder $container): void
    {
        $config = $this->processConfiguration($this->getConfiguration([], $container), $config);
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');

        $container->setParameter('monsieurbiz_sylius_admin_better_login.tags', $config['tags']);
    }

    public function getAlias()
    {
        return str_replace('monsieur_biz', 'monsieurbiz', parent::getAlias());
    }
}
