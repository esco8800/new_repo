<?php

namespace app\widgets\HistoryList\strategies;

use yii\helpers\Html;

class FaxStrategy extends BasicStrategy
{
    /**
     * @return array
     */
    public function getParams(): array
    {
        return [
            'user' => $this->model->user,
            'body' => $this->getBody() .
                ' - ' .
                (isset($this->model->fax->document) ? Html::a(
                    \Yii::t('app', 'view document'),
                    $this->model->fax->document->getViewUrl(),
                    [
                        'target' => '_blank',
                        'data-pjax' => 0
                    ]
                ) : ''),
            'footer' => \Yii::t('app', '{type} was sent to {group}', [
                'type' => $this->model->fax ? $this->model->fax->getTypeText() : 'Fax',
                'group' => isset($this->model->fax->creditorGroup) ? Html::a($this->model->fax->creditorGroup->name, ['creditors/groups'], ['data-pjax' => 0]) : ''
            ]),
            'footerDatetime' => $this->model->ins_ts,
            'iconClass' => 'fa-fax bg-green'
        ];
    }

}