<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\StageRental */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Stage Rentals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stage-rental-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
            'email:email',
            'number_participants',
            'description:ntext',
            /*'date',*/
            'time_start',
            'time_end',
            'status',
        ],
    ]) ?>

</div>
