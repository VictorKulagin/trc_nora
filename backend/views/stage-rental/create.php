<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\StageRental */

$this->title = 'Create Stage Rental';
$this->params['breadcrumbs'][] = ['label' => 'Stage Rentals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stage-rental-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
