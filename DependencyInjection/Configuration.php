<?php

namespace DJP\DockerPHPBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('docker_php');

        $rootNode
            ->children()
            ->scalarNode('remote_socket')->end()
            ->scalarNode('ssl')->end()
            ->scalarNode('local_cert')->end()
            ->end();

        return $treeBuilder;
    }
}
