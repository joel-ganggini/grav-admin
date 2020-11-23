<?php

declare(strict_types=1);

/**
 * @package    Grav\Framework\Psr7
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Psr7;

use Grav\Framework\Psr7\Traits\StreamDecoratorTrait;
use Psr\Http\Message\StreamInterface;

class Stream implements StreamInterface
{
    use StreamDecoratorTrait;

    /**
     * @param string|resource|StreamInterface $body
     * @return static
     */
    public static function create($body = '')
    {
        return new static($body);
    }

    /**
     * Stream constructor.
     *
     * @param string|resource|StreamInterface $body
     */
    public function __construct($body = '')
    {
        $this->stream = \Nyholm\Psr7\Stream::create($body);
    }
}