<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StageRentalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stage Rentals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stage-rental-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stage Rental', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'phone',
            'email:email',
            'number_participants',
            // 'description:ntext',
            // 'date',
            // 'time',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
