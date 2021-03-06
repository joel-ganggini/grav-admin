<?php

/**
 * @package    Grav\Framework\Cache
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Cache;

use Psr\SimpleCache\InvalidArgumentException;

/**
 * Cache trait for PSR-16 compatible "Simple Cache" implementation
 * @package Grav\Framework\Cache
 */
abstract class AbstractCache implements CacheInterface
{
    use CacheTrait;

    /**
     * @param string $namespace
     * @param null|int|\DateInterval $defaultLifetime
     * @throws InvalidArgumentException
     */
    public function __construct($namespace = '', $defaultLifetime = null)
    {
        $this->init($namespace, $defaultLifetime);
    }
}
