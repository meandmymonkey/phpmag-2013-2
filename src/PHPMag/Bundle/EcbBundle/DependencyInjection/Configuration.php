<?php

namespace PHPMag\Bundle\EcbBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('php_mag_ecb');

        $rootNode
            ->children()
                ->scalarNode('timeout')
                    ->info('sets the timeout for http requests to the webservice')
                    ->defaultValue(5)
                    ->validate()
                        ->ifTrue(function($value) {
                            return !is_numeric($value) || $value <= 0;
                        })
                        ->thenInvalid('The configuration value for "timeout" must be numeric and greater 0.')
                    ->end()
                ->end()
                ->scalarNode('endpoint')
                    ->info('sets url of the exchange rates webservice')
                    ->defaultValue('http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml')
                    ->validate()
                        ->ifTrue(function($value) {
                            return !filter_var($value, \FILTER_VALIDATE_URL);
                        })
                        ->thenInvalid('The configuration value for "endpoint" must be a valid url.')
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
