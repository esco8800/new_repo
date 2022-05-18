<?php

namespace app\widgets\HistoryList\strategies;

interface HistoryViewStrategyInterface
{
    /**
     * @return string
     */
    public function getView(): string;

    /**
     * @return array
     */
    public function getParams(): array;

    /**
     * @return string
     */
    public function getBody(): string;
}