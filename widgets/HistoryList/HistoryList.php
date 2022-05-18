<?php

namespace app\widgets\HistoryList;

use yii\base\Widget;

class HistoryList extends Widget
{
    public $model;
    public $linkExport;
    public $dataProvider;

    /**
     * @return string
     */
    public function run()
    {
        return $this->render('main', [
            'model' => $this->model,
            'linkExport' => $this->linkExport,
            'dataProvider' => $this->dataProvider
        ]);
    }
}
