<?php

/**
 * Dependency Injection Container Configuration
 *
 * This file configures a Dependency Injection (DI) container using PHP-DI.
 * It defines how various classes and services should be instantiated and
 * injected throughout the application.
 */

use Psr\Container\ContainerInterface;

/**
 * Returns an array that defines how different classes and services should
 * be instantiated an injected.
 *
 * @return Array Returns an array of settings for the DI container.
 */
return [
    /**
     * Defines how the 'PDO' class (for database connections) should be
     * instantiated.
     *
     * The anonymous function receives a 'ContainerInterface' instance to
     * access other configurations or settings.
     *
     * @return PDO Returns a PDO instance configured with database settings.
     */
    PDO::class => function (ContainerInterface $c) {
        // Retrieves the database settings from the container.
        $settings = $c->get('settings')['database'];
        // Creates and returns a new 'PDO' instance using the retrieved settings.
        return new PDO(
            $settings['dsn'],
            $settings['username'],
            $settings['password'],
            $settings['options']
        );
    },
];