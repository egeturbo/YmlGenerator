<?php

/*
 * This file is part of the Bukashk0zzzYmlGenerator
 *
 * (c) Denis Golubovskiy <bukashk0zzz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\YmlGenerator\Model\Offer;

/**
 * Class OfferParam
 */
class OfferParam
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $unit;

    /**
     * @var string
     */
    private $value;

    /**
     * @var int
     */
    private $order;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return OfferParam
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     *
     * @return OfferParam
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     *
     * @return OfferParam
     */
    public function setValue($value)
    {
        if (is_bool($value)) {
            $value = $value ? 'true' : 'false';
        }

        $this->value = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int $order
     *
     * @return OfferParam
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}
