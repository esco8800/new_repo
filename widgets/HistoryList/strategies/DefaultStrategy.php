<?php

namespace app\widgets\HistoryList\strategies;

class DefaultStrategy extends BasicStrategy
{
    /**
     * @return array
     */
    public function getParams(): array
    {
        return [
            'user' => $this->model->user,
            'body' => $this->getBody(),
            'bodyDatetime' => $this->model->ins_ts,
            'iconClass' => 'fa-gear bg-purple-light'
        ];
    }
}