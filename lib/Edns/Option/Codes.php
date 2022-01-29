<?php

declare(strict_types=1);

/*
 * This file is part of Badcow DNS Library.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Badcow\DNS\Edns\Option;

class Codes
{
    const LLQ = 1;
    const UL = 2;
    const NSID = 3;
    const DAU = 5;
    const DHU = 6;
    const N3U = 7;
    const CLIENT_SUBNET = 8;
    const EXPIRE = 9;
    const COOKIE = 10;
    const TCP_KEEPALIVE = 11;
    const PADDING = 12;
    const CHAIN = 13;
    const KEY_CHAIN = 14;
    const DNS_ERROR = 15;
    const CLIENT_TAG = 16;
    const SERVER_TAG = 17;

    /**
     * @var array
     */
    public static $names = [
        self::LLQ => 'LLQ',
        self::UL => 'UL',
        self::NSID => 'NSID',
        self::DAU => 'DAU',
        self::DAU => 'DAU',
        self::DHU => 'DHU',
        self::N3U => 'N3U',
        self::CLIENT_SUBNET => 'CLIENT_SUBNET',
        self::EXPIRE => 'EXPIRE',
        self::COOKIE => 'COOKIE',
        self::TCP_KEEPALIVE => 'TCP_KEEPALIVE',
        self::PADDING => 'PADDING',
        self::CHAIN => 'CHAIN',
        self::KEY_CHAIN => 'KEY_CHAIN',
        self::DNS_ERROR => 'DNS_ERROR',
        self::CLIENT_TAG => 'CLIENT_TAG',
        self::SERVER_TAG => 'SERVER_TAG',
    ];

    /**
     * @param int|string $type
     */
    public static function isValid($code): bool
    {
        if (is_int($code)) {
            return array_key_exists($code, self::$names);
        }

        return in_array($code, self::$names);
    }

    /**
     * Get the name of an Option code. E.g. Codes::getName(8) return 'CLIENT_SUBNET'.
     *
     * @param int $code The index of the code
     *
     * @throws UnsupportedOptionException
     */
    public static function getName(int $code): string
    {
        if (!self::isValid($code)) {
            throw new UnsupportedOptionException(sprintf('The integer "%d" does not correspond to a supported code.', $code));
        }

        return self::$names[$code];
    }
}
