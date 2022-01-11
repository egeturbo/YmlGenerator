<?php

/*
 * This file is part of the Bukashk0zzzYmlGenerator
 *
 * (c) Aleksandr Kosov <akosov@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\YmlGenerator\Generator;

use Bukashk0zzz\YmlGenerator\Generator;
use Bukashk0zzz\YmlGenerator\Model\Set;

/**
 * Class EducationGenerator
 *
 * @see https://yandex.ru/support/webmaster/feed/snippets-education.html#education
 */
class EducationGenerator extends Generator
{
    private $sets = [];

    public function setSets(array $sets)
    {
        foreach ($sets as $set) {
            if ($set instanceof Set) {
                $this->sets[] = $set;
            }
        }
    }

    /**
     * @inheritDoc
     */
    protected function beforeOffers()
    {
        parent::beforeOffers();

        $this->addSets();
    }

    /**
     * Adds <sets> element.
     * @see https://yandex.ru/support/webmaster/feed/snippets-education.html#education
     */
    private function addSets()
    {
        $this->writer->startElement('sets');

        foreach ($this->sets as $set) {
            $this->addSet($set);
        }

        $this->writer->fullEndElement();
    }

    /**
     * Write set to document.
     *
     * @param Set $set Set model
     */
    private function addSet(Set $set)
    {
        $this->writer->startElement('set');
        $this->writer->writeAttribute('id', $set->getId());
        $this->writer->writeElement('name', $set->getName());
        $this->writer->writeElement('url', $set->getUrl());
        $this->writer->endElement();
    }
}
