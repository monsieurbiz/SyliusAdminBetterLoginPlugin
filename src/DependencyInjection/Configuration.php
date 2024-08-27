<?php

/*
 * This file is part of Monsieur Biz' Admin Better Login plugin for Sylius.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusAdminBetterLoginPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('monsieurbiz_sylius_admin_better_login');
        $rootNode = $treeBuilder->getRootNode();

        /** @phpstan-ignore-next-line */
        $rootNode
            ->children()
                ->arrayNode('tags')
                    ->cannotBeEmpty()
                    ->scalarPrototype()->end()
                    ->defaultValue(['nature', 'water'])
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
