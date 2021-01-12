<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\kurs\models\Kurs */

$this->title = 'Update Kurs: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kurs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
