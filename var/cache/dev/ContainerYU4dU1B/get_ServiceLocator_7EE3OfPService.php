<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.7EE3OfP' shared service.

return $this->privates['.service_locator.7EE3OfP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'bill' => ['privates', '.errored..service_locator.7EE3OfP.App\\Entity\\Bill', NULL, 'Cannot autowire service ".service_locator.7EE3OfP": it references class "App\\Entity\\Bill" but no such service exists.'],
], [
    'bill' => 'App\\Entity\\Bill',
]);
