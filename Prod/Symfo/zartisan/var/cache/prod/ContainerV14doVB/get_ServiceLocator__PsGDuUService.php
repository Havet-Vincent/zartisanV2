<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator..psGDuU' shared service.

return $this->privates['.service_locator..psGDuU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'rateRepository' => ['privates', 'App\\Repository\\RateRepository', 'getRateRepositoryService.php', true],
    'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'em' => '?',
    'rateRepository' => 'App\\Repository\\RateRepository',
    'userRepository' => 'App\\Repository\\UserRepository',
]);
