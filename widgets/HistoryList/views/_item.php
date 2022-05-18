<?php

use app\models\History;
use yii\base\View;

/** @var $this View */
/** @var $model History */

echo $this->render(
    $model->getStrategy()->getView(),
    $model->getStrategy()->getParams()
);

