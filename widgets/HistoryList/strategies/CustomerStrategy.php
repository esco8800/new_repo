<?php

namespace app\widgets\HistoryList\strategies;

use app\models\Customer;
use app\models\History;

class CustomerStrategy extends BasicStrategy
{
    /**
     * @return string
     */
    public function getView(): string
    {
        return '_item_statuses_change';
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        $attr = $this->model->event == History::EVENT_CUSTOMER_CHANGE_TYPE ? 'type' : 'quality';
        $method = $this->model->event == History::EVENT_CUSTOMER_CHANGE_TYPE ? 'getTypeTextByType' : 'getQualityTextByQuality';

        $additionalParams = [
            'oldValue' => Customer::{$method}($this->model->getDetailOldValue($attr)),
            'newValue' => Customer::{$method}($this->model->getDetailNewValue($attr))
        ];

        return array_merge(['model' => $this->model], $additionalParams);
    }

}