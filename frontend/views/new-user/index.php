<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tambah User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="new-user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_mhs',
            'firstname',
            'lastname',
            'username',
            'password',
            //'authKey',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
