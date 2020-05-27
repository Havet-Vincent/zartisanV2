<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.wvrZdZy' shared service.

return $this->privates['.service_locator.wvrZdZy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'foldersUser' => ['privates', 'App\\Services\\FoldersUser', 'getFoldersUserService.php', true],
    'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService.php', true],
    'serializer' => ['services', 'serializer', 'getSerializerService.php', true],
    'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'foldersUser' => 'App\\Services\\FoldersUser',
    'passwordEncoder' => '?',
    'serializer' => '?',
    'userRepository' => 'App\\Repository\\UserRepository',
]);
