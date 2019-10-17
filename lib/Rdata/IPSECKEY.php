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

namespace Badcow\DNS\Rdata;

// TODO: Implement IPSECKEY RData
class IPSECKEY implements RdataInterface
{
    use RdataTrait;

    const TYPE = 'IPSECKEY';
    const TYPE_CODE = 45;

    /**
     * {@inheritdoc}
     */
    public function toText(): string
    {
        // TODO: Implement output() method.
    }

    /**
     * {@inheritdoc}
     */
    public function toWire(): string
    {
        // TODO: Implement toWire() method.
    }

    /**
     * {@inheritdoc}
     */
    public static function fromText(string $text): RdataInterface
    {
        // TODO: Implement fromText() method.
    }

    /**
     * {@inheritdoc}
     */
    public static function fromWire(string $rdata): RdataInterface
    {
        // TODO: Implement fromWire() method.
    }
}
