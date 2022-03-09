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
use InvalidArgumentException;

/**
 * Class OfferCourse
 */
class OfferCourse extends AbstractOffer
{
    const FORMATS = [
        'Самостоятельно',
        'Самостоятельно с наставником',
        'В группе c наставником',
        'С преподавателем',
    ];

    const RESULTS = [
        'Сертификат',
        'Диплом',
        'Удостоверение',
    ];

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

    public function setAdditionalCategory($additionalCategory)
    {
        $param = (new OfferParam())
            ->setName('Дополнительная категория')
            ->setValue($additionalCategory);

        $this->addParam($param);

        return $this;
    }

    public function setContentUrl($contentUrl)
    {
        $param = (new OfferParam())
            ->setName('Ссылка на контент курса')
            ->setValue($contentUrl);

        $this->addParam($param);

        return $this;
    }

    public function setSubscriptionPrice($hasSubscribe)
    {
        $param = (new OfferParam())
            ->setName('Цена за подписку')
            ->setValue((bool) $hasSubscribe);

        $this->addParam($param);

        return $this;
    }

    public function setInstalmentPeriod($period, $unit = 'месяц')
    {
        $param = (new OfferParam())
            ->setName('Оплата в рассрочку')
            ->setUnit($unit)
            ->setValue($period);

        $this->addParam($param);

        return $this;
    }

    public function setMonthlyDiscountFinishDate(DateTimeInterface $discountFinishDate)
    {
        $param = (new OfferParam())
            ->setName('Дата окончания ежемесячной скидки')
            ->setValue($discountFinishDate->format('Y-m-d'));

        $this->addParam($param);

        return $this;
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
        $order = 1;
        foreach ($schedule as $unit => $items) {
            foreach ($items as $item) {
                $param = (new OfferParam())
                    ->setName('План')
                    ->setUnit($unit)
                    ->setValue($item)
                    ->setOrder($order++);

                $this->addParam($param);
            }
        }

        return $this;
    }

    public function setFormat($value)
    {
        if (!in_array($value, self::FORMATS, true)) {
            throw new InvalidArgumentException("Invalid format '$value'.");
        }

        $param = (new OfferParam())
            ->setName('Формат обучения')
            ->setValue($value);

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

    public function setHasVideoLessons($hasVideoLessons)
    {
        $param = (new OfferParam())
            ->setName('Есть видеоуроки')
            ->setValue((bool) $hasVideoLessons);

        $this->addParam($param);

        return $this;
    }

    public function setHasTextsLessons($hasTextsLessons)
    {
        $param = (new OfferParam())
            ->setName('Есть текстовые уроки')
            ->setValue((bool) $hasTextsLessons);

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

    public function setHasTrainer($hasTrainer)
    {
        $param = (new OfferParam())
            ->setName('Есть тренажеры')
            ->setValue((bool) $hasTrainer);

        $this->addParam($param);

        return $this;
    }

    public function setHasCommunity($hasCommunity)
    {
        $param = (new OfferParam())
            ->setName('Есть сообщество')
            ->setValue((bool) $hasCommunity);

        $this->addParam($param);

        return $this;
    }

    public function setClasses($classes)
    {
        $param = (new OfferParam())
            ->setName('Классы')
            ->setValue($classes);

        $this->addParam($param);

        return $this;
    }

    public function setResult($result)
    {
        if (!in_array($result, self::RESULTS, true)) {
            throw new InvalidArgumentException("Invalid result '$result'.");
        }

        $param = (new OfferParam())
            ->setName('Результат обучения')
            ->setValue($result);

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
