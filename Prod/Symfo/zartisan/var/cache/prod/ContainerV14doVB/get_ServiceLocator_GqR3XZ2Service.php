<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.gqR3XZ2' shared service.

return $this->privates['.service_locator.gqR3XZ2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'adviceRepository' => ['privates', 'App\\Repository\\AdviceRepository', 'getAdviceRepositoryService.php', true],
    'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
], [
    'adviceRepository' => 'App\\Repository\\AdviceRepository',
    'em' => '?',
]);
