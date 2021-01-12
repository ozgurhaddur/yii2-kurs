<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\kurs\models\DeletedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deleted';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kurs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Main Page', ['index'], ['class' => 'btn btn-success']) ?>

    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'course_id',
            'course_note',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
