<?php

/*
 * This file is part of the Bukashk0zzzYmlGenerator
 *
 * (c) Aleksandr Kosov <akosov@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\YmlGenerator\Model\Offer;

use DateTimeInterface;

/**
 * Class OfferCourse
 */
class OfferCourse extends AbstractOffer
{
    private $setIds = [];

    /**
     * @inheritDoc
     */
    public function getType()
    {
        return null;
    }

    public function setSetIds(array $setIds)
    {
        $this->setIds = $setIds;

        return $this;
    }

    public function getSetIds()
    {
        return $this->setIds;
    }

    public function setDuration($duration, $unit = 'месяц')
    {
        $param = (new OfferParam())
            ->setName('Продолжительность')
            ->setUnit($unit)
            ->setValue($duration);

        $this->addParam($param);

        return $this;
    }

    public function setSchedule(array $schedule)
    {
        foreach ($schedule as $unit => $item) {
            $param = (new OfferParam())
                ->setName('План')
                ->setUnit($unit)
                ->setValue($item);

            $this->addParam($param);
        }

        return $this;
    }

    public function setIsFlexibleDates($isFlexibleDates)
    {
        $param = (new OfferParam())
            ->setName('Гибкие даты')
            ->setValue((bool) $isFlexibleDates);

        $this->addParam($param);

        return $this;
    }

    public function setClosestDate(DateTimeInterface $dateTime)
    {
        $param = (new OfferParam())
            ->setName('Ближайшая дата')
            ->setValue($dateTime->format('Y-m-d'));

        $this->addParam($param);

        return $this;
    }

    public function setHoursPerWeek($hours)
    {
        $param = (new OfferParam())
            ->setName('Часы в неделю')
            ->setValue((int) $hours);

        $this->addParam($param);

        return $this;
    }

    public function setDifficulty($difficulty)
    {
        $param = (new OfferParam())
            ->setName('Сложность')
            ->setValue($difficulty);

        $this->addParam($param);

        return $this;
    }

    public function setIsFlexibleDeliveryDates($isFlexibleDeliveryDates)
    {
        $param = (new OfferParam())
            ->setName('Гибкие сроки сдачи')
            ->setValue((bool) $isFlexibleDeliveryDates);

        $this->addParam($param);

        return $this;
    }

    public function setHasTrialPeriod($hasTrialPeriod)
    {
        $param = (new OfferParam())
            ->setName('Есть пробный период')
            ->setValue((bool) $hasTrialPeriod);

        $this->addParam($param);

        return $this;
    }

    public function setHasVideo($hasVideo)
    {
        $param = (new OfferParam())
            ->setName('Есть видео')
            ->setValue((bool) $hasVideo);

        $this->addParam($param);

        return $this;
    }

    public function setHasTests($hasTests)
    {
        $param = (new OfferParam())
            ->setName('Есть тесты')
            ->setValue((bool) $hasTests);

        $this->addParam($param);

        return $this;
    }

    public function setHasPractice($hasPractise)
    {
        $param = (new OfferParam())
            ->setName('Есть практика')
            ->setValue((bool) $hasPractise);

        $this->addParam($param);

        return $this;
    }

    public function setDiscountPrice($discountPrice)
    {
        $param = (new OfferParam())
            ->setName('Цена по скидке')
            ->setValue((float) $discountPrice);

        $this->addParam($param);

        return $this;
    }

    public function setDiscountFinishDate(DateTimeInterface $discountFinishDate)
    {
        $param = (new OfferParam())
            ->setName('Дата окончания скидки')
            ->setValue($discountFinishDate->format('Y-m-d'));

        $this->addParam($param);

        return $this;
    }

    public function setMonthlyPrice($monthlyPrice)
    {
        $param = (new OfferParam())
            ->setName('Ежемесячная цена')
            ->setValue((float) $monthlyPrice);

        $this->addParam($param);

        return $this;
    }

    public function setMonthlyDiscountPrice($monthlyDiscountPrice)
    {
        $param = (new OfferParam())
            ->setName('Ежемесячная цена по скидке')
            ->setValue((float) $monthlyDiscountPrice);

        $this->addParam($param);

        return $this;
    }

    public function setHasTeacher($hasTeacher)
    {
        $param = (new OfferParam())
            ->setName('Есть учитель')
            ->setValue((bool) $hasTeacher);

        $this->addParam($param);

        return $this;
    }

    public function setHasWebinars($hasWebinars)
    {
        $param = (new OfferParam())
            ->setName('Есть вебинары')
            ->setValue((bool) $hasWebinars);

        $this->addParam($param);

        return $this;
    }

    public function setHasHomeworks($hasHomeworks)
    {
        $param = (new OfferParam())
            ->setName('Есть домашние работы')
            ->setValue((bool) $hasHomeworks);

        $this->addParam($param);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getOptions()
    {
        return [
            'set-ids' => implode(',', $this->getSetIds()),
        ];
    }
}
