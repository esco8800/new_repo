<?php

use app\widgets\HistoryList\HistoryList;
use yii\data\ActiveDataProvider;

/**
 * @var string $linkExport
 * @var ActiveDataProvider $dataProvider
 */

$this->title = 'Americor Test';
?>

<div class="site-index">
    <?= HistoryList::widget([
        'model' => $model,
        'linkExport' => $linkExport,
        'dataProvider' => $dataProvider
    ]) ?>
</div>
