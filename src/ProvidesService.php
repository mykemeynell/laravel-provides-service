<?php

namespace mykemeynell\Support\Providers\Concern;

/**
 * Trait AliasService.
 *
 * @property \Illumiate\Foundation\Application $app
 * @property array                             $aliases
 *
 * @package mykemeynell\Support
 */
trait ProvidesService
{
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        $provides = [];

        foreach($this->aliases as $alias => $providers) {
            $provides[] = $alias;
            foreach($providers as $provider) {
                $provides[] = $provider;
            }
        }

        return $provides;
    }
}
