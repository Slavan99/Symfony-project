<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.a3q39ST' shared service.

return $this->privates['.service_locator.a3q39ST'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'personRepository' => ['privates', 'App\\Repository\\PersonRepository', 'getPersonRepositoryService.php', true],
], [
    'personRepository' => 'App\\Repository\\PersonRepository',
]);
