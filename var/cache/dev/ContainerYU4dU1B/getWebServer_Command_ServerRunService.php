<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'web_server.command.server_run' shared service.

$this->privates['web_server.command.server_run'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand('C:\\backup_booze/public', 'dev', $this->targetDirs[1]);

$instance->setName('server:run');

return $instance;
