<?php

namespace app\widgets\HistoryList\strategies;

use app\models\History;

abstract class BasicStrategy implements HistoryViewStrategyInterface
{
    /**
     * @var History
     */
    protected $model;

    /**
     * BasicStrategy constructor.
     * @param History $model
     */
    public function __construct(History $model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        return '_item_common';
    }

    /**
     * @return array
     */
    abstract public function getParams(): array;

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->model->eventText;
    }
}